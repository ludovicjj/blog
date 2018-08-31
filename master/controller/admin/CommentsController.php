<?php
namespace master\controller\admin;

use \master\model\MasterFactory;

class CommentsController extends AdminController
{
    public function index()
    {
        $master = MasterFactory::getInstance();
        $req = $master->getTable('comments')->commentsByPosts();
        
        $this->render('backend/comments/index', compact('req'));
    }
    
    public function action()
    {
        $master = MasterFactory::getInstance();
        $req_post = $master->getTable('posts')->postWithId($_GET['id']);
        $post = $master->getTable('posts')->getEntity($req_post);
        $req_comments = $master->getTable('comments')->commentsByPostWaiting($_GET['id']);
        $comments = array();
        
        foreach ($req_comments as $data_comments) {
            $entity_comments = $master->getTable('comments')->getEntity($data_comments);
            $comments[] = $entity_comments;
        }
        
        $this->render('backend/comments/action', compact('post', 'comments'));
    }
    
    public function update()
    {
        $master = MasterFactory::getInstance();
        $master->getTable('comments')->updateComment($_GET['id']);
        header('Location:index.php?p=admin.comments.action&id='.$_GET['post_id']);
    }
    
    public function delete()
    {
        $master = MasterFactory::getInstance();
        $master->getTable('comments')->deleteComment($_GET['id']);
        header('Location:index.php?p=admin.comments.action&id='.$_GET['post_id']);
    }
}
