<?php

try{
	  
  $server = "ec2-52-208-164-5.eu-west-1.compute.amazonaws.com";
  $database = "df54o5fg47hvkg";
  $host = 5432;
  $user_id = "tyrrmbizzzoikk";
  $user_password = "c7720728cad33d5baf78911c4bb606668bfebc1f2c78a6310b85543b05936bb4"; 

  $pdo = new PDO("pgsql:host=$server; dbname=$database; user=$user_id; password=$user_password");	

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
} catch(PDOException $e){

  echo "ERROR";
		
}

?>
