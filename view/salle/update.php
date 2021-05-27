<!DOCTYPE html>
<html>
<head>
	<title>Salle forme</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
</head>
<body>
	<div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Ajouter une Matiere</div>
 				
 				<div class="card-body bg-light">
 					<a href="http://localhost/brief5/salle/index" class='btn btn-sm btn-secondary mr-2 mb-2'>
 						<i class="fas fa-home"></i>
 					</a>
	
						<form action="http://localhost/brief5/salle/update/<?php echo $salles[0]['id']?>" method="POST">
							<div class="form-group">
 							<label for="libelle">Libelle Salle*</label><input type="text" name="libelle" value="<?php echo $salles[0]['libelle']?>">
 							</div>
 						<div class="form-group">
 							<label for="capacitesalle">Capacite Salle*</label>
						 <input type="number" name="capacite" value="<?php echo $salles[0]['capacite']?>">

</div>
 					
 						
 						<button type="submit" class="btn  btn-primary" name="submit">Modifer</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
</form>
</body>