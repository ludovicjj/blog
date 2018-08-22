<?php
namespace master\model;

class MasterFactory
{
    private $settings = [];
    private static $_instance;
    private $db_instance;
	
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new MasterFactory();
        }
        return self::$_instance;
    }
	
    public function __construct()
    {
        $this->settings = require('config/config.php');
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
        } else {
            return null;
        }
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
            $this->getSettings('db_host')
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
