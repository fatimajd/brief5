<?php 
/**
 * 
 */
require_once 'connection.php';

class Matiere
{
	public $libelle;
	static $table="matiere";

    public function insert(){

     	$cnx = new Connection;
     	$cnx->insert(self::$table,['libelle'],[$this->libelle]);


     }

    public static function getAll(){
    	$cnx = new Connection;
    	return $cnx->select(self::$table);
    }
    public static function deleteone($id){
        $cnx = new Connection;
        $cnx->delete(self::$table,$id);
    }

    public function edit($id) {
         $cnx = new Connection;
         return $cnx->edit(self::$table,$id);

    }
    public function updateone($id){
        $cnx = new Connection;
        $cnx->update(self::$table,['libelle'],[$this->libelle],$id);
    }
}
?>