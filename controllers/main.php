<?php

require_once './libs/controller.php';


class Main extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function render()
    {
        $this->view->render('main/index');
    }
    function users()
    {
        $result = $this->model->getUserData($_POST["username"], $_POST["password"]);
        if (!$result) {
            header('Location: ' . BASE_URL . '/');
            exit();
        }
        header('Location: ' . BASE_URL . '/employee/get');
        exit();
    }
}
