<?php
	
	include('modelo/mminutosvalor.php');

	$minutosvalor = new Mminutosvalor();

	$idminutosvaloredit = isset($_POST['idminutosvalor']) ? $_POST['idminutosvalor'] : NULL;
	$costo_compra      	= isset($_POST['costo_compra']) ? $_POST['costo_compra'] : NULL;
	$valor_venta      	= isset($_POST['valor_venta']) ? $_POST['valor_venta'] : NULL;
	$actu          		= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idminutosvalor     = isset($_GET['id']) ? $_GET['id'] : NULL;	


    /*
		Comprobacion datos para actualizar
	*/
    if ($idminutosvaloredit && $costo_compra && $valor_venta && $actu) 
	{
		$minutosvalor->actualizar_minutosvalor($idminutosvaloredit,$costo_compra, $valor_venta);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idminutosvalor) 
	{
		$consultaedit = $minutosvalor->consultar_minutosvalor_id($idminutosvalor);
	}