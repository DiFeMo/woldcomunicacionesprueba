<?php include("controlador/cproveedor.php"); ?>

<div class="row-fluid">
	<h1>Editar Proveedor</h1>

	<form action="index.php?pag=7&id=<?= $idprovee?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Identificacion proveedor::</label>
			<input type="text" class="form-control" name="idproveedor" value="<?= $consultaedit[0]['idproveedor'] ?>" readonly>
			<input type="hidden" name="idprovee" value="<?= $idprovee ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Nombre proveedor:</label>
            <input type="text" class="form-control" name="nombre"  value="<?= $consultaedit[0]['nombre']  ?>" readonly>
		</div>
		<div class="form-group col-lg-6">
			<label for="">contacto:</label>
            <input type="text" class="form-control" name="contacto" value="<?= $consultaedit[0]['contacto'] ?>" >
		</div>
		<div class="form-group col-lg-6">
			<label for="">Telefono proveedor:</label>
            <input type="number" class="form-control" name="telefono" value="<?= $consultaedit[0]['telefono']  ?>" required>
		</div>
		<div class="form-group col-lg-6">
			<label for="">Telefono contacto:</label>
            <input type="number" class="form-control" name="telefono2"  value="<?= $consultaedit[0]['telefono2']  ?>">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Email:</label>
            <input type="email" class="form-control" name="email" value="<?= $consultaedit[0]['email'] ?>">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Descripcion:</label>
            <input type="text" class="form-control" name="descripcion" value="<?= $consultaedit[0]['descripcion']  ?>" readonly>
		</div>
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>