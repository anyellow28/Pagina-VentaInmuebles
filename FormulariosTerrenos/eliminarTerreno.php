<?php
   include 'database.php';
   $id = $_GET['id'];
   $stmt = $dbh->prepare("DELETE FROM terrenos where DNI='".$id."';");
   $stmt->execute();
   header("location:bandejaTerreno.php");
?>