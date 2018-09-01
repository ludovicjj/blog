<?php
namespace master\model\request;

class Request
{
    public function get($key)
    {
        return $_GET[$key];
    }
    public function post($key)
    {
        return $_POST[$key];
    }
    public function session($key)
    {
        return (isset($_SESSION[$key]) ? $_SESSION[$key] : null);
    }
}
