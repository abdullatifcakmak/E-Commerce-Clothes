<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Ashion Template" />
  <meta name="keywords" content="Ashion, unica, creative, html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Varsayılan Başlık'; ?></title>

  <link rel="icon" href="img/logo.png">

  <!-- Google Font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Cookie&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet" />

  <!-- Css Styles -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />

</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Offcanvas Menu Begin -->
  <div class="offcanvas-menu-overlay"></div>
  <div class="offcanvas-menu-wrapper">
    <div class="offcanvas__close">+</div>
    <ul class="offcanvas__widget">
      <li><span class="icon_search search-switch"></span></li>
      <li>
        <a href="#"><span class="icon_heart_alt"></span>
          <div class="tip">2</div>
        </a>
      </li>
      <li>
        <a href="#"><span class="icon_bag_alt"></span>
          <div class="tip">2</div>
        </a>
      </li>
    </ul>
    <div class="offcanvas__logo">
      <a href="./index.php"><img style="width: 40px" src="img/logo.png" alt="" /></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__auth">
      <a href="#">Login</a>
      <a href="#">Register</a>
    </div>
  </div>
  <!-- Offcanvas Menu End -->

  <!-- Header Section Begin -->
  <header class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 col-lg-2">
          <div class="header__logo">
            <a href="./index.php"><img style="width: 60px" src="img/logo.png" alt="" /></a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-7">
          <nav class="header__menu">
            <ul>
              <li class="<?php echo ($activePage == 'home') ? 'active' : ''; ?>"><a href="./index.php">Anasayfa</a></li>
              <li class="<?php echo ($activePage == 'women') ? 'active' : ''; ?>"><a href="#">Kadın</a></li>
              <li class="<?php echo ($activePage == 'men') ? 'active' : ''; ?>"><a href="#">Erkek</a></li>
              <li class="<?php echo ($activePage == 'shop') ? 'active' : ''; ?>"><a href="./shop.php">Mağaza</a></li>
              <li>
                <a href="#">Sayfalar</a>
                <ul class="dropdown">
                  <li>
                    <a href="./product-details.php">Ürün Detayları</a>
                  </li>
                  <li><a href="./shop-cart.php">Sepet</a></li>
                  <li><a href="./checkout.php">Ödeme Yap</a></li>
                  <li><a href="./blog-details.php">Blog Detayları</a></li>
                </ul>
              </li>
              <li class="<?php echo ($activePage == 'blog') ? 'active' : ''; ?>"><a href="./blog.php">Blog</a></li>
              <li class="<?php echo ($activePage == 'contact') ? 'active' : ''; ?>"><a href="./contact.php">İLETİŞİM</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3">
          <div class="header__right">
            <div class="header__right__auth">
              <a href="login.php">Giriş Yap</a>
              <a href="sign.php">Kayıt Ol</a>
            </div>
            <ul class="header__right__widget">
              <li><span class="icon_search search-switch"></span></li>
              <li>
                <a href="#"><span class="icon_heart_alt"></span>
                  <div class="tip">2</div>
                </a>
              </li>
              <li>
                <a href="shop-cart.php"><span class="icon_bag_alt"></span>
                  <div class="tip">2</div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="canvas__open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>
  <!-- Header Section End -->