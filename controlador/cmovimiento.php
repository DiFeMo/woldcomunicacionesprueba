<?php
	
	include('modelo/mmovimiento.php');

	$movimiento = new Mmovimiento();

	$idmovimientoedit = isset($_POST['idmovimiento']) ? $_POST['idmovimiento'] : NULL;
	$motivo      = isset($_POST['motivo']) ? $_POST['motivo'] : NULL;
	$referencia         = isset($_POST['referencia']) ? $_POST['referencia'] : NULL;
	$cantidad   = isset($_POST['cantidad']) ? $_POST['cantidad'] : NULL;
   	$idmovimientoeli  = isset($_POST['idmovimientoeli']) ? $_POST['idmovimientoeli'] : NULL;
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idmovimiento     = isset($_GET['id']) ? $_GET['id'] : NULL;

	/*
		Variables para traer los datos del desplegable
	*/
	$referencia2= $movimiento->sel_producto();

	/*
		Se evalua el boton de envio desde el formulario, para las salidas la cantidad sera negativa
		mientras que para las entradas la cantidad sera positiva
	*/
    if (isset($_POST['Sale'])) {
    //Out action
    	$cantidad=$cantidad*(-1);
	}
	if (isset($_POST['Entra'])) {
    //In action
		$cantidad=$cantidad*1;
	}

	/*
		Comprobacion datos para insertar
	*/
	if ($motivo && $referencia && $cantidad && !$actu) 
	{
		$movimiento->insertar_movimiento($motivo, $referencia, $cantidad);
	}
    /*
		Comprobacion datos para actualizar
	*/
    if ($idmovimientoedit && $motivo && $referencia && $cantidad && $actu) 
	{
		$movimiento->actualizar_movimiento($idmovimientoedit,$motivo, $referencia, $cantidad);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idmovimiento) 
	{
		$consultaedit = $movimiento->consultar_movimiento_id($idmovimiento);
	}
	/*
		Eliminar el registro 
	*/
	if ($idmovimientoeli) 
	{
		$movimiento->eliminar_movimiento($idmovimientoeli);
	}