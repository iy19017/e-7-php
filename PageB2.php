<html>	
<head>
  <meta charset = "utf-8">
</head>
  <body>
  <?php
	session_start();
	$shohin = $_SESSION['name'];
	$kingaku = $_SESSION['money'];
  ?>
  <form action="index.php">
	 <input type="submit" name="yes" value="よかった">
  </form>
</body>
</html>
  <?php

	try{
	  
		$server = "ec2-54-76-43-89.eu-west-1.compute.amazonaws.com";
		$database = "dcrb5clh0jqmke";
		$host = 5432;
		$user_id = "owlsbojfhnbkxz";
		$user_password = "743232ea27dee0cbb00552fac7d502b2f4a0aa4c7763af9193bc9b5d539ab51e"; 

		$pdo = new PDO("pgsql:host=$server; dbname=$database; user=$user_id; password=$user_password");	

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		echo "OK";
		
	} catch(PDOException $e){

		echo "ERROR";
		
	}  
	
	$sql = "INSERT INTO \"order\" (商品名, 価格, 登録日) VALUES ('".$shohin."',".$kingaku.", '".date('Y-m-d')."');";
	  
	$stmt = $pdo -> query($sql);
	  
  ?>  
