<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "pw2022_b_tubes_213040044";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
