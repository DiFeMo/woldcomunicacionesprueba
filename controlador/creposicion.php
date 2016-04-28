<?php
	
	include('modelo/mreposicion.php');

	$reposicion = new Mreposicion();

	$idreposicionedit = isset($_POST['idreposicion']) ? $_POST['idreposicion'] : NULL;
	$movimiento       = isset($_POST['movimiento']) ? $_POST['movimiento'] : NULL;
	$numero_compra    = isset($_POST['numero_compra']) ? $_POST['numero_compra'] : NULL;
    $fecha            = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$idreposicioneli  = isset($_POST['idreposicioneli']) ? $_POST['idreposicioneli'] : NULL;
	$actu             = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idreposicion     = isset($_GET['id']) ? $_GET['id'] : NULL;	

    /*
		Variables para traer los datos de los desplegables en el formulario
	*/	
	$movimiento2= $reposicion->sel_movimiento();
	/*
		Comprobacion datos para insertar
	*/
	if ($movimiento && $numero_compra && $fecha && !$actu) 
	{
		$reposicion->insertar_reposicion($movimiento, $numero_compra, $fecha);
	}
    /*
		Comprobacion datos para actualizar
	*/
    if ($idreposicionedit && $movimiento && $numero_compra && $fecha && $actu) 
	{
		$reposicion->actualizar_reposicion($idreposicionedit,$movimiento, $numero_compra, $fecha);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idreposicion) 
	{
		$consultaedit = $reposicion->consultar_reposicion_id($idreposicion);
	}
	/*
		Eliminar el registro 
	*/
	if ($idreposicioneli) 
	{
		$reposicion->eliminar_reposicion($idreposicioneli);
	}