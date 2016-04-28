<?php

	include_once('controlador/conexion.php');
	include_once('functions.php');

	class Mdevolucion extends Funciones
	{
		public function __construct()
		{

		}
		
        /*
		 *función para el ingreso de los datos de la tabla tbdevolucionirregular
		 */
		function insertar_devolucion($movimiento, $fecha, $motivo, $numero_compra, $costo)
		{
			$sql = "INSERT INTO tbdevolucionirregular (movimiento, fecha, motivo, numero_compra, costo)
						VALUES ('".$movimiento."','".$fecha."','".$motivo."','".$numero_compra."','".$costo."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbdevolucionirregular
		 */
		function  actualizar_devolucion($iddevolucion, $movimiento,$fecha, $motivo, $numero_compra, $costo)
		{
			$sql = "UPDATE tbdevolucionirregular SET movimiento = '".$movimiento."',fecha = '".$fecha."',motivo = '".$motivo."',numero_compra = '".$numero_compra."', costo = '".$costo."' WHERE iddevolucion = '".$iddevolucion."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbdevolucionirregular
		 */
		function eliminar_devolucion($iddevolucion)
		{
			$sql = "DELETE FROM `tbdevolucionirregular` WHERE `iddevolucion` = '$iddevolucion'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbdevolucionirregular
		 */
		function consultar_devolucion()
		{
			$sql = "SELECT * FROM tbdevolucionirregular ORDER BY iddevolucion DESC LIMIT 5";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbdevolucionirregular	
         */
		function consultar_devolucion_id($iddevolucion)
		{
			$sql = "SELECT * FROM tbdevolucionirregular WHERE iddevolucion = '$iddevolucion' ";
			return $this -> SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion del registro mas reciente de la tabla movimiento
		 */
		function sel_movimiento()        
		{
            $sql = "SELECT * FROM `tbmovimiento` ORDER BY idmovimiento DESC LIMIT 1";
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla movimiento
		 */
		function sel_movimiento1($idmovimiento)
		{
			$sql = "SELECT * FROM tbmovimiento WHERE idmovimiento='".$idmovimiento."';";
			return $this->SeleccionDatos($sql);
		}
	}