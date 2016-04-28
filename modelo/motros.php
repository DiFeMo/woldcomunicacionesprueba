<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Motros extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbotros
		 */
		function insertar_otros($fecha, $descripcion, $salida, $entrada)
		{
			$sql = "INSERT INTO tbotros (fecha, descripcion, salida_total, entrada_total)
						VALUES ('".$fecha."','".$descripcion."','".$salida."','".$entrada."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbotros
		 */
		function  actualizar_otros($idreporte,$fecha, $descripcion, $salida, $entrada)
		{
			$sql = "UPDATE tbotros SET fecha = '".$fecha."',descripcion = '".$descripcion."',salida_total = '".$salida."',entrada_total = '".$entrada."' WHERE idreporte = '".$idreporte."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbotros
		 */
		function eliminar_otros($idreporte)
		{
			$sql = "DELETE FROM `tbotros` WHERE `idreporte` = '$idreporte'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbotros
		 */
		function consultar_otros()
		{
			$sql = "SELECT * FROM tbotros ORDER BY idreporte DESC";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbotros	
         */
		function consultar_otros_id($idreporte)
		{
			$sql = "SELECT * FROM tbotros WHERE idreporte = '$idreporte' ";
			return $this -> SeleccionDatos($sql);
		}
	}
