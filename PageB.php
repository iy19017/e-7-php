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
</body>
</html>
  <?php
  if(isset($_POST['yes'])) {
	
	$sql = "INSERT INTO order (商品名, 価格, 登録日) VALUES (':shohin', :kingaku, :today)";
	  
	$stmt = $pdo->prepare($sql);
	  
	$stmt->bindParam(':shohin', $shohin);

	$stmt->bindParam(':kingaku', $kingaku);

	$stmt->bindParam(':today', $today);
	  
	$stmt->execute();
	  
  }
	  
  else if(isset($_POST['no'])){
	
	header("Location: ./index.php") ;
  
  }
  ?>  
