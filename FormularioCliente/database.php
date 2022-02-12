<?php 
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