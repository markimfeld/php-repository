<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Categoria
{
	// private $idcategoria;
	// private $nombre;
	// private $descripcion;

	// public function setId($idcategoria) {
	// 	$this->idcategoria = $idcategoria;
	// }

	// public function getId() {
	// 	return $this->idcategoria;
	// }

	// public function setNombre($nombre) {
	// 	$this->nombre = $nombre;
	// }

	// public function getNombre() {
	// 	return $this->nombre;
	// }

	// public function setDescripcion($descripcion) {
	// 	$this->descripcion = $descripcion;
	// }

	// public function getDescripcion() {
	// 	return $this->descripcion;
	// }

	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($nombre, $descripcion)
	{
		$sql="INSERT INTO categoria (nombre,descripcion,condicion) VALUES ('$nombre','$descripcion', 1)";
		$save = ejecutarConsulta($sql);
		return $save ? true : false;
	}

	//Implementamos un método para editar registros
	public function editar($idcategoria,$nombre,$descripcion)
	{
		$sql="UPDATE categoria SET nombre='$nombre',descripcion='$descripcion' WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar categorías
	public function desactivar($idcategoria)
	{
		$sql="UPDATE categoria SET condicion='0' WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar categorías
	public function activar($idcategoria)
	{
		$sql="UPDATE categoria SET condicion='1' WHERE idcategoria='$idcategoria'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idcategoria)
	{
		$sql="SELECT * FROM categoria WHERE idcategoria='$idcategoria'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM categoria";
		return ejecutarConsulta($sql);		
	}
	//Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT * FROM categoria where condicion=1";
		return ejecutarConsulta($sql);		
	}
}

?>