<?php

namespace master\model\table;

class PostsTable extends Table
{
	protected $db;
	protected $table;
	protected $entity;
	
	/** function paging
	* @return array
	*/
	public function paging()
	{
		$req = $this->db->query(
		'SELECT COUNT(*) AS page 
		FROM '. $this->table .'',
		true);
		return $req;
	}
}