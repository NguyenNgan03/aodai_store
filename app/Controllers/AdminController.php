<?php
class AdminController
{
    public function template($view, $data = null)
	{
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
