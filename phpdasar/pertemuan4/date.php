<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1970
// echo time()

// Seretus hari ke depan
// echo date("l-d-M-Y", time()+60*60*24*100)

// Delapan puluh hari kebelakang
// echo date("l-d-M-Y", time()-60*60*24*100)

// Ngitung Tanggal Lahir Kita
// mktime
// membuat sendiri detik
// mktime (0, 0, 0, 0, 0, 0)
// jam, menit, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 9, 1, 2002))

// strtotime
echo date ("l", strtotime("1 sept 2002"));
?>