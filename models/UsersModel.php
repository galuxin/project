<?php
/**
 * Модель для работы с таблицей (users)
 */

/**
 * Регистрация пользователя
 *
 * @param $email
 * @param $pwdMD5
 * @param $name
 * @param $phone
 * @param $adress
 */
function registerNewUser($email, $pwdMD5, $name, $phone, $adress)
{
    $email  = htmlspecialchars(mysql_real_escape_string($email));
    $name   = htmlspecialchars(mysql_real_escape_string($name));
    $phone  = htmlspecialchars(mysql_real_escape_string($phone));
    $adress = htmlspecialchars(mysql_real_escape_string($adress));

    $sql = "INSERT INTO users (`email`, `pwd`, `name`, `phone`, `adress`)
            VALUES ('{$email}', '{$pwdMD5}', '{$name}', '{$phone}', '{$adress}')";

    $rs = mysql_query($sql);

    if($rs)
    {
        $sql = "SELECT * FROM users WHERE (`email` = '{$email}' and `pwd` = '{$pwdMD5}') LIMIT 1";

        $rs = mysql_query($sql);
        $rs = createSmartyRsArray($rs);

        if(isset($rs[0]))
        {
            $rs['success'] = 1;
        }
        else
        {
            $rs['success'] = 0;
        }
    }
    else
    {
        $rs['success'] = 0;
    }
    return $rs;
}

function checkRegisterParams($email, $pwd1, $pwd2, $phone)
{
    $res = null;

    if($pwd1 != $pwd2)
    {
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }

    if(! $pwd2)
    {
        $res['success'] = false;
        $res['message'] = 'Введите повтор пароля';
    }

    if(! $pwd1)
    {
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
    }

    if(! $phone)
    {
        $res['success'] = false;
        $res['message'] = 'Укажите ваш номер телефона';
    }

    if(! $email)
    {
        $res['success'] = false;
        $res['message'] = 'Введите email';
    }

    return $res;
}

/**
 * Проверка почты (есть ли email адрес в БД)
 *
 * @param $email
 * @return array|resource
 */
function checkUserEmail($email)
{
    $email = mysql_real_escape_string($email);
    $sql = "SELECT id FROM users WHERE email = '{$email}'";

    $rs = mysql_query($sql);
    $rs = createSmartyRsArray($rs);

    return $rs;
}

/**
 * Авторизация пользователя
 *
 * @param $email
 * @param $pwd
 * @return array|resource
 */
function loginUser($email, $pwd)
{
    $email = htmlspecialchars((mysql_real_escape_string($email)));
    $pwd   = md5($pwd);

    $sql = "SELECT * FROM users WHERE (`email` = '{$email}' and `pwd` = '{$pwd}') LIMIT 1";

    $rs = mysql_query($sql);

    $rs = createSmartyRsArray($rs);

    if(isset($rs[0]))
    {
        $rs['success'] = 1;
    }
    else
    {
        $rs['success'] = 0;
    }

    return $rs;
}

/**
 * Изминение данных пользователя
 *
 * @param $name
 * @param $phone
 * @param $adress
 * @param $pwd1
 * @param $pwd2
 * @param $curPwd
 */
function updateUserData($name, $phone, $adress, $pwd1, $pwd2, $curPwd)
{
    //проверка получаемых данных
    $email  = htmlspecialchars(mysql_real_escape_string($_SESSION['user']['email']));
    $name   = htmlspecialchars(mysql_real_escape_string($name));
    $phone  = htmlspecialchars(mysql_real_escape_string($phone));
    $adress = htmlspecialchars(mysql_real_escape_string($adress));
    $curPwd = htmlspecialchars(mysql_real_escape_string($curPwd));
    $pwd1 = trim($pwd1);
    $pwd2 = trim($pwd2);

    $newPwd = null;
    if( $pwd1 && ($pwd1 == $pwd2) )
    {
        $newPwd = md5($pwd1);
    }

    //запрос в таблицу обновить
    $sql = "UPDATE users SET ";

    if($newPwd)
    {
        $sql .= "`pwd` = '{$newPwd}', ";
    }
    $sql .= " `name` = '{$name}', `phone` = '{$phone}', `adress` = '{$adress}' WHERE `email` = '{$email}' AND `pwd` = '{$curPwd}' LIMIT 1";

    $rs = mysql_query($sql);

    return $rs;
}

/**
 * Получить данные заказа текущего пользователя
 *
 * @return array массив заказов с привязкой к продуктам
 */
function getCurUserOrders()
{
    $userId = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : null;
    $rs = getOrdersWithProductsByUser($userId);

    return $rs;
}
