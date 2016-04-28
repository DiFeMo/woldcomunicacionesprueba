<?php
	
	include('modelo/mminutos.php');

	$minutos = new Mminutos();

	$idminutosedit 	= isset($_POST['idminutos']) ? $_POST['idminutos'] : NULL;
	$fecha      	= isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$cantidad      	= isset($_POST['cantidad']) ? $_POST['cantidad'] : NULL;
	$compra         = isset($_POST['compra']) ? $_POST['compra'] : NULL;
	$venta   		= isset($_POST['venta']) ? $_POST['venta'] : NULL;
	$idminutoseli  	= isset($_POST['idminutoseli']) ? $_POST['idminutoseli'] : NULL;
	$actu          	= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idminutos     	= isset($_GET['id']) ? $_GET['id'] : NULL;	

	echo "Compra: ".$compra." Venta: ".$venta." Fecha: ".$fecha;

	/*
		Variables para traer los datos de los desplegables
	*/
	$compra2	= $minutos->consultar_minutos_costo();
	$venta2		= $minutos->consultar_minutos_valor();

	/*
		Operaciones para sacar la utilidad de acuerdo a el valor del minuto y la cantidad
	*/
	$totalcompra 	= $compra * $cantidad;
	$totalventa 	= $venta * $cantidad;
	$utilidad 		= $totalventa - $totalcompra;

	/*
		Comprobacion datos para insertar
	*/
	if ($fecha && $cantidad && $compra && $venta && !$actu) 
	{
		$minutos->insertar_minutos($fecha, $cantidad, $totalcompra, $totalventa, $utilidad);
	}
    /*
		Comprobacion datos para actualizar
	*/
    if ($idminutosedit && $fecha && $compra && $venta && $actu) 
	{
		$minutos->actualizar_minutos($idminutosedit,$fecha, $cantidad, $totalcompra, $totalventa, $utilidad);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idminutos) 
	{
		$consultaedit = $minutos->consultar_minutos_id($idminutos);
	}
	/*
		Eliminar el registro 
	*/
	if ($idminutoseli) 
	{
		$minutos->eliminar_minutos($idminutoseli);
	}