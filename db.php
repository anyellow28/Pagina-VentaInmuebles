<?php
#dsn: data source name
#dbh: database Handle
#PDO: clase que contiene metodos para la conexion 
#a BD y metodos para las transacciones a tablas
   $user='root';
   $password='';
   try{
     $dsn="mysql:host=localhost;dbname=DB"; 
     $dbh=new PDO($dsn,$user,$password);
     //echo 'conexion satisfactoria';
   }catch(Exception $e){
      echo $e->getMessage(); 
   }

   $conexion=mysqli_connect("localhost","root","","DB");
   $conex = mysqli_connect("localhost","root","","DB"); 
?>