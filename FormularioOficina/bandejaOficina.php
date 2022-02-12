<?php
include 'database.php';
$stmt = $dbh->prepare("select * from oficina");
$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bandeja de Oficina</title>
		<link href="../Css/Estilo.css" rel="stylesheet" type="text/Css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
		<nav class="navetilo"><!-- menu de navegacion -->

            <a class="barra-enlace"  href="../index.html">Home</a>
            <a class="barra-enlace" href="../sesionformularios.php">Registros</a>
            <a class="barra-enlace" href="">Contacto</a>
        </nav>      
	<h1>Lista de Oficinas</h1>
	<table class="table table-striped">

		<button class="btn btn-danger" type="button" style="float: left" onclick="location.href='reporteOficinaPDF.php'">Reporte de Oficina PDF</button> <p>ㅤ</p>

		<button class="btn btn-success" type="button" style="float: left" onclick="location.href='reporteOficinaExcel.php'">Reporte de Oficina Excel</button>

		<thead> <br>
		<tr>
			<th>Nombre Oficina</th>
			<th>Codigo</th>
			<th>Direccion</th>
			<th>Dimension</th>
			<th>Descripcion</th>
			<th>Precio</th>
		</tr>
	</thead>
	<tbody>
		<?php
		 $Oficinas = $stmt->fetchAll(PDO::FETCH_ASSOC);
		 foreach ($Oficinas as $Oficina) {
		?>
		   <tr>
		   	<td><?php echo $Oficina['Nombre'];?></td>
		   	<td><?php echo $Oficina['Codigo'];?></td>
		   	<td><?php echo $Oficina['Direccion'];?></td>
		   	<td><?php echo $Oficina['Dimension'];?></td>
		   	<td><?php echo $Oficina['Descripcion'];?></td>
		   	<td><?php echo $Oficina['Precio'];?></td>
		   	
		   	<td><a href="vistaOficina.php?Codigo=<?php echo $Oficina['Codigo']?>"><img src="ico/icobuscar24.png">
		   	</td>
		   	<td><a href="editarOficina.php?Codigo=<?php echo $Oficina['Codigo']?>"><img src="ico/icoEditar.png"></td>
		   	<td>
		   	<a href="eliminarOficina.php?Codigo=<?php echo $Oficina['Codigo']?>"><img src="ico/icoEliminar.png">

		   	</td>
		   </tr>
		<?php } ?>
	</tbody>
	</table>
	<center>
		<p> ㅤ
		<button class="btn btn-secondary" type="button" style="float: left" onclick="location.href='registrarOfi.php'">Agregar Oficina</button>
		</p>
	</center>
</body>
</html>