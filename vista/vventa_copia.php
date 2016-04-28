<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Venta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="css/miestilo.css" media="screen">
</head>
<body>
<?php //include('controlador/cmovimiento.php'); ?>
<?php include("controlador/cventa.php"); ?>

<div  class="formulario" >
	<h1>Insertar Venta</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Cliente:</label> 
            <select name="cliente" class="form-control" >
				<option value=0>Seleccione cliente</option>
				<?php for($j=0;$j<count($cliente2);$j++): ?>
					<option value="<?= $cliente2[$j]['idcliente'] ?>"><?= $cliente2[$j]['nombre'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Empleado:</label> 
            <select name="empleado" class="form-control" >
				<option value=0>Seleccione empleado</option>
				<?php for($j=0;$j<count($empleado2);$j++): ?>
					<option value="<?= $empleado2[$j]['idempleado'] ?>"><?= $empleado2[$j]['nombre'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
        
    </form>
<!-- Tabla donde se muestra la informacion ingresada-->
<?php $consultaventa = $venta->consultar_venta(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">venta</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Cliente</th>
				<th>Fecha</th>
				<th>Empleado</th>
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
	