<?php 

//include("db.php");
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $dni = trim($_POST['dni']);
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $telefono = trim($_POST['telefono']);
	    $consulta = "INSERT INTO `clientes`(`dni`, `name`, `email`, `telefono`) VALUES ('$dni','$name','$email','$telefono')";
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
