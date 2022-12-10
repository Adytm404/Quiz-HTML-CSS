<!--leaderboard.php-->
<?php
  // Baca file hasil.txt
  $myfile = fopen("hasil.txt", "r") or die("Unable to open file!");
  $nilai = array();
  
  while(!feof($myfile)) {
    $nilai[] = fgets($myfile);
  }
  fclose($myfile);
  
  // Sort nilai menggunakan bubble sort
  for ($i = 0; $i < sizeof($nilai)-1; $i++) {
    for ($j = 0; $j < (sizeof($nilai)-1)-$i; $j++) {
      if ($nilai[$j] < $nilai[$j+1]) {
        $temp = $nilai[$j];
        $nilai[$j] = $nilai[$j+1];
        $nilai[$j+1] = $temp;
      }
    }
  }
?>

<html>
  <head>
    <title>Leaderboard</title>
  </head>
  <body>
    <h1>Leaderboard</h1>
    <?php
      for ($i = 0; $i < sizeof($nilai); $i++) {
        echo "<p>Peringkat " . ($i+1) . ": " . $nilai[$i] . "</p>";
      }
    ?>
  </body>
</html>