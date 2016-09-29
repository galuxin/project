<?php
/**
 * AdminController.php
 *
 * Контроллер бэкенда сайта (/admin/)
 *
 */

//подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';
include_once '../models/AdminModel.php';


//инициализация шаблонизатора smarty
$smarty->setTemplateDir(TemplateAdminPrefix);
$smarty->assign('templateWebPath', TemplateAdminWebPath);

/**
 * Главная страница
 * @param $smarty
 */
function indexAction($smarty)
{
    if(! isset($_SESSION['admin']))
    {
        $smarty->assign('pageTitle', 'Вход в админку');

        loadTemplate($smarty, 'adminHeader');
        loadTemplate($smarty, 'adminLogin');
        loadTemplate($smarty, 'adminFooter');
    }
    else
    {
        $rsCategories = getAllMainCategories();

        $smarty->assign('rsCategories', $rsCategories);
        $smarty->assign('pageTitle', 'Управление сайтом');

        loadTemplate($smarty, 'adminHeader');
        loadTemplate($smarty, 'adminLeftcolumn');
        loadTemplate($smarty, 'admin');
        loadTemplate($smarty, 'adminFooter');
    }
}

/**
 * AJAX авторизация админа
 */
function loginadminAction()
{
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $pwd = isset($_POST['password']) ? $_POST['password'] : null;

    $userData = loginAdmin($email, $pwd);

    //если (success = 1) мы попадаем в этот код
    if($userData['success'])
    {
        $userData = $userData[0];

        $_SESSION['admin'] = $userData;

        $resData = $_SESSION['admin'];
        $resData['success'] = 1;
        $resData['message'] = 'Авторизация прошла успешно!';
    }
    //если (success = 0) мы попадаем в этот код
    else
    {
        $resData['success'] = 0;
        $resData['message'] = 'Неверный e-mail или пароль!';
    }

    echo json_encode($resData);
}

/**
 * Добавление новой категории
 */
function addnewcatAction()
{
    //получаем аяксом данные из полей в админки методом POST
    //вставляем их в переменные $catName и $catParentId
    $catName     = $_POST['newCategoryName'];
    $catParentId = $_POST['generalCatId'];

    //в переменную $res получаем уже вставленные данные в БД
    //через функцию insertCat
    $res = insertCat($catName, $catParentId);
    //проверяем если данные добавились
    if($res)
    {
        $resData['success'] = 1;
        $resData['message'] = 'Категория добавлена';
    }
    else
    {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка добавления категории';
    }

    //возвращаем массив json
    echo json_encode($resData);
    return;
}

/**
 * Страница управления категориями
 */
function categoryAction($smarty)
{
    $rsCategories     = getAllCategories();
    $rsMainCategories = getAllMainCategories();

    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsMainCategories', $rsMainCategories);
    $smarty->assign('pageTitle', 'Управление сайтом');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminCategory');
    loadTemplate($smarty, 'adminFooter');

}

/**
 * Обновления категорий
 */
function updatecategoryAction()
{
    $itemId   = $_POST['itemId'];
    $parentId = $_POST['parentId'];
    $newName  = $_POST['newName'];

    $res = updateCategoryData($itemId, $parentId, $newName);

    if($res)
    {
        $resData['success'] = 1;
        $resData['message'] = 'Категория обновлена';
    }
    else
    {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изминения данных категории';
    }

    echo json_encode($resData);
    return;
}

/**
 * Страница управления товарами
 * @param $smarty
 */
function productsAction($smarty)
{
    $rsCategories = getAllCategories();
    $rsProducts   = getProducts();

    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    $smarty->assign('pageTitle', 'Управление сайтом');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminProducts');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * Добавление нового продукта
 */
function addproductAction()
{
    $itemName  = $_POST['itemName'];
    $itemPrice = $_POST['itemPrice'];
    $itemDesc  = $_POST['itemDesc'];
    $itemCat   = $_POST['itemCatId'];

    $res = insertProduct($itemName, $itemPrice, $itemDesc, $itemCat);

    if($res)
    {
        $resData['success'] = 1;
        $resData['message'] = 'Изминения успешно внесены';
    }
    else
    {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изминения данных';
    }

    echo json_encode($resData);
    return;
}

/**
 * Обновления продукта
 */
function updateproductAction()
{
    $itemId     = $_POST['itemId'];
    $itemName   = $_POST['itemName'];
    $itemPrice  = $_POST['itemPrice'];
    $itemStatus = $_POST['itemStatus'];
    $itemDesc   = $_POST['itemDesc'];
    $itemCat    = $_POST['itemCatId'];

    $res = updateProduct($itemId, $itemName, $itemPrice, $itemStatus, $itemDesc, $itemCat);

    if($res)
    {
        $resData['success'] = 1;
        $resData['message'] = 'Изминения успешно внесены';
    }
    else
    {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка изминения данных';
    }

    echo json_encode($resData);
    return;
}

/**
 * Загрузка изображения
 */
function uploadAction()
{
    $maxSize = 2 * 1024 * 1024;

    $itemId = $_POST['itemId'];
    //получаем расширение загружаемого файла
    $ext = pathinfo($_FILES['filename']['name'], PATHINFO_EXTENSION);
    //создаем имя файла
    $newFileName = $itemId . '.' . $ext;

    if($_FILES["filename"]["size"] > $maxSize)
    {
        echo("Размер файла превышает два мегабайта");
        return;
    }

    //загружен ли файл
    if(is_uploaded_file($_FILES['filename']['tmp_name']))
    {
        //если файл загружен то перемещаем его из временной директории в конечную
        $res = move_uploaded_file($_FILES['filename']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/images/products/' . $newFileName);
        if($res)
        {
            $res = updateProductImage($itemId, $newFileName);
            if($res)
            {
                redirect('/admin/products/');
            }
        }
    }
    else
    {
        echo("Ошибка загрузки файлов");
    }
}

/**
 * Страница управления заказами
 * @param $smarty
 */
function ordersAction($smarty)
{
    $rsOrders = getOrders();

    $smarty->assign('rsOrders', $rsOrders);
    $smarty->assign('pageTitle', 'Заказы');

    loadTemplate($smarty, 'adminHeader');
    loadTemplate($smarty, 'adminOrders');
    loadTemplate($smarty, 'adminFooter');
}

/**
 * Задать статус заказа
 */
function setorderstatusAction()
{
    $itemId = $_POST['itemId'];
    $status = $_POST['status'];

    $res = updateOrderStatus($itemId, $status);

    if($res)
    {
        $resData['success'] = 1;
    }
    else
    {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка установки статуса';
    }

    echo json_encode($resData);
    return;
}

/**
 * Задать статус оплаты заказа
 */
function setorderdatepaymentAction()
{
    $itemId      = $_POST['itemId'];
    $datePayment = $_POST['datePayment'];

    $res = updateOrderDatePayment($itemId, $datePayment);

    if($res)
    {
        $resData['success'] = 1;
    }
    else
    {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка установки статуса';
    }

    echo json_encode($resData);
    return;
}
