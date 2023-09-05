<?php
class Routing {
    public static function callController($controllerName,$method = null, $params = null)
    {
        if (isset($controllerName))
        {
            $controller = ucfirst(strtolower($controllerName)).'Controller';
            if (class_exists($controller)) {
                $instance = new $controller();
                if (isset($method) && method_exists($instance,$method) && is_callable([$instance,$method]))
                {
                    if (isset($params))
                    {
                        $instance->$method($params);
                    }else{
                        $instance->$method();
                    }
                }else{
                    $instance->index();
                }
            }else{
                IndexController::index();
            }
        }
    }

    public static function route()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET"){
            if (isset($_GET['route'])){
                $route1 = $_GET['route'];
                $route1 = ltrim($route1);
                $routeParts = explode('/',$route1);   //   / İşaretine böl
                $route = array_filter($routeParts);   ///  Sonra / işaretini kaldır

                if (count($route) == 1){  //Eğer Sadece İlk Parametre Gelirse bunu Controller olarak kullan
                    $className = $route[0];
                    Routing::callController($className);
                }elseif (count($route) == 2){                    //Eğer iki parametre gelirse bunlardan ilkini controller ikincisini metod olarak kullan.
                    $className = $route[0];
                    $methodName = $route[1];
                    Routing::callController($className,$methodName);
                }else{
                    $className = $route[0];
                    $methodName = $route[1];
                    $params = $route[2];
                    Routing::callController($className,$methodName,$params);
                }
            }else{
                $defaultClass = 'index';
                Routing::callController($defaultClass);
            }
        }
    }
}


/*
 * {Controller}/{Method}/{Parameter}
 *
 */
