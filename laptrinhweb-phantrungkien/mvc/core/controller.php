<?php
class Controller{
	public function home()
	{
	echo "trang home cua  controller";
	}
	protected function loadView($master, $view, $data)
	{
		require_once PATH_TO_VIEW.strtolower($master).'.php';
	}
}
?>
