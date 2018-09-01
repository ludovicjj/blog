<?php
namespace master\model\request;

class Request
{
    public $get;
    public $post;
    public $session;
    
    public function __construct($get = null, $post = null, $session = null)
    {
        $this->get = $get;
        $this->post = $post;
        $this->session = $session;
    }
}
