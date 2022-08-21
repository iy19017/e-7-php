<html>
<head>
  <meta charset = "utf-8">
</head>
  <body>
      <?php
	$shohin = $_POST['name'];
	$kingaku = $_POST['money'];
	$today = date("Y-m-d");
	print("$shohin $kingaku $today");
	  
	?>
  <br>
  <form  method = "POST">
	 <input type="submit" name="yes" value="よかった">
	 <input type="submit" name="no" value="わるかった">
  </form>
  
  <?php
  try{
	  
  	$server = "ec2-52-211-232-23.eu-west-1.compute.amazonaws.com";
        $database = "dao0aqgjli0ekl";
        $host = 5432;
	$user_id = "njtersecjvwybh";
	$user_password = "b50e46eb2f6767eb9e27889330ef5ec058168f2c0abed5610dd08a2f9c61b694"; 

	$pdo = new PDO("pgsql:host=$server; dbname=$database; user=$user_id; password=$user_password");
	  
  } catch(PDOException $e){
	  
    print("ERROR");
	  
  }
	
  if(isset($_POST['yes'])) {
	  
	echo "PUSH YES";  
	  
	try{
	  
  	$server = "ec2-52-211-232-23.eu-west-1.compute.amazonaws.com";
        $database = "dao0aqgjli0ekl";
        $host = 5432;
	$user_id = "njtersecjvwybh";
	$user_password = "b50e46eb2f6767eb9e27889330ef5ec058168f2c0abed5610dd08a2f9c61b694"; 

	$pdo = new PDO("pgsql:host=$server; dbname=$database; user=$user_id; password=$user_password");
		
	$sql = "INSERT INTO order (商品名, 価格, 登録日) VALUES (:shohin, :kingaku, :today)";
	  
	$stmt = $pdo->prepare($sql);
		
	$stmt -> bindParam(":shohin", $shohin);
		
	$stmt -> bindParam(":kingaku", $kingaku);
		
	$stmt -> bindParam(":today", $today);
		
	$stmt -> execute();
		
	header("Location: ./index.php") ;
	  
	} catch(PDOException $e){

	print("ERROR");

	}
	  
  }
  else if(isset($_POST['no'])){
	
	echo "PUSH NO";
	  
	header("Location: ./index.php") ;
  
  }
  ?>  
  </body>
  
</html>
