<?php
class AdminController
{
    public function template($view, $data = null)
	{
		if ($data != null) {
			extract($data);
		}
		ob_start();
		include_once dirname((__DIR__)) . $view;
		$content = ob_get_clean(); //content cho thằng template gọi nội dung đổ ra view
		include_once 'app\views\users\temlate.php';
	}
    public function before()
    {
    }
}
