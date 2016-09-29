<?php
/**
 *  ProductController.php
 * 
 *  Контроллер страницы товара (/product/1)
 * 
 */

// Подключаем модели
include_once '../models/ProductsModel.php';
include_once '../models/CategoriesModel.php';

/**
 * Формирование страницы продукта
 * 
 * @param object $smarty шаблонизатор 
 */
function indexAction($smarty)
{
     $itemId = isset($_GET['id']) ? $_GET['id'] : null; 
     if($itemId == null) exit();

     // получить данные новых продуктов
     $limit = 4;
     $rsNews = getLastProducts($limit);
	 // получить данные продукта
     $rsProduct = getProductById($itemId);
	 // получить все категории 
     $rsCategories = getAllMainCatsWithChildren();

     // проверяет если данный товар есть в корзине и какую ссылку выводить
	 $smarty->assign('itemInCart', 0);
     if(in_array($itemId, $_SESSION['cart']))
     {
         $smarty->assign('itemInCart', 1);
     }
	 	 
     $smarty->assign('pageTitle', 'RB - ' .$rsProduct['category_name']);
     $smarty->assign('rsCategories', $rsCategories);
     $smarty->assign('rsProduct', $rsProduct);
     $smarty->assign('rsNews', $rsNews);

     loadTemplate($smarty, 'header');
     loadTemplate($smarty, 'product');
     loadTemplate($smarty, 'footer');
}