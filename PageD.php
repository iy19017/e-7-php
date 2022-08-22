<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
  </head>
  
  <body>
	  
  <?php
    
    try{
	  
      $server = "ec2-54-76-43-89.eu-west-1.compute.amazonaws.com";
      $database = "dcrb5clh0jqmke";
      $host = 5432;
      $user_id = "owlsbojfhnbkxz";
      $user_password = "743232ea27dee0cbb00552fac7d502b2f4a0aa4c7763af9193bc9b5d539ab51e"; 

      $pdo = new PDO("pgsql:host=$server; dbname=$database; user=$user_id; password=$user_password");	

      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
      echo "OK";

	} catch(PDOException $e){

		print("ERROR");

	}
	  
  ?>
    
  </body>
</html>
