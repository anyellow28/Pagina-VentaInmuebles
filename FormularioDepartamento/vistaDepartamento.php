<?php
   include 'database.php';
   error_reporting(0);
   $id= $_GET['id']; 
   echo "<h5>".$id."</h5>";
    $stmt = $dbh->prepare("select * from departamentos where distrito='".$id."';");
    $stmt->execute();
    $departamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($departamentos as $departamento) {
    ?>
<div>
		<form>
			<label>DISTRITO:</label><br>
			<input type="text" name="txtDistrito" 
			 disabled value="<?php echo $departamento['distrito']?>"><br>
			<label>HABITACIONES:</label><br>
			<input type="text" name="txtNumHab"
			disabled value="<?php echo $departamento['numhab']?>"><br>
			<label>DIRECCION:</label><br>
			<input type="text" name="txtDireccion"
			disabled value="<?php echo $departamento['direccion']?>"><br>
			<label>PRECIO:</label><br>
			<input type="text" name="txtPrecio"
			disabled value="<?php echo $departamento['precio']?>"><br>
			<label>REGALO:</label><br>
			<input type="text" name="txtNumregalo"
			disabled value="<?php echo $departamento['numregalo']?>"><br>

			<input type="submit" name="actualizar" value="Actualizar">
			<a href="bandejaDepartamento.php">Regresar</a>
		</form>
    </div>
    <?php } ?>