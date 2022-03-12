<?php
$mahasiswa = [
  ["Rd. Deni Pajrianingrat", "213040044", "Teknik Informatika", "radenii2002@gmail.com"],
  ["Rendi Sopian", "213040042", "Teknik Informatika", "rendi.sopian@gmail.com"],
  ["Acep Imam Hambali", "213040040", "Teknik Informatika", "acep.imam.h@yahoo.com"]
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
      <li>Nama: <?= $mhs[0]; ?></li>
      <li>NRP: <?= $mhs[1]; ?></li>
      <li>Jurusan: <?= $mhs[2]; ?></li>
      <li>Email: <?= $mhs[3]; ?></li>
    </ul>
  <?php endforeach ?>

</body>

</html>