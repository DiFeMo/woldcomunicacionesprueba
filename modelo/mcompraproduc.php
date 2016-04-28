<?php

	include_once('controlador/conexion.php');
	include_once('functions.php');

	class Mcompraproduc extends Funciones
	{
		public function __construct()
		{

		}
		
        /*
		 *función para el ingreso de los datos de la tabla tbcompraxproducto
		 */
		function insertar_compraproduc($numero_compra, $movimiento, $valor)
		{
			$sql = "INSERT INTO tbcompraxproducto (numero_compra,movimiento, valor)
						VALUES ('".$numero_compra."','".$movimiento."','".$valor."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbcompraxproducto 
		 */
		function  actualizar_compraproduc($numero_compra,$movimiento,$valor)
		{
			$sql = "UPDATE tbcompraxproducto SET valor = '".$valor."' WHERE numero_compra = '".$numero_compra."' AND movimiento = '".$movimiento."';";
			$this -> cons($sql);
		}
		/*
		 *función para elimnar datos de la tabla tbcompraxproducto
		 */
		function eliminar_compraproduc($numero_compra)
		{
			$sql = "DELETE FROM `tbcompraxproducto` WHERE `numero_compra` = '$numero_compra'";
			$this -> cons($sql);
		}	
        /*
		 *función para la consulta de los datos de la tabla tbcompraxproducto por ultimo registro
		 */
		function consultar_compraproduc_u()
		{
			$sql = "SELECT * FROM tbcompraxproducto ORDER BY numero_compra DESC LIMIT 1";
			 return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la tabla tbcompraxproducto
		 */
		function consultar_compraproduc()
		{
			$sql = "SELECT * FROM tbcompraxproducto ORDER BY numero_compra DESC";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbcompraxproducto	
         */
		function consultar_compraproduc_id($numero_compra, $movimiento)
		{
			$sql = "SELECT * FROM tbcompraxproducto WHERE numero_compra = '$numero_compra' AND movimiento = '$movimiento'";
			return $this -> SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion del ultimo registro de la tabla comra
		 */
		function sel_numerocompra()        
		{
            $sql = "SELECT * FROM `tbcompra` order by numero_compra desc limit 1" ;
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla compra
		 */
		function sel_numerocompra1($numero_compra)
		{
			$sql = "SELECT * FROM tbcompra WHERE numero_compra='".$numero_compra."';";
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