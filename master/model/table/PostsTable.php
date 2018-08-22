<?php
namespace master\model\table;

class PostsTable extends Table
{
    /*
    * function paging
    * @return array
    */
    public function paging()
    {
        $req = $this->db->query(
            'SELECT COUNT(*) AS page FROM '. $this->table .'',
            true
        );
        return $req;
    }
	
    /*
	* function allWithLimit
    * @param int
    * @return array
    */
    public function allWithLimit($limit)
    {
		$req = $this->db->prepareWithLimit(
            'SELECT posts.id, posts.title, posts.intro, posts.content, posts.author, posts.image,
            MONTH(date_post) AS month,
            DAY(date_post) AS day,
            YEAR(date_post) AS year,
            DATE_FORMAT(date_post, \'%H:%i:%s\') AS hour
            FROM '. $this->table .'
            ORDER BY date_post DESC
            LIMIT :limit, 4',
            $limit
		);
		return $req;
    }
	
    /*
    * function postWithId
    * @return array
    */
    public function postWithId($id)
    {
		$req = $this->db->prepare(
            'SELECT posts.id, posts.title, posts.intro, posts.content, posts.author, posts.image,
            MONTH(date_post) AS month,
            DAY(date_post) AS day,
            YEAR(date_post) AS year,
            DATE_FORMAT(date_post, \'%H:%i:%s\') AS hour
            FROM '. $this->table .'
            WHERE id = ?',
            [$id], true
		);
		return $req;
    }

    /*
	* function all
    * @return array
    */	
    public function all()
    {
        $req = $this->db->query(
            'SELECT posts.id, posts.title, posts.intro, posts.content, posts.author, posts.image,
            MONTH(date_post) AS month,
            DAY(date_post) AS day,
            YEAR(date_post) AS year,
            DATE_FORMAT(date_post, \'%H:%i:%s\') AS hour
            FROM '. $this->table .'
            ORDER BY date_post DESC'
        );
        return $req;
    }
}
