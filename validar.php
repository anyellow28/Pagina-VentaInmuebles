<?php
session_start();

include 'db.php';
error_reporting(0);
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];


$consulta="SELECT * FROM login WHERE usuario = '".$usuario."' and contraseña = '".$contraseña."'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("location:sesionformularios.php");
}else{
	?>
	<?php
	include("inicioSesion.html");
	?>
	<script type="text/javascript">
		alert("Escriba nuevamente sus datos");
	</script>

	<?php
}

mysqli_free_result($resultado);
msqli_close($conexion);

?>

