<?php include("controlador/cminutosvalor.php"); ?>


<div class="row-fluid">
	<h1>Editar minutos valor</h1>

	<form action="index.php?pag=29&id=<?= $idminutosvalor?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Costo compra:</label>
            <input type="number" class="form-control" name="costo_compra" value="<?= $consultaedit[0]['costo_compra'] ?>" required>
			<input type="hidden" name="idminutosvalor" value="<?= $idminutosvalor ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
            <label for="">Valor venta:</label>
            <input type="number" class="form-control" name="valor_venta" value="<?= $consultaedit[0]['valor_venta'] ?>" required>
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
        </div>
	</form>
</div>
