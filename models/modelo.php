<?php  
/*
Se define la clase "Service" que representa el modelo de datos. 
El constructor de la clase establece la conexión a la base de datos. 
El método "getServicios()" realiza una consulta SQL para obtener la lista de servicios de la tabla "servicio"
El método "setServicio()" inserta un nuevo servicio en la base de datos y devuelve true si la operación fue exitosa.
*/
class Service{
	private $servicio;
	private $db;

	public function __construct(){
		$this->servicio = array();
		$this->db = new PDO('mysql:host=localhost;dbname=ejemplo_mvc',"root","");
	}

	private function setNames(){
		return $this->db->query("SET NAMES 'utf8'");
	}

	public function getServicios(){
		self::setNames();
		$sql = "SELECT id, nombre, precio FROM servicio";
		foreach ($this->db->query($sql) as $res){
			$this->servicio[] = $res;
		}
		return $this->servicio;
	}

	public function setServicio($nombre, $precio){
		self::setNames();
		$sql = "INSERT INTO servicio(nombre,precio) VALUES ('" . $nombre . "','" . $precio . "')";
		$result = $this->db->query($sql);

		if($result) {
			return true;
		} else {
			return false;
		}
	}
}
?>