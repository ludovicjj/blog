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
}