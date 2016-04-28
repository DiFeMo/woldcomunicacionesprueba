<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mrecargas extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbrecargas
		 */
		function insertar_recargas($fecha, $venta_recarga, $utilidad)
		{
			$sql = "INSERT INTO tbrecargas (fecha, venta_recarga, utilidad)
						VALUES ('".$fecha."','".$venta_recarga."','".$utilidad."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbrecargas
		 */
		function  actualizar_recargas($idrecarga,$fecha,$venta_recarga,$utilidad)
		{
			$sql = "UPDATE tbrecargas SET fecha = '".$fecha."',venta_recarga = '".$venta_recarga."',utilidad = '".$utilidad."' WHERE idrecarga = '".$idrecarga."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbrecargas
		 */
		function eliminar_recargas($idrecarga)
		{
			$sql = "DELETE FROM `tbrecargas` WHERE `idrecarga` = '$idrecarga'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta del registro mas reciente de la tabla tbrecargas
		 */
		function consultar_recargas()
		{
			$sql = "SELECT * FROM `tbrecargas` ORDER BY idrecarga DESC";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbrecargas	
         */
		function consultar_recargas_id($idrecarga)
		{
			$sql = "SELECT * FROM tbrecargas WHERE idrecarga = '$idrecarga' ";
			return $this -> SeleccionDatos($sql);
		}
	}