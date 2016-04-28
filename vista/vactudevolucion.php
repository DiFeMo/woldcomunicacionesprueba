<?php include("controlador/cdevolucion.php"); ?>

<div class="row-fluid">
	<h1>Editar Devoluciòn</h1>

	<form action="index.php?pag=18&id=<?= $iddevolucion?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Motivo:</label>
            <input type="text" class="form-control" name="motivo" value="<?= $consultaedit[0]['motivo'] ?>" required>
			<input type="hidden" name="iddevolucion" value="<?= $iddevolucion ?>">
			<input type="hidden" name="movimiento" value="<?= $consultaedit[0]['movimiento']  ?>">
			<input type="hidden" name="fecha" value="<?= $consultaedit[0]['fecha']  ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Numero de Compra:</label>
            <input type="text" class="form-control" name="numero_compra" value="<?= $consultaedit[0]['numero_compra']  ?>" >
		</div>
		<div class="form-group col-lg-6">
			<label for="">Costo:</label>
            <input type="text" class="form-control" name="costo" value="<?= $consultaedit[0]['costo']  ?>" >
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=18" class="btn btn-success">Volver</a>
        </div>
	</form>
	
</div>