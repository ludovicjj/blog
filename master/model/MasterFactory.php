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
	
	/*
	* function getSettings 
	* @param string
	* return string
	*/
	public function getSettings($key)
	{
		if(isset($this->settings[$key]))
		{
			return $this->settings[$key];
		}else{
			return null;
		}
	}
}