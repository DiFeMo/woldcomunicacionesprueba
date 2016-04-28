	
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
	        <title>Clientes</title>
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
  <a href=""><button type="button" class="btn btn-info m active">Cliente</button></a>
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
  <a href="index.php?pag=26"><button type="button" class="btn btn-info m">Venta Producto</button></a>
  <a href="index.php?pag=31"><button type="button" class="btn btn-info m">Recargas</button></a>  
</div>
<!-- final barra navegacion -->
          
		      <div class="row-fluid">
		        
		        <div class="span12">	      
		      
<?php include('controlador/ccliente.php'); ?>


<div class="container-fluid lol">
<div class="eti">Cliente</div>

	<form action="" method="POST">
		<div class="form-group campo">
            <label for="">Nombre Cliente:</label>
            <input type="text" class="form-control" name="nombre">       
		</div>
		<div class="form-group campo">
            <label for="">Teléfono:</label>
            <input type="text" class="form-control" name="telefono">       
		</div>
		<div class="form-group campo">
            <label for="">Dirección:</label>
            <input type="text" class="form-control" name="direccion">       
		</div>
		<div class="form-group campo">
            <label for="">Email:</label>
            <input type="text" class="form-control" name="email">       
		</div>
		<div class="form-group campo">
            <label for="">Detalle:</label>
            <input type="text" list="detalle" name="detalle">
                <datalist id="detalle" >
                   <option> Cliente </option>
                   <option> Traspaso </option>
                </datalist>       
		</div>
		 <div class="form-group campo"> <br>          		
            <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
        </div>
	</form>
</div>
<?php $consultacliente = $cliente->consultar_cliente(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="3">Listado de Clientes</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>E-mail</th>
                <th>Detalle</th>
                <th>Edición</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultacliente);$i++): ?>
                <tr>
                    <td data-title='ID'><?= $consultacliente[$i]['idcliente'] ?></td>
                    <td data-title='Nombre'><?= $consultacliente[$i]['nombre'] ?></td>
                    <td data-title='Teléfono'><?= $cliente->formato_telefono_general($consultacliente[$i]['telefono']) ?></td>
                    <td data-title='Dirección'><?= $consultacliente[$i]['direccion'] ?></td>
                    <td data-title='E-mail'><?= $consultacliente[$i]['email'] ?></td>
                    <td data-title='Detalle'><?= $consultacliente[$i]['detalle'] ?></td>                  
                    <td data-title='Edición'><a href="index.php?pag=22&id=<?= $consultacliente[$i]['idcliente'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
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