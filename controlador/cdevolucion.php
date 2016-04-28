<?php
	
	include('modelo/mdevolucion.php');

	$devolucion = new Mdevolucion();

	$iddevoedit 	= isset($_POST['iddevolucion']) ? $_POST['iddevolucion'] : NULL;	
	$movimiento     = isset($_POST['movimiento']) ? $_POST['movimiento'] : NULL;
	$fecha          = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
    $motivo    		= isset($_POST['motivo']) ? $_POST['motivo'] : NULL;
    $numero_compra 	= isset($_POST['numero_compra']) ? $_POST['numero_compra'] : NULL;
    $costo    		= isset($_POST['costo']) ? $_POST['costo'] : NULL;
	$iddevoeli  	= isset($_POST['iddevoeli']) ? $_POST['iddevoeli'] : NULL;
	$actu           = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$iddevolucion   = isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*
		Variable para traer los datos del desplegable
	*/
	$movimiento2= $devolucion->sel_movimiento();

	/*
		Comprobacion datos para insertar
	*/
	if ($movimiento && $fecha && $numero_compra && !$actu) 
	{
        
		$devolucion->insertar_devolucion($movimiento, $fecha, $motivo, $numero_compra, $costo);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($iddevoedit && $actu) 
	{
		$devolucion->actualizar_devolucion($iddevoedit, $movimiento, $fecha, $motivo,$numero_compra, $costo);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($iddevolucion) 
	{
		$consultaedit = $devolucion->consultar_devolucion_id($iddevolucion);
	}
	/*
		Eliminar el registro 
	*/
	if ($iddevoeli) 
	{
		$devolucion->eliminar_devolucion($iddevoeli);
	}

