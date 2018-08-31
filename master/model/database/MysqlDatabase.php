<?php
namespace master\model\database;

use \PDO;

class MysqlDatabase
{
    private $db_user;
    private $db_pass;
    private $db_host;
    private $db_name;
    private $pdo;
	
    public function __construct($db_user, $db_pass, $db_host, $db_name)
    {
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
        $this->db_name = $db_name;
    }
	
    private function getPdo()
    {
        if ($this->pdo === null) {
            try {
                $this->pdo = new PDO(
                    'mysql:dbname='.$this->db_name .';host='.$this->db_host .';charset=utf8',
                    $this->db_user,
                    $this->db_pass
                );
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
        return $this->pdo;
    }
	
    public function query($statement, $one = false)
    {
        $req = $this->getPdo()->query($statement);
        if ($one) {
            $data = $req->fetch(PDO::FETCH_ASSOC);
        } else {
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }
	
    public function prepareWithLimit($statement, $limit)
    {
        $req = $this->getPdo()->prepare($statement);
        $req->bindParam(':limit', $limit, PDO::PARAM_INT);
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
	
    public function prepare($statement, $options, $one = false)
    {
        $req = $this->getPdo()->prepare($statement);
        $res = $req->execute($options);
        if (
            strpos($statement, 'UPDATE') === 0 ||
            strpos($statement, 'INSERT') === 0 ||
            strpos($statement, 'DELETE') === 0
        ) {
            return $res;
        }
        if ($one) {
            $data = $req->fetch(PDO::FETCH_ASSOC);
        } else {
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }
}
