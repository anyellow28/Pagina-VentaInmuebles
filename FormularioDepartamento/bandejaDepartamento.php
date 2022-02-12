<?php
include 'database.php';
$stmt = $dbh->prepare("select * from departamentos");
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
	<h1>Lista de Departamentos</h1>
	<table class="table table-striped">

		<input  type="button" class="btn btn-warning" style="float: left" onclick="location.href='reporteDepartamentoPDF.php'" value="Reporte Departamento PDF">
		
		<input type="button" class="btn btn-warning" style="float: left" onclick="location.href='reporteDepartamentoExcel.php'" value="Reporte Departamento Excel">
		<br>
		<br>
		<thead>
		<tr>
			<th>DISTRITO</th>
			<th>HABITACIONES</th>
			<th>DIRECCION</th>
			<th>PRECIO</th>
            <th>REGALO</th>
            <th>VISTA</th>  
            <th>EDITAR</th>
            <th>ELIMINAR</th> 
		</tr>
	</thead>
	<tbody>
		<?php
		 $Departamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
		 foreach ($Departamentos as $Departamento) {
		?>
		   <tr>
		   	<td><?php echo $Departamento['distrito'];?></td>
		   	<td><?php echo $Departamento['numhab'];?></td>
		   	<td><?php echo $Departamento['direccion'];?></td>
		   	<td><?php echo $Departamento['precio'];?></td>
		   	<td><?php echo $Departamento['numregalo'];?></td>

		   	<td><a href="vistaDepartamento.php?id=<?php echo $Departamento['distrito']?>"><img src="ico/icobuscar24.png">
		   	</td>
		   	<td><a href="editarDepartamento.php?id=<?php echo $Departamento['distrito']?>"><img src="ico/icoEditar.png"></td>
		   	<td>
		   	<a href="eliminarDepartamento.php?id=<?php echo $Departamento['distrito']?>"><img src="ico/icoEliminar.png">

		   	</td>
		   </tr>
		<?php } ?>
	</tbody>
	</table>
		<button type="button" class="btn btn-warning" style="float: left" onclick="location.href='formularioDepartamento.php'">Agregar Departamento</button>
</body>
</html>