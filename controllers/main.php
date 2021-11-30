<?php

require_once './libs/controller.php';

class Main extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('main/index');
        echo "<pre>";
        echo "inside main conroller";
    }

    function saludo()
    {
        echo "<pre>";
        echo "eyyy what'sUp";
    }
}
