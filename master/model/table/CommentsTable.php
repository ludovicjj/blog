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
}
