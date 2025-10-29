<?php
// Arraya
// variable yang dapat memiliki banyak nilai
// element pad array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// key nya adalah index yang di mulai dari nol

// membuat array
// cara lama

$hari = array("senin", "selasa", "rabu");

// cara baru

$bulan = ["Januari", "February", "Maret"];

$arr1 = [123, "tulisan", false];

// Menampilkan array ke layar
// var_dump() / print_r()

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// menampilkan 1 element pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];

// menambahkan element baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
?>