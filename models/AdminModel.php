<?php

/**
 * Авторизация админа
 *
 * @param $email
 * @param $pwd
 * @return array|resource
 */
function loginAdmin($email, $pwd)
{
    $sql = "SELECT * FROM admin WHERE (`email` = '{$email}' and `password` = '{$pwd}') LIMIT 1";

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