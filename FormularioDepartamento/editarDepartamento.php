<?php
   include 'database.php';
   error_reporting(0);
   $id= $_GET['id']; 
   echo "<h3>".$id."</h3>";
    $stmt = $dbh->prepare("select * from departamentos where distrito='".$id."';");
    $stmt->execute();
    $departamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($departamentos as $departamento) {
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
	<title>Bandeja del Departamento</title>
</head>
<body>
	<nav class="navetilo"><!-- menu de navegacion -->

            <a class="barra-enlace"  href="../index.html">Home</a>
            <a class="barra-enlace" href="../sesionformularios.php">Registros</a>
            <a class="barra-enlace" href="">Contacto</a>
        </nav>   
	<div>
		<form>
			<label>DISTRITO:</label><br>
			<input type="text" name="txtDistrito" 
			 value="<?php echo $departamento['distrito']?>"><br>
			<label>HABITACIONES:</label><br>
			<input type="text" name="txtNumhab"
			value="<?php echo $departamento['numhab']?>"><br>
			<label>DIRECCION:</label><br>
			<input type="text" name="txtDireccion"
			value="<?php echo $departamento['direccion']?>"><br>
			<label>PRECIO:</label><br>
			<input type="text" name="txtPrecio"
			value="<?php echo $departamento['precio']?>"><br>
			<label>REGALO:</label><br>
			<input type="text" name="txtNumregalo"
			value="<?php echo $departamento['numregalo']?>"><br>
			<br>
			<input type="submit" class="btn btn-warning" name="actualizar" value="Actualizar">
			<a href="bandejaDepartamento.php">Regresar</a>
		</form>
    </div>
    <?php } ?>
</body>
</html>
<?php
include 'database.php';
error_reporting(0);
$distrito    = $_GET['txtDistrito'];
$numhab     = $_GET['txtNumhab'];
$direccion = $_GET['txtDireccion'];
$precio = $_GET['txtPrecio'];
$numregalo= $_GET['txtNumregalo'];
if($distrito!=null || $numhab!=null || $direccion!=null || $precio!=null || $numregalo!=null){
   $stmt = $dbh->prepare("update departamentos set numhab='".$numhab."',
   	                                   direccion='".$direccion."',
   	                                   precio='".$precio."',numregalo='".$numregalo."'
  	                                   where distrito='".$distrito."'");	
   $stmt->bindParam(1,$distrito);
   $stmt->bindParam(2,$numhab);
   $stmt->bindParam(3,$direccion);
   $stmt->bindParam(4,$precio);
   $stmt->bindParam(5,$numregalo);
   $stmt->execute();
   header("location:bandejaDepartamento.php");
}
?>