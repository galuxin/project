<?php
/**
 * Модель для таблицы продукции (purchase)
 */

/**
 * Внесение в БД данных продуктов с привязкой к заказу
 */
function setPurchaseForOrder($orderId, $cart)
{
    //добавить в таблицу purchase значение (VALUES)
    $sql = "INSERT INTO purchase (order_id, product_id, price, amount) VALUES ";

    //инициализация переменной которая будет массивом
    $values = array();
    //формируем массив строк для запроса каждого товара
    foreach($cart as $item)
    {
        $values[] = "('{$orderId}', '{$item['id']}', '{$item['price']}', '{$item['cnt']}')";
    }

    //переобразовываем массив в строку
    $sql .= implode($values, ', ');
    $rs   = mysql_query($sql);

    return $rs;
}

/**
 * Получить покупки для заказа ID
 *
 * @param $orderId
 */
function getPurchaseForOrder($orderId)
{
    //запрос в БД где обращаемся сразу к двум таблицам
    //и присваиваем им псевдоним `pe` - purchase, `ps` - products
    //из `ps` мы выбираем только поля с именем
    $sql = "SELECT `pe`.*, `ps`.`name`
            FROM purchase as `pe`
            JOIN products as `ps` ON `pe`.product_id = `ps`.id
            WHERE `pe`.order_id = {$orderId}";

    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);

}