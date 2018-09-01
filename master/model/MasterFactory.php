<?php
namespace master\model;

use \master\model\request\Request;

class MasterFactory
{
    private $settings = [];
    private static $instance;
    private $db_instance;
    private $request;
    
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new MasterFactory();
        }
        return self::$instance;
    }
    
    public function __construct()
    {
        $this->settings = require('config/config.php');
        $this->request = new Request();
    }
    
    /*
    * function getSettings 
    * @param string
    * @return string
    */
    public function getSettings($key)
    {
        if (isset($this->settings[$key])) {
            return $this->settings[$key];
        }
        return null;
    }
    
    /*
    * function getDb 
    * @return object
    */
    private function getDb()
    {
        if ($this->db_instance === null) {
            $this->db_instance = new \master\model\database\MysqlDatabase(
                $this->getSettings('db_user'),
                $this->getSettings('db_pass'),
                $this->getSettings('db_host'),
                $this->getSettings('db_name')
            );
        }
        return $this->db_instance;
    }
    
    /*
    * function getTable
    * @param string
    * return object
    */
    public function getTable($class_name)
    {
        $class = '\master\model\table\\'. ucfirst($class_name) . 'Table';
        return new $class($this->getDb());
    }
}
