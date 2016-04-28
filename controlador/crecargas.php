<?php
	
	include('modelo/mrecargas.php');

	$recargas = new Mrecargas();

	$idrecargaedit 	= isset($_POST['idrecarga']) ? $_POST['idrecarga'] : NULL;
	$fecha      	= isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$venta_recarga  = isset($_POST['venta_recarga']) ? $_POST['venta_recarga'] : NULL;
	$idrecargaeli  	= isset($_POST['idrecargaeli']) ? $_POST['idrecargaeli'] : NULL;
	$actu          	= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idrecarga     	= isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*
		Variable del porcentaje fijo de la utilidad
	*/
	$porcentaje 	= 0.05;
	$utilidad 		= $venta_recarga * $porcentaje;

	/*
		Comprobacion datos para insertar registro
	*/
	if ($fecha && $venta_recarga && !$actu) 
	{
		$recargas->insertar_recargas($fecha,$venta_recarga,$utilidad);
	}
    /*
		Comprobacion datos para actualizar
	*/
    if ($idrecargaedit && $fecha && $venta_recarga && $actu) 
	{
		$recargas->actualizar_recargas($idrecargaedit,$fecha,$venta_recarga,$utilidad);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idrecarga) 
	{
		$consultaedit = $recargas->consultar_recargas_id($idrecarga);
	}
	/*
		Eliminar el registro 
	*/
	if ($idrecargaeli) 
	{
		$recargas->eliminar_recargas($idrecargaeli);
	}