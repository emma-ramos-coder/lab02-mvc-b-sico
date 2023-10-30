<!DOCTYPE html>
<?php
	/* 
	Se verifica si el formulario ha sido enviado y si los campos 'nombre' y 'precio' tienen valores válidos. 
	Si se cumple se incluye el script "models/modelo.php"
	Se crea una nueva instancia de la clase "Service". 
	Se llama al método "setServicio()" con el nombre y el precio del servicio.
	*/
	if(isset($_POST['nombre']) && ($_POST['nombre'] != '') && isset($_POST['precio']) && ($_POST['precio'] != '')) {
		include "models/modelo.php";
		$nuevo = new Service();
		$asd = $nuevo->setServicio($_POST['nombre'],$_POST['precio']);
	}	
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejemplo MVC con PHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<header class="text-center">
			<h1>Ejemplo MVC con PHP</h1>
			<hr/>
			<p class="lead">Creamos una base de datos de los servicios <br> 
				que podría realizar un taller y <br> operamos con ella utilizando el paradigma MVC </p>
		</header>
		<div class="row">
			<div class="col-lg-6">
				<!-- formulario para crear un nuevo servicio -->
				<form action="#" method="post" class="col-lg-5">
					<h3>Nuevo servicio</h3>
					Nombre: <input type="text" name="nombre" class="form-control">
					Precio: <input type="text" name="precio" class="form-control"><br>
					<input type="submit" value="Crear" class="btm btn-success">
				</form>
			</div>
			<div class="col-lg-6 text-center"> 
				<hr>
				<h3>Listado de servicios</h3>
				<!-- se incluye el script "controllers/controller.php" -->
				<a href="controllers/controller.php"> <i class="fa fa-align-justify"></i></a>
				<hr>				
			</div>
		</div>
		<footer class="col-lg-12 text-center">
			Emma Edith Ramos Calcina - <?php echo date("Y"); ?>
		</footer>
	</div>
</body>
</html>
