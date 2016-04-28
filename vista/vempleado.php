	
	<!DOCTYPE html>
		<html lang="es">
		<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
		<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
		<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
		<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->	
	    <head>
	        <meta charset="utf-8">
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	        <title>Empleados</title>
	        <meta name="description" content="??">
	        

	        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
            
	        <link rel="stylesheet" href="css/normalize.css">
	        <link rel="stylesheet" href="css/main.css">
	        <link rel="stylesheet" href="css/bootstrap.css"/>
	        <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
	        <link rel="stylesheet" href="css/tablaResponsive.css"/>
	        <link rel="stylesheet" href="css/datatable.css"/>
	        <link rel="stylesheet" href="css/estilo.css">
	        <link rel="stylesheet" href="fonts/style.css">
	        
	        <script src="js/vendor/jquery-1.10.1.min.js"></script>
	        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	        <script src="js/bootstrap.js"></script>
	        <script src="js/bootstrap-tab.js"></script>
	        <script src="js/jquery-datatable.js"></script>
	        
	    </head>	
	
	
	
	
		<body >

		    <div class="container-fluid">
              
<!-- inicio barra navegacion -->
<div id="menu"> 
  <a href="index.php"><button type="button" class="btn btn-info m">Inicio</button></a>
  <a href="index.php?pag=2"><button type="button" class="btn btn-info m">Cliente</button></a>
  <a href="index.php?pag=3"><button type="button" class="btn btn-info m">Producto</button></a>
  <a href="index.php?pag=5"><button type="button" class="btn btn-info m">Minutos</button></a>
  <a href="index.php?pag=7"><button type="button" class="btn btn-info m">Proveedor</button></a> 
  <a href=""><button type="button" class="btn btn-info m active">Empleado</button></a>
  <a href="index.php?pag=11"><button type="button" class="btn btn-info m">Otros</button></a>
  <a href="index.php?pag=13"><button type="button" class="btn btn-info m">Servicio Tecnico</button></a>
  <a href="index.php?pag=15"><button type="button" class="btn btn-info m">Servicio T. Entregado</button></a>  
  <a href="index.php?pag=16"><button type="button" class="btn btn-info m">Movimiento</button></a>
  <a href="index.php?pag=18"><button type="button" class="btn btn-info m">Devolucion</button></a>
  <a href="index.php?pag=19"><button type="button" class="btn btn-info m">Compra</button></a>
  <a href="index.php?pag=20"><button type="button" class="btn btn-info m">Compra Producto</button></a> 
  <a href="index.php?pag=21"><button type="button" class="btn btn-info m">Reposicion</button></a>
  <a href="index.php?pag=24"><button type="button" class="btn btn-info m">Venta</button></a>
  <a href="index.php?pag=26"><button type="button" class="btn btn-info m">Venta Producto</button></a> 
</div>
<!-- final barra navegacion -->
          
		      <div class="row-fluid">
		        
		        <div class="span12">
		      
<?php include("controlador/cempleado.php"); ?>


<div class="container-fluid lol">
<div class="eti">Empleado</div>

	<form action="" method="POST">
		<div class="form-group campo">
            <label for="">Cédula de Ciudadania:</label>
            <input type="text" class="form-control" name="idempleado" required> 
            <input type="hidden" name="estado" value="Activo">  
		</div>
		<div class="form-group campo">
            <label for="">Nombre del empleado:</label>
            <input type="text" class="form-control" name="nombre" required>     
		</div>
		<div class="form-group campo">
            <label for="">Sueldo:</label>
            <input type="number" class="form-control" name="sueldo" required>       
		</div>
		<div class="form-group campo">
            <label for="">Dirección del empleado:</label>
            <input type="text" class="form-control" name="direccion" required >  
		</div>
		<div class="form-group campo">
            <label for="">Ciudad de residencia:</label>
            <input type="text" class="form-control" name="ciudad" required>       
		</div>
		<div class="form-group campo">
            <label for="">Teléfono del empleado:</label>
            <input type="text" class="form-control" name="telefono_emple" required>   
		</div>
		<div class="form-group campo">
           <label for="">Teléfono de referencia:</label>
            <input type=text class="form-control" name="telefono_refe" required>
		</div>
		<div class="form-group campo">
           <label for="">Email:</label>
            <input type="email" class="form-control" name="email">   
		</div>
		<div class="form-group campo">
            <label for="">Fecha de Ingreso:</label>
            <input type="date" class="form-control" name="fecha">    
		</div>
		 <div class="form-group campo"> <br>          		
            <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
        </div>
	</form>
</div>
<?php $consultaempleado = $empleado->consultar_empleado(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="3">Listado de Empleados</th>
            </tr>
            <tr>
                <th>Cedula</th>
				<th>Nombre</th>
				<th>Sueldo Mensual</th>
				<th>Direccion</th>
				<th>Residencia</th>
				<th>Teléfono</th>
				<th>Teléfono de referencia</th>
				<th>Email</th>
				<th>Fecha Ingreso</th>
				<th>Estado</th>
				<th>Edición</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultaempleado);$i++): ?>
				<tr>
					<td data-title='Cedula'><?= $consultaempleado[$i]['idempleado'] ?></td>
					<td data-title='Nombre'><?= $consultaempleado[$i]['nombre'] ?></td>
					<td data-title='Sueldo'>$ <?= number_format($consultaempleado[$i]['sueldo']) ?></td>
					<td data-title='Direccion'><?= $consultaempleado[$i]['direccion'] ?></td>
					<td data-title='Ciudad de residencia'><?= $consultaempleado[$i]['ciudad'] ?></td>
					<td data-title='Teléfono'><?= $empleado->formato_telefono_general($consultaempleado[$i]['telefono_emple']) ?></td>
					<td data-title='Teléfono de referencia'><?= $empleado->formato_telefono_general($consultaempleado[$i]['telefono_refe']) ?></td>
					<td data-title='Email'><?= $consultaempleado[$i]['email'] ?></td>
					<td data-title='Fecha Ingreso'><?= $consultaempleado[$i]['fecha_ingreso'] ?></td>
					<td data-title='Estado'><?= $consultaempleado[$i]['estado'] ?></td>
					<td data-title='Edición'><a href="index.php?pag=10&id=<?= $consultaempleado[$i]['idempleado'] ?>" class="btn btn-primary">Editar</a></td>
					<!--<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idempleeli" value="<?= $consultaempleado[$i]['idempleado'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
        </tbody>
						</table>
					</div>



		        </div><!--/span-->

		      </div><!--/row-->

				<br/><br/>    

		    </div><!--container-fluid-->



<!--<script type="text/javascript">
google_ad_client = "ca-pub-2988710215164311";
/* acaxaomx_main_Blog1_468x60_as */
google_ad_slot = "7358473375";
google_ad_width = 468;
google_ad_height = 60;
//-->
<!--</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

-->
			<script type="text/javascript">
				//para buscar en las tablas
				$(document).ready(function() {
				    $('#example').dataTable( {
				        "bPaginate": true,
				        "bLengthChange": true,
				        "bFilter": true,
				        "bSort": false,
				        "bInfo": true,
				        "bAutoWidth": true
				    } );
				} );	
			</script>	

		</body>
	</html>