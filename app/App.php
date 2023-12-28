<?php
global $routes;
class App
{
    private $__controller, $__action, $__params;
    function __construct()
    {
        $this->handle();

    }
    public function loadError($name = '404')
    {
        require_once 'errors/' . $name . '.php';
    }
    public function handle()
    {
        if(!empty($_GET['page'])){
            $page = $_GET['page'];
        }
        else{
            $page = 'user';
        }

        if(!empty($_GET['controller'])){

           if(!empty($_GET['action'])){
                $controller = $_GET['controller'];
                $action = $_GET['action'];
           }
           else{
                $controller = $_GET['controller'];
                $action = 'index';
           }
        }
        else{
            $controller = 'home';
            $action = 'index';
        }

        if (file_exists('app/Controllers/' . $page . '/' . $controller . 'Controller.php')) {
            include 'app/Controllers/Controller.php';
            include 'app/Controllers/' . $page . 'Controller.php';
            $check_before = get_class_methods($page . 'Controller');
       
            if (in_array('before', $check_before)) {
                $controller_name = $page . 'Controller';
                $get_controller = new $controller_name();
                $get_controller->before();
            }
            include 'app/Controllers/' . $page . '/' . $controller . 'Controller.php';
           
            $controller_name = $controller . 'Controller';
            $get_controller = new $controller_name();
            $get_controller->{$action}();
        }  else {
            $this->loadError();
        }
        
    }
}
