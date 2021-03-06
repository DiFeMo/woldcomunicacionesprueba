	
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
	        <title>Reposicion</title>
	        <meta name="description" content="??">
	        

	        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
            
	        <link rel="stylesheet" href="css/normalize.css">
	        <link rel="stylesheet" href="css/main.css">
	        <link rel="stylesheet" href="css/bootstrap.css"/>
	        <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
	        <link rel="stylesheet" href="css/tablaResponsive.css"/>
	        <link rel="stylesheet" href="css/datatable.css"/>
	        <link rel="stylesheet" href="css/estilo.css">
	        
	        <script src="js/vendor/jquery-1.10.1.min.js"></script>
	        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	        <script src="js/bootstrap.js"></script>
	        <script src="js/bootstrap-tab.js"></script>
	        <script src="js/jquery-datatable.js"></script>
	        
	    </head>	
	
	
	
	
		<body >


<script type="text/javascript"><!--
google_ad_client = "ca-pub-2988710215164311";
/* acaxaomx_main_Blog1_468x60_as */
google_ad_slot = "7358473375";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>  
        
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
  <a href="index.php?pag=16"><button type="button" class="btn btn-info m">Movimiento</button></a>
  <a href="index.php?pag=18"><button type="button" class="btn btn-info m">Devolucion</button></a>
  <a href="index.php?pag=19"><button type="button" class="btn btn-info m">Compra</button></a>
  <a href="index.php?pag=20"><button type="button" class="btn btn-info m">Compra Producto</button></a> 
  <a href=""><button type="button" class="btn btn-info m active">Reposicion</button></a>
  <a href="index.php?pag=24"><button type="button" class="btn btn-info m">Venta</button></a>
  <a href="index.php?pag=26"><button type="button" class="btn btn-info m">Venta Producto</button></a> 
</div>
<!-- final barra navegacion -->
          
		      <div class="row-fluid">
		        
		        	        
		      
<!-- inicio movimiento -->
<div class="span6">	
   <?php include('controlador/cmovimiento.php'); ?>
    <div class="container-fluid lol">
        <div class="eti">Insertar Movimiento</div>
        <form action="" method="POST">
		<div class="form-group campo">
            <input type="hidden" name="motivo" value="Reposición" required>
            <label for="">Referencia:</label>
            <select name="referencia" class="form-control">
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
            <input type="submit" name="Sale" class="btn btn-danger" value="-"> 
        </div>
	</form>	
    <div class="campo">
                Si el producto que va a reponer no esta esta en el inventario actualmente, por favor registre la referencia antes de hacer la reposicion
                <a href="index.php?pag=3">Registrar referencia</a> 
            </div>
    </div>
    <?php $consultamovimiento = $movimiento->consultar_movimiento_r(); ?>
    <div class="table-responsive">
        <table class="table">
		<thead>
			<tr>
				<th>Ultimo Movimiento de Reposicion</th>
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
					<td><?= $consultamovimiento[$i]['idmovimiento'] ?></td>
					<td><?= $consultamovimiento[$i]['motivo'] ?></td>
					<td><?= $consultamovimiento[$i]['referencia'] ?></td>
					<td><?= $consultamovimiento[$i]['cantidad'] ?></td>					
					<td><a href="index.php?pag=17&id=<?= $consultamovimiento[$i]['idmovimiento'] ?>" class="btn btn-primary">Editar</a></td>
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
</div>
<!-- final movimiento -->
          	
<!-- inicio reposicion -->
<div class="span6">			      
<?php include('controlador/creposicion.php'); ?>
    
<div class="container-fluid lol">
<div class="eti">Insertar Reposicion</div>

	<form action="" method="POST">
		<div class="form-group campo">
            <input type="hidden" name="movimiento" value="<?= $movimiento2[0]['idmovimiento'] ?>">
		</div>
		<div class="form-group campo">
           <label for="">No. Compra:</label>
            <input type="number" class="form-control" name="numero_compra">       
		</div>
		<div class="form-group campo">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha">        
		</div>
		 <div class="form-group campo"> <br>          		
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>	           
</div>
<?php $consultareposicion = $reposicion->consultar_reposicion(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="3">Listado de Reposiciones</th>
            </tr>
            <tr>
                <th>ID</th>
				<th>Movimiento</th>
				<th>No. Compra</th>	
				<th>Fecha</th>				
				<!--<th>Edición</th>
				<th>Eliminación</th>-->
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultareposicion);$i++): ?>
				<tr>
					<td data-title='ID'><?= $consultareposicion[$i]['idreposicion'] ?></td>
					<td data-title='Movimiento'><?= $consultareposicion[$i]['movimiento'] ?></td>
					<td data-title='No. Compra'><?= $consultareposicion[$i]['numero_compra'] ?></td>
					<td data-title='Fecha'><?= $consultareposicion[$i]['fecha'] ?></td>					
					<!--<td><a href="index.php?pag=6&id=<?= $consultareposicion[$i]['idreposicion'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idreposicioneli" value="<?= $consultareposicion[$i]['idreposicion'] ?>">
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
<!-- final reposicion -->

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
            
            