<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if ($_SESSION["giris"] != "evet") {
  Header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="İletişim">
  <meta name="description" content="">
  <title>Hakkımızda</title>
  <link rel="shortcut icon" href="images/default-logo.png">
  <link rel="stylesheet" href="css/iletisim.css" media="screen">
  <link rel="stylesheet" href="css/iletisim_2.css" media="screen">
  <script class="u-script" type="text/javascript" src="js/iletisim_jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/iletisim.js" defer=""></script>

  <meta name="referrer" content="origin">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/b10a3f83-a613-490d-bd50-6f93e4c40fb9.jpg",
      "sameAs": []
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="iletisim">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="en">

  <body data-home-page="main_page.php" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en">
    <header class="u-align-center-xs u-border-1 u-border-grey-25 u-clearfix u-grey-5 u-header u-header" id="sec-a30a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="main_page.php" class="u-align-left u-image u-logo u-image-1" data-image-width="739" data-image-height="415">
          <img src="images/b10a3f83-a613-490d-bd50-6f93e4c40fb9.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-clearfix u-group-elements u-group-elements-1" data-href="main_page.php">
          <img class="u-align-right u-image u-image-contain u-image-default u-preserve-proportions u-image-2" src="images/kindpng_1300217.png" alt="" data-image-width="980" data-image-height="980">
          <p class="u-align-right u-text u-text-default u-text-1"><?= ucfirst($_SESSION["kullanici_ad"]) ?? null; ?></p>
        </div>
        <form action="#" method="get" class="u-align-center u-border-1 u-border-grey-15 u-expanded-width-xs u-radius-20 u-search u-search-right u-white u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-search-icon u-spacing-10 u-text-grey-40">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b04b"></use>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-b04b" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
              </svg>
            </span>
          </button>
          <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
        </form>
        <div class="u-clearfix u-group-elements u-group-elements-2" data-href="main_page.php">
        <a href="sepet.php"><img class="u-image u-image-contain u-image-default u-preserve-proportions u-image-3 move-right"
         src="images/pizza.png" alt="" data-image-width="512" data-image-height="512"></a>
          <p class="u-text u-text-default u-text-2 move-left">Sepet</p>
        </div>
        <nav class="u-align-center u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#" style="padding: 3px 0px; font-size: calc(1em + 30px);">
              <svg class="u-svg-link" viewBox="0 0 24 24">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b32a"></use>
              </svg>
              <svg class="u-svg-content" version="1.1" id="svg-b32a" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </g>
              </svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
              <li class="u-nav-item">
                <a class="u-border-2 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link" href="tum_pizza.php" style="padding: 10px 0px;">PİZZALAR</a>
                <div class="u-nav-popup">
                  <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-white" href="tum_pizza.php">Tüm Pizzalar</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-white" href="eko.php">Ekonomik Pizzalar</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-white" href="fav.php">Favori Pizzalar</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-white" href="sef.php">Şefin Pizzaları</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="gurme.php">Gurme Pizzalar</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="menu.php">Menüler</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="u-nav-item">
                <a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-40 u-text-hover-grey-40" href="icecek.php" style="padding: 10px 0px;">İçecekler</a>
              </li>
              <li class="u-nav-item">
                <a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-40 u-text-hover-grey-40" href="tatli.php" style="padding: 10px 0px;">Tatlılar</a>
              </li>
              <li class="u-nav-item">
                <a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-40 u-text-hover-grey-40" href="atistirmalik.php" style="padding: 10px 0px;">Atıştırmalıklar</a>
              </li>
              <li class="u-nav-item">
                <a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-40 u-text-hover-grey-40" href="hakkimizda.php" style="padding: 10px 0px;">Hakkımızda</a>
              </li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-40 u-text-hover-grey-40" href="iletisim.php" style="padding: 10px 1px 10px 0px;">İLETİŞİM</a>
              </li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-40 u-text-hover-grey-40" href="?cikis=1" style="padding: 10px 1px 10px 0px; color:red;">ÇIKIŞ</a>
              </li>
            </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="tum_pizza.php">PİZZALAR
                    </a>
                    <div class="u-nav-popup">
                      <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                        <li class="u-nav-item">
                          <a class="u-button-style u-nav-link" href="tum_pizza.php">Tüm Pizzalar
                          </a>
                        </li>
                        <li class="u-nav-item">
                          <a class="u-button-style u-nav-link" href="eko.php">Ekonomik Pizzalar</a>
                        </li>
                        <li class="u-nav-item">
                          <a class="u-button-style u-nav-link" href="fav.php">Favori Pizzalar</a>
                        </li>
                        <li class="u-nav-item">
                          <a class="u-button-style u-nav-link" href="sef.php">Şefin Pizzaları</a>
                        </li>
                        <li class="u-nav-item">
                          <a class="u-button-style u-nav-link" href="gurme.php">Gurme Pizzalar</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="icecek.php">İçecekler</a>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="tatli.php">Tatlılar</a>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="atistirmalik.php">Atıştırmalıklar</a>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="hakkimizda.php">Hakkımızda</a>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="iletisim.php">İLETİŞİM</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
    </header>

    <body>
      <center>
        <h3>HAKKIMIZDA</h3>
      </center>
      <center>
        <p>Yeni açacağımız pizzacı markası olarak, taze malzemeler kullanarak özel tariflerle hazırladığımız kaliteli pizzalar sunuyoruz.</p>
        <p>En lezzetli pizzaları sizlere sunmak için buradayız. müşteri memnuniyetini her zaman ön planda tutuyoruz.</p>
        <p>Güler yüzlü ve hızlı servisimizle de müşterilerimizin beklentilerini karşılamak için çalışıyoruz.</p>
        </p>
        <p> Menümüzdeki seçenekler arasında vegan ve vejetaryen seçenekler de mevcut. Kolay ile internet sitemiz üzerinden sipariş verebilirsiniz.</p>
      </center>
      <center>
        <h3>ORTAKLARIMIZ</h3>
      </center>
      <center><a href="https://www.pinar.com.tr/"><img src="images/pinar.jpg" width="400" height="200" class="img"></a>
        <a href="https://sinangil.com.tr/"><img src="images/sinangil.png" width="400" height="200" class="img"></a>
      </center>
      <center>
    </body>
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-5d05">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-28d2"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-28d2">
                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
      c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
              </svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1e0f"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-1e0f">
                <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
                <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
      c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
      c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
      c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
      c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
              </svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b8b2"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-b8b2">
                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
      z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
                <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
                <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
      C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
      c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
              </svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e3e4"></use>
              </svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-e3e4">
                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
      C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
      H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
              </svg></span>
          </a>
        </div>
        <div class="u-container-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle">
            <p class="u-align-center u-text u-text-1">Yardım Merkezi</p>
            <p class="u-align-center u-text u-text-2">SSS</p>
            <p class="u-align-center u-text u-text-3">Çerez Tercihleri</p>
            <p class="u-align-center u-text u-text-4">Kurumsal Bilgiler</p>
          </div>
        </div>
      </div>
    </footer>
  </body>

</html>
<?PHP

$cikis = $_GET["cikis"] ?? null;
if (isset($cikis) && $cikis == 1) {
  $_SESSION["giris"] = "hayir";
  $_SESSION["kullanici_ad"] = "";
  $_SESSION["kullanici_soyad"] = "";
  $_SESSION["kullanici_email"] = "";
  echo "<script>window.location.href='./index.php';</script>";
}

?>