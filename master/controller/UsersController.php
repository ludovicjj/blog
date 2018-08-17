<?php

namespace master\controller;

use \master\model\MasterFactory;

class UsersController extends Controller
{
	public function register()
	{
		$this->render('frontend/register');
	}
}