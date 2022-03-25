<?php
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
<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku Novel</title>
</head>

<body>

  <h1>Daftar Buku Novel</h1>
  <?php foreach ($novel as $n) : ?>
    <ul>
      <li>
        <img src="<?= $n["gambar"]; ?>">
      </li>
      <li>Judul :<?= $n["judul"]; ?></li>
      <li>ISBN :<?= $n["isbn"]; ?></li>
      <li>Pengarang :<?= $n["pengarang"]; ?></li>
      <li>Penerbit :<?= $n["penerbit"]; ?></li>
    </ul>
  <?php endforeach ?>

</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Daftar Buku Novel</title>
</head>

<body>
  <div class="container">
    <h1>Daftar Buku Novel</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Gambar</th>
          <th scope="col">Judul</th>
          <th scope="col">ISBN</th>
          <th scope="col">Harga</th>
          <th scope="col">Pengarang</th>
          <th scope="col">Penerbit</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($novel as $n) : ?>
          <tr class="align-middle">
            <th scope="row"><?= $no++; ?></th>
            <td><img src="<?= $n["gambar"]; ?>" width="50px" class="rounded-circle"></td>
            <td><?= $n["judul"]; ?></td>
            <td><?= $n["isbn"]; ?></td>
            <td><?= $n["harga"]; ?></td>
            <td><?= $n["pengarang"]; ?></td>
            <td><?= $n["penerbit"]; ?></td>
            <td>
              <a href="" class="btn badge bg-warning">edit</a>
              <a href="" class="btn badge bg-danger">delete</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>

  <!-- Optional Javascript; choose one of the two -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdeliver.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0Rn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Seperate Popper and Bootstrap JS -->
  <!-- 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
  -->
</body>

</html>