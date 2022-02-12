<?php
   include 'database.php';
   error_reporting(0);
   $Codigo= $_GET['Codigo']; 
   echo "<h5>".$Codigo."</h5>";
    $stmt = $dbh->prepare("select * from oficina where Codigo='".$Codigo."';");
    $stmt->execute();
    $Oficinas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($Oficinas as $Oficina) {
    ?>
<div>
	<nav class="navetilo"><!-- menu de navegacion -->

            <a class="barra-enlace"  href="../index.html">Home</a>
            <a class="barra-enlace" href="../sesionformularios.php">Registros</a>
            <a class="barra-enlace" href="">Contacto</a>
        </nav>   
	<center>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="../Css/Estilo.css" rel="stylesheet" type="text/Css"/>
	</head>
	
	
		<form> 
			
			<table class="table table-striped">
				<thead>
				<th scope="col">Nombre Oficina</th>
				<th scope="col">Codigo</th>
				<th scope="col">Direccion</th>
				<th scope="col">Dimension</th>
				<th scope="col">Descripcion</th>
				<th scope="col">Precio</th>
		</thead>
		<tbody>
				<tr>
					<td><?php echo $Oficina['Nombre'];?></td>
			   	<td><?php echo $Oficina['Codigo'];?></td>
			   	<td><?php echo $Oficina['Direccion'];?></td>
			   	<td><?php echo $Oficina['Dimension'];?></td>
			   	<td><?php echo $Oficina['Descripcion'];?></td>
			   	<td><?php echo $Oficina['Precio'];?></td>
				</tr>
		</tbody>
		</table>

			<button type="button" class="btn btn-success"
			onclick="location.href='bandejaOficina.php'">Regresar</button>
		</form>

	
		</center>
    </div>
    <?php } ?>