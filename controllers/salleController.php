<?php

/**
 * 
 */
require_once 'models/salle.php';
class SalleController
{
	
	function index()
	{
		$obj = new Salle;
		 $salles = $obj->getAll();

		require_once __DIR__.'/../view/salle/index.php';
	}

	function create()
	{
		require_once __DIR__.'/../view/salle/create.php';
	}

	function save()
	{
		
		$i = 0;
			if(isset($_POST['submit'])){
				$Libelle=$_POST['libelle'];
				$capacite=$_POST['capacite'];


	
				$salle = new Salle();
				$salle->insert($Libelle,$capacite);

				

				
				while(isset($_POST['Libelle'.$i])){
					$salle = new Salle();
					$salle->insert($_POST['Libelle'.$i],$_POST['capacite'.$i]);
					$i++;
				}
				
				header('location:http://localhost/brief5/salle/index');
				
			}else{
			header('location:http://localhost/brief5/');
		}
		}
		

	 public function delete($id){
		$obj = new Salle;
		$obj->onedelete($id);
		header('location:http://localhost/brief5/salle/index');
		
	}
	function edit($id){
		$obj = new Salle;
		$salles = $obj->getone($id);
		require_once 'view/salle/update.php';
	}
	
	function update($id){
		$obj = new Salle;
		$obj->libelle = $_POST["libelle"];
		$obj->capacite = $_POST["capacite"];
		$obj->updateone($id);
		header("location:http://localhost/brief5/salle/index");
	}
}
