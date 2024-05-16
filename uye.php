<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Üyelik Formu">
    <meta name="description" content="">
    <title>Üye Ol</title>
    <link rel="shortcut icon" href="images/default-logo.png">
    <link rel="stylesheet" href="css/uye.css" media="screen">
    <link rel="stylesheet" href="css/uye_2.css" media="screen">

    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "",
            "logo": "images/default-logo.png",
            "sameAs": []
        }
    </script>
    <style>
        body{
    background-image: url(images/pexelsphoto3052028.jpg)

    }
    </style>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body class="u-body u-xl-mode" data-lang="en">
    <section class="u-align-center u-clearfix u-image u-section-1" id="sec-3f7a" data-image-width="1920" data-image-height="1080">
        <div class="u-clearfix u-sheet u-sheet-1">
            <img class="u-image u-image-default u-image-1" src="images/A_black_image.jpg" alt="" data-image-width="1200" data-image-height="1000">
            <img class="u-align-center u-image u-image-default u-preserve-proportions u-image-2" src="images/default-logo-8.png" alt="" data-image-width="80" data-image-height="40">
            <h2 class="u-align-center u-text u-text-default u-text-white u-text-1">Üyelik Formu</h2>
            <div class="u-align-center u-form u-form-1">
                <form action="uye.php" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px">
                    <input type="hidden" id="formSubmit" name="formSubmit" value="formSubmit" />
                    <div class="u-form-group u-form-name u-form-partition-factor-2 u-label-top u-form-group-1">
                        <label for="name-6611" class="u-label u-text-white u-label-1">Ad</label>
                        <input type="text" placeholder="Ad" id="kullanici_ad" name="kullanici_ad" class="u-input u-input-rectangle u-radius-16 u-input-1" required="">
                    </div>
                    <div class="u-form-group u-form-name u-form-partition-factor-2 u-label-top u-form-group-2">
                        <label for="name-6611" class="u-label u-text-white u-label-2">Soyad</label>
                        <input type="text" placeholder="Soyad" id="kullanici_soyad" name="kullanici_soyad" class="u-input u-input-rectangle u-radius-16 u-input-2" required="">
                    </div>
                    <div class="u-form-email u-form-group u-label-top">
                        <label for="email-3b9a" class="u-label u-text-white u-label-3">Email</label>
                        <input type="email" placeholder="E posta Adresinizi Girin" id="kullanici_email" name="kullanici_email" class="u-input u-input-rectangle u-radius-16 u-input-3" required="">
                    </div>
                    <div class="u-form-date u-form-group u-label-top u-form-group-4">
                        <label for="date-ef7b" class="u-label u-text-white u-label-4">Doğum Tarihi</label>
                        <input type="text" placeholder="Doğum Tarihiniz" id="kullanici_dob" name="kullanici_dob" class="u-input u-input-rectangle u-radius-16 u-input-4" required="required" data-date-format="mm/dd/yyyy">
                    </div>
                    <div class="u-form-group u-label-top u-form-group-5">
                        <label for="text-ffc5" class="u-label u-text-white u-label-5">Şifre</label>
                        <input type="password" placeholder="Şifrenizi Girin" id="kullanici_sifre1" name="kullanici_sifre1" required="required" class="u-input u-input-rectangle u-radius-16 u-input-5">
                    </div>
                    <div class="u-form-group u-label-top u-form-group-6">
                        <label for="text-1040" class="u-label u-text-white u-label-6">Şifre Tekrar</label>
                        <input type="password" placeholder="Şifrenizi Tekrar Girin" id="kullanici_sifre2" name="kullanici_sifre2" required="required" class="u-input u-input-rectangle u-radius-16 u-input-6">
                    </div>
                    <div class="u-form-group u-form-phone u-label-top u-form-group-7">
                        <label for="phone-9ab9" class="u-label u-text-white u-label-7">Telefon</label>
                        <input type="tel" placeholder="Telefon Numaranızı Girin" id="kullanici_tel" name="kullanici_tel" class="u-input u-input-rectangle u-radius-16 u-input-7" required="">
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-select u-label-top u-form-group-8">
                        <label for="select-db36" class="u-label u-text-white u-label-8">İl</label>
                        <div class="u-form-select-wrapper">
                            <select id="kullanici_il" name="kullanici_il" class="u-input u-input-rectangle u-radius-16 u-input-8">
                                <option value="İzmir" data-calc="İzmir">İzmir</option>
                            </select>
                            <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewbox="0 0 16 16" style="fill:currentColor;" xml:space="preserve">
                                <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                            </svg>
                        </div>
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-select u-label-top u-form-group-9">
                        <label for="select-a48c" class="u-label u-text-white u-label-9">İlçe</label>
                        <div class="u-form-select-wrapper">
                            <select id="kullanici_ilce" name="kullanici_ilce" class="u-input u-input-rectangle u-radius-16 u-input-9">
                                <option data-calc="3" value="Aliağa">Aliağa</option>
                                <option data-calc="3" value="Balçova">Balçova</option>
                                <option data-calc="3" value="Bayındır">Bayındır</option>
                                <option data-calc="3" value="Bayraklı">Bayraklı</option>
                                <option data-calc="3" value="Bergama">Bergama</option>
                                <option data-calc="3" value="Beydağ">Beydağ</option>
                                <option data-calc="3" value="Bornova">Bornova</option>
                                <option data-calc="3" value="Buca">Buca</option>
                                <option data-calc="3" value="Çeşme">Çeşme</option>
                                <option data-calc="3" value="Çiğli">Çiğli</option>
                                <option data-calc="3" value="Dikili">Dikili</option>
                                <option data-calc="3" value="Foça">Foça</option>
                                <option data-calc="3" value="Gaziemir">Gaziemir</option>
                                <option data-calc="3" value="Karşıyaka">Karşıyaka</option>
                                <option data-calc="3" value="Konak">Konak</option>
                                <option data-calc="3" value="Narlıdere">Narlıdere</option>
                                <option data-calc="3" value="Selçuk">Selçuk</option>
                                <option data-calc="3" value="Tire">Tire</option>
                                <option data-calc="3" value="Torbalı">Torbalı</option>
                                <option data-calc="3" value="Urla">Urla</option>
                            </select>
                            <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewbox="0 0 16 16" style="fill:currentColor;" xml:space="preserve">
                                <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                            </svg>
                        </div>
                    </div>
                    <div class="u-form-group u-form-message u-label-top">
                        <label for="message-3b9a" class="u-label u-text-white u-label-10">Adres</label>
                        <textarea placeholder="Adresinizi Giriniz" rows="4" cols="50" id="kullanici_adres" name="kullanici_adres" class="u-input u-input-rectangle u-radius-16 u-input-10" required=""></textarea>
                    </div>
                    <div class="u-align-center u-form-group u-form-submit u-label-top">
                        <input type="submit" class="u-border-none u-btn  u-button-style u-palette-1-light-1 u-btn-1" style="width:100%; pading:1rem; text-align:center; color:green; font-weight:800px; border-radius:2rem; height:3rem; cursor:pointer;" value="KAYIT OL">
                    </div>

                </form>
            </div>
        </div>

        <a href="../pizza/">
            <h3><b>GİRİŞ YAP</b></h3>
        </a>
    </section>

    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-5d05">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
                <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
            </a>
            <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
                <a class="u-social-url" title="facebook" target="_blank" href="">
                    <span class="u-icon u-social-facebook u-social-icon u-icon-1">
                        <svg class="u-svg-link" preserveaspectratio="xMidYMin slice" viewbox="0 0 112 112" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-28d2"></use>
                        </svg>
                        <svg class="u-svg-content" viewbox="0 0 112 112" x="0" y="0" id="svg-28d2">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
      c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
                        </svg>
                    </span>
                </a>
                <a class="u-social-url" title="twitter" target="_blank" href="">
                    <span class="u-icon u-social-icon u-social-twitter u-icon-2">
                        <svg class="u-svg-link" preserveaspectratio="xMidYMin slice" viewbox="0 0 112 112" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1e0f"></use>
                        </svg>
                        <svg class="u-svg-content" viewbox="0 0 112 112" x="0" y="0" id="svg-1e0f">
                            <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
      c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
      c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
      c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
      c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
                        </svg>
                    </span>
                </a>
                <a class="u-social-url" title="instagram" target="_blank" href="">
                    <span class="u-icon u-social-icon u-social-instagram u-icon-3">
                        <svg class="u-svg-link" preserveaspectratio="xMidYMin slice" viewbox="0 0 112 112" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b8b2"></use>
                        </svg>
                        <svg class="u-svg-content" viewbox="0 0 112 112" x="0" y="0" id="svg-b8b2">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
      z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
                            <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
                            <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
      C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
      c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
                        </svg>
                    </span>
                </a>
                <a class="u-social-url" title="linkedin" target="_blank" href="">
                    <span class="u-icon u-social-icon u-social-linkedin u-icon-4">
                        <svg class="u-svg-link" preserveaspectratio="xMidYMin slice" viewbox="0 0 112 112" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e3e4"></use>
                        </svg>
                        <svg class="u-svg-content" viewbox="0 0 112 112" x="0" y="0" id="svg-e3e4">
                            <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                            <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
      C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
      H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
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

