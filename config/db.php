<?php
/*
 * НАСТРОЙКИ ПОДКЛЮЧЕНИЯ К БД
 */

$db = new DataBase();
$db->dblocation = "localhost";
$db->dbname     = "RB_shop";
$db->dbuser     = "admin";
$db->dbpassword = "1234";
$db->connect();