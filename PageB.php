<html>	
<head>
  <meta charset = "utf-8">
</head>
  <body>
      <?php
	$shohin = $_GET['name'];
	$kingaku = $_GET['money'];
	$today = date('Y-m-d');
	?>
  <br>
  <form method="POST">
	 <input type="submit" name="yes" value="よかった">
	 <input type="submit" name="no" value="わるかった">
  </form>
</body>
</html>
  <?php

  if(isset($_POST['yes'])) {

	session_start();
	  
	$shohin = $_GET['name'];
	 
	$kingaku = $_GET['money'];
	  
	$_SESSION['name'] = $shohin;
	  
	$_SESSION['money'] = $kingaku;
	
	header("Location: ./PageB2.php"); 
	  
  }
	  
  else if(isset($_POST['no'])){
	
	header("Location: ./index.php") ;
  
  }
  ?>  
