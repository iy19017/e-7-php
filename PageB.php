<html>
<head>
  <meta charset = "utf-8">
</head>
  <body>
      <?php
	$shohin = $_POST['name'];
	$kingaku = $_POST['money'];
	print("$shohin $kingaku");
	  
// 	$server = "ec2-52-211-232-23.eu-west-1.compute.amazonaws.com";
//         $database = "dao0aqgjli0ekl";
//         $host = 5432;
// 	$user_id = "njtersecjvwybh";
// 	$user_password = "b50e46eb2f6767eb9e27889330ef5ec058168f2c0abed5610dd08a2f9c61b694"; 

// 	$pdo = new PDO("pgsql:host=$server; dbname=$database; port=$port_number; user=$user_id; password=$user_password");
      
	?>
  <br>  
  <form method = "POST">
	 <input type="button" onclick="click_yes" name="select_evaluation_yes" value="よかった">
	 <input type="button" name="select_evaluation_no" value="わるかった" href="index.php">
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
	  
	$query = $pdo->prepare('INSERT INTO order(item,price,day) VALUES(:shohin,:kingaku,:today)');

	$query->bindValue(':item', $POST['name'], PDO::PARAM_STR);

	$query->bindValue(':price', $POST['value'], PDO::PARAM_INT);]

	$query->bindValue(':day', $today, PDO::PARAM_STR);

	$query->execute();

  } catch(PDOException $e){
	  
    print("ERROR");
	  
  }
  
  $today = date("Y-m-d");
	  
  $query = $pdo->prepare('INSERT INTO order(item,price,day) VALUES(:shohin,:kingaku,:today)');
	  
  $query->bindValue(':item', $POST['name'], PDO::PARAM_STR);
	  
  $query->bindValue(':price', $POST['value'], PDO::PARAM_INT);]
	  
  $query->bindValue(':day', $today, PDO::PARAM_STR);
   
  $query->execute();
	
//   if(isset($_POST['select_evaluation_yes'])) {
	  
// 	$today = date("Y-m-d");
// 	$query = 'INSERT INTO(item,price,day) VALUES(:shohin,:kingaku,:today)';

//   }
  ?>  
  </body>
  
</html>
