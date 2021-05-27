<?php
/**
 * 
 */
require_once 'connection.php';

class Login 
{
	private $email;
	private $password;
	
	public function setemail($email)
	{
		$this->email = $email;
	}
	public function setpassword($password)
	{
		$this->password = $password;
	}

	public function log (){
		$cnx = new Connection;
		$requette="SELECT * FROM user Where email ='$this->email' AND pwd='$this->password'";
		$query=$cnx->sql->query($requette);
		return $query;


	}
}
?>