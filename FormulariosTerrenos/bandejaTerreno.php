<?php
include 'database.php';
$stmt = $dbh->prepare("select * from terrenos ");
$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
        <link type="text/css" rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css" />
        <link href="../Css/estiloform.css" rel="stylesheet" type="text/Css"/>
        <link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="../bootstrap-5.1.3-dist/js/bootstrap.min.js"/>
	<title>Bandeja de Terreno</title>
</head>
<body>
	<nav class="navetilo"><!-- menu de navegacion -->

            <a class="barra-enlace"  href="../index.html">Home</a>
            <a class="barra-enlace" href="../sesionformularios.php">Registros</a>
            <a class="barra-enlace" href="">Contacto</a>
        </nav>      
	<h1>Lista de Terrenos</h1>
	<table class="table table-striped">

		<input  type="button" class="btn btn-danger" style="float: left" onclick="location.href='reporteTerrenoPDF.php'" value="Reporte Terreno PDF">
		
		<input type="button" class="btn btn-success" style="float: left" onclick="location.href='reporteTerrenoExcel.php'" value="Reporte Terreno Excel">
		<br>
		<br>
		<thead>
		<tr>
			<th>NOMBRE</th>
			<th>DNI</th>
			<th>DISTRITO</th>
			<th>DIRECCION</th>
			<th>METROS</th>
			<th>PRECIO</th>
            <th>DESCRIPCION</th>
            <th>VISTA</th>  
            <th>EDITAR</th>
            <th>ELIMINAR</th> 
		</tr>
	</thead>
	<tbody>
		<?php
		 $Terrenos = $stmt->fetchAll(PDO::FETCH_ASSOC);
		 foreach ($Terrenos as $Terreno) {
		?>
		   <tr>
		   	<td><?php echo $Terreno['namePro'];?></td>
		   	<td><?php echo $Terreno['DNI'];?></td>
		   	<td><?php echo $Terreno['dist'];?></td>
		   	<td><?php echo $Terreno['direct'];?></td>
		   	<td><?php echo $Terreno['metros'];?></td>
		   	<td><?php echo $Terreno['precio'];?></td>
		   	<td><?php echo $Terreno['descri'];?></td>

		   	<td><a href="vistaTerreno.php?id=<?php echo $Terreno['DNI']?>"><img src="ico/icobuscar24.png">
		   	</td>
		   	<td><a href="editarTerreno.php?id=<?php echo $Terreno['DNI']?>"><img src="ico/icoEditar.png"></td>
		   	<td>
		   	<a href="eliminarTerreno.php?id=<?php echo $Terreno['DNI']?>"><img src="ico/icoEliminar.png">

		   	</td>
		   </tr>
		<?php } ?>
	</tbody>
	</table>
		<button type="button" class="btn btn-warning" style="float: left" onclick="location.href='formuTerreno.php'">Agregar Terreno</button>
</body>
</html>