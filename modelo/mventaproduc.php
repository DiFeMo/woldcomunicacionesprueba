<?php

	include_once('controlador/conexion.php');
	include_once('functions.php');

	class Mventaproduc extends Funciones
	{
		public function __construct(){}		
        /*
		 *función para el ingreso de los datos de la tabla
		 */
		function insertar_ventaproduc($numero_venta, $movimiento, $valor_unitario)
		{
			$sql = "INSERT INTO tbventaxproducto (numero_venta,movimiento, precio_venta)
						VALUES ('".$numero_venta."','".$movimiento."','".$valor_unitario."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla 
		 */
		function  actualizar_ventaproduc($numero_venta,$movimiento,$valor_unitario)
		{
			$sql = "UPDATE tbventaxproducto SET precio_venta = '".$valor_unitario."' WHERE numero_venta = '".$numero_venta."' AND movimiento = '".$movimiento."';";
			$this -> cons($sql);
		}
		/*
		 *función para elimnar datos de la tabla
		 */
		function eliminar_ventaproduc($numero_venta)
		{
			$sql = "DELETE FROM `tbventaxproducto` WHERE `numero_venta` = '$numero_venta'";
			$this -> cons($sql);
		}	
        /*
		 *función para la consulta de los datos de la tabla tbventaxproducto por ultimo registro
		 */
		function consultar_ventaproduc_u()
		{
			$sql = "SELECT * FROM tbventaxproducto ORDER BY numero_venta DESC LIMIT 1";
			 return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la tabla tbventaxproducto
		 */
		function consultar_ventaproduc()
		{
			$sql = "SELECT * FROM tbventaxproducto";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbventaxproducto	
         */
		function consultar_ventaproduc_id($numero_venta, $movimiento)
		{
			$sql = "SELECT * FROM tbventaxproducto WHERE numero_venta = '$numero_venta' AND movimiento = '$movimiento'";
			return $this -> SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion del ultimo registro de la tabla comra
		 */
		function sel_numeroventa()        
		{
            $sql = "SELECT * FROM `tbventa` order by numero_venta desc limit 1" ;
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla compra
		 */
		function sel_numeroventa1($numero_venta)
		{
			$sql = "SELECT * FROM tbventa WHERE numero_venta='".$numero_venta."';";
			return $this->SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion del ultimo registro de la tabla movimeinto
		 */
		function sel_movimiento()        
		{
            $sql = "SELECT * FROM `tbmovimiento` order by idmovimiento desc limit 1";
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