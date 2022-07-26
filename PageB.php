<html>
  
<head>
  <meta charset = "utf-8">
</head>

  <body>

  <?php
    
    $shohin = $_POST['name'];
    
    $kingaku = $_POST['money'];
    
    print "$shohin $kingaku";

  ?>
  
  <br>
  <button onclick = "location.href = 'PageC.php'"> いいよ</button>
  
  <button onclick = "location.href = 'index.php'">だめ</button>
  
  </body>
  
</html>
