<?php
// FUNCTION
// build-in function
// DATE*
// date();
// untuk menampilkan tanggl dengan format tertentu
echo date("l, d-M-Y") . "<hr>";

// time();
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
echo time() . "<hr>";
echo date("l", time() + 60 * 60 * 24 * 100) . "<br>";
echo date("l, d M Y", time() - 60 * 60 * 24 * 100) . "<hr>";

// mktime();
// membuat sendiri detik
// mktime(0, 0, 0, 0, 0, 0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0, 0, 0, 12, 10, 2002)) . "<hr>";

// strtotime
echo date("l", strtotime("10 dec 2002")) . "<hr>";

// STRING*
// strlen()
// menghitung sebuah panjang string
// $i = "Hello, World!";
// echo "Panjang sebuah string " . $i . " adalah " . strlen($i) . "<hr>";

// // strcmp()
// // membandingkan dua buah string
// $b = strcmp("lorem", "lorem");
// echo $b . "<br>"; // hasilnya 0 karena nilai pada strcmpnya sama

// $c = strcmp("string2", "ini adalah sebuah string");
// echo $c; //

// explode()
// memecah sebuah statment menjadi array

// htmlspecialchars()
// security

// UTILITY*
// var_dump()
// isset()
// empty()
// die()
// sleep()

