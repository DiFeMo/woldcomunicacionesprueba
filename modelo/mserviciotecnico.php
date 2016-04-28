<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mserviciotecnico extends Funciones
	{
		public function __construct()
		{

		}
		
        /*
		 *función para el ingreso de los datos de la tabla tbserviciotecnico
		 */
		function insertar_serviciotecnico($nombre, $marca, $referencia, $descripcion_st, $observacion, $costo_st, $precio_cliente, $fecha, $id_cliente, $empleado, $abono)
		{
			$sql = "INSERT INTO tbserviciotecnico (nombre, marca, referencia, descripcion_st, observacion, costo_st, precio_cliente, fecha, id_cliente, empleado, abono)
						VALUES ('".$nombre."','".$marca."','".$referencia."','".$descripcion_st."','".$observacion."','".$costo_st."','".$precio_cliente."','".$fecha."','".$id_cliente."','".$empleado."','".$abono."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbserviciotecnico
		 */
		function  actualizar_serviciotecnico($numero_orden,$nombre,$marca,$referencia, $descripcion_st, $observacion, $costo_st, $precio_cliente, $fecha, $abono)
		{
			$sql = "UPDATE tbserviciotecnico SET nombre = '".$nombre."',marca = '".$marca."',referencia = '".$referencia."',descripcion_st = '".$descripcion_st."', observacion = '".$observacion."',costo_st = '".$costo_st."',precio_cliente = '".$precio_cliente."',fecha = '".$fecha."',abono = '".$abono."' WHERE numero_orden = '".$numero_orden."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbserviciotecnico
		 */
		function eliminar_serviciotecnico($numero_orden)
		{
			$sql = "DELETE FROM `tbserviciotecnico` WHERE `numero_orden` = '$numero_orden'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbserviciotecnico
		 */
		function consultar_serviciotecnico()
		{
			$sql = "SELECT * FROM tbserviciotecnico ORDER BY numero_orden DESC";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbserviciotecnico	
         */
		function consultar_serviciotecnico_id($numero_orden)
		{
			$sql = "SELECT * FROM tbserviciotecnico WHERE numero_orden = '$numero_orden' ";
			return $this -> SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion de la tabla empleado
		 */
		function sel_empleado()        
		{
            $sql = "SELECT * FROM `tbempleado`";
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla empleado
		 */
		function sel_empleado1($idempleado)
		{
			$sql = "SELECT * FROM tbempleado WHERE idempleado='".$idempleado."';";
			return $this->SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion de la tabla cliente
		 */
		function sel_cliente()        
		{
            $sql = "SELECT * FROM `tbcliente`";
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla cliente
		 */
		function sel_cliente1($idcliente)
		{
			$sql = "SELECT * FROM tbcliente WHERE idcliente='".$idcliente."';";
			return $this->SeleccionDatos($sql);
		}
	}
