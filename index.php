<?php

require ('master/model/MasterFactory.php');
master\model\MasterFactory::load();

if(isset($_GET['p']))
{
	$p = $_GET['p'];
}
else
{
	$p = 'index';
}

switch($p)
{
	case 'index' :
	$controller = new master\controller\PostsController();
	$controller->index();
	break;
	
	case 'posts' :
	$controller = new master\controller\PostsController();
	$controller->posts();
	break;
}