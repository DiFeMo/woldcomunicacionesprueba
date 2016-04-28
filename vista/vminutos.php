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
	    <title>Minutos</title>
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
			  	<a href="index.php?pag=3"><button type="button" class="btn btn-info m">Producto</button></a>
			  	<a href=""><button type="button" class="btn btn-info m  active">Minutos</button></a>
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
		        <?php include('controlador/cminutos.php'); ?>

			<div class="container-fluid lol">
				<div class="eti">Minutos</div>
				<form action="" method="POST">
					<div class="form-group campo">
				        <label for="">Fecha:</label>
				        <input type="date" class="form-control" name="fecha">           
					</div>
					<div class="form-group campo">
				        <label for="">Cantidad:</label>
				        <input type="number" class="form-control" name="cantidad">
				        <input type="hidden" value="<?= $compra2[0]['costo_compra']?>" class="form-control" name="compra">
				        <input type="hidden" value="<?= $venta2[0]['valor_venta']?>" class="form-control" name="venta">      
					</div>
					<div class="form-group campo"> <br>          		
				        <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
				    </div>
				</form>
			</div>
			<?php $consultaminutos = $minutos->consultar_minutos(); ?>
			<div id='no-more-tables'>
				<table class="table table-bordered table-hover" id="example">
				  	<thead>
            		<tr>
            		    <th colspan="3">Listado de Minutos</th>
            		</tr>
            		<tr>
            		    <th>ID</th>
						<th>Fecha Minutos</th>
						<th>Cantidad</th>
						<th>compra</th>
						<th>venta</th>
						<th>Utilidad</th>
						<th>Edición</th>
						<!--<th>Eliminación</th>-->
            		</tr>
       				</thead>
       			<tbody>
            		<?php for($i=0;$i<count($consultaminutos);$i++): ?>
						<tr>
							<td data-title='ID'><?= $consultaminutos[$i]['idminutos'] ?></td>
							<td data-title='Fecha Minutos'><?= $consultaminutos[$i]['fecha'] ?></td>
							<td data-title='Cantidad'><?= $consultaminutos[$i]['cantidad'] ?></td>
							<td data-title='compra'>$ <?= number_format($consultaminutos[$i]['compra']) ?></td>
							<td data-title='venta'>$ <?= number_format($consultaminutos[$i]['venta']) ?></td>
							<td data-title='Utilidad'>$ <?= number_format($consultaminutos[$i]['utilidad']) ?></td>
							<td data-title='Edición'><a href="index.php?pag=6&id=<?= $consultaminutos[$i]['idminutos'] ?>" class="btn btn-primary"><span class="icon-pencil2"></a></td>
							<!--<td>
								<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
									<input type="hidden" name="idminutoseli" value="<?= $consultaminutos[$i]['idminutos'] ?>">
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
			<!--script para dar el fromato de las tablas-->
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