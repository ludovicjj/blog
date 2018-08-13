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
	
	protected function render($view, $variables = [])
	{
		extract($variables);
		
		ob_start();
		require($this->viewRoot . $view .'.php');
		$content = ob_get_clean();
		require($this->viewRoot . 'template/' . $this->template . '.php');
	}
	
}