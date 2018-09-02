<?php
namespace master\controller\admin;

class AdminController extends \master\controller\Controller
{
    protected $title = 'Administration';
    
    public function __construct()
    {
        parent::__construct();

        if (!$this->auth()) {
            $this->refused();
        }
    }
    
    private function auth()
    {
        if (isset($_SESSION['statut']) && $_SESSION['statut'] == 2) {
            return $_SESSION['statut'];
        }
        return false;
    }
    
    protected function refused()
    {
        $this->render('frontend/error/refused');
        die();
    }
}
