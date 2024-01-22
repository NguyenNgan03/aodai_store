<?php
class AdminController
{
	public function template($view, $data = null)
	{
		if (!isset($_SESSION['username']) || !isset($_SESSION['role']) || ($_SESSION['role'] !== 'admin')) {
            echo 'Bạn cần đăng nhập với quyền admin';
            header('location: ?controller=home&action=index&page=customer');
        }
		if ($data != null) {
			extract($data);
		}
		ob_start();
		include $view;
		$content = ob_get_clean(); //content cho thằng template gọi nội dung đổ ra view
		include 'app\views\admin\temlate.php';
	}

	public function forms($view)
	{
		ob_start();	
		include $view;
		$content = ob_get_clean(); //content cho thằng template gọi nội dung đổ ra view
		include 'app\views\partials\form\loginForm.php';
	}

	public function before()
	{
	}
}
