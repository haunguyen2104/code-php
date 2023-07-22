<?php
class Link extends UserController
{
	private $linkmodel;
	function __construct()
	{
		$this->linkmodel = new LinkModel;
	}
	public function showLink($id)
	{
		$data = $this->linkmodel->showLink($id);
		$this->loadView("master1", 'page/showLink', $data);
	}
}