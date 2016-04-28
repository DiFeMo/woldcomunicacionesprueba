<?php
	
	include('modelo/mproducto.php');

	$producto = new Mproducto();

	$idproducedit  = isset($_POST['refe']) ? $_POST['refe'] : NULL;
	$referencia    = isset($_POST['referencia']) ? $_POST['referencia'] : NULL;
	$nombre        = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
	$marca         = isset($_POST['marca']) ? $_POST['marca'] : NULL;
    $precio        = isset($_POST['precio']) ? $_POST['precio'] : NULL;
	$idproduceli   = isset($_POST['idproduceli']) ? $_POST['idproduceli'] : NULL;
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idproduc      = isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*
		Comprobacion datos para insertar
	*/
	if ($referencia && $nombre && $marca && $precio && !$actu) 
	{
        
		$producto->insertar_producto($referencia,$nombre,$marca,$precio);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($idproducedit && $precio && $actu) 
	{
		$producto->actualizar_producto($idproducedit,$nombre,$marca,$precio);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idproduc) 
	{
		$consultaedit = $producto->consultar_producto_id($idproduc);
	}
	/*
		Eliminar el registro 
	*/
	if ($idproduceli) 
	{
		$producto->eliminar_producto($idproduceli);
	}
