<?php
namespace master\model\table;

class UsersTable extends Table
{
    /*
    * function usersExists
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
    
    /*
    * function addUser
    * @param string username
    * @param string password
    * @param string mail
    */
    public function addUser($username, $password, $mail)
    {
        $this->db->prepare(
            'INSERT INTO '. $this->table .' SET username = ?, password = ?, mail = ?',
            [$username, $password, $mail]
        );
    }

    /*
    * function loginUser
    * @param string username
    * @param string password
    * @return array
    */
    public function loginUser($username, $password)
    {
        $user = $this->db->prepare(
            'SELECT * FROM '.$this->table .' WHERE username = ? AND password = ?',
            [$username, $password],
            true
        );
        return $user;
    }
	
    /*
    * function all
    * @return array
    */
    public function all()
    {
        $req = $req = $this->db->query(
            'SELECT users.id, users.username, users.mail, users.statut
            FROM '. $this->table .''
        );
        return $req;
    }
	
    /** function upUser
    * @param int id
    */
    public function upUser($id_user)
    {
        $req = $req = $this->db->prepare(
            'UPDATE '. $this->table .' SET users.statut = 2
            WHERE id = ?',
            [$id_user]
        );
    }
	
    /** function downUser
    * @param int id
    */
    public function downUser($id_user)
    {
        $req = $req = $this->db->prepare(
            'UPDATE '. $this->table .' SET users.statut = 1
            WHERE id = ?',
            [$id_user]
        );
    }
}
