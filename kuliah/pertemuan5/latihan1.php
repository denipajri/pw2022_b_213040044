<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adlah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
var_dump($hari) . "<br>";
print_r($bulan) . "<hr>";

// menampilkan 1 elemen pada array
echo $arr1[0] . "<br>";
echo $bulan[1];

// meambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis" . "<br>";
$hari[] = "Jum'at" . "<br>";
var_dump($hari);
