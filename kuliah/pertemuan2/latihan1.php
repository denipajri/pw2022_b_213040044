<?php
// pertemuan2
echo 10; // integer
echo '<br>';
echo 'Deni'; //string
echo '<br>';
echo false; // boolean null
echo true; // boolean 1
echo '<hr>';

// Variable
// = tempat menampung nilai (wadah) untuk menyimpan sebuah value atau nilai
// awali dengan tanda $, namanya bebas
// boleh mengandung angka, tidak boleh diawali angka
// tidak boleh ada spasi
$nama_depan = 'Raden';
echo $nama_depan;
echo '<hr>';

// STRING
// '', ""
$hari6 = "Sabtu";
echo $hari6;
echo '<br>';
$hari5 = "Jum'at";
echo $hari5;
echo '<br>';
echo 'Raden Deni:"Selamat hari raya!"';
echo '<br>';
// Escape Character
// \
echo 'Raden : "Selamat hari Jum\'at"';
echo '<br>';
echo "Raden : \"Selamat hari Jum'at\"";
echo '<br>';

// Interpolasi
// Mencetak langsung isi variabel
// hanya bisa oleh ""
echo "Halo, nama saya $nama_depan";
echo '<br>';
echo 'Halo, nama saya $nama_depan';
echo '<hr>';

// concat / penggabungan string
// .
$nama_depan = 'Raden';
$nama_belakang = 'Deni';
echo $nama_depan . " " . $nama_belakang;
echo '<br>';
echo 'Deni: "Selamat' . " hari Jum'at";
echo '<br>';

// OPERATOR
// Aritmatika
// +, -, *. /, % (modulo / modulus / sisa bagi)
echo 1 + 1; // Hasil dari 1 + 1 adalah 2;
echo '<br>';
echo (1 + 2) * 3 - 4; // kabataku
echo '<br>';
echo 10 % 5;
echo '<br>';
echo 1 + "1" + 2;
echo '<hr>';


// perbandingan
// <, >, <=, >=, ==, !=
echo 1 < 5;
echo '<br>';
echo 1 > 5;
echo '<br>';
echo 1 == 1;
echo '<br>';
echo 1 != 1;
echo '<hr>';


// identitas / strict comparison
// ===, !==
echo 1 === "1";


// incerement / decrement
// tambah / kurang 1
// ++, --
$x = 10;
$x++;
$x--;
--$x;
++$x;

echo --$x;
echo '<br>';
echo $x++;
echo '<br>';
echo $x;
echo '<hr>';
