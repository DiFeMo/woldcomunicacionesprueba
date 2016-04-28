<?php include("controlador/cminutosvalor.php"); ?>

<?php $consultaminutosvalor = $minutosvalor->consultar_minutosvalor(); ?>
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
			<?php for($i=0;$i<count($consultaminutosvalor);$i++): ?>
				<tr>
					<td><?= $consultaminutosvalor[$i]['idminutosvalor'] ?></td>
					<td><?= $consultaminutosvalor[$i]['costo_compra'] ?></td>
					<td><?= $consultaminutosvalor[$i]['valor_venta'] ?></td>
					<td><a href="index.php?pag=30&id=<?= $consultaminutosvalor[$i]['idminutosvalor'] ?>" class="btn btn-primary">Editar</a></td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>