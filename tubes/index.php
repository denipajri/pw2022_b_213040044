<?php
require 'functions.php';
session_start();

error_reporting(0);

if (!isset($_SESSION["user_name"])) {
  header("location: login.php");
}

if (isset($_POST["signup"])) {
  $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
  $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
  $password = mysqli_real_escape_string($conn, $_POST["signup_password"]);
  $cpassword = mysqli_real_escape_string($conn, $_POST["signup_cpassword"]);
  $token = md5(rand());

  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM profiles WHERE email='$email'"));

  if ($password !== $cpassword) {
    echo "<script>
        alert('Password did not match!');
        </script>";
  } elseif ($check_email > 0) {
    echo "<script>
        alert('Email already exists!');
        </script>";
  } else {
    $sql = "INSERT INTO profiles(full_name, email, password, token, status) VALUES ('$full_name', '$email', '$password', '$token', '0')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $_POST["signup_full_name"] = "";
      $_POST["signup_email"] = "";
      $_POST["signup_password"] = "";
      $_POST["signup_cpassword"] = "";

      // $to = $email;
      // $subject = "Email Verification";

      // $message = "
      // <html>
      // <head>
      //   <title>{$subject}</title>
      // </head>
      // <body>
      // <p><strong>Dear {$full_name},</strong></p>
      // <p>Thanks for Registration! Verify your email to access our website. Click below link to verify your email.</p>
      // <p><a href='{$base_url}verify-email.php?token={$token}'>Verify Email</a></p>
      // </body>
      // </html>
      // ";
    }
  }
}

if (isset($_POST["signin"])) {
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

  $check_email = mysqli_query($conn, "SELECT id FROM profiles WHERE email='$email' && password='$password'&& status='1'");

  if (mysqli_num_rows($check_email) > 0) {
    $row = mysqli_fetch_assoc($check_email);
    $_SESSION["user_name"] = $row['id'];
    header("location: profile.php");
  } else {
    echo "<script>
        alert('Login details is incorrect. Try again!');
        </script>";
  }
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
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>User Page</title>
</head>

<body>
  <div class="container">
    <h1>Form Movies</h1>

    <div class="row mt-2">
      <div class="col-8">
        <form class="form-inline" action="" method="get">
          <div class="input-group mb-3">
            <a class="btn btn-primary" href="profile.php" role="button">Profile</a>
            <input type="text" class="form-control mr-sm-1" name="keyword" placeholder="mencari.." autocomplete="off">
            <button class="btn btn-primary my-2 my-sm-0" type="submit" name="cari">Cari</button>

          </div>
        </form>
      </div>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">No.</th>
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
              <a href="ubah.php?id=<?= $movie['movie_id']; ?>" class="btn badge bg-warning nav-link disabled">Ubah</a>
              <a href="hapus.php?id=<?= $movie['movie_id']; ?>" class="btn badge bg-danger nav-link disabled" onclick="return confirm('This data will be permanently deleted, are you sure?')">Hapus</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    <a href="logout.php" class="btn btn-primary">Logout</a>
  </div>

  <!-- Optional Javascript; choose one of the two -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0Rn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Seperate Popper and Bootstrap JS -->
  <!-- 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
  -->
</body>

</html>