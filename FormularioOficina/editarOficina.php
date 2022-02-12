<?php
   include 'database.php';
   error_reporting(0);
   $Codigo= $_GET['Codigo']; 
   //$Codigo= '4444';
   echo "<h5>".$Codigo."</h5>";
    $stmt = $dbh->prepare("select * from oficina where Codigo='".$Codigo."';");
    $stmt->execute();
    $Oficinas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($Oficinas as $Oficina) {
    ?>
    <nav class="navetilo"><!-- menu de navegacion -->

            <a class="barra-enlace"  href="../index.html">Home</a>
            <a class="barra-enlace" href="../sesionformularios.php">Registros</a>
            <a class="barra-enlace" href="">Contacto</a>
        </nav>   
<div>
   <form>
       <input type="hidden" name="Codigo" value="<?php echo $Oficina['Codigo']?>"><br>
       <label>Nombre:</label><br>
       <input type="text" name="Nombre" value="<?php echo $Oficina['Nombre']?>"><br>
       <label>Direccion:</label><br>
       <input type="text" name="Direccion" value="<?php echo $Oficina['Direccion']?>"><br>
       <label>Dimension:</label><br>
       <input type="text" name="Dimension" value="<?php echo $Oficina['Dimension']?>"><br>
       <label>Descripcion:</label><br>
       <input type="text" name="Descripcion" value="<?php echo $Oficina['Descripcion']?>"><br>
       <label>Precio:</label><br>
       <input type="text" name="Precio" value="<?php echo $Oficina['Precio']?>"><br>

       <input type="submit" name="actualizar">
         <a href="bandejaOficina.php">Regresar</a>
   </form>
</div>
<?php } ?>
<?php 
include 'database.php';
error_reporting(0);
$Nombre    = $_GET['Nombre'];
$Codigo    = $_GET['Codigo'];
$Direccion   = $_GET['Direccion'];
$Dimension= $_GET['Dimension'];
$Descripcion  = $_GET['Descripcion'];
$Precio = $_GET['Precio'];

if($Nombre!=null || $Codigo!=null || $Direccion!=null || $Dimension!=null || $Descripcion!=null || $Precio!=null) {
   $stmt = $dbh->prepare("UPDATE oficina SET Nombre='".$Nombre."', Direccion='".$Direccion."',Dimension='".$Dimension."',Descripcion='".$Descripcion."',Precio='".$Precio."' WHERE Codigo='".$Codigo."'");
$stmt->bindParam(1,$Nombre);
$stmt->bindParam(2,$Codigo);
$stmt->bindParam(3,$Direccion);
$stmt->bindParam(4,$Dimension);
$stmt->bindParam(5,$Descripcion);
$stmt->bindParam(6,$Precio);
$stmt->execute();
header("location:bandejaOficina.php");

} 

?>