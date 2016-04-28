<?php
	
	include('modelo/mcompraproduc.php');

	$compraproduc = new Mcompraproduc();

	$idcompraproducedit = isset($_POST['numero_comp']) ? $_POST['numero_comp'] : NULL;	
	$numero_compra      = isset($_POST['numero_compra']) ? $_POST['numero_compra'] : NULL;
	$movimiento         = isset($_POST['movimiento']) ? $_POST['movimiento'] : NULL;
	$idmovimientoedit	= isset($_POST['id_movimiento']) ? $_POST['id_movimiento'] : NULL;
	$valor          	= isset($_POST['valor']) ? $_POST['valor'] : NULL;
	$idcompraproduceli 	= isset($_POST['idcompraproduceli']) ? $_POST['idcompraproduceli'] : NULL;
	$actu           	= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$id_compra  		= isset($_GET['id']) ? $_GET['id'] : NULL;
	$id_movi 	 		= isset($_GET['idm']) ? $_GET['idm'] : NULL;

	/*
		Variables para traer los datos de los desplegables en el formulario
	*/
	$numero_compra2= $compraproduc->sel_numerocompra();
	$movimiento2= $compraproduc->sel_movimiento();

	/*
		Comprobacion datos para insertar	
	*/
	if ($numero_compra && $movimiento && $valor && !$actu) 
	{
        
		$compraproduc->insertar_compraproduc($numero_compra, $movimiento, $valor);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($idcompraproducedit && $idmovimientoedit && $valor && $actu) 
	{
		$compraproduc->actualizar_compraproduc($idcompraproducedit, $idmovimientoedit, $valor);
	}
	/*
		Comprobar las dos llaves primarias para editar ese unico registro
	*/
	if ($id_compra && $id_movi) 
	{
		$consultaedit = $compraproduc->consultar_compraproduc_id($id_compra, $id_movi);
		//echo[$consultaedit][0];
	}
	/*
		Eliminar el registro 
	*/
	if ($idcompraproduceli) 
	{
		$compraproduc->eliminar_compraproduc($idcompraproduceli);
	}
