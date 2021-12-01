<?php
require_once './libs/controller.php';
class ErrorClass extends Controller

{
    function __construct()
    {
        parent::__construct();
        $this->view->message="Error this page don't exist";
        $this->view->render('error/index');
    }
}
