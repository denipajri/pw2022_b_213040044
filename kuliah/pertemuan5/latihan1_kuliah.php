<?php
// ARRAY
// variabel yang dapat menyimpan lebih dari 1 nilai sekaligus.

$hari1 = "Senin";
$hari2 = "Selasa";
$hari7 = "Minggu";

$bulam1 = "Januari";
$bulam12 = "Desember";

$mahasiswa = "Deni";

// Membuat ARRAY

$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]; // cara baru
$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni"); // cara lama

$myArray = [100, "Deni", true];

// menampilkan ARRAY
// menampilkan 1 elemen menggunakan index
echo $hari[1] . "<br>";
echo $bulan[2] . "<hr>";

// menampilkan semua isi array sekaligus
// var_dump() atau print_r()
// khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// mencetak semua isi array menggunakan looping
echo $hari[0] . "<br>";
echo $hari[1] . "<br>";
echo $hari[2] . "<br>";
echo $hari[3] . "<br>";
echo $hari[4] . "<br>";
echo $hari[5] . "<hr>";

// for
// for ($i = 0; $i < 5; $i++) {
//   echo $hari[$i] . "<br>";
// }
// echo "<hr>";
for ($i = 0; $i < count($hari); $i++) {
  echo $hari[$i] . "<br>";
}
echo "<hr>";

// foreach
foreach ($bulan as $bln) {
  echo $bln . "<br>";
}
echo "<hr>";

// memanipulasi array
// meanmbahkan elemen di akhir array
$hari[] = "Minggu";
var_dump($hari);
