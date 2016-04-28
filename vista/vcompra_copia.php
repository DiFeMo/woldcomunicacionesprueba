<?php include("controlador/ccompra.php"); ?>
<?php include('controlador/cmovimiento.php'); ?>
<?php include("controlador/ccompraproduc.php"); ?>   

<div class="container-fluid">
	<h1>Insertar Compra</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Proveedor:</label> 
            <select name="proveedor" class="form-control" >
				<option value=0>Seleccione proveedor</option>
				<?php for($j=0;$j<count($proveedor2);$j++): ?>
					<option value="<?= $proveedor2[$j]['idproveedor'] ?>"><?= $proveedor2[$j]['nombre'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" >       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
</div>
<!-- //////////////////////////////////////////////////////////-->

<div class="container-fluid">
	<h1>Insertar Movimiento</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Motivo:</label>
            <input type=text list=descripcion name="motivo" >
                <datalist id=descripcion >
                   <option> Compra
                   <option> Venta
                   <option> Devolución
                   <option> Reposición
                </datalist> 
		</div>
		<div class="form-group col-lg-6">
            <label for="">Referencia:</label>
            <input type="text" class="form-control" name="referencia" >       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" >       
		</div>		
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" name="Sale" class="btn btn-success" value="-"> 
            <input type="submit" name="Entra" class="btn btn-danger" value="+">
        </div>
	</form>
</div>
<!-- //////////////////////////////////////////////////////////-->

<div class="container-fluid">
	<h1>Insertar Compra por producto</h1>

	<form action="" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Numero de compra:</label> 
            <select name="numero_compra" class="form-control" >
				<option value=0>Seleccione una opcion</option>
				<?php for($i=0;$i<count($numero_compra2);$i++): ?>
					<option value="<?= $numero_compra2[$i]['numero_compra'] ?>"><?= $numero_compra2[$i]['numero_compra'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Movimiento:</label> 
            <select name="movimiento" class="form-control" >
				<option value=0>Seleccione movimiento</option>
				<?php for($i=0;$i<count($movimiento2);$i++): ?>
					<option value="<?= $movimiento2[$i]['idmovimiento'] ?>"><?= $movimiento2[$i]['idmovimiento'] ?></option>
				<?php endfor; ?>
			</select>       
		</div>
		<div class="form-group col-lg-6">
            <label for="">Valor Unitario:</label>
            <input type="number" class="form-control" name="valor" required>       
		</div>
		 <div class="form-city col-lg-6">
			<br>
            <input type="submit" class="btn btn-success" value="Insertar">
        </div>
    </div>
    <!-- //////////////////////////////////////////////////////-->
    <?php $consultacompra = $compra->consultar_compra(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Compra</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Proveedor</th>
				<th>Fecha</th>
		</thead>
		<tbody>
			<?php for($j=0;$j<count($consultacompra);$j++): 
				$proveedor1 = $compra->sel_proveedor1($consultacompra[$j]['proveedor']);
			?>
				<tr>
					<td><?= $consultacompra[$j]['numero_compra'] ?></td>
					<td><?= $proveedor1[0]['nombre'] ?></td>
					<td><?= $consultacompra[$j]['fecha'] ?></td>
					<td><a href="index.php?pag=6&idc=<?= $consultacompra[$j]['numero_compra'] ?>" class="btn btn-primary">Editar</a></td>
					<td>
						<form action="" method="POST" onSubmit="return confirm('Desea eliminar el registro!');">
							<input type="hidden" name="idcompraeli" value="<?= $consultacompra[$j]['numero_compra'] ?>">
							<input type="submit" class="btn btn-danger" value="Eliminar">
						</form>
					</td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
<?php $consultacompraproduc = $compraproduc->consultar_compraproduc(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">Compra</th>
			</tr>
			<tr>
				<th>ID Compra</th>
				<th>ID Movimiento</th>
				<th>Valor Unirario</th>
		</thead>
		<tbody>
			<?php for($i=0;$i<count($consultacompraproduc);$i++): ?>
				<tr>
					<td><?= $consultacompraproduc[$i]['numero_compra'] ?></td>
					<td><?= $consultacompraproduc[$i]['movimiento'] ?></td>
					<td><?= $consultacompraproduc[$i]['valor'] ?></td>
					
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
<?php $consultamovimiento = $movimiento->consultar_movimiento(); ?>
	<table class="table">
		<thead>
			<tr>
				<th colspan="3">movimiento</th>
			</tr>
			<tr>
				<th>ID</th>
				<th>Motivo</th>
				<th>Referencia</th>
				<th>Cantidad</th>
				<th>Edición</th>
				<th>Eliminación</th>
			</tr>
		</thead>
		<tbody>
			<?php for($k=0;$k<count($consultamovimiento);$k++): ?>
				<tr>
					<td><?= $consultamovimiento[$k]['idmovimiento'] ?></td>
					<td><?= $consultamovimiento[$k]['motivo'] ?></td>
					<td><?= $consultamovimiento[$k]['referencia'] ?></td>
					<td><?= $consultamovimiento[$k]['cantidad'] ?></td>					
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>