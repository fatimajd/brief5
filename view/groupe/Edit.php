<!DOCTYPE html>
<html>
<head>
    <title>Modifier Groupe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
</head>
<body>
	 <div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Modifier Groupe</div>
 				
 				<div class="card-body bg-light">
 					<a href="http://localhost/brief5/groupe/index" class='btn btn-sm btn-secondary mr-2 mb-2'>
 						<i class="fas fa-home"></i>
 					</a>
						<form action="http://localhost/brief5/groupe/update/<?php echo $groupe[0]['id'] ;?>" method="post">
						   <div class="form-group">Libelle Groupe*</label>
							   	<input type="text" name="name" class="form-control" value="<?php echo $groupe[0]['name'];?>">
						   	</div>
 						<div class="form-group">
 							<label for="effectif">Effectif*</label>
     <input type="number" name="effectif" class="form-control" value="<?php echo $groupe[0]['effectif'];?>">
   </div>
 						
 						<button type="submit" class="btn  btn-primary" name="submit">Valider</button>
 					</form>
 					
                   
 				</div>
 			</div>
 		
</form>
</body>
</html>