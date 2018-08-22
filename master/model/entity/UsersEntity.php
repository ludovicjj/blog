<?php
namespace master\model\entity;

class UsersEntity extends Entity
{
    private $username;
    private $password;
    private $mail;
	
    //getter
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
	
    //Setter
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
}
