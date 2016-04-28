<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mminutos extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbminutos
		 */
		function insertar_minutos($fecha, $cantidad, $compra, $venta, $utilidad)
		{
			$sql = "INSERT INTO tbminutos (fecha, cantidad, compra, venta, utilidad)
						VALUES ('".$fecha."','".$cantidad."','".$compra."','".$venta."','".$utilidad."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbminutos
		 */
		function  actualizar_minutos($idminutos,$fecha,$cantidad,$compra,$venta,$utilidad)
		{
			$sql = "UPDATE tbminutos SET fecha = '".$fecha."',cantidad = '".$cantidad."',compra = '".$compra."',venta = '".$venta."',utilidad = '".$utilidad."' WHERE idminutos = '".$idminutos."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbminutos
		 */
		function eliminar_minutos($idminutos)
		{
			$sql = "DELETE FROM `tbminutos` WHERE `idminutos` = '$idminutos'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta del registro mas reciente de la tabla tbminutos
		 */
		function consultar_minutos()
		{
			$sql = "SELECT * FROM `tbminutos` ORDER BY idminutos DESC";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbminutos	
         */
		function consultar_minutos_id($idminutos)
		{
			$sql = "SELECT * FROM tbminutos WHERE idminutos = '$idminutos' ";
			return $this -> SeleccionDatos($sql);
		}
		/*
		 *función para la consulta del registro mas reciente de la tabla tbminutosvalor
		 */
		function consultar_minutos_costo()
		{
			$sql = "SELECT `costo_compra` FROM `tbminutosvalor`";
			 return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta del registro mas reciente de la tabla tbminutosvalor
		 */
		function consultar_minutos_valor()
		{
			$sql = "SELECT `valor_venta` FROM `tbminutosvalor`";
			 return $this->SeleccionDatos($sql);
		}
	}
