<?php
class CustomerController
{
	public function template($view, $data = null)
	{
		if ($data != null) {
			extract($data);
		}
		ob_start();
		include $view;
		$content = ob_get_clean(); //content cho thằng template gọi nội dung đổ ra view
		include 'app\views\users\temlate.php';
	}

	public function before()
	{
	}
}
