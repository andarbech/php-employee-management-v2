<?php

class EmployeeModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getllAllEmployee()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM  employees WHERE name='Rack' ");
            while ($row = $query->fetch()) {
                $item = new Employee();
                $item->name = $row['name'];
                $item->lastName = $row['lastName'];
                $item->email = $row['email'];
                $item->age = $row['age'];
                $item->gender = $row['gender'];
                $item->city = $row['city'];
                $item->streetAddress = $row['streetAddress'];
                $item->state = $row['state'];
                $item->postalCode = $row['postalCode'];
                $item->phoneNumber = $row['phoneNumber'];
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
}
