<?php
    // Pertemuan 2 Php Dasar
    //  Syntax Php

    // Standar Output
    // echo, print
    // print_r
    // var_dum

    // Penulisan syntax php
    // 1. Php di dalam HTML
    // 2. Html di dalam Php

    echo "Hallo" . " ";

    // Variable dan Tipe Data
    // Variable
    // Tidak boleh di awali dengan angka, tapi boleh mengandung angka

    $tempat = "WPU";

    // Operator
    //  Aritmatika
    // + - * / %

    // $x = 10;
    // $y = 20;
    // echo = $x * $y;

    // Penggabung string / concatenation / concat

    $nama_depan = "Febriany";
    $nama_belakang = "Renata";
    echo $nama_depan . " " . $nama_belakang

    // Assigment
    // =, +=, -=, *=, /=, %=, =

    // $x = 1;
    // $x += 5;
    // echo $x;

    // Perbandingan
    // <, >, <=, >=, ==, !=

    // var_dump(1 < 5);

    // Identitas
    // ===, !==
    // var_dump(1 === "1")

    // Logika
    // &&, ||, !, \
    // $x = 10;
    // var_dump($x < 20 && $x % 2 == 0);
?>


<!-- Menulis Tag Php dalam Tag Html -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar Php</title>
    </head>
    <body>
        <h1>Hallo, Selamat Datang di <?php echo $tempat; ?></h1>
        <p><?php echo "Ini adalah paragraf"; ?></p>
    </body>
    </html>

<!-- Menulis Tag Html dalam Tag php -->

<?php echo "<h2>Hallo Renata</h2>"; ?>