<?php

/**
 * 
 */
require_once 'models/groupe.php';
class GroupeController
{
	
	 public function index()
	{

		$obj = new Groupe;
		$groupes = $obj->getAll();
		require_once __DIR__.'/../view/groupe/index.php';

	}

	public function create()
	{
		require_once __DIR__.'/../view/groupe/create.php';
	}

	public function save()
	{
		$obj= new Groupe;
		$obj->name=$_POST['name'];
		$obj->effectif=$_POST['effectif'];
		$obj->insert();
		header("location:http://localhost/brief5/groupe/index");

	}

	public function delete($id){
		$obj = new Groupe;
		$obj->onedelete($id);
		header("location:http://localhost/brief5/groupe/index");
	}
   
    	function edit($id)
	{

		$obj= new Groupe;
		$groupe = $obj->getone($id);
		require_once 'view/groupe/edit.php';

	}

// ----------------------- update -----------------------

	function update($id)
	{
		$obj= new Groupe;
		$obj->name=$_POST['name'];
		$obj->effectif=$_POST['effectif'];
		$obj->update($id);
		header("location:http://localhost/brief5/groupe/index");

	}


}
