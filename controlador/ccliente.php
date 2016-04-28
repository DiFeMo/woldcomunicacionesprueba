<?php
	
	include('modelo/mcliente.php');

	$cliente = new Mcliente();

	$idclienteedit = isset($_POST['idcliente']) ? $_POST['idcliente'] : NULL;
	$nombre        = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
	$telefono      = isset($_POST['telefono']) ? $_POST['telefono'] : NULL;
	$direccion     = isset($_POST['direccion']) ? $_POST['direccion'] : NULL;
    $email         = isset($_POST['email']) ? $_POST['email'] : NULL;
	$detalle       = isset($_POST['detalle']) ? $_POST['detalle'] : NULL;
	/*$idclienteeli  = isset($_POST['idclienteeli']) ? $_POST['idclienteeli'] : NULL;*/
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idcliente     = isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*
		Comprobar si las variables de nombre y detalle tienen datos, de ser asi se procede a enviarle los parametros
		a la funcion insertar_cliente
	*/
	if ($nombre && $detalle && !$actu) 
	{
		$cliente->insertar_cliente($nombre, $telefono, $direccion, $email, $detalle);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($idclienteedit && $nombre && $actu) 
	{
		$cliente->actualizar_cliente($idclienteedit,$nombre,$telefono,$direccion,$email,$detalle);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idcliente) 
	{
		$consultaedit = $cliente->consultar_cliente_id($idcliente);
	}