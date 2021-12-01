<?php
require_once './models/mainmodel.php';

class MainModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserData()
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo $username;
        echo $password;
     }
}
