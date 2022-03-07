<?php
// 4 - FUNCTION
// Fungsion yg baik adalah fungction yg dapan megolah sesuatu
// built-in function

// date
// untuk mengetahui waktu saat ini
// default timezone: UTC (-7 jam)
echo date("l, j F Y") . "<br>";
echo date("l, j-m-y") . "<br>";
echo date("G-l, j F Y") . "<hr>";
echo date("l", time());
echo "<hr>";

// time()
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak "1 januari 1970" = waktu yang disepakati untuk awal mula komputer
echo time() . "<br>";
echo time() + 86400;
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
// hari apa 100 hari ke belakang
echo date("l", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// mktime()
// membuat waktu berdasarkan format
// mktime(0, 0, 0, 0, 0, 0,)
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(10, 45, 0, 3, 5, 2022) . "<hr>";
echo date("l", mktime(0, 0, 0, 12, 10, 2002)) . "<hr>";
echo strtotime("10 december 2002") . "<br>";
echo mktime(0, 0, 0, 12, 10, 2002);


// Fungsi Matematika
// pow() untuk pangkat
echo pow(2, 3) . "<br>";
echo rand(1, 10) . "<br>";
// pembulatan
echo round(2.8) . "<br>"; // pembulata ke nilai terdekat
echo ceil(2.1) . "<br>"; // ke atas (ceiling / langit2)
echo floor(2.9) . "<hr>";
