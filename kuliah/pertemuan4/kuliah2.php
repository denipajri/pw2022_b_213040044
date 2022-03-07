<?php
// definisikan masing masing sisi kubus\ 
$a = 9;
$b = 4;

// hitung masing masing volume kubus
$volume_a = pow($a, 3);
$volume_b = pow($b, 3);

// hitung total 2 volume
$total = $volume_a + $volume_b;

// kembalikan nilai atotal
echo "Jumlah dari volume kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";


echo "<hr>";
// $c = 10;
// $d = 20;
// $volume_c = pow($c, 3);
// $volume_d = pow($d, 3);
// $total_cd = 


// deklarasi / definisi function
function totalVolumeDuaKubus($a, $b)
{
  return "Jumlah dari volume dengan sisi $a dan kubus dengan sisi $b adalah " . pow($a, 3) + pow($b, 3);
}

// pemanggilan / eksekusi function
echo totalVolumeDuaKubus(5, 2) . "<br>";
echo totalVolumeDuaKubus(8, 3) . "<br>";
echo totalVolumeDuaKubus(1, 8) . "<hr>";




// membuat sebuah function untuk menghitung sebuah segitiga
// function luasSegitiga($a, $b)
// {
//   $alas = pow($a, 2);
//   $tinggi = pow($b, 4);

//   $total = $alas * $tinggi * 0.5;
//   return "Jumlahnya luas segitiga tersebut adalah $total";
// }

// echo luasSegitiga(2, 4);

function luasSegiTiga($alas, $tinggi)
{
  // $luas = 0.5 * $alas * $tinggi;
  return "Luas segitiga dengan alas $alas dan tinggi $tinggi adalah " . 0.5 * $alas * $tinggi;
}
echo luasSegiTiga(2, 4);
