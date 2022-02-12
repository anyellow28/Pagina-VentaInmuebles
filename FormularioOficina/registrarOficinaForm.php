<?php 

//include("db.php");
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Direccion']) >= 1) {
	    $Nombre = trim($_POST['Nombre']);
	    $Codigo = trim($_POST['Codigo']);
	    $Direccion = trim($_POST['Direccion']);
	    $Dimension = trim($_POST['Dimension']);
	    $Descripcion = trim($_POST['Descripcion']);
	    $Precio = trim($_POST['Precio']);
	    $consulta = "INSERT INTO `oficina`(`Nombre`, `Codigo`, `Direccion`, `Dimension`, `Descripcion`, `Precio`) VALUES ('$Nombre','$Codigo','$Direccion','$Dimension','$Descripcion','$Precio')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>

