<?php
require_once "../../config/database.php";

class Registro
{

	private $db;
	private $id = null;
	private $producto = null;
	private $cantidad = null;
	private $unidad = null;
	private $precio = null;
	


	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setProducto($producto)
	{
		$this->producto = $producto;
	}

	public function getProducto()
	{
		return $this->producto;
	}

	public function setCantidad($cantidad)
	{
		$this->cantidad = $cantidad;
	}

	public function getCantidad()
	{
		return $this->cantidad;
	}

	public function setUnidad($unidad)
	{
		$this->unidad = $unidad;
	}

	public function getUnidad()
	{
		return $this->unidad;
	}
	public function setPrecio($precio)
	{
		$this->precio = $precio;
	}

	public function getPrecio()
	{
		return $this->precio;
	}


	

	public function __construct()
	{
		$this->db = new Database;
	}

	public function ConsultaTabla()
	{
		$sql = "SELECT * FROM `proyectoeyd`.productos";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
		$lista = $senteciaSQL->fetchAll(PDO::FETCH_ASSOC);
		return $lista;
	}

	public function Seleccionar()
	{
		$sql = "SELECT * FROM `proyectoeyd`.`productos` WHERE ( `id` = '$this->id');";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
		$seleccionado = $senteciaSQL->fetch(PDO::FETCH_LAZY);
		return $seleccionado;
	}


	public function Modificar()
	{

		$sql = "UPDATE `proyectoeyd`.`productos` SET 
		`producto` = '$this->producto'
		,`cantidad` = '$this->cantidad'
		,`unidad` = '$this->unidad'
		,`precio` = '$this->precio'		
		  WHERE (`id` = '$this->id');";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();

		$ima = (isset($_FILES['imagen']['name'])) ? $_FILES['imagen']['name'] : "";
		if ($ima != "") {
			$fecha = new DateTime();
			$archivo = ($ima != "") ? $fecha->getTimestamp() . "_" . $_FILES['imagen']["name"] : "imagen.jpg";
			$tempname = $_FILES['imagen']['tmp_name'];
			$directorio = "../../componente/img";
			move_uploaded_file($tempname, $directorio . "/" . $archivo);

			$sql = "SELECT * FROM `proyectoeyd`.`productos` WHERE ( `id` = '$this->id');";
			$senteciaSQL = $this->db->conectar()->prepare($sql);
			$senteciaSQL->execute();
			$seleccionado = $senteciaSQL->fetch(PDO::FETCH_LAZY);

			if (isset($ima) && ($ima != "imagen.jpg")) {

				if (file_exists("../../componente/img/" . $seleccionado['Imagen'])) {
	
					unlink("../../componente/img/" . $seleccionado['Imagen']);
				}
			}
			$sql = "UPDATE `proyectoeyd`.`productos` SET `Imagen` = '$archivo' WHERE (`id` = '$this->id');";
			$senteciaSQL = $this->db->conectar()->prepare($sql);
			$senteciaSQL->execute();
		}
	}

	public function Eliminar()
	{
		$sql = "SELECT * FROM `proyectoeyd`.`productos` WHERE ( `id` = '$this->id');";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
		$seleccionado = $senteciaSQL->fetch(PDO::FETCH_LAZY);

		$ima = (isset($_FILES['imagen']['name'])) ? $_FILES['imagen']['name'] : "";
		if (isset($ima) && ($ima != "imagen.jpg")) {

			if (file_exists("../../componente/img/" . $seleccionado['Imagen'])) {

				unlink("../../componente/img/" . $seleccionado['Imagen']);
			}
		}

		$sql = "DELETE FROM `proyectoeyd`.`productos` WHERE (`id` = '$this->id');";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
	}
	public function Registrar()
	{
		$fecha = new DateTime();
		$ima = (isset($_FILES['imagen']['name'])) ? $_FILES['imagen']['name'] : "";
		$archivo = ($ima != "") ? $fecha->getTimestamp() . "_" . $_FILES['imagen']['name'] :"imagen.jpg";
		$directorio = "../../componente/img";
		$tempname = $_FILES['imagen']['tmp_name'];
		move_uploaded_file($tempname, $directorio . "/" . $archivo);

		$sql = "INSERT INTO `proyectoeyd`.`productos` (`producto`, `cantidad`, `unidad`, `precio`, `Imagen`)
		VALUES ('{$this->getProducto()}', '{$this->getCantidad()}', '{$this->getUnidad()}', '{$this->getPrecio()}','$archivo');";


		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
	}
	public function __destruct()
	{
		unset($this->db);
		unset($this->id);
		unset($this->producto);
		unset($this->cantidad);
		unset($this->unidad);
		unset($this->precio);
		unset($this->imagen);
	}
}
