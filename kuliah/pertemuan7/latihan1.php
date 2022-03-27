<?php
// variable scope / lingkup variable
// $x = 10;

// function tampilX()
// {
//   global $x;
//   echo $x;
// }

// tampilX();

// SUPERGLOBALS
// Variable global milik PHP
// merupakan array associative

// $_GET
// $_GET["nama"] = "Rd. Deni Pajrianingrat";
// $_GET["nrp"] = "213040044";

$novel = [
  [
    "gambar" => "img2/novel1.png",
    "judul" => "Laskar Pelangi",
    "pengarang" => "Andrea Hirata",
    "penerbit" => "Bentang Pustaka",
    "isbn" => "978-602-291-662-8",
    "harga" => "Rp. 139.000"

  ],
  [
    "gambar" => "img2/novel2.png",
    "judul" => "Sang Pemimpi",
    "pengarang" => "Andrea Hirata",
    "penerbit" => "Bentang Pustaka",
    "isbn" => "978-602-291-663-5",
    "harga" => "Rp. 99.000"
  ],
  [
    "gambar" => "img2/novel3.jpg",
    "judul" => "Padang Bulan",
    "pengarang" => "Andrea Hirata",
    "penerbit" => "Bentang Pustaka",
    "isbn" => "978-602-881-130-9",
    "harga" => "Rp. 104.000"
  ],
  [
    "gambar" => "img2/novel4.jpg",
    "judul" => "Maryamah Karpov",
    "pengarang" => "Andrea Hirata",
    "penerbit" => "Bentang Pustaka",
    "isbn" => "978-979-122-745-2",
    "harga" => "Rp. 87.000"
  ],
  [
    "gambar" => "img2/novel5.png",
    "judul" => "Sebelas Patriot",
    "pengarang" => "Andrea Hirata",
    "penerbit" => "Bentang Pustaka",
    "isbn" => "978-602-881-152-1",
    "harga" => "Rp. 76.000"
  ],
  [
    "gambar" => "img2/novel6.png",
    "judul" => "Orang-Orang Biasa",
    "pengarang" => "Andrea Hirata",
    "penerbit" => "Bentang Pustaka",
    "isbn" => "978-602-291-685-7",
    "harga" => "Rp. 78.000"
  ],
  [
    "gambar" => "img2/novel7.jpg",
    "judul" => "Guru Aini",
    "pengarang" => "Andrea Hirata",
    "penerbit" => "Bentang Pustaka",
    "isbn" => "978-602-291-686-4",
    "harga" => "Rp. 63.000"
  ],
  [
    "gambar" => "img2/novel8.jpg",
    "judul" => "Buku Besar Peminum Kopi",
    "pengarang" => "Andrea Hirata",
    "penerbit" => "Bentang Pustaka",
    "isbn" => "978-602-291-664-2",
    "harga" => "Rp. 69.000"
  ],
  [
    "gambar" => "img2/novel9.jpg",
    "judul" => "Ayah dan Sirkus Pohon",
    "pengarang" => "Andrea Hirata",
    "penerbit" => "Bentang Pustaka",
    "isbn" => "978-602-291-661-1",
    "harga" => "Rp. 99.000"
  ],
  [
    "gambar" => "img2/novel10.jpg",
    "judul" => "Mozaik-Mozaik Terindah",
    "pengarang" => "Andrea Hirata",
    "penerbit" => "Bentang Pustaka",
    "isbn" => "978-602-291-665-9",
    "harga" => "Rp. 199.000"
  ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>

<body>

  <h1>Daftar Buku Novel Rekomendasi</h1>
  <ul>
    <?php foreach ($novel as $n) : ?>
      <li><a href="latihan2.php?gambar=<?= $n["gambar"]; ?>&judul=<?= $n["judul"]; ?>&pengarang=<?= $n["pengarang"]; ?>&penerbit=<?= $n["penerbit"]; ?>&isbn=<?= $n["isbn"]; ?>&harga=<?= $n["harga"]; ?>"><?= $n["judul"]; ?></a></li>
    <?php endforeach ?>
  </ul>

</body>

</html>