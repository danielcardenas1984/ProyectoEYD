<?php
require_once "../../config/database.php";

class Registro
{

	private $db;
    private $id=null;
	private $tipo = null;
	private $cedula = null;
	private $primerNombre = null;
	private $segundoNombre = null;
	private $primerApellido = null;
    private $segundoApellido = null;
    private $direccion = null;
    private $departamento = null;
    private $localidad = null;
    private $lugar = null;
    private $telefono = null;
    private $correo = null;
    private $eps = null;
    private $pensiones= null;
    private $cargo = null;
	

    public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setTipoDocumento($tipo)
	{
		$this->tipo = $tipo;
	}

	public function getTipo()
	{
		return $this->tipo;
	}

	public function setCedula($cedula)
	{
		$this->cedula = $cedula;
	}

	public function getCedula()
	{
		return $this->cedula;
	}

	public function setPrimerNombre($primerNombre)
	{
		$this->primerNombre = $primerNombre;
	}

	public function getPrimerNombre()
	{
		return $this->primerNombre;
	}

	public function setSegundoNombre($segundoNombre)
	{
		$this->segundoNombre = $segundoNombre;
	}

	public function getSegundoNombre()
	{
		return $this->segundoNombre;
	}
	public function setPrimerApellido($primerApellido)
	{
		$this->primerApellido = $primerApellido;
	}

	public function getPrimerApellido()
	{
		return $this->primerApellido;
	}
    public function setSegundoApellido($segundoApellido)
	{
		$this->segundoApellido = $segundoApellido;
	}

	public function getSegundoApellido()
	{
		return $this->segundoApellido;
	}
    public function setDireccion($direccion)
	{
		$this->direccion = $direccion;
	}

	public function getDireccion()
	{
		return $this->direccion;
	}
    public function setDepartamento($departamento)
	{
		$this->departamento = $departamento;
	}

	public function getDepartamento()
	{
		return $this->departamento;
	}
    public function setLocalidad($localidad)
	{
		$this->localidad = $localidad;
	}

	public function getLocalidad()
	{
		return $this->localidad;
	}
    public function setLugar($lugar)
	{
		$this->lugar = $lugar;
	}

	public function getLugar()
	{
		return $this->lugar;
	}
    public function setTelefono($telefono)
	{
		$this->telefono = $telefono;
	}

	public function getTelefono()
	{
		return $this->telefono;
	}
    public function setCorreo($correo)
	{
		$this->correo = $correo;
	}

	public function getCorreo()
	{
		return $this->correo;
	}
    public function setEps($eps)
	{
		$this->eps = $eps;
	}

	public function getEps()
	{
		return $this->eps;
	}
    public function setPensiones($pensiones)
	{
		$this->pensiones = $pensiones;
	}

	public function getPensiones()
	{
		return $this->pensiones;
	}
    public function setCargo($cargo)
	{
		$this->cargo = $cargo;
	}

	public function getCargo()
	{
		return $this->cargo;
	}


	

	public function __construct()
	{
		$this->db = new Database;
	}

	public function ConsultaTabla()
	{
		$sql = "SELECT * FROM `proyectoeyd`.empleados";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
		$lista = $senteciaSQL->fetchAll(PDO::FETCH_ASSOC);
		return $lista;
	}

	public function Seleccionar()
	{
		$sql = "SELECT * FROM `proyectoeyd`.`empleados`  WHERE ( `id` = '$this->id');";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
		$seleccionado = $senteciaSQL->fetch(PDO::FETCH_LAZY);
		return $seleccionado;
	}


