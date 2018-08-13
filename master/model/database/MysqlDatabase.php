<?php

namespace master\model\database;
use \PDO;

class MysqlDatabase
{
	private $db_user;
	private $db_pass;
	private $db_host;
	
	private $pdo;
	
	public function __construct($db_user, $db_pass, $db_host)
	{
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_host = $db_host;
	}
	
	private function getPDO()
	{
		if($this->pdo === null)
		{
			try
			{
				$this->pdo = new PDO($this->db_host, $this->db_user, $this->db_pass);
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
		}
		return $this->pdo;
	}
	
	public function query($statement, $one = false)
	{
		$req = $this->getPDO()->query($statement);
		if($one)
		{
			$data = $req->fetch(PDO::FETCH_ASSOC);
		}
		else
		{
			$data = $req->fetchAll(PDO::FETCH_ASSOC);
		}
		return $data;
	}
	
	public function prepareWithLimit($statement, $limit)
	{
		$req = $this->getPDO()->prepare($statement);
		$req->bindParam(':limit', $limit, PDO::PARAM_INT);
		$req->execute();
		$data = $req->fetchAll(PDO::FETCH_ASSOC);
		
		return $data;
	}

}