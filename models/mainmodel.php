<?php
require_once './models/mainmodel.php';

class MainModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    // WHERE email = ?",
    // $_POST["username"]
    public function getUserData()
    {
        try {

        $email = 'admin@assemblerschool.com';
        $query = $this->db->connect()->query("SELECT * FROM users WHERE email ='$email'");

        $results = $query->fetch();

        if ($_POST["password"] === $results["password"]) {
            // $_SESSION['userId'] = $results["id"];
            // $_SESSION['time'] = time();
            // $_SESSION['lifeTime'] = 60 * 10;
            echo "Password changed andrecito listo";
            return true;
        }
        echo 'no error';
        } catch (Exception $e) {
            return false;
        }
    }
}
// mark.parellada@gmail.com
// contrasenya