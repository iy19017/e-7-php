<html>
  
<head>
  <meta charset = "utf-8">
</head>

  <body>

  <?php
  
    $shohin = $_GET['name'];
    
    $kingaku = $_GET['money'];
    
    print "$shohin $kingaku";

  ?>
  
  <br>
  <button onclick = "location.href = 'PageC.php'"> いいよ</button>
  
  <button onclick = "location.href = 'index.php'">だめ</button>
  
  </body>
  
</html>
