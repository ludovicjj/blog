<?php

namespace master\model\table;

class UsersTable extends Table
{
	/** function usersExists
	* @param string username
	* @param string mail
	* @return array
	*/
	public function usersExists($username, $mail)
	{
		$req = $this->db->prepare(
		'SELECT COUNT(*) AS user
		FROM '. $this->table .'
		WHERE username = ? OR mail = ?',
		[$username, $mail],
		true
		);
		
		return $req;
	}
	
	public function addUser($username, $password, $mail)
	{
		$req = $this->db->prepare(
		'INSERT INTO '. $this->table .' SET username = ?, password = ?, mail = ?',
		[$username, $password, $mail]
		);
	}
}