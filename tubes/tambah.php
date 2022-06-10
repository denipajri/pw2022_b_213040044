<?php

require 'functions.php';
session_start();

if (isset($_SESSION["user_name"])) {
  header("location: login.php");
}


// cek apakah tombol tambah sudah diklik
if (isset($_POST["tambah"])) {

  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Movies have been added!');
            document.location.href='index.php';
            </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Tambah Data Movie</title>
</head>

<body>
  <div class="container">
    <h1>Form Tambah Data Movie</h1>



    <div class="row nt-3">
      <div class="col-8">

        <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">

          <div class="mb-2">
            <label for="movie_id" class="form-label">ID</label>
            <input type="text" class="form-control" id="movie_id" name="movie_id" required maxlength="5" style="width: 150px">
          </div>

          <div class="mb-2">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
          </div>

          <div class="mb-2">
            <label for="director" class="form-label">Director</label>
            <input type="director" class="form-control" id="director" name="director">
          </div>

          <div class="mb-2">
            <label for="screenwriter" class="form-label">Screenwriter</label>
            <input type="text" class="form-control" id="screenwriter" name="screenwriter">
          </div>

          <div class="mb-2">
            <label for="producer" class="form-label">Producer</label>
            <input type="text" class="form-control" id="producer" name="producer">
          </div>

          <div class="mb-2">
            <label for="release_date" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release_date" name="release_date">
          </div>

          <div class="mb-2">
            <label for="movie_status" class="form-label">Movie Status</label>
            <input type="text" class="form-control" id="movie_status" name="movie_status">

          </div>
          <div class="mb-2">
            <label for="synopsis" class="form-label">Synopsis</label>
            <textarea class="form-control" name="synopsis" id="synopsis" cols="30" rows="10"></textarea>
          </div>

          <div class="mb-2">
            <label for="movie_img" class="form-label">Movie Poster</label>

            <img src="" class="img-thumbnail" style="width: 100px; display: none;" id="img-preview">

            <input type="file" class="form-control" id="movie_img" name="movie_img" onchange="previewImage();">
          </div>

          <button class="btn btn-primary" type="submit" name="tambah">Tambah Data Movies</button>
          <a href="index.php" class="btn btn-primary">Kembali ke Daftar Movie</a>

        </form>

      </div>
    </div>

  </div>

  <!-- Optional Javascript; choose one of the two -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0Rn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Seperate Popper and Bootstrap JS -->
  <!-- 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
  -->

  <!-- baru -->
  <script src="script.js"></script>

</body>

</html>