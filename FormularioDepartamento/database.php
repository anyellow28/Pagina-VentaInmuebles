<?php 
   $user='root';
   $password='';
   try{
     $dsn="mysql:host=localhost;dbname=DB"; 
     $dbh=new PDO($dsn,$user,$password);

   }catch(Exception $e){
      echo $e->getMessage(); 
   }
?>