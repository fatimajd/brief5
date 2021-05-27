<?php

/**
 * 
 */
require_once 'Connection.php';
class Ensignement
{
	
	public $nom;
	public $prenom;
	public $email;
	public $password;
	public $matiere;
	public $role="user";
	static $table="user";

    public function insert(){

     	$cnx = new Connection;
     	$cnx->insert(self::$table,['nom','prenom','email','pwd','role'],[$this->nom,$this->prenom,$this->email,$this->password,$this->role]);
     	$idE="SELECT * FROM user ORDER BY id DESC limit 1";
     	$query1=$cnx->sql->prepare($idE);
 		$query1->execute();
 		$rowid=$query1->fetch();
 		$lastId = $rowid[0];
 		$cnx->insert("ensignement",['idE','idM'],[$lastId,$this->matiere]);

     }
     public function getOne($idU){
     	$cnx = new Connection;
     	$idE="SELECT id FROM ensignement WHERE idE=$idU";
     	$query1=$cnx->sql->prepare($idE);
 		$query1->execute();
 		return $query1->fetch();
     }
}