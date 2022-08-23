<html>
  <head>
      <meta charset = "utf-8">
  </head>
  
  <body>
  <form action = "search.php" method="POST">
  	<input type="submit" name="return" value="もどる">
  </form>
  
    <?php
	  
	include './Check.php';
	  
	include './connect.php';
	  
	$name = $_POST['name'];
	  
	$downlimit = $_POST['downlimit'];
	  
	$uplimit = $_POST['uplimit'];
	  
	If(SearchNameCheck($name)){
	  
		session_start();
  
	$_SESSION['error'] = true;
	  
	header("Location: ./index.php");
	  
  	}
	  
	If(ValueRangeCheck($downlimit)){
	
		session_start();

		$_SESSION['error'] = true;

		header("Location: ./index.php");
	
	}
	  
	If(ValueRangeCheck($uplimit)){
	
		session_start();

		$_SESSION['error'] = true;

		header("Location: ./index.php");
	
	}
	  
	  
	if(!empty($name)){
		
		$sql = "select * from \"order\" where 商品名 like '".$name."' order by 登録日 desc;";
	
	}
	  
	else if(empty($name)){
	
		if(!empty($downlimit) and !empty($uplimit)){
			
			$sql = "select * from \"order\" where 価格 between '".$downlimit."' and '".$uplimit."' order by 登録日 desc;";
		
		}
		
		else if(empty($name) and empty($downlimit) and empty($uplimit)){
		
			$sql = "select * from \"order\" order by 登録日 desc;";
		}
		
		else if(empty($downlimit)){
		
			$sql = "select * from \"order\" where 価格 < '".$uplimit."' order by 登録日 desc;";
		
		}
		
		else if(empty($uplimit)){
			
			$sql = "select * from \"order\" where 価格 > '".$downlimit."' order by 登録日 desc;";
			
		}
	}
	  
	$result = $pdo->query ($sql);
	  
	$rs = $result->fetchAll();
	  
	print "<table border=1 cellspacing=1 cellpadding=1>";
	  
	print "<tr>";
	print "<th>商品名</th>";
	print "<th>価格</th>";
	print "<th>登録日</th>";
	print "</tr>";
	  
	foreach ($rs as $row):
	
		print "<tr>";
		print '<td>'.$row['商品名']."</td>";
		print '<td>'.$row['価格']."</td>";
		print '<td>'.$row['登録日']."</td>";
		print "</tr>";
	
	endforeach;
	
	print "</table>";
	  
  ?>
	  
  </body>
</html>
