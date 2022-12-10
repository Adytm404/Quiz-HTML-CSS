<?php
error_reporting(0);
$nilai = $_GET['id'];
?>
<html>
  <head>
    <title>Selamat!</title>
  </head>
  <body>
    <h1>Selamat!</h1>
    <p>Nilai Anda: <?=$nilai?></p>
    <a href="index.html">Ulangi</a>
    <a href="leaderboard.php">Leaderboard</a>
  </body>
</html>