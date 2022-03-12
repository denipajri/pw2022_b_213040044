<?php
$mahasiswa = [
  ["Rd. Deni Pajrianingrat", "213040044", "radenii2002@gmail.com", "Teknik Informatika"],
  ["Rendi Sopian", "213040042", "rendi.sopian@gmail.com", "Teknik Informatika"],
  ["Acep Imam Hambali", "213040040", "acep.imam.h@yahoo.com", "Teknik Informatika"]
];

?>
<?php foreach ($mahasiswa as $mhs) { ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
  </head>

  <body>
    <ul>
      <li>Nama: <?= $mhs[0] ?></li>
      <li>NPM: <?= $mhs[1] ?></li>
      <li>Email: <?= $mhs[2] ?></li>
      <li>Jurusan: <?= $mhs[3] ?></li>
    </ul>
  </body>

  </html>
<?php } ?>