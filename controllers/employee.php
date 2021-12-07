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
        $employees = $this->model->getllAllEmployee();
        echo json_encode($employees);
    }
    function dashboard()
    {
        $this->view->render('dashboard/index');
    }
}
