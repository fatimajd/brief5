<?php 


/**
 * 
 */
require_once 'models/groupe.php';
require_once 'models/salle.php';
require_once 'models/cours.php';
session_start();
class ReservationController
{
	function index(){
		
		$obje= new Cours;
		$reser =$obje->getAll();
		require_once 'view/indexReservation.php';
	}
	public function create(){
		$obj= new Groupe;
		$groupes =$obj->getAll();
		$obje= new Salle;
		$salles =$obje->getAll();
		require_once 'view/reservation.php';

	}
		public function save(){

		$obj = new Cours;
		
		$obj->ensignement = $_SESSION['idens'];
		$obj->salle = $_POST["selectS"];
		$obj->groupe = $_POST["selectG"];
		$obj->date = $_POST["dateC"];
		$obj->duree=$_POST["heurs"];

		$obj->insert();
		header("location:http://localhost/brief5/reservation/index");
	}
		public function delete($id){
		$obj = new Cours;
		$obj->deleteone($id);
		header("location:http://localhost/brief5/reservation/index");
	}
		function edit($id){
		$obj= new Groupe;
		$groupes =$obj->getAll();
		$obje= new Salle;
		$salles =$obje->getAll();
		$obj = new Cours;
		$reservations = $obj->edit($id);
		require_once 'view/updateReservation.php';
	}
	 
	 public function update($id){
	 	
		$obj = new Cours;
		$obj->salle = $_POST["selectS"];
		$obj->groupe = $_POST["selectG"];
		$obj->date = $_POST["dateC"];
		$obj->duree=$_POST["heurs"];
		$obj->updateone($id);
		header("location:http://localhost/brief5/reservation/index");
	}
}

 ?>