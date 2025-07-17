<?php
include "baglanti.php";


$username_err = "";
$password_err = "";



if (isset($_POST["giris"])) {



  // Kullanıcı adı doğrulama
  if (empty($_POST["kullaniciadi"])) {
    $username_err = "Kullanıcı adı boş bırakılamaz.";
  } else {
    $username = $_POST["kullaniciadi"];
  }






  // Parola doğrulama
  if (empty($_POST["parola"])) {
    $password_err = "Şifre boş bırakılamaz.";
  } else {
    $password = $_POST["parola"];
  }






  if (isset($username) && isset($password)) {

    $secim = "SELECT * FROM users WHERE kullanici_adi= '$username'";
    $calistir = mysqli_query($baglanti, $secim);
    $kayitsayisi = mysqli_num_rows($calistir); // 1 veya o dır (kullanıcı adı uniqe olduğundan)
    if ($kayitsayisi > 0) {
      $ilgilikayit = mysqli_fetch_assoc($calistir);
      $hashlisifre = $ilgilikayit["parola"];

      if (password_verify($password, $hashlisifre)) {

        session_start();
        $_SESSION["kullanici_adi"] = $ilgilikayit["kullanici_adi"];
        $_SESSION["email"] = $ilgilikayit["email"];
        if ($username == "admin") {
          header("Location: admin/index.php");
        } else {
          header("location: profile.php");
        }
      } else {
        echo '<div class="alert alert-danger" role="alert">
  Şifre hatalı
</div>';
      }
    } else {
      echo '<div class="alert alert-danger" role="alert">
  Kullanıcı adı yanlış
</div>';
    }

    mysqli_close($baglanti);
  }
}



$pageTitle = "ALC | Giriş Yap";
include "header.php";
?>


<div class="card p-5 m-5">
  <form action="login.php" method="POST">
    <div class="ust-baslik pb-5">
      <h2>Giriş Yap</h2>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Kullanıcı Adı</label>
      <input type="text" class="form-control 
    <?php
    if (!empty($username_err)) {
      echo "is-invalid";
    }
    ?>"
        id="exampleInputEmail1" name="kullaniciadi">
      <div id="validationServer03Feedback" class="invalid-feedback">
        <?php echo $username_err ?>
      </div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Şifre</label>
      <input type="password" class="form-control     <?php
                                                      if (!empty($password_err)) {
                                                        echo "is-invalid";
                                                      }
                                                      ?>"
        id="exampleInputPassword1" name="parola">
      <div id="validationServer03Feedback" class="invalid-feedback">
        <?php echo $password_err ?>
      </div>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Beni hatırla</label>
    </div>
    <button type="submit" name="giris" class="btn btn-primary">Giriş yap</button>
  </form>
</div>

<?php include "footer.php" ?>