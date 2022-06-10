<?php

@include 'config.php';
require 'functions.php';
session_start();

if (!isset($_SESSION['admin_name'])) {
  header('location:login.php');
}

$movies = query("SELECT * FROM movies");

if (isset($_GET["cari"])) {
  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM movies WHERE 
            title LIKE '%$keyword%' OR
            director LIKE '%$keyword%' OR
            screenwriter LIKE '%$keyword%' OR
            producer LIKE '%$keyword%' OR
            release_date LIKE '%$keyword%' OR
            movie_status LIKE '%$keyword%' OR
            synopsis LIKE '%$keyword%'
            ";

  $movies = query($query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

  <div class="container">
    <h1>Form Movies</h1>

    <div class="row mt-2">
      <div class="col-8">
        <form action="" method="get">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="keyword" placeholder="mencari.." autocomplete="off">
            <button class="btn btn-primary" type="submit" name="cari">Cari</button>
          </div>
        </form>
      </div>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Movie Poster</th>
          <th scope="col">Title</th>
          <th scope="col">Release Date</th>
          <th scope="col">Director</th>
          <th scope="col">Screenwriter</th>
          <th scope="col">Producer</th>
          <th scope="col">Movie Status</th>
          <th scope="col">Synopsis</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($movies as $movie) : ?>
          <tr class="align-middle">
            <th scope="row"><?= $no++; ?></th>
            <td><img src="img/<?= $movie["movie_img"]; ?>" width="100px" class="img-thumbnail"></td>
            <td><?= $movie["title"]; ?></td>
            <td><?= $movie["release_date"]; ?></td>
            <td><?= $movie["director"]; ?></td>
            <td><?= $movie["screenwriter"]; ?></td>
            <td><?= $movie["producer"]; ?></td>
            <td><?= $movie["movie_status"]; ?></td>
            <td><?= $movie["synopsis"]; ?></td>
            <td>
              <a href="ubah.php?id=<?= $movie['movie_id']; ?>" class="btn badge bg-warning">Ubah</a>
              <a href="hapus.php?id=<?= $movie['movie_id']; ?>" class="btn badge bg-danger" onclick="return confirm('This data will be permanently deleted, are you sure?')">Hapus</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    <a href="tambah.php" class="btn btn-primary">Tambah Data Movies</a>
    <a href="logout.php" class="btn btn-primary">Logout</a>

  </div>

</body>

</html>