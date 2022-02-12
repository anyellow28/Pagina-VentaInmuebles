<?php
   include 'database.php';
   error_reporting(0);
   $id= $_GET['id']; 
   echo "<h4>".$id."</h4>";
    $stmt = $dbh->prepare("select * from terrenos where DNI='".$id."';");
    $stmt->execute();
    $terre = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($terre as $terrenos) {
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
	<title>Bandeja de Terrenos</title>
</head>
<body>
	<div>
		<form>
			<input type="hidden" name="txtDNI" 
			 value="<?php echo $terrenos['DNI']?>"><br>

			<label>Nombre del propietario:</label><br>
			<input type="text" name="txtName" 
			 value="<?php echo $terrenos['namePro']?>" ><br>
			
			<label>Distrito :</label><br>
			<input type="text" name="txtDist"
			value="<?php echo $terrenos['dist']?>"><br>
			<label>Direccion:</label><br>
			<input type="text" name="txtDirect"
			value="<?php echo $terrenos['direct']?>"><br>
			<label>Metros:</label><br>
			<input type="text" name="txtMetros"
			value="<?php echo $terrenos['metros']?>"><br>
			<label>Precio:</label><br>
			<input type="text" name="txtPrecio"
			value="<?php echo $terrenos['precio']?>"><br>
			<label>Descripcion:</label><br>
			<input type="text" name="txtDescri"
			value="<?php echo $terrenos['descri']?>"><br>
			<br>
			<input type="submit" class="btn btn-warning" name="actualizar" value="Actualizar">
			<a href="bandejaTerreno.php">Regresar</a>
		</form>
    </div>
    <?php } ?>
</body>
</html>
<?php
include 'database.php';
error_reporting(0);
$DNI     = $_GET['txtDNI'];
$namePro    = $_GET['txtName'];
$dist = $_GET['txtDist'];
$direct = $_GET['txtDirect'];
$metros= $_GET['txtMetros'];
$precio=$_GET['txtPrecio'];
$descri=$_GET['txtDescri'];
if( $DNI!=null ||$namePro!=null || $dist!=null || $direct!=null || $metros!=null || $precio!=null || $descri!=null){
   $stmt = $dbh->prepare("update terrenos set namePro='".$namePro."',
   	                                   dist='".$dist."',
   	                                   direct='".$direct."',metros='".$metros."',precio='".$precio."',descri='".$descri."'
  	                                   where DNI='".$DNI."'");	
  
   $stmt->bindParam(1,$DNI);
   $stmt->bindParam(2,$namePro);
   $stmt->bindParam(3,$dist);
   $stmt->bindParam(4,$direct);
   $stmt->bindParam(5,$metros);
   $stmt->bindParam(6,$precio);
   $stmt->bindParam(7,$descri);
   $stmt->execute();
   header("location:bandejaTerreno.php");
}
?>