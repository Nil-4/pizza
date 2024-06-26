<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="INTUITIVE">
  <meta name="description" content="">

  <title>Giriş</title>
  
  <link rel="shortcut icon" href="images/default-logo.png">
  <link rel="stylesheet" href="css/giris.css" media="screen">
  <link rel="stylesheet" href="giris_h.css" media="screen">

  <script class="u-script" type="text/javascript" src="js/giris_jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/giris.js" defer=""></script>

  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Fjalla+One:400">


  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "images/default-logo.png",
      "sameAs": []
    }
  </script>

  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Home">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body data-home-page="main_page.php" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en">
  <section class="u-clearfix u-valign-middle-md u-section-1" id="carousel_49e5">
    <img class="u-expanded-height-sm u-image u-image-default u-image-1" src="images/pexelsphoto3052028.jpg" alt="" data-image-width="2250" data-image-height="1500">
    <div class="u-clearfix u-expanded-width-lg u-expanded-width-xl u-layout-wrap u-layout-wrap-1">
      <div class="u-layout">
        <div class="u-layout-row">
          <div class="u-container-style u-hidden-md u-hidden-sm u-hidden-xs u-image u-layout-cell u-left-cell u-size-10-xl u-size-60-md u-size-8-lg u-size-8-sm u-size-8-xs u-image-2" data-image-width="2250" data-image-height="1500">
            <div class="u-container-layout u-container-layout-1"></div>
          </div>
          <div class="u-black u-container-style u-layout-cell u-size-20-xl u-size-22-lg u-size-22-sm u-size-22-xs u-size-60-md u-layout-cell-2">
            <div class="u-container-layout u-valign-middle-md u-container-layout-2">
              <h1 style="font-size: 115px !important;" class="u-align-center u-color-scheme-u11 u-color-style-multicolor-1 u-custom-font u-text u-text-palette-2-base u-text-1"><a href="index.php">HOUSE PİZZA</a></h1>
              <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-2">Hoşgeldiniz</h3>
              <div class="u-align-center u-expanded-width-sm u-expanded-width-xs u-form u-login-control u-white u-form-1">
                <form action="index.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-20 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 30px;" method="post">
                  <div class="u-form-group u-form-name">
                    <?php
                    $benihatirla_varmi = $_SESSION["beni_hatirla_varmi"] ?? null;
                    if ($benihatirla_varmi == "evet") {
                      $benihatirla_eposta = $_SESSION["beni_hatirla_eposta"];
                      $benihatirla_sifre = $_SESSION["beni_hatirla_sifre"];
                      $benihatirla_checked = "checked='checked'";
                    } else {
                      $benihatirla_eposta = "";
                      $benihatirla_sifre = "";
                      $benihatirla_checked = "";
                    }
                    ?>
                    <label for="username-a30d" class="u-label">E-Posta</label>
                    <input value="<?= $benihatirla_eposta ?>" type="text" required="required" placeholder="Lütfen E-Posta Adresinizi Giriniz" id="kullanici_eposta" name="kullanici_eposta" class="u-grey-5 u-input u-input-rectangle u-input-1" required="">
                  </div>
                  <div class="u-form-group u-form-password">
                    <label for="password-a30d" class="u-label">Şifre</label>
                    <input value="<?= $benihatirla_sifre ?>" type="password" required="required" placeholder="Lütfen Şifrenizi Giriniz" id="kullanici_sifre" name="kullanici_sifre" class="u-grey-5 u-input u-input-rectangle u-input-2" required="">
                  </div>
                  <div class="u-form-checkbox u-form-group">
                    <input type="checkbox" <?= $benihatirla_checked ?> id="kullanici_beni_hatirla" name="kullanici_beni_hatirla" class="u-field-input">
                    <label for="checkbox-a30d" class="u-field-label">Beni Hatırla</label>
                  </div>
                  <div class="u-align-right u-form-group u-form-submit">
                    <input type="submit" class="u-border-none u-btn  u-button-style u-palette-2-light-1 u-btn-1" style="margin-top:-10px" value="GİRİŞ YAP" />




                  </div>
                </form>
              </div>

              <a href="uye.php" class="u-align-center u-border-active-palette-2-base u-border-hover-palette-1-base u-border-none u-btn u-button-style u-login-control u-login-create-account u-none u-text-body-alt-color u-text-hover-grey-50 u-btn-3">KAYIT OL</a>
            </div>
          </div>
          <div class="u-align-center u-container-style u-hidden-md u-hidden-sm u-hidden-xs u-image u-layout-cell u-right-cell u-size-30 u-size-60-md u-image-3">
            <div class="u-container-layout u-container-layout-3"></div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-5d05">
    <div class="u-clearfix u-sheet u-sheet-1">
      <a href="#" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
        <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
      </a>
      <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
        <a class="u-social-url" title="facebook" target="_blank" href="">
          <span class="u-icon u-social-facebook u-social-icon u-icon-1">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-28d2">
              </use>
            </svg>
            <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-28d2">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55">
              </circle>
              <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
      				c0-6.7,3.1-17,17-17h12.5v13.9H73.5z">
              </path>
            </svg>
          </span>
        </a>
        <a class="u-social-url" title="twitter" target="_blank" href="">
          <span class="u-icon u-social-icon u-social-twitter u-icon-2">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1e0f">
              </use>
            </svg>
            <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-1e0f">
              <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55">
              </circle>
              <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
      				c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
      				c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
      				c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
      				c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z">
              </path>
            </svg>
          </span>
        </a>
        <a class="u-social-url" title="instagram" target="_blank" href="">
          <span class="u-icon u-social-icon u-social-instagram u-icon-3">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b8b2">
              </use>
            </svg>
            <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-b8b2">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55">
              </circle>
              <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
      				z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z">
              </path>
              <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z">
              </path>
              <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
      				C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
      				c5.5,0,9.9,4.5,9.9,9.9V73.3z">
              </path>
            </svg>
          </span>
        </a>
        <a class="u-social-url" title="linkedin" target="_blank" href="">
          <span class="u-icon u-social-icon u-social-linkedin u-icon-4">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e3e4">
              </use>
            </svg>
            <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-e3e4">
              <circle fill="currentColor" cx="56.1" cy="56.1" r="55">
              </circle>
              <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
      				C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
      				H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z">
              </path>
            </svg>
          </span>
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


