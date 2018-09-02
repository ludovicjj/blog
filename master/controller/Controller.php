<?php
namespace master\controller;

use \master\model\MasterFactory;

class Controller
{
    protected $viewRoot;
    protected $template = 'default';
    protected $title = 'blog';
    
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
        
        $title = $this->getTitle();
        require($this->viewRoot . 'template/' . $this->template . '.php');
    }
    
    protected function notFound()
    {
        $this->render('frontend/404');
    }
    
    protected function getTitle()
    {
        return $this->title;
    }
    
    protected function setTitle($title)
    {
        return $this->title = $title;
    }
}
