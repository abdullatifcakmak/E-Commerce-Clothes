<?php

$host = "localhost";
$kullanici = "root";
$parola = "";
$vt = "alc_shop";

$baglanti = mysqli_connect($host,$kullanici,$parola,$vt);

mysqli_set_charset($baglanti,"UTF8");

if(mysqli_connect_errno() > 0 ){
    die("Hata: ".mysqli_connect_errno());
}

echo "mysql bağlantısı yapıldı.";

mysqli_close($baglanti);
?>