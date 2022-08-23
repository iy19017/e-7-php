<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
  </head>
    
  <body>
    <?php
    
    session_start();
    
    $check = $_SESSION['error'];
    
    If($check == true){
    
      print("不正な入力");
      
      $_SESSION['error'] = false;
      
    }
    
    ?>
    <button onclick="location.href='input.php'">入力</button>
    
    <button onclick="location.href='search.php'">検索</button>
    
  </body>
</html>
