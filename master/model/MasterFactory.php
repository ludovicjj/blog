<?php

namespace master\model;

class MasterFactory
{
	private $settings = [];
	private static $_instance;
	
	public static function getInstance()
	{
		if(self::$_instance === null)
		{
			self::$_instance = new MasterFactory();
		}
		return self::$_instance;
	}
	
	public function __construct()
	{
		$this->settings = require('config/config.php');
	}
}