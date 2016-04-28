<?php

	include_once('controlador/conexion.php');
	include_once('functions.php');

	class Mreposicion extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbreposicion
		 */
		function insertar_reposicion($movimiento, $numero_compra, $fecha)
		{
			$sql = "INSERT INTO tbreposicion (movimiento, numero_compra, fecha)
						VALUES ('".$movimiento."','".$numero_compra."','".$fecha."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbreposicion
		 */
		function  actualizar_reposicion($idreposicion,$movimiento,$numero_compra,$fecha)
		{
			$sql = "UPDATE tbreposicion SET movimiento = '".$movimiento."',numero_compra = '".$numero_compra."',fecha = '".$fecha."' WHERE idreposicion = '".$idreposicion."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbreposicion
		 */
		function eliminar_reposicion($idreposicion)
		{
			$sql = "DELETE FROM `tbreposicion` WHERE `idreposicion` = '$idreposicion'";
			$this -> cons($sql);
		}
         
		/*
		 *función para la consulta de los datos de la tabla tbreposicion
		 */
		function consultar_reposicion()
		{
			$sql = "SELECT * FROM `tbreposicion` ORDER BY idreposicion DESC";
			 return $this->SeleccionDatos($sql);
		}
        /*
    	 *	Función para retornar los datos de la tbreposicion	
         */
        
		function consultar_reposicion_id($idreposicion)
		{
			$sql = "SELECT * FROM tbreposicion WHERE idreposicion = '$idreposicion' ";
			return $this -> SeleccionDatos($sql);
		}
         /*
		 	Función para la seleccion del ultimo registro de la tabla movimeinto
		 */
		function sel_movimiento()        
		{
            $sql = "SELECT * FROM `tbmovimiento` order by idmovimiento desc limit 1";
            return $this->SeleccionDatos($sql);
             /*
		 	Función para la seleccion especifica de los datos de la tabla movimiento
		 */
		function sel_movimiento1($idmovimiento)
		{
			$sql = "SELECT * FROM tbmovimiento WHERE idmovimiento='".$idmovimiento."';";
			return $this->SeleccionDatos($sql);
		}
        }
	}
