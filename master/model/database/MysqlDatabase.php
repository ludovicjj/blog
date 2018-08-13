<?php

namespace master\model\database;

class MysqlDatabase
{
	private $db_user;
	private $db_pass;
	private $db_host;
	
	
	public function __construct($db_user, $db_pass, $db_host)
	{
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_host = $db_host;
	}

}