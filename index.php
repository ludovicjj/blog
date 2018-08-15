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
	ob_start();
	require('master/view/frontend/index.php');
	$content = ob_get_clean();
	require('master/view/template/default.php');
}
elseif($p === 'posts')
{
	$controller = new master\controller\PostsController();
	$controller->posts();
}