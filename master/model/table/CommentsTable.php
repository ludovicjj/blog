<?php
namespace master\model\table;

class CommentsTable extends Table
{
    /*
    * function sendComment
    * @param string content
    * @param int post_id
    * @param string author 
    */
    public function sendComment($content, $post_id, $author)
    {
        $req = $this->db->prepare(
            'INSERT INTO '. $this->table .' SET content = ?, post_id = ?, author = ?',
            [$content, $post_id, $author]
        );
    }
	
    /*
    * function CommentsById
    * @param int post_id
    * @return array 
    */
    public function commentsById($post_id)
    {
        $req = $this->db->prepare(
            'SELECT comments.id, comments.content, comments.statut, comments.author,
            comments.post_id AS postId,
            MONTH(date_comment) AS month,
            DAY(date_comment) AS day,
            YEAR(date_comment) AS year,
            DATE_FORMAT(date_comment, \'%H:%i:%s\') AS hour
            FROM '. $this->table .' 
            WHERE comments.post_id = ?
            AND comments.statut = 2
            ORDER BY comments.date_comment DESC',
            [$post_id]
        );
        return $req;
    }
	
    /*
    * function commentsByPosts
    * @preturn array
    */
    public function commentsByPosts()
    {
        $req = $this->db->query(
            'SELECT posts.id, posts.title, COUNT(comments.post_id) AS nb_comments
            FROM '. $this->table .'
            LEFT JOIN posts
            ON posts.id = comments.post_id
            WHERE comments.statut = 1
            GROUP BY comments.post_id'
        );
        return $req;
    }
}
