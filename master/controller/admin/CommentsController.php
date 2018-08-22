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
}
