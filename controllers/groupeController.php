<?php

class groupeController{
	public function getAllGroupe(){
		$groupes = Groupe::getAllg();
		return $groupes;
	}
	public function getOneGroupe(){
		if (isset($_POST['id'])) {
			$data  = array(
				'id' =>$_POST['id'] 
		);
		
		$groupe = Groupe::getGroupe($data);
		return $groupe;
	}
	}


	public function addGroupe(){
		if (isset($_POST['submit'])) {

			if (!empty($_POST['libellegroupe'])&& !empty($_POST['effectif'])){ 
			$groupes= array(
				'libellegroupe' =>$_POST['libellegroupe'] ,
				'effectif' =>$_POST['effectif'] ,
				
                 );
			$result = Groupe::addgrp($groupes);
			header('location:addgroupe');
			
				
			}else{
				echo("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Tous les champs obligatoir');
                </SCRIPT>");
			}
		}
	}
	public function updateGroupe(){
		if (isset($_POST['submit'])) {
			$groupes= array(
				'id' =>$_POST['id'] ,
				'libellegroupe' =>$_POST['libellegroupe'] ,
				'effectif' =>$_POST['effectif'] ,
				
                 );
			$result = Groupe::update($groupes);
			if ($result === 'ok')
			 {
			 	header('location:addgroupe');
				
			}else{
				echo $result;
			}
		}
	}
	public function deleteGroupe(){
		if (isset($_POST['id'])) {
			$data['id']= $_POST['id'];
			$result = Groupe::delete($data);
			if ($result === 'ok') {
				
				header('location:addgroupe');		}
		}else{
			echo $result;
		}
	}
}


 ?>