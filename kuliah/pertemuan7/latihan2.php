<?php
// cek apakah masih ada data di $_GET
if (
  !isset($_GET["judul"]) ||
  !isset($_GET["pengarang"]) ||
  !isset($_GET["penerbit"]) ||
  !isset($_GET["isbn"]) ||
  !isset($_GET["gambar"]) ||
  !isset($_GET["harga"])
) {
  // redirect
  header("Location: latihan1.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Novel</title>
</head>

<body>

  <ul>
    <li>
      <img src="<?= $_GET["gambar"]; ?>">
    </li>
    <li><?= $_GET["judul"]; ?></li>
    <li><?= $_GET["pengarang"]; ?></li>
    <li><?= $_GET["penerbit"]; ?></li>
    <li><?= $_GET["isbn"]; ?></li>
    <li><?= $_GET["harga"]; ?></li>
  </ul>

  <a href="latihan1.php">Kembali ke Daftar Buku Novel</a>

</body>

</html>