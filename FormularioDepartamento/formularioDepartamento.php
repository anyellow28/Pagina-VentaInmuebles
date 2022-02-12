<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro de Departamentos</title>
</head>
<body>
 <form>
		<label>Distrito:</label><br>
		<input type="text" name="txtDistrito"><br>
		<label>Habitaciones:</label><br>
		<input type="text" name="txtNumhab"><br>
		<label>Direccion:</label><br>
		<input type="text" name="txtDireccion"><br>
		<label>Precio:</label><br>
		<input type="text" name="txtPrecio"><br>
		<label>Regalo:</label><br>
		<input type="text" name="txtNumregalo"><br>
		<input type="submit" class="btn btn-warning" name="agregar" value="Agregar">
		<a href="bandejaDepartamento.php">Regresar</a>
	</form>
</body>
</html>
<?php
 include 'database.php';
 error_reporting(0);
$distrito = $_GET['txtDistrito'];
$numhab = $_GET['txtNumhab'];
$direccion = $_GET['txtDireccion'];
$precio= $_GET['txtPrecio'];
$numregalo=$_GET['txtNumregalo'];
if($distrito!=null || $numhab!=null || $direccion!=null || $precio!=null || $numregalo!=null){
   $stmt = $dbh->prepare("INSERT INTO departamentos(distrito,numhab,direccion,precio,numregalo) VALUES(?,?,?,?,?)");	

   $stmt->bindParam(1,$distrito);
   $stmt->bindParam(2,$numhab);
   $stmt->bindParam(3,$direccion);
   $stmt->bindParam(4,$precio);
   $stmt->bindParam(5,$numregalo);
   $stmt->execute();
   header("location:bandejaDepartamento.php");
}
?>

