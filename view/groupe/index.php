<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
</head>
<body>
	<div class="container">
 	<div class="row my-4">
 		<div class="col-md-10 mx-auto">
 			<div class="card">
 				
 				<div class="card-body bg-light">
 					
 					<ul class="nav justify-content-center">

   <li class="nav-item">
    <a class="nav-link" href="http://localhost/brief5/groupe/index">Groupe</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/brief5/salle/index">Salle</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://localhost/brief5/matiere/index">Matiere</a>
  </li>
 
  
</ul>
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>

<div class="container">
 	<div class="row my-4">
 		<div class="col-md-10 mx-auto">
 			<div class="card">
 				
 				<div class="card-body bg-light">
 					<a href="http://localhost/brief5/groupe/create" class='btn btn-sm btn-primary mr-2 mb-2'>
 						<i class="fas fa-plus"></i>
 					</a>
 					<a
          href="http://localhost/brief5/login/deConnect" class="btn  btn-primary"><i
            class="material-icons fs-5"></i> Sing out</a>
	<table class="table table-hover">
					  <thead>
					    <tr>
			 <th scope="col">Name</th>
					      <th scope="col">Effectif</th>
					     
					      <th scope="col">action</th>
					       
					    </tr>
					  </thead>
					  <tbody>
		 <?php 
					    foreach ($groupes as $groupe):?>
		<tr>
			<td><?php echo $groupe['name']?></td>
			
		<td><?php echo $groupe['effectif'] ?></td>

		



			<td class="d-flex flex-row">
					       	<a href="http://localhost/brief5/groupe/edit/<?=$groupe['id']?>">
					       		<button class="btn btn-sm btn-warning">
					       			<i class="fa fa-edit">
					       				
					       			</i>
					       		</button>
					       		<a href="http://localhost/brief5/groupe/delete/<?=$groupe['id']?>">
					       		<button class="btn btn-sm btn-danger">
					       			<i class="fa fa-trash">
					       				
					       			</i>
					       		</button></a>


					       </td>
					    </tr> 
					    <?php endforeach; ?>
					    
					  </tbody>
					</table>
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
 <script type="text/javascript">
 	function deleteg(){
 		alert("Are you sure you want to delete it?");
 	}
 </script>
					       