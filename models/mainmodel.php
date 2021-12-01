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
        echo "<pre>";
        echo $password;
        echo "<pre>";
    }

    public function get()
    {
        $query = $this->db->connect()->query("SELECT * FROM  users");
        $row = $query->fetch();
       
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $email = $row['password'];
    }
}
