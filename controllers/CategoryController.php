<?php
/**
 *  categoryController.php
 * 
 *  Контроллер страницы категории (/category/1)
 * 
 */

// Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';


/**
 * Формирование страницы категории
 * 
 * @param object $smarty шаблонизатор  
 */
function indexAction($smarty)
{
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if($catId == null) exit();

    $page = isset($_GET['page']) ? $_GET['page'] : 0;
    $perPage = 12;
    $page = $page * $perPage;

    $rsProducts   = null;
    $rsCategory   = getCatById($catId);
    $rsProducts   = getProductsByCat($catId, $page, $perPage);
    $rsCount      = countProductByCat($catId, $perPage);
    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'RB - ' .$rsCategory['name']);
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsCount', $rsCount);
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');
}

