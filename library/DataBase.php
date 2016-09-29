<?php

class DataBase
{
    public  $dblocation;
    public  $dbname;
    public  $dbuser;
    public  $dbpassword;
    private $db;

    public function connect()
    {
        $this->db = mysql_connect($this->dblocation, $this->dbuser, $this->dbpassword);

        if(! $this->db)
        {
            echo "<h4>Ошибка доступа к MySQL</h4>";
            exit();
        }

        // Устанавливает кодировку по умолчанию для текущего соединения
        mysql_set_charset('utf8');

        if(! mysql_select_db($this->dbname, $this->db))
        {
            echo "<h4>Ошибка доступа к базе данных: {$this->dbname}</h4>";
            exit();
        }
    }
}