<?php
class Controller
{
    function __construct()
    {
        // echo "parent base controller";
        $this->view = new View();
    }
    //main
    function loadModel($model)
    {
        $path  = './models/' . $model . 'model.php';
        if (file_exists($path)) {
            include $path;
            $modelName = ucfirst($model) . 'Model';
            $this->model = new $modelName();
        }
    }
}
