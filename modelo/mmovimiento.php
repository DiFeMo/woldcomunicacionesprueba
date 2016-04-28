<?php

	include_once('controlador/conexion.php');
	include_once('functions.php');

	class Mmovimiento extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbmovimiento
		 */
		function insertar_movimiento($motivo, $referencia, $cantidad)
		{
			$sql = "INSERT INTO tbmovimiento (motivo, referencia, cantidad)
						VALUES ('".$motivo."','".$referencia."','".$cantidad."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbmovimiento
		 */
		function  actualizar_movimiento($idmovimiento,$motivo,$referencia,$cantidad)
		{
			$sql = "UPDATE tbmovimiento SET motivo = '".$motivo."',referencia = '".$referencia."',cantidad = '".$cantidad."' WHERE idmovimiento = '".$idmovimiento."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbmovimiento
		 */
		function eliminar_movimiento($idmovimiento)
		{
			$sql = "DELETE FROM `tbmovimiento` WHERE `idmovimiento` = '$idmovimiento'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbmovimiento con un limite de 10 registros
		 */
		function consultar_movimiento()
		{
			$sql = "SELECT * FROM `tbmovimiento` ORDER BY idmovimiento DESC";
			 return $this->SeleccionDatos($sql);
		}
        /*
		 *función para la consulta de los datos de la tabla tbmovimiento por COMPRA limitandolo a un solo registro
		 */
		function consultar_movimiento_c()
		{
			$sql = "SELECT * FROM `tbmovimiento` WHERE `motivo` = 'Compra' ORDER BY idmovimiento DESC LIMIT 1";
			 return $this->SeleccionDatos($sql);
		}
        /*
		 *función para la consulta de los datos de la tabla tbmovimiento por REPOSICION limitandolo a un solo registro
		 */
		function consultar_movimiento_r()
		{
			$sql = "SELECT * FROM `tbmovimiento` WHERE `motivo` = 'Reposición' ORDER BY idmovimiento DESC LIMIT 1";
			 return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la tabla tbmovimiento por DEVOLUCION limitandolo a un solo registro
		 */
		function consultar_movimiento_d()
		{
			$sql = "SELECT * FROM `tbmovimiento` WHERE `motivo` = 'Devolución' ORDER BY idmovimiento DESC LIMIT 1";
			 return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la tabla tbmovimiento por VENTA limitandolo a un solo registro
		 */
		function consultar_movimiento_v()
		{
			$sql = "SELECT * FROM `tbmovimiento` WHERE `motivo` = 'Venta' ORDER BY idmovimiento DESC LIMIT 1";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbmovimiento	
         */
		function consultar_movimiento_id($idmovimiento)
		{
			$sql = "SELECT * FROM tbmovimiento WHERE idmovimiento = '$idmovimiento' ";
			return $this -> SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion del registro mas reciente de la tabla producto
		 */
		function sel_producto()        
		{
            $sql = "SELECT * FROM `tbproducto`";
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla producto
		 */
		function sel_producto1($referencia)
		{
			$sql = "SELECT * FROM tbproducto WHERE referencia='".$referencia."';";
			return $this->SeleccionDatos($sql);
		}
	}
