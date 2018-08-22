<?php
session_start();

require ('master/Autoloader.php');
master\Autoloader::register();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'index';
}

switch ($p) {
    case 'index':
        $controller = new master\controller\PostsController();
        $controller->index();
        break;
    case 'posts':
        $controller = new master\controller\PostsController();
        $controller->posts();
        break;
    case 'single':
        $controller = new master\controller\PostsController();
        $controller->singlePost();
        break;
    case 'register':
        $controller = new master\controller\UsersController();
        $controller->register();
        break;
    case 'login':
        $controller = new master\controller\UsersController();
        $controller->login();
        break;
    case 'logout':
        $controller = new master\controller\UsersController();
        $controller->logout();
        break;
    default:
        $controller = new master\controller\PostsController();
        $controller->index();
}
