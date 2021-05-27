<?php

/**
 * 
 */
require_once 'connection.php';
class Groupe
{
	public $name;
	public $effectif;
	static $table="groupes";

	 function insert(){
		$cnx = new Connection;
		$cnx->insert(self::$table,['name','effectif'],[$this->name,$this->effectif]);

	}
	public static function getAll(){
		$cnx = new Connection;
		return 
		$cnx->select(self::$table);
		 
	}

	public static function onedelete($id){
		$cnx= new Connection;
		$cnx->delete(self::$table,$id);
	}

	public static function getone($id){
		$cnx = new Connection;
		return $cnx->edit(self::$table,$id);
	}
	 function update($id){
        $con=new Connection;
        $con->update(self::$table,['name','effectif'],[$this->name,$this->effectif],$id);
    }
}