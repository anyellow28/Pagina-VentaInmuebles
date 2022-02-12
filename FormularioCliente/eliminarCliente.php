<?php
   include 'database.php';
   $dni = $_GET['dni'];
   $stmt = $dbh->prepare("DELETE FROM clientes where dni='".$dni."';");
   $stmt->execute();
   header("location:bandejaCliente.php");
?>