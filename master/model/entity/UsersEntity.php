<?php
namespace master\model\entity;

class UsersEntity extends Entity
{
    private $id;
    private $username;
    private $password;
    private $mail;
    private $statut;
	
    //getter
    public function getId()
    {
        return $this->id;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function getStatut()
    {
        return $this->statut;
    }
	
    //Setter
    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0) {
            $this->id = $id;
        }
    }
    public function setUsername($username)
    {
        if (is_string($username)) {
            $this->username = htmlspecialchars($username);
        }
    }
    public function setPassword($password)
    {
        if (is_string($password)) {
            $this->password = sha1($password);
        }
    }
    public function setMail($mail)
    {
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail)) {
            $this->mail = $mail;
        }
    }
    public function setStatut($statut)
    {
        $statut = (int) $statut;
        if ($statut > 0) {
            $this->statut = $statut;
        }
    }
}
