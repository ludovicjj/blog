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
            if ($req === false) {
                $this->notFound();
            } else {
                $post = $master->getTable('posts')->getEntity($req);
                $this->render('frontend/single', compact('post'));
            }
        } else {
            $this->notFound();
        }
    }
}
