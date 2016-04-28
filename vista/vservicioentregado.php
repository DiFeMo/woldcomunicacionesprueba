	
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
	        <title>Servicio T. Entregado</title>
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

<!-- Script para generar el saldo que queda  por cancelar-->
    <script>
    $(function(){
 	$('#orden').change(function() {
    	selectedOption = $('option:selected', this);
    	var a = parseInt($('input[name=saldo1]').val( selectedOption.data('precio')));
    	var b = parseInt($('input[name=saldo2]').val( selectedOption.data('abono')));
    	$('input[name=saldo_cancel]').val( selectedOption.data('precio')- selectedOption.data('abono'));
	}).change();
});

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
  <a href=""><button type="button" class="btn btn-info m active">Servicio T. Entregado</button></a>  
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
		      
<?php include("controlador/cservicioentregado.php"); ?>


<div class="container-fluid lol">
<div class="eti">Servicio Tecnico Entregado</div>

	<form action="" method="POST">
		<div class="form-group campo">
            <label for="">No. Orden:</label>
             <select name="numero_orden" id="orden" class="form-control" required>
				<option value=0>Seleccione No. Orden</option>
				<?php for($i=0;$i<count($numorden2);$i++): ?>
					<option value="<?= $numorden2[$i]['numero_orden'];?>" data-precio="<?= $numorden2[$i]['precio_cliente'] ?>" data-abono="<?= $numorden2[$i]['abono'] ?>"><?= $numorden2[$i]['numero_orden'] ?></option>
				<?php endfor; ?>
			</select>    
		</div>
		<div class="form-group campo">
             <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" required>        
		</div>
		<div class="form-group campo">
            <label for="">Precio:</label>
            <input type="text" class="form-control" name="saldo1" id="sal1" readonly>       
		</div>
		<div class="form-group campo">
            <label for="">Abono:</label>
            <input type="text" class="form-control" name="saldo2" id="sal2" readonly>     
		</div>
		<div class="form-group campo">
            <label for="">Saldo Pendiente:</label>
            <input type="text" class="form-control" name="saldo_cancel" id="saldo" readonly >       
		</div>
		 <div class="form-group campo"> <br>          		
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
	</form>
</div>
<?php $consultaservicioentregado = $servicioentregado->consultar_servicioentregado(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="3">Listado de Servicio T. Entregado</th>
            </tr>
            <tr>
                <th>No. Orden</th>
				<th>Fecha</th>
				<th>Saldo Cancelado</th>
				<!--<th>Edición</th>
				<th>Eliminación</th>-->
            </tr>
        </thead>
        <tbody>
           <?php for($i=0;$i<count($consultaservicioentregado);$i++): 
            $numorden1 = $servicioentregado->sel_orden1($consultaservicioentregado[$i]['numero_orden']);
            
            ?>
				<tr>
					<td data-title='No. Orden'><?= $numorden1[0]['numero_orden'] ?></td>
					<td data-title='Fecha'><?= $consultaservicioentregado[$i]['fecha'] ?></td>
					<td data-title='Saldo Cancelado'>$ <?= number_format($consultaservicioentregado[$i]['saldo_cancel']) ?></td>
					<!--<td><a href="index.php?pag=4&id=<?= $consultaservicioentregado[$i]['numero_orden'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idserventeli" value="<?= $consultaservicioentregado[$i]['numero_orden'] ?>">
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