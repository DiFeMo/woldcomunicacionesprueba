<?php include("controlador/cminutos.php"); ?>

<div class="row-fluid">
	<h1>Editar minutos</h1>

	<form action="index.php?pag=5&id=<?= $idminutos?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Cantidad minutos:</label>
            <input type="number" class="form-control" name="cantidad" value="<?= $consultaedit[0]['cantidad'] ?>" required>
			<input type="hidden" name="idminutos" value="<?= $idminutos ?>">
			<input type="hidden" name="fecha" value="<?= $consultaedit[0]['fecha'] ?>">
			<input type="hidden" value="<?= $compra2[0]['costo_compra']?>" class="form-control" name="compra">
            <input type="hidden" value="<?= $venta2[0]['valor_venta']?>" class="form-control" name="venta">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=5" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>