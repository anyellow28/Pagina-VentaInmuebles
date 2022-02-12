<?php
   include 'database.php';
   error_reporting(0);
   $dni= $_GET['dni']; 
   echo "<h5>".$dni."</h5>";
    $stmt = $dbh->prepare("select * from clientes where dni='".$dni."';");
    $stmt->execute();
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($clientes as $cliente) {
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
				<th scope="col">DNI</th>
				<th scope="col">Nombre</th>
				<th scope="col">Email</th>
				<th scope="col">Telefono</th>
		</thead>
		<tbody>
				<tr>
					<td><?php echo $cliente['dni']?></td>
					<td><?php echo $cliente['name']?></td>
					<td><?php echo $cliente['email']?></td>
					<td><?php echo $cliente['telefono']?></td>
				</tr>
		</tbody>
		</table>

			<button type="button" class="btn btn-success"
			onclick="location.href='bandejaCliente.php'">Regresar</button>
		</form>

	
		</center>
    </div>
    <?php } ?>