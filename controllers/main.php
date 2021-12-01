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
        $this->model->getUserData();
        $this->model->get();
    }
}
