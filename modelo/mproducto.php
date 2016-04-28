<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mproducto extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbproducto
		 */
		function insertar_producto($referencia, $nombre, $marca, $precio)
		{
			$sql = "INSERT INTO tbproducto (referencia, nombre, marca, precio)
						VALUES ('".$referencia."','".$nombre."','".$marca."','".$precio."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbproducto
		 */
		function  actualizar_producto($referencia,$nombre,$marca,$precio)
		{
			$sql = "UPDATE tbproducto SET nombre = '".$nombre."', marca = '".$marca."',precio = '".$precio."' WHERE referencia = '".$referencia."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbproducto
		 */
		function eliminar_producto($referencia)
		{
			$sql = "DELETE FROM `tbproducto` WHERE `referencia` = '$referencia'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbproducto
		 */
		function consultar_producto()
		{
			$sql = "SELECT * FROM tbproducto";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbproducto	
         */
		function consultar_producto_id($referencia)
		{
			$sql = "SELECT * FROM tbproducto WHERE referencia = '$referencia' ";
			return $this -> SeleccionDatos($sql);
		}
	}
