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
	
// 	try{
	  
  	$server = "ec2-54-76-43-89.eu-west-1.compute.amazonaws.com";
     	$database = "dcrb5clh0jqmke";
    	$host = 5432;
	$user_id = "owlsbojfhnbkxz";
	$user_password = "743232ea27dee0cbb00552fac7d502b2f4a0aa4c7763af9193bc9b5d539ab51e"; 

	$pdo = new PDO("pgsql:host=$server; dbname=$database; user=$user_id; password=$user_password");	
	
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		
// 	} catch(PDOException $e){

// 		print("ERROR");

// 	}
	  
	$sql = 'INSERT INTO order (商品名, 価格, 登録日) VALUES (TEST, 62235253, 2021-10-02)';
	  
// 	echo $sql;
	  
// 	$stmt = $pdo->prepare($sql);
	  
// 	$stmt->bindParam(':shohin', $shohin);

// 	$stmt->bindParam(':kingaku', $kingaku);

// 	$stmt->bindParam(':today', $today);
	  
// 	$sql->execute();

	$pdo->exec($sql);
	  
	$pdo->commit();
	  
  }
	  
  else if(isset($_POST['no'])){
	
	header("Location: ./index.php") ;
  
  }
  ?>  
  </body>
  
</html>
