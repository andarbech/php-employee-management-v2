 <?php

    require_once 'controllers/error.php';
    class App
    {
        function __construct()
        {
            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, '/');
            $url = explode('/', $url);

            if (empty($url[0])) {
                $archivoController = 'controllers/main.php';
                require $archivoController;
                $controller = new Main();
                $controller->render();
                // $controller->loadModel('main');
                return false;
            } else {
                $archivoController = 'controllers/' . $url[0] . '.php';
            }
            if (file_exists($archivoController)) {
                require_once $archivoController;
                $class = ucfirst($url[0]);
                $controller = new $class();
                $controller->loadModel($url[0]);
                if (isset($url[1])) {
                    $controller->{$url[1]}($url[2]);
                }
            } else {
                $controller = new ErrorClass();
            }
        }
    }
