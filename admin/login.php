<?php
include "db.php";

$username_err = "";
$password_err = "";



if(isset($_POST["login"]))
{



  // Kullanıcı adı doğrulama
  if(empty($_POST["username"]))
  {
    $username_err = "Kullanıcı adı boş bırakılamaz.";
  }
    else{
      $username = $_POST["username"];
    }






    // Parola doğrulama
    if(empty($_POST["password"]))
    {
      $password_err = "Şifre boş bırakılamaz.";
    }
    else{
      $password = $_POST["password"];
    }




    

  if(isset($username) && isset($password))
    {

      $secim = "SELECT * FROM users WHERE users_username= '$username'";
      $calistir = mysqli_query($baglanti,$secim);
      $kayitsayisi = mysqli_num_rows($calistir); // 1 veya o dır (kullanıcı adı uniqe olduğundan)
      if($kayitsayisi>0)
      {
        $ilgilikayit = mysqli_fetch_assoc($calistir);
        $hashlisifre = $ilgilikayit["password"];

        if(password_verify($password, $hashlisifre))
        {
          session_start();
          $_SESSION["users_username"] = $ilgilikayit["users_username"];
          header("location: index.php");
        }
        else{
          echo'<div class="alert alert-danger" role="alert">
  Şifre hatalı
</div>';
        }
      }
      else{
        echo'<div class="alert alert-danger" role="alert">
  Kullanıcı adı yanlış
</div>';
      }
  
  mysqli_close($baglanti);

}
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Giriş</title>
    <link rel="stylesheet" href="stil.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="form">
    <h1>Admin Panel Giriş</h1>
    <form action="login.php" method="$_POST"
>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kullanıcı Adı</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Şifre</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>

  <button type="submit" class="btn btn-primary" name="login">Giriş Yap</button>
</form>
    </div>

</body>
</html>