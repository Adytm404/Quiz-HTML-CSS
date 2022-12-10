<?php
  $nilai = 0;
  if (isset($_POST['submit'])) {
    if ($_POST['soal1'] == "A") {
      $nilai += 10;
    }
    if ($_POST['soal2'] == "A") {
      $nilai += 10;
    }
    if ($_POST['soal3'] == "A") {
      $nilai += 10;
    }
    if ($_POST['soal4'] == "A") {
      $nilai += 10;
    }
    if ($_POST['soal5'] == "A") {
      $nilai += 10;
    }
    
    // Simpan nilai ke dalam file
    $myfile = fopen("hasil.txt", "a+") or die("Unable to open file!");
    fwrite($myfile, $nilai . "\n");
    fclose($myfile);
    
    
    // Alihkan ke halaman selamat.html
    header("Location: selamat.php?id=$nilai");
  }
?>
