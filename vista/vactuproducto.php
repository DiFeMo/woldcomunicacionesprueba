<?php include("controlador/cproducto.php"); ?>

<div class="row-fluid">
	<h1>Editar Producto</h1>

	<form action="index.php?pag=3&id=<?= $idproduc?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Referencia:</label>
			<input type="text" class="form-control" name="referencia" value="<?= $consultaedit[0]['referencia'] ?>" readonly>
			<input type="hidden" name="refe" value="<?= $idproduc ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Clase:</label>
			<input type="text" class="form-control" name="nombre" value="<?= $consultaedit[0]['nombre']  ?>" >
		</div>
		<div class="form-group col-lg-6">
			<label for="">Marca:</label>
			<input type="text" class="form-control" name="marca" value="<?= $consultaedit[0]['marca'] ?>" >
		</div>
		<div class="form-group col-lg-6">
			<label for="">Precio:</label>
			<input type="number" class="form-control" name="precio" value="<?= $consultaedit[0]['precio']  ?>" >
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=3" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>