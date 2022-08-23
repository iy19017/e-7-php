<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
  </head>
  
  <body>
	  
  <?php
	  
	try{
	  
	$server = "ec2-54-76-43-89.eu-west-1.compute.amazonaws.com";
	$database = "dcrb5clh0jqmke";
	$host = 5432;
	$user_id = "owlsbojfhnbkxz";
	$user_password = "743232ea27dee0cbb00552fac7d502b2f4a0aa4c7763af9193bc9b5d539ab51e"; 

	$pdo = new PDO("pgsql:host=$server; dbname=$database; user=$user_id; password=$user_password");	

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	echo "OK";

	} catch(PDOException $e){

	echo "ERROR";

	}
	  
	$name = $_POST['name'];
	$money1 = $_POST['money1'];
	$money2 = $_POST['money2'];
	  
	$sql = "select * from \"order\" order by 価格";
	  
	$result = $pdo->query ($sql);
	  
	$rs = $result->fetchAll();
	  
	print "<table border=1 cellspacing=1 cellpadding=1>"; // 表の開始 (HTML タグ)
	  
	print "<tr>";　　 // 表の見出し行の始まり
	print "<th>商品名</th>"; // 表の見出し company
	print "<th>価格</th>"; // 表の見出し turnover
	print "<th>登録日</th>"; // 表の見出し turnover
	print "</tr>";　　　　　　 // 表の見出し行の終わり
	  
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
