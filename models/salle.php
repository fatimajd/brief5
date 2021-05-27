<?php

/**
 * 
 */
require_once 'connection.php';
class Salle
{
	public $libelle;
	public $capacite;
	static $table="salle";

	function index()
	{
		require_once __DIR__.'/../view/salle/index.php';
	}
	function insert($Libelle,$capacite){
		$this->libelle=$Libelle;
		$this->capacite=$capacite;
		$cnx = new Connection;
		$cnx->insert(self::$table,['libelle','capacite'],[$this->libelle,$this->capacite]);
	}

	  public static function onedelete($id){
		$cnx = new Connection;
		$cnx->delete(self::$table,$id);
	}
	function getAll(){
		$cnx = new Connection;
		return $cnx->select(self::$table);

	}

	 public function getone($id){
		$cnx = new Connection;
		return $cnx->edit(self::$table,$id);
	}
	public function updateone($id){
		$cnx = new Connection;
		$cnx->update(self::$table,['libelle','capacite'],[$this->libelle,$this->capacite],$id);
	}


	

	
}