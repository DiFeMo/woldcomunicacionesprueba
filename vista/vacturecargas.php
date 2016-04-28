<?php include("controlador/crecargas.php"); ?>

<div class="row-fluid">
	<h1>Editar Datos de las Recargas</h1>

	<form action="index.php?pag=31&id=<?= $idrecarga?>" method="POST">
		<div class="form-group col-lg-6">
            <label>Venta Recargas:</label>
            <input type="number" class="form-control" name="venta_recarga" value="<?= $consultaedit[0]['venta_recarga'] ?>" required>
			<input type="hidden" name="idrecarga" value="<?= $idrecarga ?>">
			<input type="hidden" name="fecha" value="<?= $consultaedit[0]['fecha'] ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=31" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>