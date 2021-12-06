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
        // echo "iniside load model in controller";
        $path  = './models/' . $model . 'model.php';
        // echo $path;
        // var_dump(file_exists($path));
        if (file_exists($path)) {
            require $path;
            $modelName = ucfirst($model) . 'Model';
            // var_dump($modelName);
            $this->model = new $modelName();
        }
    }
}
