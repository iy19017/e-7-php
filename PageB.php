<html>
<head>
  <meta charset = "utf-8">
</head>
  <body>
      <?php
	$shohin = $_POST['name'];
	$kingaku = $_POST['money'];
	$today = date('Y-m-d');
	print("$shohin $kingaku $today");
	?>
  <br>
  <form  method = "POST">
	 <input type="submit" name="yes" value="よかった">
	 <input type="submit" name="no" value="わるかった">
  </form>
  <?php
  if(isset($_POST['yes'])) {
	echo "PUSH YES";  
	
	try{
	  
  	$server = "ec2-54-76-43-89.eu-west-1.compute.amazonaws.com";
        $database = "dcrb5clh0jqmke";
        $host = 5432;
	$user_id = "owlsbojfhnbkxz";
	$user_password = "743232ea27dee0cbb00552fac7d502b2f4a0aa4c7763af9193bc9b5d539ab51e"; 

	$pdo = new PDO("pgsql:host=$server; dbname=$database; user=$user_id; password=$user_password");	
	
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		
	} catch(PDOException $e){

		print("ERROR");

	}
	  
	$sql = 'INSERT INTO order (商品名, 価格, 登録日) VALUES (:shohin, :kingaku, :today)';
	  
	print("1");

	$stmt = $pdo->prepare('INSERT INTO order (商品名, 価格, 登録日) VALUES (:shohin, :kingaku, :today)');
	  
	print("1.1");
			
	$stmt->bindParam(':shohin', $shohin, PDO::PARAM_STR);

	$stmt->bindParam(':kingaku', $kingaku, PDO::PARAM_INT);

	$stmt->bindParam(':today', $today, PDO::PARAM_INT);
	  
	print("2");

	$sql->execute();
	  
	print("3");
	  
// 	if($check){
			
// 		print("成功");
			
// 	}else{
			
// 		print("失敗");
			
// 	}

	print("4");
	  
  }
	  
  else if(isset($_POST['no'])){
	
// 	header("Location: ./index.php") ;
  
  }
  ?>  
  </body>
  
</html>
