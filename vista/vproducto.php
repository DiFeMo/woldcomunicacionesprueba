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
	    <title>Productos</title>
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
	<body>
		<div class="container-fluid">
			<!-- inicio barra navegacion -->
			<div id="menu"> 
			  	<a href="index.php"><button type="button" class="btn btn-info m">Inicio</button></a>
			  	<a href="index.php?pag=2"><button type="button" class="btn btn-info m">Cliente</button></a>
			  	<a href=""><button type="button" class="btn btn-info m  active">Producto</button></a>
			  	<a href="index.php?pag=5"><button type="button" class="btn btn-info m">Minutos</button></a>
			  	<a href="index.php?pag=7"><button type="button" class="btn btn-info m">Proveedor</button></a> 
			  	<a href="index.php?pag=9"><button type="button" class="btn btn-info m">Empleado</button></a>
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
				<?php include("controlador/cproducto.php"); ?>
				<div class="container-fluid lol">
				<div class="eti">Producto</div>
				
					<form action="" method="POST">
						<div class="form-group campo">
				            <label for="">Referencia:</label>
				            <input type="text" class="form-control" name="referencia" required>      
						</div>
						<div class="form-group campo">
				             <label for="">Clase del producto:</label>
				            <input type="text" class="form-control" name="nombre" required>     
						</div>
						<div class="form-group campo">
				            <label for="">Marca:</label>
				            <input type="text" class="form-control" name="marca" pattern="[A-z ]{2,50}" title="Solo se permiten letras máximo 50 caracteres" required >         
						</div>
						<div class="form-group campo">
				             <label for="">Precio:</label>
				            <input type="number" class="form-control" name="precio" required >     
						</div>		
						 <div class="form-group campo"> <br>          		
				            <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
				        </div>
					</form>
				         <div class="btn-toolbar campo" role="toolbar">             
				              <a href="index.php?pag=19"><button type="button" class="btn btn-default">Volver a Compra</button></a>
				              <span class="campo"></span>
				              <a href="index.php?pag=21"><button type="button" class="btn btn-default">Volver a Reposicion</button></a>            
				         </div>	 
				</div>
				<?php $consultaproducto = $producto->consultar_producto(); ?>
				<div id='no-more-tables'>
					<table class="table table-bordered table-hover" id="example">
				 		<thead>
            			<tr>
               				<th colspan="3">Listado de Productos</th>
            			</tr>
            			<tr>
            			    <th>Referencia</th>
							<th>Clase</th>
							<th>Marca</th>
							<th>Precio</th>
							<th>Edición</th>
							<!--<th>Eliminación</th>-->
            			</tr>
        				</thead>
        				<tbody>
        				   <?php for($i=0;$i<count($consultaproducto);$i++): ?>
								<tr>
									<td data-title='Referencia'><?= $consultaproducto[$i]['referencia'] ?></td>
									<td data-title='Clase'><?= $consultaproducto[$i]['nombre'] ?></td>
									<td data-title='Marca'><?= $consultaproducto[$i]['marca'] ?></td>
									<td data-title='Precio'>$ <?= number_format($consultaproducto[$i]['precio']) ?></td>
									<td data-title='Edición'><a href="index.php?pag=4&id=<?= $consultaproducto[$i]['referencia'] ?>" class="btn btn-primary"><span class="icon-pencil2"></a></td>
									<!--<td>
										<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
											<input type="hidden" name="idproduceli" value="<?= $consultaproducto[$i]['referencia'] ?>">
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
        <!---Script para formato de las tablas-->
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
	
