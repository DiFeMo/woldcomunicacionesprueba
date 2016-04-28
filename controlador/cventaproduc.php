<?php
	
	include('modelo/mventaproduc.php');

	$ventaproduc = new Mventaproduc();

	$idventaproducedit 	= isset($_POST['numero_vent']) ? $_POST['numero_vent'] : NULL;	
	$numero_venta       = isset($_POST['numero_venta']) ? $_POST['numero_venta'] : NULL;
	$movimiento         = isset($_POST['movimiento']) ? $_POST['movimiento'] : NULL;
	$idmovimientoedit	= isset($_POST['id_movimiento']) ? $_POST['id_movimiento'] : NULL;
	$valor_unitario     = isset($_POST['valor']) ? $_POST['valor'] : NULL;
	$idventaproduceli 	= isset($_POST['idventaproduceli']) ? $_POST['idventaproduceli'] : NULL;
	$actu           	= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$id_venta  			= isset($_GET['id']) ? $_GET['id'] : NULL;
	$id_movi 	 		= isset($_GET['idm']) ? $_GET['idm'] : NULL;

	/*
		Variables para traer los datos de los desplegables en el formulario
	*/
	$numero_venta2	= $ventaproduc->sel_numeroventa();
	$movimiento2	= $ventaproduc->sel_movimiento();
	/*
		Comprobacion datos para insertar	
	*/
	if ($numero_venta && $movimiento && $valor_unitario && !$actu) 
	{
        
		$ventaproduc->insertar_ventaproduc($numero_venta, $movimiento, $valor_unitario);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($idventaproducedit && $idmovimientoedit && $valor_unitario && $actu) 
	{
		$ventaproduc->actualizar_ventaproduc($idventaproducedit, $idmovimientoedit, $valor_unitario);
	}
	/*
		Comprobar las dos llaves primarias para editar ese unico registro
	*/
	if ($id_venta && $id_movi) 
	{
		$consultaedit = $ventaproduc->consultar_ventaproduc_id($id_venta, $id_movi);
	}
	/*
		Eliminar el registro 
	*/
	if ($idventaproduceli) 
	{
		$ventaproduc->eliminar_ventaproduc($idventaproduceli);
	}