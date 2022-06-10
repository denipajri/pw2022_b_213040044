<?php
$conn = mysqli_connect("localhost", "root", "", "pw2022_b_tubes_213040044") or die("KONEKSI GAGAL!!");

$server = "localhost";
$user = "root";
$pass = "";
$database = "pw2022_b_tubes_213040044";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
  die("<script>alert('Connection Failed.')</script>");
}


function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  // Siapkan data movies
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{

  global $conn;

  $title = htmlspecialchars($data["title"]);
  $synopsis = htmlspecialchars($data["synopsis"]);
  $director = htmlspecialchars($data["director"]);
  $screenwriter = htmlspecialchars($data["screenwriter"]);
  $producer = htmlspecialchars($data["producer"]);
  $release_date = htmlspecialchars($data["release_date"]);
  $movie_status = htmlspecialchars($data["movie_status"]);

  $movie_img = upload();

  if (!$movie_img) {
    return false;
  }

  $query = "INSERT INTO movies VALUES(null, '$title', '$synopsis', '$director', '$screenwriter', '$producer','$release_date', '$movie_status', '$movie_img')";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;

  mysqli_query($conn, "DELETE FROM movies WHERE movie_id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;

  $movie_id = htmlspecialchars($data["movie_id"]);
  $title = htmlspecialchars($data["title"]);
  $synopsis = htmlspecialchars($data["synopsis"]);
  $director = htmlspecialchars($data["director"]);
  $screenwriter = htmlspecialchars($data["screenwriter"]);
  $producer = htmlspecialchars($data["producer"]);
  $release_date = htmlspecialchars($data["release_date"]);
  $movie_status = htmlspecialchars($data["movie_status"]);
  $old_movie_img = strtolower($data["old_movie_img"]);

  if ($_FILES['movie_img']['error'] === 4) {
    $movie_img = $old_movie_img;
  } else {
    $movie_img = upload();
  }

  $query = "UPDATE movies SET 
              title = '$title',
              synopsis = '$synopsis',
              director = '$director',
              screenwriter = '$screenwriter'
              producer = '$producer'
              release_date = '$release_date'
              movie_status = '$movie_status'
              movie_img = '$movie_img'
            WHERE id = $movie_id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function upload()
{
  // siapkan data poster
  $fileName = $_FILES["movie_img"]["name"];
  $fileTmpName = $_FILES["movie_img"]["tmp_name"];
  $fileSize = $_FILES["movie_img"]["size"];
  $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
  $allowedType = ["jpg", "jpeg", "png"];

  // cek apakah yang diupload bukan poster
  if (!in_array($fileType, $allowedType)) {
    echo "<script>
        alert('Enter the poster!');
        </script>";
    return false;
  }

  // cek apakah poster terlalu besar
  if ($fileSize > 20000000) {
    echo "<script>
        alert('Poster file size is too large!');
        </script>";
    return false;
  }

  // proses upload poster
  $newFileName = uniqid() . $fileName;
  move_uploaded_file(strtolower($fileTmpName), 'img/' . $newFileName);

  return $newFileName;
}

function signup($data)
{
  global $conn;

  $name = strtolower(stripslashes($data["name"]));
  $password1 = mysqli_real_escape_string($conn, $data["password1"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek name
  $result = mysqli_query($conn, "SELECT name FROM users WHERE name='$name");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
        alert('Akun ini sudah ada!');
        </script>";
    return false;
  }

  // cek password
  if ($password1 !== $password2) {
    echo "<script>
        alert('Password tidak sesuai!');
        </script>";
    return false;
  }

  $password1 = password_hash($password1, PASSWORD_DEFAULT);

  mysqli_query($conn, "INSERT INTO 'users'('name', 'password')
                        VALUES ('$name', '$password1', 'user')
                      ");

  return mysqli_affected_rows($conn);
}
