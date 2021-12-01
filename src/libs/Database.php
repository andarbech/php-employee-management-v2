<?php
require_once '../../config/db.php';

class Database {

    function __construct(){

        $this->dns = 'mysql:host=' . HOST .';dbname=' . DBNAME .';charset=' . 'utf8mb4';

    try {
        // parent::__construct($this->dns, USERNAME, PASSWORD);
        // $this->set_attributes();
    } catch (PDOException $e) {
        if ($e->getCode() == 1049) {
            $this->initDb();
            // parent::__construct($this->dns,USERNAME, PASSWORD);
    
        } else {
            throw new PDOException($e->getMessage());
        }
    }

    }

    public function initDb()
    {
        $pdo = new PDO($this->dns, USERNAME, PASSWORD);
        // $sql = file_get_contents(QUERIES . '/db.sql');
        // $pdo->exec($sql);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }

}

$connection=new Database();
$pdo2=$connection->initDb();
// var_dump($pdo2);

$query="select * from employees;";
$statement=$pdo2->prepare($query);
$statement->execute();
$data=$statement->fetchAll();
echo "<pre>";
print_r($data);













