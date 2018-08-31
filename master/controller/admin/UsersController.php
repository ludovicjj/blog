<?php
namespace master\controller\admin;

use \master\model\MasterFactory;

class UsersController extends AdminController
{
    public function index()
    {
        $master = MasterFactory::getInstance();
        $req_users = $master->getTable('users')->all();
        $users = array();
        foreach ($req_users as $data_users) {
            $entity_users = $master->getTable('users')->getEntity($data_users);
            $users[] = $entity_users;
        }
        $this->render('backend/users/index', compact('users'));
    }
    
    public function upper()
    {
        $master = MasterFactory::getInstance();
        $master->getTable('users')->upUser($_GET['id']);
        header('Location:index.php?p=admin.users.index');
    }
    
    public function down()
    {
        $master = MasterFactory::getInstance();
        $master->getTable('users')->downUser($_GET['id']);
        header('Location:index.php?p=admin.users.index');
    }
}
