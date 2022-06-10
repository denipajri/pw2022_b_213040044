<?php
session_start();

include 'config.php';

if (!isset($_SESSION["user_name"])) {
  header("location: login.php");
}

if (isset($_POST["submit"])) {
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $pass = mysqli_real_escape_string($conn, md5($_POST["name"]));
  $cpass = mysqli_real_escape_string($conn, md5($_POST["name"]));

  if ($pass === $cpass) {
    $photo_name = mysqli_real_escape_string($conn, $_FILES["photo"]["name"]);
    $photo_tmp_name = $_FILES["photo"]["tmp_name"];
    $photo_size = $_FILES["photo"]["size"];
    $photo_new_name = rand() . $photo_name;

    if ($photo_size > 5000000) {
      echo "<script>
        alert('Your photo is very big. Maximum photo uploading is 4.5Mb!');
        </script>";
    } else {
      $sql = "UPDATE profiles SET full_name='$full_name', password='$password', photo='$photo_new_name', WHERE id='{$_SESSION["user_name"]}'";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>
        alert('Profile updated successfully!');
        </script>";
        move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
      } else {
        echo "<script>
        alert('Profile can not updated!');
        </script>";
        echo $conn->error;
      }
    }
  } else {
    echo "<script>
        alert('Password not matched. Try Again!');
        </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style2.css">
  <title>Profile</title>
</head>

<body class="profile-page">

  <div class="wrapper">
    <p>Wanna Logout?
      <a href="logout.php">Click Here!</a>
    </p>
    <h2>Profile</h2>
    <form action="" method="post" enctype="multipart/form-data">
      <?php

      $sql = "SELECT * FROM profiles WHERE id='{$_SESSION["user_name"]}'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>

          <div class="inputBox">
            <input type="text" name="full_name" id="full_name" placeholder="Full Name" value="<?= $row['full_name']; ?>" required>
          </div>
          <div class="inputBox">
            <input type="email" name="email" id="email" placeholder="Email Address" value="<?= $row['email']; ?>" disabled required>
          </div>
          <div class="inputBox">
            <input type="password" name="password" id="password" placeholder="Password" value="<?= $row['password']; ?>" required>
          </div>
          <div class="inputBox">
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" value="<?= $row['password']; ?>" required>
          </div>
          <div class="inputBox">
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" accept="img/*" required>
          </div>
          <img src="uploads/<?= $row["photo"]; ?>" alt="" width="150px" height="auto">
      <?php

        }
      }

      ?>
      <div>
        <button type="submit" name="submit" class="btn">Update Profile</button>
      </div>
    </form>
  </div>

</body>

</html>