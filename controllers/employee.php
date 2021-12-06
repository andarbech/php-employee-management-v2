<?php
require_once './libs/controller.php';

class Employee extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->employee = [];
    }
    function get()
    {
        $employee = $this->model->getllAllEmployee();
        echo "<pre>";
        var_dump($employee);
        echo "<pre>";
        
        $this->view->employee = $employee;
        $this->view->render('dashboard/index');
    }
}
