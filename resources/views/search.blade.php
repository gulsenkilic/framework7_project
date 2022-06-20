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

    <style>
        p.buyuk {text-transform:uppercase;}
        h2.buyuk {text-transform:uppercase;}
        h3.buyuk {text-transform:uppercase;}
    </style>
</head>
<body>
<div class="app">
<div class="panel panel-left panel-reveal panel-resizable">
      <div class="block">
        <p>Left Panel content here</p>
        <p><a class="panel-close " data-panel="panel-left" href="#">Close me</a></p>
        <p><a class="panel-open" href="#" data-panel="right">Open Right Panel</a></p>
      </div>
    </div>
<div class="page">
<div class="navbar">
    <div class="navbar-bg"></div>
    <div class="navbar-inner sliding">
      <div class="left">
      <a href="{{ route('index') }}" class="link back external">
        <div class="demo-iconiicon">
        <i class="icon icon-back"></i> </div>
          <span class="if-not-md">Side panels</span>
        </a>
      </div>
      <div class="title">OGRENCILER<span class="subtitle">OGRENCI LISTESI</span></div>
      <div class="right">
          <a class="link EXTERNAL"  href="{{ route('ogrenciaraform') }}">OGRENCI ARA</a> 
      </div>
    </div>
  </div>

  <div class="fab fab-extended fab-center-bottom" >
    <a href="{{ route('ogrenciekleform') }}" class="external">
      <div class="fab-text" style="color:white">YENI OGRENCI</div>
    </a>
  </div>
  
  

<div class="page-content">
 @foreach( $student as $key =>$student22)

  <div class="card">
  <div class="bg-color-gray" >
      <div class="card-header" ><h2 style="color:white;">{{$student22->sid}}</h2></div> </div>
      <div class="card-content card-content-padding"> 
        <p style="color:black;" ><h3 class="buyuk">AD: {{$student22->fname}}</h3></p>
        <p style="color:black;"><h3 class="buyuk">SOYAD: {{$student22->lname}}</h3></p>
        <p style="color:black;"><h3 class="buyuk">BIRTHPLACE: {{$student22->birthplace}}</h3></p>
        <p style="color:black;"><h3 >BIRTHDATE: {{$student22->birthdate}}</h3></p>  
      </div>
      <div class="card-footer">
      <p><button type="button" onclick="return confirm('BU ÖĞRENCİYİ SİLMEK İSTİYOR MUSUNUZ?'),window.location='{{ URL::route('ogrencisil', ['sid'=>$student22->sid]); }}'"  class="col button button-fill color-pink">OGRENCI SIL</button></p>
      <p><button type="button" onclick="window.location='{{ URL::route('ogrenciguncelle', ['sid'=>$student22->sid]); }}'" class="col button button-fill color-green">OGRENCI GUNCELLE</button></p> 
      
      </div>
  </div>
 
 @endforeach
</div>
</div>
</div>
<script src="/framework7-bundle.min.js"></script>
<script src="/routes.js"></script>
<script src="/store.js"></script>
<script src="/app.js"></script>

</body>
</html>