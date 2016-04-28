<?php
	
	include('modelo/motros.php');

	$otros = new Motros();

	$idreporteedit = isset($_POST['idreporte']) ? $_POST['idreporte'] : NULL;
	$fecha       = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$descripcion   = isset($_POST['descripcion']) ? $_POST['descripcion'] : NULL;
	$salida        = isset($_POST['valor']) ? $_POST['valor'] : NULL;
    $entrada       = isset($_POST['valor']) ? $_POST['valor'] : NULL;
	$idreporteeli  = isset($_POST['idreporteeli']) ? $_POST['idreporteeli'] : NULL;
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idreporte     = isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*
		Dependiendo del boton que se elija en el formulario se aplica el valor "0" al otro campo
		Si es de salida la variable entrada quedara en "0"
	*/
    if (isset($_POST['Sale'])) {
    //Out action
    	$entrada=0;
	}
	if (isset($_POST['Entra'])) {
    //In action
		$salida=0;
	}
	/*
		Comprobacion datos para insertar
	*/
	if ($fecha && $descripcion && !$actu) 
	{
		$otros->insertar_otros($fecha, $descripcion, $salida, $entrada);
	}
    /*
		Comprobacion datos para actualizar
	*/
    if ($idreporteedit && $fecha && $descripcion && $actu) 
	{
		$otros->actualizar_otros($idreporteedit,$fecha, $descripcion, $salida, $entrada);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idreporte) 
	{
		$consultaedit = $otros->consultar_otros_id($idreporte);
	}
	/*
		Eliminar el registro 
	*/
	if ($idreporteeli) 
	{
		$otros->eliminar_otros($idreporteeli);
	}