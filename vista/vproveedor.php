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
	       	<title>Proveedores</title>
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
			  	<a href="index.php?pag=5"><button type="button" class="btn btn-info m">Minutos</button></a>
			  	<a href=""><button type="button" class="btn btn-info m active">Proveedor</button></a> 
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

		     	<?php include("controlador/cproveedor.php"); ?>

				<div class="container-fluid lol">
					<div class="eti">Proveedor</div>
    				<form action="" method="POST">
						<div class="form-group campo">
    				        <label for="">Identificacion proveedor:</label>
    				        <input type="text" class="form-control" name="idproveedor" required>    
						</div>
						<div class="form-group campo">
    				        <label for="">Nombre proveedor:</label>
    				        <input type="text" class="form-control" name="nombre" required>        
						</div>
						<div class="form-group campo">
    				        <label for="">contacto:</label>
    				        <input type="text" class="form-control" name="contacto">        
						</div>
						<div class="form-group campo">
    				        <label for="">Telefono proveedor:</label>
    				        <input type="number" class="form-control" name="telefono" required >          
						</div>
						<div class="form-group campo">
    				        <label for="">Telefono contacto:</label>
    				        <input type="number" class="form-control" name="telefono2">          
						</div>
						<div class="form-group campo">
    				        <label for="">Email:</label>
    				        <input type="email" class="form-control" name="email">          
						</div>
						<div class="form-group campo">
    				        <label for="">Descripcion:</label>
    				        <input type=text list=descripcion name="descripcion" required>
    				            <datalist id="descripcion" >
    				               <option> Local </option>
    				               <option> Proveedor </option>
    				            </datalist>        
						</div>
		 				<div class="form-group campo"> <br>          		
            				<button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
        				</div>
					</form>
				</div>
				<?php $consultaproveedor = $proveedor->consultar_proveedor(); ?>
					<div id='no-more-tables'>
						<table class="table table-bordered table-hover" id="example">
				  		<thead>
            				<tr>
            				    <th colspan="3">Listado de Proveedores</th>
            				</tr>
            				<tr>
            				    <th>Identificacion proveeedor</th>
								<th>Nombre proveedor</th>
								<th>Contacto</th>
								<th>Telefono proveedor</th>
								<th>Telefono contacto</th>
								<th>Email</th>
								<th>Descripcion</th>
								<th>Edición</th>
            				</tr>
        				</thead>
        				<tbody>
        				    <?php for($i=0;$i<count($consultaproveedor);$i++): 
        				    	//$proveedor1 = $compra->sel_proveedor1($consultacompra[$j]['proveedor']);
        				    ?>
								<tr>
									<td data-title='Identificacion proveeedor'><?= $consultaproveedor[$i]['idproveedor'] ?></td>
									<td data-title='Nombre proveedor'><?= $consultaproveedor[$i]['nombre'] ?></td>
									<td data-title='Contacto'><?= $consultaproveedor[$i]['contacto'] ?></td>
									<td data-title='Telefono proveedor'><?= $proveedor->formato_telefono_general($consultaproveedor[$i]['telefono']) ?></td>
									<td data-title='Telefono contacto'><?= $proveedor->formato_telefono_general($consultaproveedor[$i]['telefono2']) ?></td>
									<td data-title='Email'><?= $consultaproveedor[$i]['email'] ?></td>
									<td data-title='Descripcion'><?= $consultaproveedor[$i]['descripcion'] ?></td>
									<td data-title='Edición'><a href="index.php?pag=8&id=<?= $consultaproveedor[$i]['idproveedor'] ?>" class="btn btn-primary"><span class="icon-pencil2"></a></td>
									<!--<td>
										<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
											<input type="hidden" name="idproveeli" value="<?= $consultaproveedor[$i]['idproveedor'] ?>">
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