	public function Modificar()
	{

		$sql = "UPDATE `proyectoeyd`.`empleados` SET 
        `tipodocumento` = '$this->tipo',
         `cedula` = '$this->cedula'
         , `primerNombre` = '$this->primerNombre'
         , `segundoNombre` = '$this->segundoNombre'
         , `primerapellido` = '$this->primerApellido'
         , `segundoapellido` = '$this->segundoApellido'
         , `direccion` = '$this->direccion'
         , `telefono` = '$this->telefono'
         , `correo` = '$this->correo'
         , `eps` = '$this->eps'
         , `pensiones` = '$this->pensiones'
         , `departamento` = '$this->departamento'
         , `localidad` = '$this->localidad'
         , `lugar` = '$this->lugar'
         , `cargo` = '$this->cargo'
         
         WHERE (`id` = '$this->id');";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();

		$ima = (isset($_FILES['imagen']['name'])) ? $_FILES['imagen']['name'] : "";
		if ($ima != "") {
			$fecha = new DateTime();
			$archivo = ($ima != "") ? $fecha->getTimestamp() . "_" . $_FILES['imagen']["name"] : "imagen.jpg";
			$tempname = $_FILES['imagen']['tmp_name'];
			$directorio = "../../componente/imgEmpleados/";
			move_uploaded_file($tempname, $directorio . "/" . $archivo);

			$sql = "SELECT * FROM `proyectoeyd`.`empleados` WHERE ( `id` = '$this->id');";
			$senteciaSQL = $this->db->conectar()->prepare($sql);
			$senteciaSQL->execute();
			$seleccionado = $senteciaSQL->fetch(PDO::FETCH_LAZY);

			if (isset($ima) && ($ima != "imagen.jpg")) {

				if (file_exists("../../componente/imgEmpleados/" . $seleccionado['imagen'])) {
	
					unlink("../../componente/imgEmpleados/" . $seleccionado['imagen']);
				}
			}
			$sql = "UPDATE `proyectoeyd`.`empleados` SET `imagen` = '$archivo' WHERE (`id` = '$this->id');";
			$senteciaSQL = $this->db->conectar()->prepare($sql);
			$senteciaSQL->execute();
		}
	}

	public function Eliminar()
	{
		$sql = "SELECT * FROM `proyectoeyd`.`empleados` WHERE ( `id` = '$this->id');";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
		$seleccionado = $senteciaSQL->fetch(PDO::FETCH_LAZY);

		$ima = (isset($_FILES['imagen']['name'])) ? $_FILES['imagen']['name'] : "";
		if (isset($ima) && ($ima != "imagen.jpg")) {

			if (file_exists("../../componente/imgEmpleados/" . $seleccionado['Imagen'])) {

				unlink("../../componente/imgEmpleados/" . $seleccionado['Imagen']);
			}
		}

		$sql = "DELETE FROM `proyectoeyd`.`empleados`  WHERE (`id` = '$this->id');";
		$senteciaSQL = $this->db->conectar()->prepare($sql);
		$senteciaSQL->execute();
	}
	public function Registrar()
	{
		$fecha = new DateTime();
		$ima = (isset($_FILES['imagen']['name'])) ? $_FILES['imagen']['name'] : "";
		$archivo = ($ima != "") ? $fecha->getTimestamp() . "_" . $_FILES['imagen']['name'] :"imagen.jpg";
		$directorio = "../../componente/imgEmpleados";
		$tempname = $_FILES['imagen']['tmp_name'];
		move_uploaded_file($tempname, $directorio . "/" . $archivo);

		$sql = "INSERT INTO `proyectoeyd`.`empleados` (`tipodocumento`, `cedula`, `primerNombre`, `segundoNombre`, `primerapellido`, `segundoapellido`, `direccion`, `telefono`, `correo`, `eps`, `pensiones`, `departamento`, `localidad`, `lugar`, `cargo`, `imagen`)
        VALUES ('{$this->getTipo()}',
         '{$this->getCedula()}', 
         '{$this->getPrimerNombre()}', 
         '{$this->getSegundoNombre()}',
          '{$this->getPrimerApellido()}', 
          '{$this->getSegundoApellido()}',
           '{$this->getDireccion()}',
           '{$this->getTelefono()}',
           '{$this->getCorreo()}',
           '{$this->getEps()}', 
           '{$this->getPensiones()}',
           '{$this->getDepartamento()}' ,
           '{$this->getLocalidad()}',
            '{$this->getLugar()}', 
            '{$this->getCargo()}',
            '$archivo');
        ";


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
