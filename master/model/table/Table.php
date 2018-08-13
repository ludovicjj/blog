<?php

namespace master\model\table;

class Table
{
	protected $db;
	protected $table;
	
	public function __construct( \master\model\database\MysqlDatabase $db)
	{
		$this->db = $db;
		
		if($this->table === null)
		{
			$class_name = (get_class($this));
			$morceaux = explode('\\', $class_name);
			$lastmorceau = end($morceaux);
			$resultat = strtolower(str_replace('Table', '', $lastmorceau));
			$this->table = $resultat;
		}
		
	}
}