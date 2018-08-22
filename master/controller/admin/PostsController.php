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
			
			if (!empty($_POST['title'] && $_POST['intro'] && $_POST['content'] && $_POST['author'] && $_POST['image'])) {
				$req_posts = $master->getTable('posts')->addPost(
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
}
