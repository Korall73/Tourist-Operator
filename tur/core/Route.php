<?php

    function autoloader($className)
    {
        $controllerPath = './tur/controllers/' . $className . '.php';
        $modelPath = './tur/models/' . $className . '.php';

        if (file_exists($controllerPath)) {
            include_once $controllerPath;
        };

        if (file_exists($modelPath)) {
            include_once $modelPath;
        };
    }
    spl_autoload_register('autoloader');

    class Route
    {

        static function loadPage()
        {
            global $numPage;

            $uri = explode('/', $_SERVER['REQUEST_URI']);

            $controllerName = ucfirst(!empty($uri[1]) ? $controllerName = $uri[1] : 'main');
            $actionName = ucfirst(!empty($uri[2]) ? $actionName = $uri[2] : 'main');

            if(is_numeric($actionName))
            {
                $numPage = $actionName;
                $actionName = 'Sub';
            }

            $modelName = $controllerName;

            $controllerName .= 'Controller';
            $modelName .= 'Model';

            if(class_exists($controllerName))
            {
                $controller = new $controllerName;
                $action = $actionName;

                if(method_exists($controller, $action))
                {
                    if($action == 'Sub' && !empty($numPage))
                    {
                        $controller->$action($numPage);
                    }else{
                        $controller->$action();
                    }
                    
                }else{
                    $controller = new ErrorController();
                    $action = 'Main';
                    $controller->$action();
                }
            }else{
                $controller = new ErrorController();
                $action = 'Main';
                $controller->$action();
            }
        }
    }

?>