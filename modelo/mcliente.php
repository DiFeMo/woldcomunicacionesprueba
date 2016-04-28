<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mcliente extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbcliente
		 */
		function insertar_cliente($nombre, $telefono, $direccion, $email, $detalle)
		{
			$sql = "INSERT INTO tbcliente (nombre, telefono, direccion, email, detalle)
						VALUES ('".$nombre."','".$telefono."','".$direccion."','".$email."','".$detalle."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbcliente
		 */
		function  actualizar_cliente($idcliente, $nombre, $telefono, $direccion, $email, $detalle)
		{
			$sql = "UPDATE tbcliente SET  nombre = '".$nombre."', telefono = '".$telefono."', direccion = '".$direccion."', email = '".$email."', detalle = '".$detalle."' WHERE idcliente = '".$idcliente."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbcliente
		 */
		/*function eliminar_cliente($idcliente)
		{
			$sql = "DELETE FROM `tbcliente` WHERE `idcliente` = '$idcliente'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbcliente
		 */
		function consultar_cliente()
		{
			$sql = "SELECT * FROM tbcliente ORDER BY idcliente DESC";
			return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbcliente	
         */
		function consultar_cliente_id($idcliente)
		{
			$sql = "SELECT * FROM tbcliente WHERE idcliente = '$idcliente' ";
			return $this -> SeleccionDatos($sql);
		}
	}
