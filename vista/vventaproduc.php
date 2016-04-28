	
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
	        <title>Venta por Producto</title>
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
  <a href="index.php?pag=21"><button type="button" class="btn btn-info m">Reposicion</button></a>
  <a href="index.php?pag=24"><button type="button" class="btn btn-info m">Venta</button></a>
  <a href=""><button type="button" class="btn btn-info m active">Venta Producto</button></a> 
</div>
<!-- final barra navegacion -->
          
		      <div class="row-fluid">
		        
		        <div class="span12">
		      
<?php include("controlador/cventaproduc.php"); ?>


<div class="container-fluid lol">
<div class="eti">Insertar Venta por producto</div>

	<form action="" method="POST">
		<div class="form-group campo">
            <label for="">Numero de venta:</label> 
            <select name="numero_venta" class="form-control" required>
				<option value=0>Seleccione una opcion</option>
				<?php for($i=0;$i<count($numero_venta2);$i++): ?>
					<option value="<?= $numero_venta2[$i]['numero_venta'] ?>"><?= $numero_venta2[$i]['numero_venta'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group campo">
            <label for="">Movimiento:</label> 
            <select name="movimiento" class="form-control" required>
				<option value=0>Seleccione movimiento</option>
				<?php for($i=0;$i<count($movimiento2);$i++): ?>
					<option value="<?= $movimiento2[$i]['idmovimiento'] ?>"><?= $movimiento2[$i]['idmovimiento'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group campo">
           <label for="">Valor Unitario:</label>
            <input type="number" class="form-control" name="valor" required>  
		</div>	
		 <div class="form-group campo"> <br>          		
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
</div>
<?php $consultaventaproduc = $ventaproduc->consultar_ventaproduc(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="3">Listado de Ventas por Producto</th>
            </tr>
            <tr>
                <th>ID Venta</th>
				<th>ID Movimiento</th>
				<th>Valor Unirario</th>
				<th>Edición</th>
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultaventaproduc);$i++): ?>
				<tr>
					<td data-title='ID Venta'><?= $consultaventaproduc[$i]['numero_venta'] ?></td>
					<td data-title='ID Movimiento'><?= $consultaventaproduc[$i]['movimiento'] ?></td>
					<td data-title='Valor Unirario'><?= "$ ".$consultaventaproduc[$i]['precio_venta'] ?></td>
					<td data-title='Edición'><a href="index.php?pag=27&id=<?= $consultaventaproduc[$i]['numero_venta'] ?>&idm=<?= $consultaventaproduc[$i]['movimiento']?>" class="btn btn-primary">Editar</a></td>
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