<?php
// SUPERGLOBAL
// Variable bawaan PHP yang bisa diakses dimana pun
// bentuknya aray associative
// $_GET
// $_POST
// $_SERVER

// menimpa
// $_GET = ["nama" => "Deni", "email" => "radenii2002@gmail.com"];

// $_GET["nama"] = 'Deni';
// $_GET["email"] = 'radenii2002@gmail.com';

// 
?>
<!-- <h1>Halo, <?= $_GET["nama"]; ?></h1> -->
<ul>
  <li>
    <a href="kuliah_latihan2.php?nama=Pajri&npm=213040041&email=pajri21@yahoo.com">Pajri</a>
  </li>
  <li>
    <a href="kuliah_latihan2.php?nama=Deni&npm=223040042&email=radenii2002@gmail.com">Deni</a>
  </li>
  <li>
    <a href="kuliah_latihan2.php?nama=Rendi&npm=233040043&email=rendi12@mail.com">Rendi</a>
  </li>
  <li>
    <a href="kuliah_latihan2.php?nama=Imam&npm=243040044&email=imam2013@gmail.com">Imam</a>
  </li>
</ul>