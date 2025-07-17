<?php

$host = "localhost";
$kullanici = "root";
$parola = "";
$vt = "alc_shop";

$baglanti = mysqli_connect($host,$kullanici,$parola,$vt);

mysqli_set_charset($baglanti,"UTF8");



mysqli_close($baglanti);
?>