<!DOCTYPE html>
<html>
<head>
	<title>Reservation</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
</head>
<body>
	<div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header"> Modifier une Reservation</div>
 				
 				<div class="card-body bg-light">
 					<a href="http://localhost/brief5/reservation/index" class='btn btn-sm btn-secondary mr-2 mb-2'>
 						<i class="fas fa-home"></i>
 					</a>
						<form action="http://localhost/brief5/reservation/update/<?php echo $reservations[0]['id']?>" method="post">
							<div class="form-group">
		 							<label for="nom">Groupe*</label>
					 					
							<select name="selectG">
								<option value="<?php echo $reservations[0]['idG']?>"><?php echo $reservations[0]['name']?></option>
								
								<?php  foreach($groupes as $groupe){?>
								<option value="<?php echo $groupe['id']?>">
									<?php echo $groupe['name']?></option>
							<?php }?>
							</select>
		 						</div>
			 						<div class="form-group">
			 							<label for="nom">date de cours*</label>
						 					<input type="date" name="dateC" value="<?php echo $reservations[0]['dateR']?>" class="form-control" placeholder="Entrer la date">
			 						</div>
	
							<div class="form-group">
		 							<label for="nom">Salle*</label>
					 					
							<select name="selectS">
								<option value="<?php echo $reservations[0]['idS']?>"><?php echo $reservations[0]['libelle']?></option>
								<?php foreach($salles as $salle){?>
								<option value="<?php echo $salle['id']?>">
									<?php echo $salle['libelle']?></option>
							<?php }?>
							</select>
		 						</div>
					
			 		<div class="form-group">
			 							<label for="nom">Duree*</label>
						 					<select name="heurs">
						 						<option value="<?php echo $reservations[0]['duree']?>"><?php echo $reservations[0]['duree']?></option>
						 						<option>08:00/10:00</option>
						 						<option>10:00/12:00</option>
						 						<option>14:00/16:00</option>
						 						<option>16:00/18:00</option>
						 					</select>
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