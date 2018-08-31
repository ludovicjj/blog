<?php
namespace master\model\table;

class Table
{
    protected $db;
    protected $table;
    protected $entity;
    
    public function __construct( \master\model\database\MysqlDatabase $db)
    {
        $this->db = $db;
        
        if ($this->table === null) {
            $class_name = (get_class($this));
            $morceaux = explode('\\', $class_name);
            $last_morceau = end($morceaux);
            $resultat = strtolower(str_replace('Table', '', $last_morceau));
            $this->table = $resultat;
        }
    }
	
    public function getEntity($array)
    {
        $class_name = get_class($this);
        $explode = explode('\\', $class_name);
        $last = end($explode);
        $resultat = 'master\model\entity\\'.str_replace('Table', 'Entity', $last);
        return $this->entity = new $resultat($array);
    }
}
