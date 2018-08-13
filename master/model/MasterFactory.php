<?php

namespace master\model;

class MasterFactory
{
	
	private static $_instance;
	
	public static function getInstance()
	{
		if(self::$_instance === null)
		{
			self::$_instance = new MasterFactory();
		}
		return self::$_instance;
	}
	
}