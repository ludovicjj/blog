<?php
namespace master\model\request;

class Request
{
    public function gets($key)
    {
        return $_GET[$key];
    }
    public function posts($key)
    {
        return $_POST[$key];
    }
    public function sessions($key)
    {
        return $_SESSION[$key];
    }
}
