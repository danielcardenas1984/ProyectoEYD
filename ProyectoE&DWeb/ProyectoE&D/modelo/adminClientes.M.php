<?php
require_once "../../config/database.php";

class Registro
{

	private $db;
	private $id = null;
	private $nombre = null;
	private $correo = null;
	private $movil = null;
	private $contrasenia1 = null;
	private $contrasenia2 = null;
	private $acepto = null;

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setCorreo($correo)
	{
		$this->correo = $correo;
	}

	public function getCorreo()
	{
		return $this->correo;
	}

	public function setMovil($movil)
	{
		$this->movil = $movil;
	}

	public function getMovil()
	{
		return $this->movil;
	}

	public function setContrasenia1($contrasenia1)
	{
		$this->contrasenia1 = $contrasenia1;
	}

	public function getContrasenia1()
	{
		return $this->contrasenia1;
	}

	public function setContrasenia2($contrasenia2)
	{
		$this->contrasenia2 = $contrasenia2;
	}

	public function getContrasenia2()
	{
		return $this->contrasenia2;
	}

	public function setAcepto($acepto)
	{
		$this->acepto = $acepto;
	}

	public function getAcepto()
	{
		return $this->acepto;
	}


	public function __construct()
	{
		$this->db = new Database;
	}

	public function ConsultaTabla()
	{
		$sql = "SELECT * FROM `proyectoeyd`.clientes";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
		$lista = $senteciaSQL->fetchAll(PDO::FETCH_ASSOC);
		return $lista;
	}

	public function Seleccionar()
	{
		$sql = "SELECT * FROM `proyectoeyd`.clientes WHERE ( `id` = '$this->id');";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
		$seleccionado = $senteciaSQL->fetch(PDO::FETCH_LAZY);
		return $seleccionado;
	}


	public function Modificar()
	{
		$sql = "UPDATE `proyectoeyd`.`clientes` SET 
		`nombre` = '$this->nombre'
		,`correo` = '$this->correo'
		,`contrasenia1` = '$this->contrasenia1'
		,`contrasenia2` = '$this->contrasenia2'
		,`movil` = '$this->movil'			
		WHERE (`id` = '$this->id');";

		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
	}

	public function Eliminar()
	{
		$sql = "DELETE FROM `proyectoeyd`.`clientes` WHERE (`id` = '$this->id');";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
	}
	public function __destruct(){
		unset($this->db);
		unset($this->id);
		unset($this->nombre);
		unset($this->correo);
		unset($this->contrasenia1);
		unset($this->contrasenia2);
		unset($this->movil);
		unset($this->acepto);
		                     
	}
}
