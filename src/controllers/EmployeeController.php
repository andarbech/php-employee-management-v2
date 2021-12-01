<?php

class EmployeeController extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->loadModel("employee");
    }

    function dashboard()
    {
        $this->view->render("employee/dashboard");
    }

    function get()
    {
        $this->model->getEmployees("SELECT * FROM employees;");
    }
}