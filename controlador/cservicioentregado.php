<?php
	
	include('modelo/mservicioentregado.php');

	$servicioentregado = new Mservicioentregado();

	$idserventedit = isset($_POST['refe']) ? $_POST['refe'] : NULL;
	$numero_orden  = isset($_POST['numero_orden']) ? $_POST['numero_orden'] : NULL;
	$fecha         = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$saldo_cancel  = isset($_POST['saldo_cancel']) ? $_POST['saldo_cancel'] : NULL;
    $idserventeli  = isset($_POST['idserventeli']) ? $_POST['idserventeli'] : NULL;
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idservent     = isset($_GET['id']) ? $_GET['id'] : NULL;	
    
    /*
		Variable para traer los datos del desplegable
	*/
    $numorden2 = $servicioentregado->sel_orden();
  
    /*if ($saldo_cancel == NULL){
        $saldo_cancel = "0";
    }*/

    /*
		Comprobacion datos para insertar
	*/
	if ($numero_orden && $fecha && !$actu) 
	{
        
		$servicioentregado->insertar_servicioentregado($numero_orden,$fecha,$saldo_cancel);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($idserventedit && $precio && $actu) 
	{
		$servicioentregado->actualizar_servicioentregado($idserventedit,$precio);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idservent) 
	{
		$consultaedit = $servicioentregado->consultar_servicioentregado_id($idservent);
	}
	/*
		Eliminar el registro 
	*/
	if ($idserventeli) 
	{
		$servicioentregado->eliminar_servicioentregado($idserventeli);
	}
