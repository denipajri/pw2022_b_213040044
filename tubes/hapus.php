<?php

require 'functions.php';
$id = $_GET["id"];

if (hapus($id) > 0) {
  echo "<script>
          alert('Movie has been deleted!');
          document.location.href='index.php';
        </script>";
}
