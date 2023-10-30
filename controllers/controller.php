<?php
/*
	Se incluye el script modelo.php donde esta definida la clase Servide
	que se conecta a la BD e inserta registros y consulta los registros
	getServicios() obtiene todos los registros de la tabla servicios.
	Se incluye el script vista.php para mostrar todos los servicios 
*/
	require_once("../models/modelo.php");
	$services = new Service();
	$datos = $services->getServicios();
	require_once("../views/vista.php");
?>