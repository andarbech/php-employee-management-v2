<?php
require_once './libs/controller.php';

// if (json_decode(file_get_contents('php://input', true), true)) {
//     $_POST = json_decode(file_get_contents('php://input', true), true);
// }

class Employee extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function get()
    {
        $employees = json_decode(file_get_contents("php://input"), true);
        $employees = $this->model->getllAllEmployee();
        echo json_encode($employees);

        // $newEmployee = $this->model->addEmployee($employee);
        // echo json_encode($newEmployee);
    }
    function dashboard()
    {
        $this->view->render('dashboard/index');
    }
}
