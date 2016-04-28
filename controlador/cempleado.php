<?php
	
	include('modelo/mempleado.php');

	$empleado = new Mempleado();

	$idempleedit   = isset($_POST['idemple']) ? $_POST['idemple'] : NULL;
	$idempleado    = isset($_POST['idempleado']) ? $_POST['idempleado'] : NULL;
	$nombre        = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
	$sueldo        = isset($_POST['sueldo']) ? $_POST['sueldo'] : NULL;
    $direccion     = isset($_POST['direccion']) ? $_POST['direccion'] : NULL;
    $ciudad        = isset($_POST['ciudad']) ? $_POST['ciudad'] : NULL;
    $telefono_emple= isset($_POST['telefono_emple']) ? $_POST['telefono_emple'] : NULL;
    $telefono_refe = isset($_POST['telefono_refe']) ? $_POST['telefono_refe'] : NULL;
    $email         = isset($_POST['email']) ? $_POST['email'] : NULL;
    $estado        = isset($_POST['estado']) ? $_POST['estado'] : NULL;
    $fecha         = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$idempleeli    = isset($_POST['idempleeli ']) ? $_POST['idempleeli '] : NULL;
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idemple       = isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*
		Comprobacion datos para insertar
	*/
	if ($idempleado && $nombre && $sueldo && $direccion && $ciudad && $telefono_emple && $telefono_refe && $estado && !$actu) 
	{
		$empleado->insertar_empleado($idempleado,$nombre,$sueldo,$direccion,$ciudad,$telefono_emple,$telefono_refe,$email,$estado,$fecha);
	}
	/*
		Si el estado es inactivo el sueldo queda con valor "0"
	*/
	if($estado=="Inactivo" || $estado=="inactivo"){
		$sueldo = "0";
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($idempleedit && $nombre && $actu) 
	{
		$empleado->actualizar_empleado($idempleedit,$nombre,$sueldo,$direccion,$ciudad,$telefono_emple,$telefono_refe,$email,$estado,$fecha);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idemple) 
	{
		$consultaedit = $empleado->consultar_empleado_id($idemple);
	}
	/*
		Eliminar el registro 
	*/
	if ($idempleeli) 
	{
		$empleado->eliminar_empleado($idempleeli);
	}
