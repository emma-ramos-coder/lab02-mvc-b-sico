<!-- vista.php se utiliza para mostrar una lista de servicios obtenidos desde el modelo 
	(la clase Service) utilizando el controlador correspondiente. 
	La vista se encarga de la presentación de los datos 
	utiliza las clases de Bootstrap para dar estilo a la tabla y otros elementos en la página. -->
<!DOCTYPE html>
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
			<hr>
			<p class="lead">Creamos una base de datos de los servicios <br> que podría realizar un taller y <br> operamos con ella utilizando el paradigma MVC				
			</p>
		</header>
		<div class="col-lg-6 text-center">
			<hr>
			<h3>Listado de servicios</h3>
			<table class="table">
				<tr>
					<td> <strong>SERVICIO</strong> </td>
					<td> <strong>PRECIO</strong> </td>
				</tr>
				<?php  
				for($i=0; $i<count($datos); $i++){
				?>	
					<tr>
						<td> <?php echo $datos[$i]["nombre"]; ?></td>
						<td> <?php echo $datos[$i]["precio"]; ?></td>
					</tr>
				<?php	
				}
				?>
			</table>
			<a href="../index.php">	<i class="fa fa-arrow-circle-left"></i>Volver a la página </a>
			<hr>
		</div>

		<footer class="col-lg-12 text-center">
			Emma Edith Ramos Calcina - <?php echo date("Y"); ?>
		</footer>
	</div>
</body>
</html>
