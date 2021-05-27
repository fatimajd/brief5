<!DOCTYPE html>
<html>
<head>
	<title>groupe forme</title>
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
 					<a href="http://localhost/brief5/matiere/index" class='btn btn-sm btn-secondary mr-2 mb-2'>
 						<i class="fas fa-home"></i>
 					</a>
 					<form action="http://localhost/brief5/matiere/save" method="post">
 						<div class="form-group">
 							<label for="libelle">Libelle Matiere*</label>
 							<input type="text" name="libelle" class="form-control" placeholder="Libelle">
 						</div>
 					
 						
 						<button type="submit" class="btn  btn-primary" name="submit">Valider</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
</form>
</body>




