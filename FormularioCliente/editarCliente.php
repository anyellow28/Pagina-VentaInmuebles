<?php
   include 'database.php';
   error_reporting(0);
   $dni= $_GET['dni']; 

   echo "<h5>".$dni."</h5>";
    $stmt = $dbh->prepare("select * from clientes where dni='".$dni."';");
    $stmt->execute();
    $Clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($Clientes as $Cliente) {
    ?>

   <div>
      <nav class="navetilo"><!-- menu de navegacion -->

            <a class="barra-enlace"  href="../index.html">Home</a>
            <a class="barra-enlace" href="../sesionformularios.php">Registros</a>
            <a class="barra-enlace" href="">Contacto</a>
        </nav>   
   <center>
   <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link href="../Css/Estilo.css" rel="stylesheet" type="text/Css"/>
   </head>
   
      <form class="form-horizontal" role="form">
      <div class="form-group"> 
          <div class="col-lg-10">
               <input  type="hidden" name="txtdni" 
               value="<?php echo $Cliente['dni']?>"><br>
               <label>Nombre:</label><br>
         </div>
      </div>
      <div class="form-group"> 
         <div class="col-lg-2">
               <input class="form-control" type="text" name="txtname" 
               value="<?php echo $Cliente['name']?>"><br>
               <label>Email:</label><br>
         </div>
      </div>
      <div class="form-group"> 
         <div class="col-lg-2">
               <input class="form-control" type="text" name="txtemail" 
               value="<?php echo $Cliente['email']?>"><br>
               <label>Telefono:</label><br>
         </div>
      </div>
      <div class="form-group"> 
         <div class="col-lg-2">
         <input class="form-control" type="text" name="txttelefono" 
         value="<?php echo $Cliente['telefono']?>"><br>
         <input class="btn btn-success" type="submit" name="actualizar" href="bandejaCliente.php" value="Actualizar">
         </div>
      </div>
      </form>
  
   <?php } ?>
</body>
</html>
<?php 
include 'database.php';
error_reporting(0);
$dni     = $_GET['txtdni'];
$name    = $_GET['txtname'];
$email   = $_GET['txtemail'];
$telefono= $_GET['txttelefono'];


/*if($dni!=null || $name!=null || $email!=null || $telefono!=null) {
   $stmt = $dbh->prepare("UPDATE clientes SET name='".$name."', email='".$email."',telefono='".$telefono."' WHERE dni='".$dni."'");
$stmt->bindParam(1,$dni);
$stmt->bindParam(2,$name);
$stmt->bindParam(3,$email);
$stmt->bindParam(4,$telefono);
$stmt->execute();


}*/ 
//echo "UPDATE clientes SET name='".$name."', email='".$email."',telefono='".$telefono."' WHERE dni='".$dni."'";
if($dni!=null || $name!=null || $email!=null || $telefono!=null) {
   $valor ="UPDATE clientes SET name='".$name."', email='".$email."',telefono='".$telefono."' WHERE dni='".$dni."'";
   $stmt = $dbh->prepare($valor);
   $stmt->execute();
   header("location:bandejaCliente.php");
} else {
   echo "Completa los campos";
}
?>

<br>
<br><button class="btn btn-dark" name="Regresar" onclick="location.href='bandejaCliente.php'">Regresar </button>