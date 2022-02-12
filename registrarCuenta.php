<?php 

include("db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1) {
	    $usuario = trim($_POST['usuario']);
	    $contraseña = trim($_POST['contraseña']);
	  
	    $consulta ="INSERT INTO login(usuario, contraseña) VALUES ('$usuario','$contraseña')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?> 
	    	<script src="inicioSesion.htlm" type="text/javascript">
			alert("Te has inscrito Correctamente");
			</script>

           <?php
	    } else {
	    	?>
	    	<script type="text/javascript">
			alert("Escriba nuevamente sus datos");
			</script>
	    	<?php
	    }
    }   else {
	    	?> 
	    	<script type="text/javascript">
			alert("¡Por favor complete los campos!");
			</script>
           <?php
    }
}

?>
