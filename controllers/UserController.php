<?php
/**
 * Контроллер функций пользователя
 */

//Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/UsersModel.php';
include_once '../models/OrdersModel.php';
include_once '../models/PurchaseModel.php';

/**
 * AJAX регистрация пользователя
 * Инициализация сессионной переменной ($_SESSION['user'])
 *
 * @return json массив данных нового пользователя
 */
function registerAction()
{
    if(preg_match("|^[-0-9a-z_]+@[-0-9a-z^\.]+\.[a-z]{2,6}$|i", $_POST['email']))
    {
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $email = trim($email);
    }

        $pwd1 = isset($_POST['pwd1']) ? $_POST['pwd1'] : null;
        $pwd2 = isset($_POST['pwd2']) ? $_POST['pwd2'] : null;

        $phone  = isset($_POST['phone'])  ? $_POST['phone']  : null;
        $adress = isset($_POST['adress']) ? $_POST['adress'] : null;
        $name   = isset($_POST['name'])   ? $_POST['name']   : null;
        $name = trim ($name);

        $resData = null;
        $resData = checkRegisterParams($email, $pwd1, $pwd2, $phone);

        if(! $resData && checkUserEmail($email))
        {
            $resData['success'] = false;
            $resData['message'] = "Пользователь с таким email ('{$email}') уже зарегистрирован!";
        }

        if(! $resData)
        {
            $pwdMD5 = md5($pwd1);
            $userData = registerNewUser($email, $pwdMD5, $name, $phone, $adress);

            if($userData['success'])
            {
                $resData['message'] = 'Пользователь успешно зарегистрирован!';
                $resData['success'] = 1;

                $userData = $userData[0];
                $resData['userName'] = $userData['name'] ? $userData['name'] : $userData['email'];
                $resData['userEmail'] = $email;

                $_SESSION['user'] = $userData;
                $_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email'];
            }
            else
            {
                $resData['success'] = 0;
                $resData['message'] = 'Ошибка регистрации!';
            }
        }

    echo json_encode($resData);
}

/**
 * Разлогинивание пользователя
 */
function logoutAction()
{
    if(isset($_SESSION['user']))
    {
        unset($_SESSION['user']);
        unset($_SESSION['cart']);
    }

    //функция выбрасивает пользователя в корень сайта
    redirect('/');
}

/**
 * AJAX авторизация пользователя
 *
 * @return json массив данных пользователя
 */
function loginAction()
{
    if(preg_match("|^[-0-9a-z_]+@[-0-9a-z^\.]+\.[a-z]{2,6}$|i", $_POST['email']))
    {
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $email = trim($email);
    }

    $pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;
    $pwd = trim($pwd);

    $userData = loginUser($email, $pwd);

    //если (success = 1) мы попадаем в этот код
    if($userData['success'])
    {
        $userData = $userData[0];

        $_SESSION['user'] = $userData;
        $_SESSION['user']['displayName'] = $userData['name'] ? $userData['name'] : $userData['email'];

        $resData = $_SESSION['user'];
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
 * Формирование страницы авторизации и главной страницы пользователя
 */
function indexAction($smarty)
{
    //если заходит новый пользователь то выдаем
    //авторизацию или регистрацию
    if(! isset($_SESSION['user']))
    {
        $rsCategories = getAllMainCatsWithChildren();

        $smarty->assign('pageTitle', 'RB - ' .'Вход');
        $smarty->assign('rsCategories', $rsCategories);

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'login');
        loadTemplate($smarty, 'footer');
    }
    else
    {
        //получаем список категорий для меню
        $rsCategories = getAllMainCatsWithChildren();

        //получаем список заказов пользователя
        $rsUserOrders = getCurUserOrders();

        $smarty->assign('pageTitle', 'RB - ' .'Личный кабинет');
        $smarty->assign('rsCategories', $rsCategories);
        $smarty->assign('rsUserOrders', $rsUserOrders);

        loadTemplate($smarty, 'header');
        loadTemplate($smarty, 'user');
        loadTemplate($smarty, 'footer');
    }
}

/**
 * Страница регистрации пользователя
 * @param $smarty
 */
function registeruserAction($smarty)
{
    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'RB - ' .'Регистрация');
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'registeruser');
    loadTemplate($smarty, 'footer');

}

/**
 * Обновление данных пользователя
 */
function updateAction()
{
    //если пользователь не залогинен то редирект на главную страницу
    if(! isset($_SESSION['user']))
    {
        redirect('/');
    }

    //перехват переменных отправленных из JS методом POST
    //инициализация переменных
    //в $_REQUEST попадают данные отправленные методои POST, GET
    //при оптимизации сайта лучше заменить $_REQUEST на тот метод которым отправляются данные
    $resData = array();
    $phone  = isset($_REQUEST['phone'])  ? $_REQUEST['phone']  : null;
    $adress = isset($_REQUEST['adress']) ? $_REQUEST['adress'] : null;
    $name   = isset($_REQUEST['name'])   ? $_REQUEST['name']   : null;
    $pwd1   = isset($_REQUEST['pwd1'])   ? $_REQUEST['pwd1']   : null;
    $pwd2   = isset($_REQUEST['pwd2'])   ? $_REQUEST['pwd2']   : null;
    $curPwd = isset($_REQUEST['curPwd']) ? $_REQUEST['curPwd'] : null;

    //проверка правильности пароля
    $curPwdMD5 = md5($curPwd);
    if( ! $curPwd || ($_SESSION['user']['pwd'] != $curPwdMD5) )
    {
        $resData['success'] = 0;
        $resData['message'] = 'Текущий пароль не верный';
        echo json_encode($resData);
        return false;
    }

    //обновление данных пользователя
    $res = updateUserData($name, $phone, $adress, $pwd1, $pwd2, $curPwdMD5);
    if($res)
    {
        $resData['success']  = 1;
        $resData['message']  = 'Данные сохранены';
        $resData['userName'] = $name;

        $_SESSION['user']['name']   = $name;
        $_SESSION['user']['phone']  = $phone;
        $_SESSION['user']['adress'] = $adress;

        $newPwd = $_SESSION['user']['pwd'];
        if( $pwd1 && ($pwd1 == $pwd2) )
        {
            $newPwd = md5(trim($pwd1));
        }
        $_SESSION['user']['pwd'] = $newPwd;

        $_SESSION['user']['displayName'] = $name ? $name : $_SESSION['user']['email'];
    }
    else
    {
        $resData['success'] = 0;
        $resData['message'] = 'Ошибка сохранения данных';
    }

    echo json_encode($resData);

}