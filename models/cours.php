<?php

/**
 * 
 */

require_once 'connection.php';

/**
 * 
 */
class Cours
{
	public $ensignement;
	public $salle;
	public $groupe;
	public $date;
	public $duree;
	static $table="cours";
	
	function insert(){

		$cnx = new Connection;
		$verfsalle="SELECT * FROM cours WHERE duree='".$this->duree."' AND idS='".$this->salle."'AND dateR='".$this->date."'";
		$query=$cnx->sql->query($verfsalle)->fetchAll();

		$verfgroupe="SELECT * FROM cours WHERE duree='".$this->duree."' AND idG='".$this->groupe."' AND dateR='".$this->date."'";
		$query2=$cnx->sql->query($verfgroupe)->fetchAll();
		
		$dureebase="SELECT duree FROM cours";

		if (empty($query)&&empty($query2)) {
			$cnx->insert(self::$table,['idE','idS','idG','dateR','duree'],[$this->ensignement,$this->salle,$this->groupe,$this->date,$this->duree]);

		}else{
				echo("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Tous les champs obligatoir');
                </SCRIPT>"); 
     	

     }
	}
	public static function getAll(){
		$cnx = new Connection;
		$idR=$_SESSION['idens'];
		$requette="SELECT s.libelle ,g.name ,dateR,duree ,c.id FROM `groupes`g , `salle`s ,`cours`c WHERE c.idS=s.id AND c.idG=g.id AND c.idE=$idR";
		$query=$cnx->sql->query($requette);
		return 
		$query;
		 
	}
	 public static function deleteone($id){
        $cnx = new Connection;
        $cnx->delete(self::$table,$id);
    }
     public function edit($id) {
         $cnx = new Connection;
              $requette="SELECT s.libelle ,g.name ,dateR,duree ,c.id FROM `groupes`g , `salle`s ,`cours`c WHERE c.idS=s.id AND c.idG=g.id  AND c.id=$id";
              $query=$cnx->sql->query($requette)->fetchAll();
		return 
		$query;

    }
    public function updateone($id){
        $cnx = new Connection;
        $cnx->update(self::$table,['idS','idG','dateR','duree'],[$this->salle,$this->groupe,$this->date,$this->duree],$id);
    }
}
?>