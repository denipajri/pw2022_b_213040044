<?php
// array associative
// array yg indexnya berupa string, yg berasosiasi dengan nilaimya

$mahasiswa = [
  [
    "nama" => "Rd. Deni Pajrianingrat",
    "npm" => "213040044",
    "email" => "radenii2002@gmail.com",
    "jurusan" => "Teknik Informatika"
  ],
  [
    "nama" => "Rendi Sopian",
    "npm" => "213040042",
    "email" => "rendi.sopian@gmail.com",
    "jurusan" => "Teknik Informatika"
  ],
  [
    "nama" => "Acep Imam Hambali",
    "npm" => "213040040",
    "email" => "acep.imam.h@yahoo.com",
    "jurusan" => "Teknik Informatika"
  ]
];


// var_dump($mahasiswa[1]["email"]);
?>
<?php foreach ($mahasiswa as $mhs) : ?>
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
      <li>Nama: <?= $mhs["nama"] ?></li>
      <li>NPM: <?= $mhs["npm"] ?></li>
      <li>Email: <?= $mhs["email"] ?></li>
      <li>Jurusan: <?= $mhs["jurusan"] ?></li>
    </ul>
  </body>

  </html>
<?php endforeach ?>