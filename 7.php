<?php

function compareNames($name1, $name2) {
  $panjang1 = strlen($name1);
  $panjang2 = strlen($name2);
//str hitung karakter
  echo "Nama pertama: $name1\n <br>";
  echo "Nama kedua: $name2\n <br>";

  if ($panjang1 > $panjang2) {
    $diff = $panjang1 - $panjang2;
    echo "$name1 memiliki jumlah karakter lebih banyak dari $name2 : selisihnya $diff karakter\n";
  } elseif ($panjang2 > $panjang1) {
    $diff = $panjang2 - $panjang1;
    echo "$name2 memiliki jumlah karakter lebih banyak dari $name1 : selisihnya $diff karakter\n";
  } else {
    echo "Kedua nama memiliki jumlah karakter yang sama\n";
  }
}

compareNames("nisa auliani", "Aca");

?>