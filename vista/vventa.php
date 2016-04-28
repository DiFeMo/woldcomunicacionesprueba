
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
	        <title>Venta</title>
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
	        <link rel="stylesheet" href="css/chosen.css">
	        
	        <script src="js/vendor/jquery-1.10.1.min.js"></script>
	        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	        <script src="js/bootstrap.js"></script>
	        <script src="js/bootstrap-tab.js"></script>
	        <script src="js/jquery-datatable.js"></script>
	        <script src="js/chosen.jquery.js"></script>
	        
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
  <a href=""><button type="button" class="btn btn-info m active">Venta</button></a>
  <a href="index.php?pag=26"><button type="button" class="btn btn-info m">Venta Producto</button></a> 
</div>
<!-- final barra navegacion -->
          
		      <div class="row-fluid">
		        
		        	        
		      
<!-- inicio venta -->
<div class="span4">	
  <?php include("controlador/cventa.php"); ?>
    <div class="container-fluid lol">
        <div class="eti">Registrar Venta</div>
        <form action="" method="POST">
		<div class="form-group campo">
            <label for="">Cliente:</label> 
            <select name="cliente" class="chzn-select" >
				<option value=0>Seleccione cliente</option>
				<?php for($j=0;$j<count($cliente2);$j++): ?>
					<option value="<?= $cliente2[$j]['idcliente'] ?>"><?= $cliente2[$j]['nombre'] ?></option>
				<?php endfor; ?>
			</select>      
		</div>
		<div class="form-group campo">
           <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" >          
		</div>
		<div class="form-group campo">
           <label for="">Empleado:</label> 
            <select name="empleado" class="form-control" >
				<option value=0>Seleccione empleado</option>
				<?php for($j=0;$j<count($empleado2);$j++): ?>
					<option value="<?= $empleado2[$j]['idempleado'] ?>"><?= $empleado2[$j]['nombre'] ?></option>
				<?php endfor; ?>
			</select>           
		</div>
        <div class="form-group campo"> <br> 
              <button type="submit" class="btn btn-success" value="Insertar"><span class="icon-checkmark"></span></button>
        </div>
	</form>	
    </div>
    <!-- Tabla donde se muestra la informacion ingresada-->
    <?php $consultaventa = $venta->consultar_venta(); ?>
    <div class="table-responsive">
        <table class="table">
		<thead>
			<tr>
				<th colspan="12">Ultima venta</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Cliente</th>
				<th>Fecha</th>
				<th>Empleado</th>
			</tr>
		</thead>
		<tbody>
				<?php for($j=0;$j<count($consultaventa);$j++): 
				$cliente1 	= $venta->sel_cliente1($consultaventa[$j]['idcliente']);
				$empleado1 	= $venta->sel_empleado1($consultaventa[$j]['idempleado']);
			?>
				<tr>
					<td><?= $consultaventa[$j]['numero_venta'] ?></td>
					<td><?= $cliente1[0]['nombre'] ?></td>
					<td><?= $consultaventa[$j]['fecha'] ?></td>
					<td><?= $empleado1[0]['nombre'] ?></td>
					<!--<td><a href="index.php?pag=25&idv=<?= $consultaventa[$j]['numero_venta'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idventaeli" value="<?= $consultaventa[$j]['numero_venta'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>-->
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
	</div>
</div>
<!-- final venta -->
          	
<!-- inicio movimiento -->
<div class="span4">			      
<?php include('controlador/cmovimiento.php'); ?>
    
<div class="container-fluid lol">
<div class="eti">Registrar Movimiento</div>

	<form action="" method="POST">
		<div class="form-group campo">
          <input type="hidden" name="motivo" value="Venta" required>
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
        <div class="form-group campo"><br> 
           <button type="submit" name="Sale" class="btn btn-warning" value="-"><span class="icon-minus"></span></button>
        </div>
	</form>	           
</div>
<?php $consultamovimiento = $movimiento->consultar_movimiento_v(); ?>                
                
					<div id=''>
						<table class="table">
				  <thead>
            <tr>
                <th colspan="12">Ultimo movimiento por venta</th>
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
            
 <!-- inicio ventaxproducto -->
<div class="span4">			      
<?php include("controlador/cventaproduc.php"); ?>
    
<div class="container-fluid lol">
<div class="eti">Registrar Valor</div>

	<form action="" method="POST">
		<div class="form-group campo">
            <label for="">Valor Unitario:</label>
            <input type="number" class="form-control" name="valor" required>
            <input type="hidden" name="numero_venta" value="<?= $numero_venta2[0]['numero_venta'] ?>">
            <input type="hidden" name="movimiento" value="<?= $movimiento2[0]['idmovimiento'] ?>">    
		</div>
		 <div class="form-group campo"><br> 
            <button type="submit" class="btn btn-success" value="Insertar"><span class="icon-checkmark"></span></button>
        </div>
	</form>
	<br><br><br>		 
</div>
<?php $consultaventaproduc = $ventaproduc->consultar_ventaproduc_u(); ?>
                
                
                
					<div id='margentabla'>
						<table class="table">
				  <thead>
            <tr>
                <th colspan="12">Ultimo Valor</th>
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
					<td><?= $consultaventaproduc[$i]['numero_venta'] ?></td>
					<td><?= $consultaventaproduc[$i]['movimiento'] ?></td>
					<td><?= $consultaventaproduc[$i]['precio_venta'] ?></td>
					<td><a href="index.php?pag=27&id=<?= $consultaventaproduc[$i]['numero_venta'] ?>&idm=<?= $consultaventaproduc[$i]['movimiento']?>" class="btn btn-primary">Editar</a></td>
				</tr>
			<?php endfor; ?>
        </tbody>
						</table>
					</div>



		        </div>
<!-- final ventaxproducto -->	           	        	        
		        <!--/span-->

          
		      </div><!--/row-->

				<br/><br/>    

		    </div><!--container-fluid-->
<div class="row-fluid"><!--spoiler de informacion-->
    <input type="checkbox"  id="spoiler2" /> 
      <label for="spoiler2" >Acerca de la venta</label>
    <div class="spoiler">
      <div class="info">
              <h5>¿Como realizo una venta?</h5>
               <ul>
                   <li>Ingresar los datos de la venta (Cliente, Fecha y Empleado) y registrarlos con el boton <span class="icon-checkmark tama"></span> este paso se realiza una vez por cada venta</li>
                   <li>Ingresar los datos del movimiento (Referencia y Cantidad) y registrarlos con el boton <span class="icon-minus tama2"></span> este paso se puede repetir varias veces por cada venta</li>
                   <li>Ingresar el dato del valor (Valor Unitario) y registrarlo con el boton <span class="icon-checkmark tama"></span>  este paso se puede repetir varias veces por cada venta</li>
               </ul>
        <span style="font-weight: bold">Nota:</span> No intente registrar todos los movimentos uno tras otro y luego todos los valores correspondientes a estos, asegurese de registrar un formulario a la vez ya que siempre debe registrar el valor despues de haber registrado el movimiento. 
      </div>
    </div>
</div>
<br><br>
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
				        "bPaginate": false,
				        "bLengthChange" false,
				        "bFilter": false,
				        "bSort": false,
				        "bInfo": false,
				        "bAutoWidth": false
				    } );
				} );	
			</script>	

			<script type="text/javascript">
				$(function() {
    				$(".chzn-select").chosen();
				});
			</script>

		</body>
	</html>