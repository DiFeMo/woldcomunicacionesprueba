<?php
	
	include('modelo/mserviciotecnico.php');

	$serviciotecnico = new Mserviciotecnico();

	$idservitecedit = isset($_POST['numero_orden']) ? $_POST['numero_orden'] : NULL;	
	$nombre         = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
	$marca          = isset($_POST['marca']) ? $_POST['marca'] : NULL;
    $referencia     = isset($_POST['referencia']) ? $_POST['referencia'] : NULL;
    $descripcion_st = isset($_POST['descripcion_st']) ? $_POST['descripcion_st'] : NULL;
    $observacion    = isset($_POST['observacion']) ? $_POST['observacion'] : NULL;
    $costo_st       = isset($_POST['costo_st']) ? $_POST['costo_st'] : NULL;
    $precio_cliente = isset($_POST['precio_cliente']) ? $_POST['precio_cliente'] : NULL;
    $fecha          = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
    $id_cliente     = isset($_POST['id_cliente']) ? $_POST['id_cliente'] : NULL;
    $empleado       = isset($_POST['empleado']) ? $_POST['empleado'] : NULL;
    $abono          = isset($_POST['abono']) ? $_POST['abono'] : NULL;
	$idserviteceli  = isset($_POST['idserviteceli']) ? $_POST['idserviteceli'] : NULL;
	$actu           = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$numero_orden   = isset($_GET['id']) ? $_GET['id'] : NULL;	
	
	/*
		Variables para traer los datos de los desplegables
	*/
	$empleado2= $serviciotecnico->sel_empleado();
	$cliente2= $serviciotecnico->sel_cliente();

	/*
		Comprobacion datos para insertar
	*/
	if ($nombre && $marca && $referencia && $descripcion_st && $costo_st && $precio_cliente && $fecha && $id_cliente && $empleado && $abono && !$actu) 
	{
        
		$serviciotecnico->insertar_serviciotecnico($nombre, $marca, $referencia, $descripcion_st, $observacion, $costo_st, $precio_cliente, $fecha, $id_cliente, $empleado, $abono);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($idservitecedit && $nombre && $marca && $referencia && $actu) 
	{
		$serviciotecnico->actualizar_serviciotecnico($idservitecedit, $nombre, $marca, $referencia,$descripcion_st, $observacion, $costo_st, $precio_cliente, $fecha, $abono);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($numero_orden) 
	{
		$consultaedit = $serviciotecnico->consultar_serviciotecnico_id($numero_orden);
	}
	/*
		Eliminar el registro 
	*/
	if ($idserviteceli) 
	{
		$serviciotecnico->eliminar_serviciotecnico($idserviteceli);
	}

