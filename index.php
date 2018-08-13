<?php

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