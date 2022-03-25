<?php
// tugas
// mencari kasus lain seperti toko online, pengelolaan data mobil, ponsel, buku, dll
// minimal elemen-nya 5
// 1 diantara 5 elemen-nya harus gambar
// datanya 10

// $mahasiswa = [
//   ["Rd. Deni Pajrianingrat", "213040044", "radenii2002@gmail.com", "Teknik Informatika"],
//   ["Rendi Sopian", "213040042", "rendi.sopian@gmail.com", "Teknik Informatika"],
//   ["Acep Imam Hambali", "213040040", "acep.imam.h@yahoo.com", "Teknik Informatika"]
// ];

// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
  [
    "nama" => "Rd. Deni Pajrianingrat",
    "nrp" => "213040044",
    "email" => "radenii2002@gmai;.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "unknown1.jpg"
  ],
  [
    "nama" => "Rendi Sopian",
    "nrp" => "213040042",
    "email" => "rendi.sopian@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "unknown2.jpg"
  ]
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>

  <h1>Daftar Mahasiswa</h1>

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NRP : <?= $mhs["nrp"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
  <?php endforeach; ?>

</body>

</html>