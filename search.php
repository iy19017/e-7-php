<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
  </head>
  
  <body>
    
    <form action = "view.php" method = "POST">
        <input type = "text" name = "name" size = "20" maxlength = "20"><br>
        <input type = "number" name = "downlimit" size = "20" maxlength = "20">
        <input type = "number" name = "uplimit" size = "20" maxlength = "20"><br> 
        <input type = "submit" value = "送信">
        <input type = "reset" value = "クリア">
    </form>
    
    <button onclick="location.href='input.php'">入力する</button>
    
    <button onclick="location.href='index.php'">戻る</button>
    
  </body>

</html>
