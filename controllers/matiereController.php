<?php
require_once 'models/matiere.php';
/**
 * 
 */
class MatiereController
{
	
	public function index(){
		$obj = new Matiere;
	    $matieres =$obj->getAll();
		require_once 'view/matiere/index.php';
	}

	public function create(){

		require_once 'view/matiere/create.php';

	}
	public function save(){

		$obj = new Matiere;
		$obj->libelle = $_POST["libelle"];
		$obj->insert();
		header("location:http://localhost/brief5/matiere/index");
	}

	public function delete($id){
		$obj = new Matiere;
		$obj->deleteone($id);
		header("location:http://localhost/brief5/matiere/index");
	}

	function edit($id){
		$obj = new Matiere;
		$matieres = $obj->edit($id);
		require_once 'view/matiere/update.php';
	}
	 
	 public function update($id){
	 	
		$obj = new Matiere;
		$obj->libelle = $_POST["libelle"];
		$obj->updateone($id);
		header("location:http://localhost/brief5/matiere/index");
	}
}

?>