<?php
namespace master\controller;

use \master\model\MasterFactory;

class PostsController extends Controller
{
    public function posts()
    {
        $master = MasterFactory::getInstance();
        $req = $master->getTable('posts')->paging();
		
        $paging =  ceil($req['page'] / 4);
        $paging = (int) $paging;
		
        if (isset($_GET['page'])) {
            $limit = ($_GET['page'] * 4) - 4;
		} else {
            $limit = 0;
        }
		
        $req_post = $master->getTable('posts')->all($limit);
        $post = array();
        foreach ($req_post as $data) {
            $entity_post = $master->getTable('posts')->getEntity($data);
            $post[] = $entity_post;
        }
		
        $this->render('frontend/posts', compact('paging', 'post'));
    }
	
    public function index()
    {
        $this->render('frontend/index');
    }
	
    public function singlePost()
    {
        if (isset($_GET['id'])) {
            $master = MasterFactory::getInstance();
            $req = $master->getTable('posts')->postWithId($_GET['id']);
            $req_comment = $master->getTable('comments')->commentsById($_GET['id']);
            if ($req === false) {
                $this->notFound();
            } else {
                $post = $master->getTable('posts')->getEntity($req);
                $comments = array();
                foreach ($req_comment as $data_comment) {
                    $entity_comment = $master->getTable('comments')->getEntity($data_comment);
                    $comments[] = $entity_comment;
                }

                $error = null;
                $message = null;
                if ($_POST) {
                    $error = true;
                    $message = 'Champs obligatoire';
                    if ($_POST['content']) {
                        $master->getTable('comments')->sendComment(
                            $_POST['content'],
                            $_GET['id'],
                            $_SESSION['username']
                        );
                        header('Location:index.php?p=single&id='.$_GET['id'].'&info=1');
                    }
                }
                $this->render('frontend/single', compact('post', 'error', 'message', 'comments'));
            }
        } else {
            $this->notFound();
        }
    }
}
