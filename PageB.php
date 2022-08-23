<html>	
<head>
  <meta charset = "utf-8">
</head>
  <body>
      <?php
// 	$shohin = $_POST['name'];
// 	$kingaku = $_POST['money'];
// 	$today = date('Y-m-d');
// 	print("$shohin $kingaku $today");
	?>
  <br>
  <form  method = "POST">
	 <input type="button" name="yes" value="よかった">
	 <input type="submit" name="no" value="わるかった">
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

  if(isset($_POST['yes'])) {

// 	try{
	  
// 		$server = "ec2-54-76-43-89.eu-west-1.compute.amazonaws.com";
// 		$database = "dcrb5clh0jqmke";
// 		$host = 5432;
// 		$user_id = "owlsbojfhnbkxz";
// 		$user_password = "743232ea27dee0cbb00552fac7d502b2f4a0aa4c7763af9193bc9b5d539ab51e"; 

// 		$pdo = new PDO("pgsql:host=$server; dbname=$database; user=$user_id; password=$user_password");	

// 		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
// 		echo "OK";
		
// 	} catch(PDOException $e){

// 		echo "ERROR";
		
// 	}  
	  
	$shohin = $_POST['name'];
	$kingaku = $_POST['money'];
	$today = date('Y-m-d');
	  
	print("$shohin $kingaku $today");
	
	$sql = "INSERT INTO \"order\" (商品名, 価格, 登録日) VALUES ('".$_POST['name']."',".$_POST['money'].", '".date('Y-m-d')."');";
	  
 	$stmt = $pdo->prepare($sql);
	  
 	$stmt->bindParam(':shohin', $shohin);

 	$stmt->bindParam(':kingaku', $kingaku);

	$stmt->bindParam(':today', $today);
	  
	echo "0";
	  
	$stmt = $pdo -> query($sql);
	  
	echo "1";
	  
	$stmt -> execute();
	  
// 	print("2");
	  
  }
	  
//   else if(isset($_POST['no'])){
	
// 	header("Location: ./index.php") ;
  
//   }
  ?>  
