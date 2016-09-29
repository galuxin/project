<?php
/**
 * Модель для таблицы категорий (categories)
 * 
 */

 /**
 * Получить дочернии категории для категории $catId
 * 
 * @param integer $catId ID категории
 * @return array массив дочерних категорий 
 */
function getChildrenForCat($catId)
{
   $sql = "SELECT * FROM categories WHERE parent_id = '{$catId}'";
       
   $rs = mysql_query($sql);   
	
   return createSmartyRsArray($rs); 
}

/**
 * Получить главные категории с привязками дочерних
 * 
 * @return array массив категорий 
 */
function getAllMainCatsWithChildren()
{
	$sql = "SELECT * FROM categories WHERE parent_id = '0'";
	
	$rs = mysql_query($sql); 
	
	$smartyRs = array();
	while ($row = mysql_fetch_assoc($rs))
    {
		$rsChildren = getChildrenForCat($row['id']);

        if($rsChildren)
        {
            $row['children'] = $rsChildren;
        }
        $smartyRs[] = $row;
    }
	return $smartyRs;
}

/**
 * Получить данные категории по id
 * 
 * @param integer $catId ID категории
 * @return array массив - строка категории 
 */
function getCatById($catId)
{ 
   $catId = intval($catId);
   $sql = "SELECT * FROM categories WHERE id = '{$catId}'";
            
   $rs = mysql_query($sql); 
   
   return mysql_fetch_assoc($rs);
}

/**
 * Для админки
 *
 * Получить все главные категории (категорий которые не являются дочерними)
 */
function getAllMainCategories()
{
    $sql = "SELECT * FROM categories WHERE parent_id = 0";

    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}

/**
 * Для админки
 * Добавление новой категории
 */
function insertCat($catName, $catParentId = 0)
{
    //готовим запрос
    $sql = "INSERT INTO categories (`parent_id`, `name`)
            VALUE ('{$catParentId}', '{$catName}')";

    //выполняем запрос
    mysql_query($sql);

    //получем id добавленной записи
    $id = mysql_insert_id();

    return $id;
}

/**
 * Для админки
 * Получить все категории
 */
function getAllCategories()
{
    //готовим запрос
    $sql = 'SELECT * FROM categories ORDER BY parent_id ASC';

    //выполняем запрос
    $rs = mysql_query($sql);

    return createSmartyRsArray($rs);
}

/**
 * Для админки
 * Обновление категории
 */
function updateCategoryData($itemId, $parentId = -1, $newName = '')
{
    $set = array();

    //если в переменную $newName пришло новое значение
    //мы его присваиваем
    if($newName)
    {
        $set[] = "`name` = '{$newName}'";
    }

    //если $parentId > -1 то-есть 0, 1, 2, и т.д.
    //мы его присваиваем
    if($parentId > -1)
    {
        $set[] = "`parent_id` = '{$parentId}'";
    }

    //массив $set с данными присваиваем $setStr
    //и добавляем их в ", "
    $setStr = implode($set, ", ");
    $sql = "UPDATE categories SET {$setStr} WHERE id = '{$itemId}'";

    $rs = mysql_query($sql);

    return $rs;
}