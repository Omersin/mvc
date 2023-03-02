<?php 
class Routing {
    public static function route()
    { 
        $URL = explode('&', ltrim(str_replace([basename($_SERVER['SCRIPT_NAME']), dirname($_SERVER['SCRIPT_NAME'])], '',$_SERVER['REQUEST_URI']),'/'));
        if ($URL[0] == '') {
            //default controller
            $controller = 'IndexController';
            //default model
            $method     = 'index';
            call_user_func_array([new $controller, $method], []);
        } else {
            $controller = ucfirst($URL[0]) . 'Controller';
            $method = 'index';
            if(isset($URL[1])) {
                $method = strtolower($URL[1]);
            }

            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_FILES)) {
                    $args = [$_POST, $_FILES];
                } else { $args = [$_POST]; }
                call_user_func_array([new $controller, $method], $args);
            } elseif ($_SERVER['REQUEST_METHOD'] == 'GET'){
                $args = [$_GET];
                call_user_func_array([new $controller, $method], $args);
            }
        }
    }
}
