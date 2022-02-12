<?php
   include 'database.php';
   $Codigo = $_GET['Codigo'];
   $stmt = $dbh->prepare("DELETE FROM oficina where Codigo='".$Codigo."';");
   $stmt->execute();
   header("location:bandejaOficina.php");
?>