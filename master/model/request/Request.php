<?php
namespace master\model\request;

class Request
{
    private function get($key)
    {
        return $_GET[$key];
    }
    private function post($key)
    {
        return $_POST[$key];
    }
    private function session($key)
    {
        return $_SESSION[$key];
    }
}
