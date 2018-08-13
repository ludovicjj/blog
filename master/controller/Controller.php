<?php

namespace master\controller;

class Controller
{
	protected $viewRoot;
	protected $template = 'default';
	
	public function __construct()
	{
		$this->viewRoot = 'master/view/';
	}
	
}