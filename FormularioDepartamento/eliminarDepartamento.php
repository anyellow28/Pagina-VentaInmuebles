<?php
   include 'database.php';
   $id = $_GET['id'];
   $stmt = $dbh->prepare("DELETE FROM departamentos where distrito='".$id."';");
   $stmt->execute();
   header("location:bandejaDepartamento.php");
?>