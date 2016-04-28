<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wold Comunicaciones</title>	
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
	        <div class="container-fluid">
	          <div id="navbar" class="navbar-collapse collapse">
	            <ul class="nav navbar-nav">
	              <li class="active"><a href="index.php">Home</a></li>
	              <li><a href="index.php?pag=2">clientes</a></li>
	              <li><a href="index.php?pag=3">producto</a></li>
	              <li><a href="index.php?pag=5">minutos</a></li>
	              <li><a href="index.php?pag=7">proveedor</a></li>
	              <li><a href="index.php?pag=9">Empleado</a></li>
	              <li><a href="index.php?pag=11">Otros</a></li>
	              <li><a href="index.php?pag=13">Servivcio Tecnico</a></li>
	              <li><a href="index.php?pag=15">Servivcio Tecnico Entregado</a></li>
	              <li><a href="index.php?pag=16">Movimiento</a></li>
	              <li><a href="index.php?pag=18">Devolucion Irregular</a></li>
	              <li><a href="index.php?pag=19">Compra</a></li>
	              <li><a href="index.php?pag=20">Compra por producto</a></li>
	              <li><a href="index.php?pag=21">Reposcion</a></li>
	              <li><a href="index.php?pag=24">Venta</a></li>
	              <li><a href="index.php?pag=26">Venta por Producto</a></li>
	              <li><a href="index.php?pag=29">Minutos valor</a></li>
	              <li><a href="index.php?pag=31">Recargas</a></li>
	            </ul>
	           
	          </div><!--/.nav-collapse -->
	        </div><!--/.container-fluid -->
      	</nav>	
    </div>
    <div class="container">  		
		<h1>Wold comunicaciones</h1>
		<?php
			$page = isset($_GET['pag']) ? $_GET['pag'] : NULL;
			if ($page == 2) 
			{
                include("vista/vcliente.php");
			}
            if ($page == 3) 
			{
                include("vista/vproducto.php");
			}
            if ($page == 4) 
			{
                include("vista/vactuproducto.php");
			}
            if ($page == 5) 
			{
                include("vista/vminutos.php");
			}
            if ($page == 6) 
			{
                include("vista/vactuminutos.php");
			}
            if ($page == 7) 
			{
                include("vista/vproveedor.php");
			}
            if ($page == 8) 
			{
                include("vista/vactuproveedor.php");
			}
            if ($page == 9) 
			{
                include("vista/vempleado.php");
			}
            if ($page == 10) 
			{
                include("vista/vactuempleado.php");
			}
             if ($page == 11) 
			{
                include("vista/votros.php");
			}
            if ($page == 12) 
			{
                include("vista/vactuotros.php");
			}
            if ($page == 13) 
			{
                include("vista/vserviciotecnico.php");
			}
            if ($page == 14) 
			{
                include("vista/vactuserviciotecnico.php");
			}
            if ($page == 15) 
			{
                include("vista/vservicioentregado.php");
			}
            if ($page == 16) 
			{
                include("vista/vmovimiento.php");
			}			
            if ($page == 17) 
			{
                include("vista/vactumovimiento.php");
			}
            if ($page == 18) 
			{
                include("vista/vdevolucion.php");
			}
			 if ($page == 19) 
			{
                include("vista/vcompra.php");
			}
            if ($page == 20) 
			{
                include("vista/vcompraproduc.php");
			}
            if ($page == 21) 
			{
                include("vista/vreposicion.php");
			}
            if ($page == 22) 
			{
                include("vista/vactucliente.php");
			}
            if ($page == 23) 
			{
                include("vista/vactucompraproduc.php");
			}
			if ($page == 24) 
			{
                include("vista/vventa.php");
			}
            if ($page == 25) 
			{
                include("vista/vactuventa.php");//no esta creado
			}
			if ($page == 26) 
			{
                include("vista/vventaproduc.php");
			}
            if ($page == 27) 
			{
                include("vista/vactuventaproduc.php");
			}
			if ($page == 28) 
			{
                include("vista/vactudevolucion.php");
			}
			if ($page == 29) 
			{
                include("vista/vminutosvalor.php");
			}
			if ($page == 30) 
			{
                include("vista/vactuminutosvalor.php");
			}
			if ($page == 31) 
			{
                include("vista/vrecargas.php");
			}
			if ($page == 32) 
			{
                include("vista/vacturecargas.php");
			}
		?>
	</div>
</body>
</html>