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
	
	/** function all
	* @param int
	* @return array
	*/
	public function all($limit)
	{
		$req = $this->db->prepareWithLimit(
		'SELECT posts.id, posts.title, posts.intro, posts.content, posts.author, posts.image,
		MONTH(date_post) AS month, DAY(date_post) AS day, YEAR(date_post) AS year, DATE_FORMAT(date_post, \'%H:%i:%s\') AS time
		FROM '. $this->table .'
		ORDER BY date_post DESC
		LIMIT :limit, 4',
		$limit
		);
		return $req;
	}
}