<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
					<form action="http://localhost/brief5/login/user" method="post">
								<div class="form-group">
		 							<label for="email">Email*</label>
					 					<input type="email" name="email" class="form-control" placeholder="Enter Email">
		 						</div>
 		<div class="form-group">
 							<label for="password">Password*</label>
 							<input type="password" name="password" class="form-control" placeholder="Enter Password">
 						</div>

	
 						<button type="submit" class="btn  btn-primary" name="submit">Valider</button>

	<a href="http://localhost/brief5/ensignement/create">sign up</a>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
</body>
</html>