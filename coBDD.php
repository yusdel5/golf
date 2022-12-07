<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=sae3","yusdel","root");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>