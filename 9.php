<?php
function hitung($amount) {
    $rupiah = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];
    
    $result = [];
    //fungsi modul adala mencari sisa dari pembagian $jumlah dan $note
    foreach ($rupiah as $note) {
        if ($amount >= $note) {
            $result[$note] = intdiv($amount, $note);
            //indiv untuk membagi bil agar hasilnya bilangan bulat 
            $amount = $amount % $note; 
        }
    }
    
    return $result;
}


$amount = 12500;
$results = hitung($amount);


echo "Jumlah uang: Rp $amount\n";
foreach ($results as $note => $count) {
    echo "Rp " . number_format($note, 0, ',', '.') . " : $count lembar\n";
}
?>