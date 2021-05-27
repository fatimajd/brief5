<!DOCTYPE html>
<html>
<head>
	<title>Salle</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
</head>
<body>
	



<div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Ajouter une Salle</div>
 				
 				<div class="card-body bg-light">
 					<a href="http://localhost/brief5/salle/index" class='btn btn-sm btn-secondary mr-2 mb-2'>
 						<i class="fas fa-home"></i>
 					</a>
 					 <button onclick="add()" type="button" class="btn btn-primary "><i
              class="material-icons">add_circle</i></button>
 					<form action="http://localhost/brief5/salle/save" method="post" id="idForm">
 						<div class="form-group">
 							<label for="libellesalle">Libelle Salle*</label>
 							<input type="text" name="libelle" class="form-control" placeholder="Libelle Salle" id="Libelle">
 						</div>
 						<div class="form-group">
 							<label for="capacitesalle">Capacite Salle*</label>
 							<input type="number" name="capacite" class="form-control" placeholder="Capacite Salle" id="capacite">
 						</div>
 						
 						<button type="submit" class="btn  btn-primary" name="submit">Valider</button>
 				
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
</form>
</body>
<script>
  var i = 0;

  function add() {
    var idForm = document.getElementById('idForm');
    var Libelle = document.getElementById('Libelle').value;
    var capacite = document.getElementById('capacite').value;

    if (Libelle != '' && capacite != '') {
      idForm.innerHTML += '<div class="d-flex"><div class="col-md-5"><input type="text" name="Libelle' + i +
        '" class="form-control" value="' + Libelle +
        '" placeholder="Libelle"></div><div class="col-md-1"></div><div class="col-md-5"><input type="number" name="capacite' +
        i + '" value="' + capacite + '" class="form-control col-md-6" placeholder="capacite"></div></div>';
      i++;
    } else {
      alert("please enter your data !!");
    }
  }
</script>
</html>