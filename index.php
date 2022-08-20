<!-- <!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
  </head>
    
  <body>
      <form action = "PageB.php" method = "POST">
        <input type = "text" name = "name" value = "" size = "20" maxlength = "20"><br>
        <input type = "value" name = "money" value = "" size = "20" maxlength = "20"><br>
        <input type = "submit" value = "送信">
        <input type = "reset" value = "クリア">
      </form>
  </body>

</html>
 -->
<?php
 $server = "ec2-52-211-232-23.eu-west-1.compute.amazonaws.com";
      　$database = "dao0aqgjli0ekl";
      　$port_number = 5432;
      　$user_id = "njtersecjvwybh";
      　$user_password = "b50e46eb2f6767eb9e27889330ef5ec058168f2c0abed5610dd08a2f9c61b694"; 

	$connect = new PDO("pgsql:host=$server; dbname=$database; port=$port_number;　user=$user_id; password=$user_password");
?>
