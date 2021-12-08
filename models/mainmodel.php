<?php
require_once './models/mainmodel.php';

class MainModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function getUserData($email, $password)
    {

        $query = $this->db->connect()->query("SELECT * FROM users WHERE email ='$email'");
        $results = $query->fetch();
        if ($password === $results["password"]) {
            // $_SESSION['userId'] = $results["id"];
            // $_SESSION['time'] = time();
            // $_SESSION['lifeTime'] = 60 * 10;
            return true;
        }
        return false;
    }
}
// mark.parellada@gmail.com
// contrasenya