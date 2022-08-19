<html>
  
<head>
  <meta charset = "utf-8">
</head>
  <body>
      <?php
        $shohin = $_GET['name'];
        $kingaku = $_GET['money'];
        print "$shohin $kingaku";
	  
	$server = "ec2-52-211-232-23.eu-west-1.compute.amazonaws.com";
    	$database = "dao0aqgjli0ekl";
	$port_number = 5432;
	$user_id = "njtersecjvwybh";
	$user_password = "b50e46eb2f6767eb9e27889330ef5ec058168f2c0abed5610dd08a2f9c61b694"; 

    	$connect = new PDO("pgsql:host=$server; dbname=$database; port=$port_number;　user=$user_id; password=$user_password");
      ?>
  <form method "post">
	  <ul id="select_evaluation">
		<li><input type="button" name="select_evaluation_yes" value="よかった"></li>
		<li><input type="button" name="select_evaluation_no" value="わるかった"></li>
	  </ul>
  </form>
  
  <?php	
  if(isset($_POST['select_evaluation_yes'])) {
	$today = date("Y-m-d");
	$query = "INSERT INTO users(item,price,day) VALUES('$shohin','$kingaku','$today')";
  }
  ?>  
  </body>
  
</html>
