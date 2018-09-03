<?php
namespace master\controller\admin;

use \master\model\MasterFactory;

class PostsController extends AdminController
{
    public function index()
    {
        $master = MasterFactory::getInstance();
        $req_posts = $master->getTable('posts')->all();
        $posts = array();
        foreach ($req_posts as $data_posts) {
            $entity_posts = $master->getTable('posts')->getEntity($data_posts);
            $posts[] = $entity_posts;
        }
        $this->render('backend/posts/index', compact('posts'));
    }
    
    public function add()
    {
        $master = MasterFactory::getInstance();
        $error = null;
        $message = null;
        
        if ($_POST) {
            $error = true;
            $message = 'Tous les champs sont obligatoires';
            
            if (!empty($_POST['title'] &&
                $_POST['intro'] &&
                $_POST['content'] &&
                $_POST['author'] &&
                $_POST['image'])) {
                $master->getTable('posts')->addPost(
                    $_POST['title'],
                    $_POST['intro'],
                    $_POST['content'],
                    $_POST['author'],
                    $_POST['image']
                );
                header('Location:index.php?p=admin.posts.index');
            }
        }
        $this->render('backend/posts/add', compact('error', 'message'));
    }
    
    public function edit()
    {
        if (isset($_GET['id'])) {
            $master = MasterFactory::getInstance();
            $req_post = $master->getTable('posts')->postWithId($_GET['id']);
            if ($req_post) {
                $post = $master->getTable('posts')->getEntity($req_post);
                if ($_POST) {
                    $master->getTable('posts')->addPostWithId(
                        $_POST['title'],
                        $_POST['intro'],
                        $_POST['content'],
                        $_POST['author'],
                        $_POST['image'],
                        $_GET['id']
                    );
                    header('Location:index.php?p=admin.posts.index');
                }
                $this->render('backend/posts/edit', compact('post'));
            }
        }
    }
    
    public function delete()
    {
        if (!empty($_POST)) {
            $master = MasterFactory::getInstance();
            $master->getTable('posts')->deletePostAndComments($_POST['id']);
            header('Location:index.php?p=admin.posts.index');
        }
    }
}
