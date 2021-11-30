<?php
class Controller
{
    function __construct()
    {
        echo "parent base controller";
        $this->view = new View();
    }
}
