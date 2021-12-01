<?php
require './config/db.php';

class Database
{

    public function connect()
    {
        $this->dns = 'mysql:host=' . HOST . ';dbname=' . DBNAME . ';charset=' . 'utf8mb4';

        $pdo = new PDO($this->dns, USERNAME, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}

