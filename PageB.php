<html>
<head>
  <meta charset = "utf-8">
</head>
  <body>
      <?php
	$item = $_POST['name'];
	$price = $_POST['money'];
	print("$shohin $kingaku");
	  
	?>
  <br>
  <form method = "POST">
	 <input type="button" name="select_evaluation_yes" value="よかった">
	 <input type="button" name="select_evaluation_no" value="わるかった">
  </form>
  
  <?php
  try{
	  
  	$server = "ec2-52-211-232-23.eu-west-1.compute.amazonaws.com";
        $database = "dao0aqgjli0ekl";
        $host = 5432;
	$user_id = "njtersecjvwybh";
	$user_password = "b50e46eb2f6767eb9e27889330ef5ec058168f2c0abed5610dd08a2f9c61b694"; 

	$pdo = new PDO("pgsql:host=$server; dbname=$database; user=$user_id; password=$user_password");
	  
	$today = date("Y-m-d");
	  
	$sql = "INSERT INTO "order" (item, price) VALUES (:item, :price)";

	$sth = $pdo -> prepare($sql);
	  
	$sth -> bindValue(':name', $_POST['name']);
	  
	$sth -> bindValue(':value', $_POST['money']);
	  
	$sth -> execute();

  } catch(PDOException $e){
	  
    print("ERROR");
	  
  }
  
//   $today = date("Y-m-d");
	  
//   $query = $pdo->prepare('INSERT INTO order(item,price,day) VALUES(:shohin,:kingaku,:today)');
	  
//   $query->bindValue(':item', $POST['name'], PDO::PARAM_STR);
	  
//   $query->bindValue(':price', $POST['value'], PDO::PARAM_INT);]
	  
//   $query->bindValue(':day', $today, PDO::PARAM_STR);
   
//   $query->execute();
	
//   if(isset($_POST['select_evaluation_yes'])) {
	  
// 	$today = date("Y-m-d");
// 	$query = 'INSERT INTO(item,price,day) VALUES(:shohin,:kingaku,:today)';

//   }
  ?>  
  </body>
  
</html>
