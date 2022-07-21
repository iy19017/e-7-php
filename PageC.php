<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
  </head>
    
    <?php
        
      $server = "ec2-52-48-159-67.eu-west-1.compute.amazonaws.com";
      $database = "d8bgma6jnt8fbd";
      $port_number = 5432;
      $user_id = "qcbzuxmlmaijby";
      $user_password = "bb16bd25fb0ee94746f9270dc541f7e3d8d1c2a9eeeb76b299795c9de6b80aab"; 

      $connect = new PDO("pgsql:host=$server; dbname=$database; port=$port_number; user=$user_id; password=$user_password");
      
      $shohin = $_POST['name'];
    
      $kingaku = $_POST['money'];
  
      
    
      INSERT INTO order (商品名, 価格) VALUES('$shohin, $kingaku');
  
    ?> 

      print "$shohin $kingaku"
    
    
</html>
