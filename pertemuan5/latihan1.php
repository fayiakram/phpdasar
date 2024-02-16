<?php
// array
// variabel yang dapat memiliki banyak nilai
$hari = ["senin", "selasa", "rabu", "kamis", "jumat", "sabtu", "minggu"];
$bulan = ["januari", "februari"];


// menampilkan array
print_r($hari);
var_dump($bulan);

echo $hari[1];


$bulan[] = "maret";
print_r($bulan);
