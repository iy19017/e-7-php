<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
  </head>
    
    <?php
        
      $server = "ec2-52-211-232-23.eu-west-1.compute.amazonaws.com";
      $database = "dao0aqgjli0ekl";
      $port_number = 5432;
      $user_id = "njtersecjvwybh";
      $user_password = "b50e46eb2f6767eb9e27889330ef5ec058168f2c0abed5610dd08a2f9c61b694"; 

      $connect = new PDO("pgsql:host=$server; dbname=$database; port=$port_number;　user=$user_id; password=$user_password");
  
      $sql_text = "select name, value from table01 where turnover > 100000 order byturnover desc";
  
      $result = &connect -> query("SELECT * FROM order");
  
//       print "<h3>データベース検索結果</h3>\=n";
  
//       print "<table border=1 cellspacing=1 cellpadding=1>\n";
//       print "<tr>";　　 // 表の見出し行の始まり
//       print "<th>商品名</th>"; // 表の見出し company
//       print "<th>価格</th>"; // 表の見出し turnover
//       print "</tr>";　　　　　　 // 表の見出し行の終わり
  
//       while (($row = pg_fetch_array ($result))):
//         print "<tr>";　　　　　　 // 表の明細行の始まり
//         print ’<td>’.$row[0]."</td>";
//         print ’<td>’.$row[1]."</td>";
//         print "</tr>\=n";　　　　　　 // 表の明細行の終わり
//       endwhile;
  
      foreach ($result as $row){
//         ?><?=row["name"]?> : <?=row["value"]?>: <?=row["day"]?><br>
//         <?php
//       }
    ?> 

</html>
