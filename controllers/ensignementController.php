<?php 


/**
 * 
 */
require_once 'models/ensignement.php';
require_once 'models/matiere.php';
class EnsignementController
{
	function create(){
		$matt = new Matiere;
		$res = $matt->getAll();
		require_once 'view/ensignement/create.php';
	}
	public function save(){

		$obj = new Ensignement;
		$obj->nom = $_POST["nom"];
		$obj->prenom = $_POST["prenom"];
		$obj->email = $_POST["email"];
		$obj->password = $_POST["password"];
		$obj->matiere=$_POST["selectM"];
		$obj->insert();
		header("location:http://localhost/brief5/");
	}
}
 ?>