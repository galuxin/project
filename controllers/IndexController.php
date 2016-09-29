<?php
/**
 *  Контроллер главной страницы
 * 
 */

// Подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * Формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */ 
function indexAction($smarty)
{
	$rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'RB - Home');
	$smarty->assign('rsCategories', $rsCategories);

	loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}
