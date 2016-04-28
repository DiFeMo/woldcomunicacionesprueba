<?php include("controlador/cotros.php"); ?>

<div class="row-fluid">
	<h1>Editar otros</h1>

	<form action="index.php?pag=11&id=<?= $idreporte?>" method="POST">
		<div class="form-group col-lg-6">
            <label for="">Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="<?= $consultaedit[0]['fecha'] ?>" required>
			<input type="hidden" name="idreporte" value="<?= $idreporte ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-lg-6">
			<label for="">Descripcion:</label>
            <input type="text" class="form-control" name="descripcion" value="<?= $consultaedit[0]['descripcion']  ?>" required>
		</div>
		
		<div class="form-group col-lg-6">
            <label for="">Valor:</label>
            <input type="number" class="form-control" name="valor" value="<?php if($consultaedit[0]['salida_total'] == 0){
            	echo $consultaedit[0]['entrada_total'];
            	}else{echo $consultaedit[0]['salida_total']; }?>">       
		</div>
		
		 <div class="form-group col-lg-6">
			<br>
            <input type="submit" name="Sale" class="btn btn-success" value="Sale"> 
            <input type="submit" name="Entra" class="btn btn-danger" value="Entra">
        </div>		
		
		<div class="form-group col-lg-6">
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=11" class="btn btn-success">Volver</a>
        </div>
	</form>
</div>