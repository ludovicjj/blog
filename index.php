<?php

require ('master/model/MasterFactory.php');
require ('master/model/database/MysqlDatabase.php');

require ('master/controller/Controller.php');
require ('master/controller/PostsController.php');

require ('master/model/table/Table.php');
require ('master/model/table/PostsTable.php');

require ('master/model/entity/Entity.php');
require ('master/model/entity/PostsEntity.php');

if(isset($_GET['p']))
{
	$p = $_GET['p'];
}
else
{
	$p = 'index';
}

if($p === 'index')
{
	$controller = new master\controller\PostsController();
	$controller->index();
}
elseif($p === 'posts')
{
	$controller = new master\controller\PostsController();
	$controller->posts();
}