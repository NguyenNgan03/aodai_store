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
        // Kiểm tra xem có giá trị nào được truyền qua tham số 'page' không
        if (!empty($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            // Nếu không có giá trị, sử dụng giá trị mặc định là 'customer'
            $page = 'Customer';
        }

        // Kiểm tra xem có giá trị nào được truyền qua tham số 'controller' không
        if (!empty($_GET['controller'])) {

            // Nếu có tham số 'controller', kiểm tra xem có tham số 'action' không
            if (!empty($_GET['action'])) {
                $controller = $_GET['controller'];
                $action = $_GET['action'];
            } else {
                // Nếu không có tham số 'action', sử dụng giá trị mặc định là 'index'
                $controller = $_GET['controller'];
                $action = 'index';
            }
        } else {
            // Nếu không có tham số 'controller', sử dụng giá trị mặc định là 'home'
            $controller = 'home';
            $action = 'index';
        }

        // Kiểm tra sự tồn tại của file controller dựa trên giá trị của 'page' và 'controller'
        if (file_exists('app/Controllers/' . $page . '/' . $controller . 'Controller.php')) {

            // Include file Controller.php và file controller của 'page'
            include 'app/Controllers/Controller.php';
            include 'app/Controllers/' . $page . 'Controller.php';

            // Kiểm tra xem có phương thức 'before' trong controller không
            $check_before = get_class_methods($page . 'Controller');
            if (in_array('before', $check_before)) {
                // Nếu có, gọi phương thức 'before'
                $controller_name = $page . 'Controller';
                $get_controller = new $controller_name();
                $get_controller->before();
            }

            // Include file controller của 'page' và 'controller'
            include 'app/Controllers/' . $page . '/' . $controller . 'Controller.php';

            // Tạo đối tượng controller và gọi phương thức 'action'
            $controller_name = $controller . 'Controller';
            $get_controller = new $controller_name();
            $get_controller->{$action}();
        } else {
            // Nếu không tìm thấy file controller, hiển thị trang lỗi
            $this->loadError();
        }
    }
}
?>
