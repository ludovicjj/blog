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
    case 'admin.posts.index':
        $controller = new master\controller\admin\PostsController();
        $controller->index();
        break;
    case 'admin.posts.add':
        $controller = new master\controller\admin\PostsController();
        $controller->add();
        break;
    case 'admin.posts.edit':
        $controller = new master\controller\admin\PostsController();
        $controller->edit();
        break;
    case 'admin.posts.delete':
        $controller = new master\controller\admin\PostsController();
        $controller->delete();
        break;
    case 'admin.comments.index':
        $controller = new master\controller\admin\CommentsController();
        $controller->index();
        break;
    case 'admin.comments.action':
        $controller = new master\controller\admin\CommentsController();
        $controller->action();
        break;
    case 'admin.comments.update':
        $controller = new master\controller\admin\CommentsController();
        $controller->update();
        break;
    case 'admin.comments.delete':
        $controller = new master\controller\admin\CommentsController();
        $controller->delete();
        break;
    default:
        $controller = new master\controller\PostsController();
        $controller->index();
}
