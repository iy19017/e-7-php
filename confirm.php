<html>	
<head>
  <meta charset = "utf-8">
</head>
  <body>
  <form method="POST">
	 <input type="submit" name="yes" value="よかった">
	 <input type="submit" name="no" value="わるかった">
  </form>
</body>
</html>
  <?php

  $shohin = $_GET['name'];

  $kingaku = $_GET['money'];

  include './Check.php';

  If((InputNameCheck($shohin)) or (ValueCheck($kingaku))){
	  
	session_start();
  
	$_SESSION['error'] = true;
	  
	header("Location: ./index.php");
	  
  }

  if(isset($_POST['yes'])) {
	
	session_start();

	$shohin = $_GET['name'];
	 
	$kingaku = $_GET['money'];
	  
	$_SESSION['name'] = $shohin;
	  
	$_SESSION['money'] = $kingaku;
	
	header("Location: ./complete.php"); 
	  
  }
	  
  else if(isset($_POST['no'])){
	
	header("Location: ./input.php") ;
  
  }
  ?>  
