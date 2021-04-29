<?php

class ensignementController{
	public function getAllEnsignement(){
		$Ensignements = Ensignement::getAllen();
		return $Ensignements;
	}
	public function getOneEnsignement(){
		if (isset($_POST['id'])) {
			$data  = array(
				'id' =>$_POST['id'] 
		);
		
		$ensignement = Ensignement::getEnsignement($data);
		return $ensignement;
	}
	}

	public function addEnsignement(){
		if (isset($_POST['submit'])) {
			
			if (!empty($_POST['nom'])&& !empty($_POST['prenom'])&& !empty($_POST['email'])&& !empty($_POST['password'])){ 

			$Ensignements= array(
				'nom' =>$_POST['nom'] ,
				'prenom' =>$_POST['prenom'] ,
				'email' =>$_POST['email'] ,
				'password' =>$_POST['password'] ,
				
                 );
			$result = Ensignement::addens($Ensignements);
			header('location:addensignement');
			
				
			}else{
				echo("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Tous les champs obligatoir');
                </SCRIPT>");
			}
		}
	}

public function updateEnsignement(){
		if (isset($_POST['submit'])) {
			$data= array(
				'id' =>$_POST['id'],
				'nom' =>$_POST['nom'] ,
				'prenom' =>$_POST['prenom'] ,
				'email' =>$_POST['email'] ,
				'password' =>$_POST['password']
                 );
			$result = Ensignement::update($data);
			if ($result === 'ok')
			 {
			 	header('location:addensignement');
				
			}else{
				echo $result;
			}
		}
	}
	public function deleteEnsignement(){
		if (isset($_POST['id'])) {
			$data['id']= $_POST['id'];
			$result = Ensignement::delete($data);
			if ($result === 'ok') {
				
				header('location:addensignement');		}
		}else{
			echo $result;
		}
	}
}


 ?>