<?php
include("php/baglanti.php");


$kullanici_eposta = $_POST["kullanici_eposta"] ?? null;
$kullanici_sifre = $_POST["kullanici_sifre"] ?? null;
$kullanici_beni_hatirla = $_POST["kullanici_beni_hatirla"] ?? null;


echo $kullanici_beni_hatirla;
if (isset($kullanici_eposta) && isset($kullanici_sifre)) {

  $sql = "SELECT * FROM kullanicilar WHERE email='" . $kullanici_eposta . "' AND sifre='" . $kullanici_sifre . "'";
  $sorgu = mysqli_query($veritabani, $sql);
  $sonuc = mysqli_fetch_object($sorgu);
  if ($sonuc) {

    if (isset($kullanici_beni_hatirla) && $kullanici_beni_hatirla == "on") {
      $_SESSION["beni_hatirla_eposta"] = $sonuc->email;
      $_SESSION["beni_hatirla_sifre"] = $sonuc->sifre;
      $_SESSION["beni_hatirla_varmi"] = "evet";
    } else {
      $_SESSION["beni_hatirla_varmi"] = "hayır";
    }

    $_SESSION["kullanici_ad"] = $sonuc->ad;
    $_SESSION["kullanici_soyad"] = $sonuc->soyad;
    $_SESSION["kullanici_email"] = $sonuc->email;
    $_SESSION["giris"] = "evet";
    echo "<script>window.location.href='main_page.php';</script>";
  } else {
    echo "<script>alert('Kullanıcı adı ya da şifreniz yanlış!!');</script>";
  }
}


?>