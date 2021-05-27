<!DOCTYPE html>
<html>
<head>
	<title>Ensignement</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
</head>
<body>
	<div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Login</div>
 				
 				<div class="card-body bg-light">
						<form action="http://localhost/brief5/ensignement/save" method="post">
							<div class="form-group">
		 							<label for="nom">First Name*</label>
					 					<input type="text" name="nom" class="form-control" placeholder="Enter your First Name">
		 						</div>
			 						<div class="form-group">
			 							<label for="nom">last Name*</label>
						 					<input type="text" name="prenom" class="form-control" placeholder="Enter your last Name">
			 						</div>
	
							<select name="selectM">
								<option value="0" >SELECT MATIERE</option>
								<?php foreach($res as $re){?>
								<option value="<?php echo $re['id']?>"><?php echo $re['libelle']?></option>
							<?php }?>
							</select>
					<div class="form-group">
			 							<label for="nom">Email*</label>
						 					<input type="email" name="email" class="form-control" placeholder="Enter your Email">
			 						</div>
			 		<div class="form-group">
			 							<label for="nom">Password*</label>
						 					<input type="password" name="password" class="form-control" placeholder="Enter your Password">
			 						</div>
			 						<button  class="btn  btn-primary">Valider</button>

	
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
	
	
</body>
</html>