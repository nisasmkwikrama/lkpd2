<?php

$string = "Hello 12"; 

if (preg_match('/\d/', $string)) {
  //preg_match dengan '/\d/' untuk memeriksa apakah string $string mengandung digit
  $angka = array();
  preg_match_all('/\d/', $string, $angka);
  //preg_match_all untuk mendapatkan semua digit yang ada dalam string.
  echo "Teks mengandung angka : " . implode(', ', $angka[0]);
  //implode buat ngasi koma di array
} else {
  echo "Teks tidak mengandung angka";
}

?>