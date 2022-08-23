<html>	
<head>
  <meta charset = "utf-8">
</head>
  <body>
	 
  <?php
	  
  session_start();
  $shohin = $_SESSION['name'];
  $kingaku = $_SESSION['money'];

  include './connect.php';
	
  $sql = "INSERT INTO \"order\" (商品名, 価格, 登録日) VALUES ('".$shohin."',".$kingaku.", '".date('Y-m-d')."');";
	  
  $stmt = $pdo -> query($sql);
	
  print ("商品名：${shohin} 価格：${kingaku} を登録しました");

  ?>
	 
  <br>
	  
  <button onclick="location.href='input.php'">もどる</button>
	  
  <button onclick="location.href='search.php'">検索</button>
	  
</body>
</html>
