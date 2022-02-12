<?php
   include 'database.php';
   error_reporting(0);
   $id= $_GET['id']; 
   echo "<h5>".$id."</h5>";
    $stmt = $dbh->prepare("select * from terrenos where namePro='".$id."';");
    $stmt->execute();
    $terrenos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($terrenos as $terreno) {
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
				<th scope="col">Nombre del propietario</th>
				<th scope="col">DNI</th>
				<th scope="col">Distrito</th>
				<th scope="col">Direccion</th>
				<th scope="col">Metros</th>
				<th scope="col">Precio</th>
				<th scope="col">Descripción</th>
		</thead>
		<tbody>
				<tr>
					<td><?php echo $terreno['namePro']?></td>
					<td><?php echo $terreno['DNI']?></td>
					<td><?php echo $terreno['dist']?></td>
					<td><?php echo $terreno['direct']?></td>
					<td><?php echo $terreno['metros']?></td>
					<td><?php echo $terreno['precio']?></td>
					<td><?php echo $terreno['descri']?></td>
				</tr>
		</tbody>
		</table>

			<button type="button" class="btn btn-success"
			onclick="location.href='bandejaTerreno.php'">Regresar</button>
		</form>

	
		</center>
    </div>
    <?php } ?>