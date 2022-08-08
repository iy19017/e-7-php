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
  
      $result = &connect -> query(&sql_text);
  
      print "<h3>データベース検索結果</h3>\=n";
  
      print "<table border=1 cellspacing=1 cellpadding=1>\n";
      print "<tr>";　　 // 表の見出し行の始まり
      print "<th>company</th>"; // 表の見出し company
      print "<th>turnover</th>"; // 表の見出し turnover
      print "</tr>";　　　　　　 // 表の見出し行の終わり
  
      $rs = $result->fetchAll ();
      foreach ($rs as $row):
        print "<tr>";　　　　　　 // 表の明細行の始まり
        print ’<td>’.$row[’company’]."</td>";
        print ’<td>’.$row[’turnover’]."</td>";
        print "</tr>Y=n";　　　　　　 // 表の明細行の終わり
      endforeach;
      print "</table>Y=n";　　　　　　 // 表の終わり

  
    ?> 

</html>
