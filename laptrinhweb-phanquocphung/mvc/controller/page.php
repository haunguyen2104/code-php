<?php
class Page extends UserController
{
	private $pagemodel;
	function __construct()
	{
		$this->pagemodel = new PageModel;
	}
	public function showPage($pageId)
	{
		$data = $this->pagemodel->showPage($pageId);
		 
		$this->loadView("master2", 'page/showPage', $data);
	}
}
