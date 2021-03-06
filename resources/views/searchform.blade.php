<<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap: content:">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">

    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="apple-touch-icon" href="assets/icons/apple-touch-icon.png">
    <link rel="icon" href="assets/icons/favicon.png">


    <link rel="stylesheet" href="/framework7-bundle.min.css">
    <link rel="stylesheet" href="/app.css">

</head>
<body>
    
<div class="page">
<div class="navbar">
    <div class="navbar-bg"></div>
    <div class="navbar-inner sliding">
      <div class="left">
        <a href="{{ route('index') }}" class="link back external">
          <i class="icon icon-back"></i>
          <span class="if-not-md">Back</span>
        </a>
      </div>
      <div class="title">OGRENCILER<span class="subtitle">Ogrenci Ara</span></div>
      <div class="right">
        <a class="link">Right</a>
      </div>
    </div>
  </div>
  <div class="page-content">
 <div class="container">
 <form method="GET" action="{{ route('ogrenciara') }}">{{csrf_field()}}    
    <div class="data-table" >
    <table class="table">
            <tr>
                <div class="item-inner">
                <div class="item-title item-label">SID</div>
                <div class="item-input-wrap">
                <input name="sid" id="sid"  >
                <span class="input-clear-button"></span>
                </div>
              </div></tr>
                <tr>
                <div class="item-inner">
                <div class="item-title item-label">AD</div>
                <div class="item-input-wrap">
                <input name="fname" id="fname"  >
                <span class="input-clear-button"></span>
                </div>
              </div></tr>
                 <tr>
                <div class="item-title item-label">SOYAD</div>
                <div class="item-input-wrap">
                <input name="lname" name="lname" >
                </div>
              </div></tr>
                <tr>
                <div class="item-title item-label">DOGUM YER</div>
                <div class="item-input-wrap">
                <input name="birthplace" id="birthplace" >
                </div>
              </div></tr>
                <tr>
                <div class="item-title item-label">DOGUM TARIH</div>
                <div class="item-input-wrap">
                <input name="birthdate" id="birthdate"  type=date  >
                </div>
              </div></tr>
    <tr><button type="reset" class="col button button-fill color-pink">TEM??ZLE</button></tr>
    <tr><input name=ekle type=submit  class="col button button-fill color-gray" value="ARA"></tr>
    </table>  </div>  
    </form>
    </div>

    </div>
    </div>
</div>
<script src="/framework7-bundle.min.js"></script>
<script src="/routes.js"></script>
<script src="/store.js"></script>
<script src="/app.js"></script>
</body>
</html>
