<?php
include 'database.php';
$stmt = $dbh->prepare("select * from clientes");
$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bandeja de Clientes</title>
		<link href="../Css/Estilo.css" rel="stylesheet" type="text/Css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
		<nav class="navetilo"><!-- menu de navegacion -->

            <a class="barra-enlace"  href="../index.html">Home</a>
            <a class="barra-enlace" href="../sesionformularios.php">Registros</a>
            <a class="barra-enlace" href="">Contacto</a>
        </nav>      
	<h1>Lista de Clientes</h1>
	<table class="table table-striped">

		<button target="_blank" class="btn btn-danger" type="button" style="float: left" onclick="location.href='reporteClientePDF.php'">Reporte de Cliente PDF</button> <p>ㅤ</p>

		<button class="btn btn-success" type="button" style="float: left" onclick="location.href='reporteClienteExcel.php'">Reporte de Cliente Excel</button>

		<thead> <br>
		<tr>
			<th>DNI</th>
			<th>NOMBRE</th>
			<th>EMAIL</th>
			<th>TELEFONO</th>
		</tr>
	</thead>
	<tbody>
		<?php
		 $Clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
		 foreach ($Clientes as $Cliente) {
		?>
		   <tr>
		   	<td><?php echo $Cliente['dni'];?></td>
		   	<td><?php echo $Cliente['name'];?></td>
		   	<td><?php echo $Cliente['email'];?></td>
		   	<td><?php echo $Cliente['telefono'];?></td>
		   	
		   	<td><a href="vistaCliente.php?dni=<?php echo $Cliente['dni']?>"><img src="ico/icobuscar24.png">
		   	</td>
		   	<td><a href="editarCliente.php?dni=<?php echo $Cliente['dni']?>"><img src="ico/icoEditar.png"></td>
		   	<td>
		   	<a href="eliminarCliente.php?dni=<?php echo $Cliente['dni']?>"><img src="ico/icoEliminar.png">

		   	</td>
		   </tr>
		<?php } ?>
	</tbody>
	</table>
	<center>
		<p> ㅤ
		<button class="btn btn-secondary" type="button" style="float: left" onclick="location.href='registrarUsu.php'">Agregar Cliente</button>
		</p>
	</center>
</body>
</html>