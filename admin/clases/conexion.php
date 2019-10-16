<?php

   $connectio = "mysql:host=localhost; dbname=sei";
   $user = "root";
   $password = "@ignacio1998";


   try {
      $pdo = new PDO($connectio, $user, $password);
      //echo 'Succesfull connected';

   } catch (PDOException $e) {

   	 echo "Fatal error!". $e-> getMessage();
   	 die();

   }