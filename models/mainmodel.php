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
        $query = $this->db->connect()->query("SELECT * FROM  users");
        $row = $query->fetch();
        // $username = $_POST["username"];
        // $password = $_POST["password"];
        // $id = $row['id'];
        // $name = $row['name'];
        // $email = $row['email'];
        // $password = $row['password'];
    }
}
