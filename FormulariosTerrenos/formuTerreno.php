<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro de Terrenos</title>
</head>
<body>
	<nav class="navetilo"><!-- menu de navegacion -->

            <a class="barra-enlace"  href="../index.html">Home</a>
            <a class="barra-enlace" href="../sesionformularios.php">Registros</a>
            <a class="barra-enlace" href="">Contacto</a>
        </nav>   
 <form>
		<label>Nombre del Propietario:</label><br>
		<input type="text" name="txtName"><br>
		<label>DNI:</label><br>
		<input type="text" name="txtDNI"><br>
		<label>Distrito:</label><br>
		<input type="text" name="txtDist"><br>
		<label>Direccion:</label><br>
		<input type="text" name="txtDirect"><br>
		<label>Metros:</label><br>
		<input type="text" name="txtMetros"><br>
		<label>Precio:</label><br>
		<input type="text" name="txtPrecio"><br>
		<label>Descripcion del Terreno:</label><br>
		<input type="text" name="txtDescri"><br>
		<input type="submit" name="agregar" value="Agregar">
		<a href="bandejaTerreno.php">Regresar</a>
	</form>
</body>
</html>
<?php
 include 'database.php';
 error_reporting(0);
$namePro    = $_GET['txtName'];
$DNI     = $_GET['txtDNI'];
$dist = $_GET['txtDist'];
$direct = $_GET['txtDirect'];
$metros= $_GET['txtMetros'];
$precio=$_GET['txtPrecio'];
$descri=$_GET['txtDescri'];
if($namePro!=null || $DNI!=null || $dist!=null || $direct!=null || $metros!=null || $precio!=null || $descri!=null){
   $stmt = $dbh->prepare("INSERT INTO terrenos(namePro,DNI,dist,direct,metros,precio,descri) VALUES(?,?,?,?,?,?,?)");	

   $stmt->bindParam(1,$namePro);
   $stmt->bindParam(2,$DNI);
   $stmt->bindParam(3,$dist);
   $stmt->bindParam(4,$direct);
   $stmt->bindParam(5,$metros);
   $stmt->bindParam(6,$precio);
   $stmt->bindParam(7,$descri);
   $stmt->execute();
   header("location:bandejaTerreno.php");
}
?>

