<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mminutosvalor extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbminutosvalorvalor
		 
		function insertar_minutos($costo_compra, $cantidad, $compra, $venta, $utilidad)
		{
			$sql = "INSERT INTO tbminutosvalor (costo_compra, cantidad, compra, venta, utilidad)
						VALUES ('".$costo_compra."','".$cantidad."','".$compra."','".$venta."','".$utilidad."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbminutosvalor
		 */
		function  actualizar_minutosvalor($idminutosvalor,$costo_compra,$valor_venta)
		{
			$sql = "UPDATE tbminutosvalor SET costo_compra = '".$costo_compra."',valor_venta = '".$valor_venta."' WHERE idminutosvalor = '".$idminutosvalor."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbminutosvalor
		 
		function eliminar_minutos($idminutos)
		{
			$sql = "DELETE FROM `tbminutosvalor` WHERE `idminutos` = '$idminutos'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta del registro mas reciente de la tabla tbminutosvalor
		 */
		function consultar_minutosvalor()
		{
			$sql = "SELECT * FROM `tbminutosvalor`";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbminutosvalor	
         */
		function consultar_minutosvalor_id($idminutosvalor)
		{
			$sql = "SELECT * FROM tbminutosvalor WHERE idminutosvalor = '$idminutosvalor' ";
			return $this -> SeleccionDatos($sql);
		}
	}
