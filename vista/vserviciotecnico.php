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
	        <title>Servicio Tecnico</title>
	        <meta name="description" content="??">
	        

	        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
            
	        <link rel="stylesheet" href="css/normalize.css">
	        <link rel="stylesheet" href="css/main.css">
	        <link rel="stylesheet" href="css/bootstrap.css"/>
	        <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
	        <link rel="stylesheet" href="css/tablaResponsive.css"/>
	        <link rel="stylesheet" href="css/datatable.css"/>
	        <link rel="stylesheet" href="css/chosen.css">
	        <link rel="stylesheet" href="css/estilo.css">
	        <link rel="stylesheet" href="fonts/style.css">
	        
	        <script src="js/vendor/jquery-1.10.1.min.js"></script>
	        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	        <script src="js/bootstrap.js"></script>
	        <script src="js/bootstrap-tab.js"></script>
	        <script src="js/jquery-datatable.js"></script>
	        <script src="js/chosen.jquery.js"></script>
	        
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
  <a href=""><button type="button" class="btn btn-info m active">Servicio Tecnico</button></a>
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
		      
<?php include("controlador/cserviciotecnico.php"); ?>


<div class="container-fluid lol">
<div class="eti">Servicio Tecnico</div>

	<form action="" method="POST">
		<div class="form-group campo">
            <label for="">Tipo de Dispositivo:</label>
            <input type="text" class="form-control" name="nombre" required>      
		</div>
		<div class="form-group campo">
             <label for="">Marca:</label>
            <input type="text" class="form-control" name="marca" required>     
		</div>
		<div class="form-group campo">
            <label for="">Referencia:</label>
            <input type="text" class="form-control" name="referencia" required >           
		</div>
		<div class="form-group campo">
             <label for="">Descripcion del servicio:</label>
            <textarea name="descripcion_st" rows="1" cols="30" required> </textarea>     
		</div>
		<div class="form-group campo">
             <label for="">Observacion:</label>
            <input type="text" class="form-control" name="observacion">           
		</div>
		<div class="form-group campo">
           <label for="">Costo del servicio:</label>
            <input type="number" class="form-control" name="costo_st" required >        
		</div>
		<div class="form-group campo">
             <label for="">Precio al cliente:</label>
            <input type="number" class="form-control" name="precio_cliente" required >     
		</div>
		<div class="form-group campo">
           <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" required >  
		</div>
		<div class="form-group campo">
            <label for="">Cliente:</label>
            <select name="id_cliente" class="chzn-select form-control" required>
				<option value=0>Seleccione empleado</option>
				<?php for($i=0;$i<count($cliente2);$i++): ?>
					<option value="<?= $cliente2[$i]['idcliente'] ?>"><?= $cliente2[$i]['nombre'] ?></option>
				<?php endfor; ?>
			</select>            
		</div>
		<div class="form-group campo">
            <label for="">Empleado:</label>
            <select name="empleado" class="chzn-select form-control" required>
				<option value=0>Seleccione empleado</option>
				<?php for($i=0;$i<count($empleado2);$i++): ?>
					<option value="<?= $empleado2[$i]['idempleado'] ?>"><?= $empleado2[$i]['nombre'] ?></option>
				<?php endfor; ?>
			</select>         
		</div>
		<div class="form-group campo">
           <label for="">Abono:</label>
            <input type="number" class="form-control" name="abono" required >       
		</div>
		 <div class="form-group campo"> <br>  
            <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
        </div>
	</form>
</div>
<?php $consultaserviciotecnico = $serviciotecnico->consultar_serviciotecnico(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  <thead>
            <tr>
                <th colspan="3">Listado de Servicio Tecnico</th>
            </tr>
            <tr>
                <th>No. Orden</th>
				<th>Dispositivo</th>
				<th>Marca</th>
				<th>Referencia</th>
				<th>Descripcion</th>
				<th>Observacion</th>
				<th>Costo Servicio</th>
				<th>Precio Cliente</th>
				<th>Fecha Recibido</th>
				<th>ID Cliente</th>
				<th>ID Empleado</th>
				<th>Abono Cliente</th>
				<th>Edición</th>
				<th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultaserviciotecnico);$i++): 
				$empleado1 = $serviciotecnico->sel_empleado1($consultaserviciotecnico[$i]['empleado']);
				$cliente1 = $serviciotecnico->sel_cliente1($consultaserviciotecnico[$i]['id_cliente']);
			?>
				<tr>
					<td data-title='No. Orden'><?= $consultaserviciotecnico[$i]['numero_orden'] ?></td>
					<td data-title='Dispositivo'><?= $consultaserviciotecnico[$i]['nombre'] ?></td>
					<td data-title='Marca'><?= $consultaserviciotecnico[$i]['marca'] ?></td>
					<td data-title='Referencia'><?= $consultaserviciotecnico[$i]['referencia'] ?></td>
					<td data-title='Descripcion'><?= $consultaserviciotecnico[$i]['descripcion_st'] ?></td>
					<td data-title='Observacion'><?= $consultaserviciotecnico[$i]['observacion'] ?></td>
					<td data-title='Costo Servicio'>$ <?= number_format($consultaserviciotecnico[$i]['costo_st']) ?></td>
					<td data-title='Precio Cliente'>$ <?= number_format($consultaserviciotecnico[$i]['precio_cliente']) ?></td>
					<td data-title='Fecha'><?= $consultaserviciotecnico[$i]['fecha'] ?></td>
					<td data-title='ID Cliente'><?= $cliente1[0]['nombre'] ?></td>
					<td data-title='ID Empleado'><?= $empleado1[0]['nombre'] ?></td>
					<td data-title='Abono'>$ <?= number_format($consultaserviciotecnico[$i]['abono']) ?></td>
					<td data-title='Edición'><a href="index.php?pag=14&id=<?= $consultaserviciotecnico[$i]['numero_orden'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
					<td data-title='Eliminación'>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idserviteceli" value="<?= $consultaserviciotecnico[$i]['numero_orden'] ?>">
							<button type="submit" class="btn btn-danger" value="Eliminar"><span class="icon-bin"></span></button>
						</form>
					</td>
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

			<script type="text/javascript">
				$(function() {
    				$(".chzn-select").chosen();
				});
			</script>
			
		</body>
	</html>