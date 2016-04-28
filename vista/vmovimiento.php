	
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
	        <title>Movimientos</title>
	        <meta name="description" content="??">
	        

	        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
            
	        <link rel="stylesheet" href="css/normalize.css">
	        <link rel="stylesheet" href="css/main.css">
	        <link rel="stylesheet" href="css/bootstrap.css"/>
	        <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
	        <link rel="stylesheet" href="css/tablaResponsive.css"/>
	        <link rel="stylesheet" href="css/datatable.css"/>
	        <link rel="stylesheet" href="css/chosen.css">
	        <link rel="stylesheet" href="css/chosen-bootstrap.css">
	        <link rel="stylesheet" href="css/estilo.css">

	        
	        <script src="js/jquery-1.9.1.js"></script>
	        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	        <script src="js/bootstrap.js"></script>
	        <script src="js/bootstrap-tab.js"></script>
	        <script src="js/jquery-datatable.js"></script>
	        <script src="js/chosen.jquery.js"></script>
	        <script src="js/script.js"></script>

	    </head>	
	
		<body> 
        
		    <div class="container-fluid">
              
				<!-- inicio barra navegacion -->
				<div id="menu"> 
				  <a href="index.php"><button type="button" class="btn btn-info m">Inicio</button></a>
				  <a href="index.php?pag=2"><button type="button" class="btn btn-info m">Cliente</button></a>
				  <a href="index.php?pag=3"><button type="button" class="btn btn-info m">Producto</button></a>
				  <a href="index.php?pag=5"><button type="button" class="btn btn-info m">Minutos</button></a>
				  <a href="index.php?pag=7"><button type="button" class="btn btn-info m">Proveedor</button></a> 
				  <a href="index.php?pag=9"><button type="button" class="btn btn-info m">Empleado</button></a>
				  <a href="index.php?pag=11"><button type="button" class="btn btn-info m">Otros</button></a>
				  <a href="index.php?pag=13"><button type="button" class="btn btn-info m">Servicio Tecnico</button></a>
				  <a href="index.php?pag=15"><button type="button" class="btn btn-info m">Servicio T. Entregado</button></a>  
				  <a href=""><button type="button" class="btn btn-info m active">Movimiento</button></a>
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
		      
<?php include('controlador/cmovimiento.php'); ?>


<div class="container-fluid lol">
<div class="eti">Registrar Movimiento</div>

	<form action="" method="POST">
		<div class="form-group campo">
            <label for="">Motivo:</label>
            <input type="text" list="descripcion" name="motivo" required>
                <datalist id="descripcion" >
                   <option> Compra
                   <option> Venta
                   <option> Devolución
                   <option> Reposición
                </datalist>       
		</div>
		<div class="form-group campo">
            <label for="">Referencia:</label>
            <select name="referencia" class="chzn-select form-control">
				<option value=0>Seleccione producto</option>
				<?php for($i=0;$i<count($referencia2);$i++): ?>
					<option value="<?= $referencia2[$i]['referencia'] ?>">
					<?= $referencia2[$i]['referencia'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group campo">
            <label for="">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" required>      
		</div>
		 <div class="form-group campo"> <br>
            <input type="submit" name="Entra" class="btn btn-success" value="+">          		
            <input type="submit" name="Sale"  class="btn btn-danger"  value="-">             
        </div>
	</form>
</div>
<?php $consultamovimiento = $movimiento->consultar_movimiento(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="3">Listado de Movimientos</th>
            </tr>
            <tr>
                <th>ID</th>
				<th>Motivo</th>
				<th>Referencia</th>
				<th>Cantidad</th>
				<th>Edición</th>
				<!--<th>Eliminación</th>-->
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultamovimiento);$i++): ?>
				<tr>
					<td data-title='ID'><?= $consultamovimiento[$i]['idmovimiento'] ?></td>
					<td data-title='Motivo'><?= $consultamovimiento[$i]['motivo'] ?></td>
					<td data-title='Referencia'><?= $consultamovimiento[$i]['referencia'] ?></td>
					<td data-title='Cantidad'><?= $consultamovimiento[$i]['cantidad'] ?></td>					
					<td data-title='Edición'><a href="index.php?pag=17&id=<?= $consultamovimiento[$i]['idmovimiento'] ?>" class="btn btn-primary">Editar</a></td>
					<!--<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idmovimientoeli" value="<?= $consultamovimiento[$i]['idmovimiento'] ?>">
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