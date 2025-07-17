<?php

session_start();
if (isset($_SESSION["kullanici_adi"])) {
  echo "<h3>" . $_SESSION["kullanici_adi"] . " HOŞGELDİN</h3>";
  echo "<h3>" . $_SESSION["email"] . "</h3>";
  echo "<a href='exit.php' style= 'color:white; background-color:black; border:2px solid white; padding: 5px;'>Çıkış Yap</a>";
} else {
  echo "İZİNSİZ GİRİŞ !!!";
}
