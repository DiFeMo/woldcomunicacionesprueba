<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mempleado extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbempleado
		 */
		function insertar_empleado($idempleado, $nombre, $sueldo, $direccion, $ciudad, $telefono_emple, $telefono_refe, $email,$estado,$fecha)
		{
			$sql = "INSERT INTO tbempleado (idempleado, nombre, sueldo, direccion, ciudad, telefono_emple, telefono_refe, email,estado,fecha_ingreso)
						VALUES ('".$idempleado."','".$nombre."','".$sueldo."','".$direccion."','".$ciudad."','".$telefono_emple."','".$telefono_refe."','".$email."','".$estado."','".$fecha."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbempleado
		 */
		function  actualizar_empleado($idempleado, $nombre, $sueldo, $direccion, $ciudad, $telefono_emple, $telefono_refe, $email, $estado, $fecha)
		{
			$sql = "UPDATE tbempleado SET nombre = '".$nombre."',sueldo = '".$sueldo."',direccion = '".$direccion."',ciudad = '".$ciudad."',telefono_emple = '".$telefono_emple."',telefono_refe = '".$telefono_refe."',email = '".$email."',estado = '".$estado."',fecha_ingreso = '".$fecha."' WHERE idempleado = '".$idempleado."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbempleado
		 */
		function eliminar_empleado($idempleado)
		{
			$sql = "DELETE FROM tbempleado WHERE idempleado = '$idempleado'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbempleado
		 */
		function consultar_empleado()
		{
			$sql = "SELECT * FROM tbempleado ORDER BY idempleado DESC";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbempleado	
         */
		function consultar_empleado_id($idempleado)
		{
			$sql = "SELECT * FROM tbempleado WHERE idempleado = '$idempleado' ";
			return $this -> SeleccionDatos($sql);
		}
	}
