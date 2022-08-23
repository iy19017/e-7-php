<?php
	session_start();
	$shohin = $_SESSION['name'];
	$kingaku = $_SESSION['money'];

	include './connect.php';
	
	$sql = "INSERT INTO \"order\" (商品名, 価格, 登録日) VALUES ('".$shohin."',".$kingaku.", '".date('Y-m-d')."');";
	  
	$stmt = $pdo -> query($sql);	

?>
<html>	
<head>
  <meta charset = "utf-8">
</head>
  <body>
	 
  <?php
	
  print ("商品名：${shohin} 価格：${kingaku} を登録しました");

  ?>
	  
  <form action="index.php">
	 <input type="submit" name="return" value="もどる">
  </form>
</body>
</html>
  <?php

// 	include './connect.php';
	
// 	$sql = "INSERT INTO \"order\" (商品名, 価格, 登録日) VALUES ('".$shohin."',".$kingaku.", '".date('Y-m-d')."');";
	  
// 	$stmt = $pdo -> query($sql);
	  
  ?>  
