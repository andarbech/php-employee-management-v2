<?php
require_once './libs/controller.php';

class Employee extends Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->view->employee = [];
    }
    function get()
    {
        $employee = $this->model->getllAllEmployee();
        $this->view->employee =$employee;
        // $result=json_encode($this->employee);
    }
    function result(){
        // $this->view->render('dashboard/index');
    }
}
