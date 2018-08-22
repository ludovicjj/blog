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
}
