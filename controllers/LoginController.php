<?php
require_once 'models/login.php';
require_once 'models/ensignement.php';
session_start();
/**
 * 
 */
class LoginController
{
	
	public function user(){
		if (isset($_POST['submit'])) {
			$login = new Login();
			$login->setemail($_POST['email']);
			$login->setpassword($_POST['password']);
			$result = $login->log();
			if ($row=$result->fetchAll(PDO::FETCH_ASSOC)){
				$_SESSION['role']=$row;
				$idU=$_SESSION['role'][0]['id'];
				$ens=new Ensignement;
				$idE=$ens->getOne($idU);
				$_SESSION['idens']=$idE['id'];



				if ($_SESSION['role'][0]['role']=='admin') {
					header('location:http://localhost/brief5/salle/index');
				}
				else{
					header('location:http://localhost/brief5/reservation/index');

				}
			}

		}
	}
	
        function deConnect(){

            session_start();

            session_unset();


            session_destroy();



            header('location:http://localhost/brief5/');
            

        }
}
?>