/*
kullanici_ad
kullanici_soyad
kullanici_email
kullanici_dob
kullanici_sifre1
kullanici_sifre2
kullanici_tel
kullanici_il
kullanici_ilce
kullanici_adres
*/


$kullanici_ad = $_POST["kullanici_ad"] ?? null;
$kullanici_soyad = $_POST["kullanici_soyad"]  ?? null;
$kullanici_email = $_POST["kullanici_email"]  ?? null;
$kullanici_dob = $_POST["kullanici_dob"] ?? null;
$kullanici_sifre1 = $_POST["kullanici_sifre1"] ?? null;
$kullanici_sifre2 = $_POST["kullanici_sifre2"] ?? null;
$kullanici_tel = $_POST["kullanici_tel"] ?? null;
$kullanici_il = $_POST["kullanici_il"] ?? null;
$kullanici_ilce = $_POST["kullanici_ilce"] ?? null;
$kullanici_adres = $_POST["kullanici_adres"] ?? null;
$formSubmit = $_POST["formSubmit"] ?? null;

if (trim($kullanici_dob) == "") {
    $kullanici_dob = null;
}

if (isset($formSubmit)) {

    if (isset($kullanici_ad) && isset($kullanici_soyad) && isset($kullanici_email) && isset($kullanici_dob) && isset($kullanici_sifre1) && isset($kullanici_sifre2) && isset($kullanici_tel) && isset($kullanici_il) && isset($kullanici_ilce) && isset($kullanici_adres)) {

        if ($kullanici_sifre1 == $kullanici_sifre2) {

            $sql = "SELECT * FROM kullanicilar WHERE email='" . $kullanici_email . "'";
            $sorgu = mysqli_query($veritabani, $sql);
            $sonuc = mysqli_fetch_object($sorgu);
            if ($sonuc) {
                echo "<script>alert('Bu email ile daha önce kayıt yapılmış!');</script>";
            } else {
                $sql2 = "INSERT INTO kullanicilar (ad,soyad,email,dob,sifre,tel,il,ilce,adres) VALUES ('" . $kullanici_ad . "', '" . $kullanici_soyad . "', '" . $kullanici_email . "','" . $kullanici_dob . "','" . $kullanici_sifre1 . "','" . $kullanici_tel . "','" . $kullanici_il . "','" . $kullanici_ilce . "','" . $kullanici_adres . "')";
                $sorgu2 = mysqli_query($veritabani, $sql2);
                if ($sorgu2) {
                    echo "<script>alert('Kayıt başarılı!');</script>";
                } else {
                    echo "<script>alert('Hata meydana geldi!');</script>";
                }
            }
        } else {
            echo "<script>alert('Lütfen şifreleri kontrol ediniz!!');</script>";
        }
    } else {
        echo "<script>alert('Lütfen bütün bilgileri eksiksiz giriniz!');</script>";
    }
}



?>