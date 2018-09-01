<?php
namespace master\model\request;

class Request
{
    private $get;
    private $post;
    private $session;
    
    public function get($key)
    {
        if (isset($_GET[$key])) {
            $this->get = $_GET[$key];
            return $this->get;
        }
    }
    public function post($key)
    {
        if (isset($_POST[$key])) {
            $this->post = $_POST[$key];
            return $this->post;
        }
    }
    public function session($key)
    {
        if (isset($_SESSION[$key])) {
            $this->session = $_SESSION[$key];
            return $this->session;
        }
    }
}
