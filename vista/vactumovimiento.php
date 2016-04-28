<?php include("controlador/cmovimiento.php"); ?>

<div class="row-fluid">
	<h1>Editar Movimiento</h1>

	<form action="index.php?pag=16&id=<?= $idproduc?>" method="POST">
	    <div class="form-group col-lg-6">
			<label for="">Motivo:</label>
            <input type=text  list=descripcion name="motivo" value="<?= $consultaedit[0]['motivo'] ?>" readonly>
                <datalist id=descripcion >
                   <option> Compra
                   <option> Venta
                   <option> Devolución
                   <option> Reposición
                </datalist>        
		</div>
		<div class="form-group col-lg-6">
            <label for="">Referencia:</label>
            <input type="text" class="form-control" name="referencia" value="<?= $consultaedit[0]['referencia'] ?>" required>
			<input type="hidden" name="idmovimiento" value="<?= $idmovimiento ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" value="<?= $consultaedit[0]['cantidad']  ?>" required>
		</div>		
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=16" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>