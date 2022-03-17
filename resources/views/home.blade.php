@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
            

<body>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height=700  wideth=1280 src="https://a-static.besthdwallpaper.com/playerunknown-s-battlegrounds-pubg-mobile-olokthiieriiybngaay-wx-ll-pepexr-2400x1350-63638_50.jpg" class="d-block w-100" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>PLAYERUNKNOWN’S BATTLEGROUNDS MOBILE</h5>
        <p>The original Battle Royale, the first and the best!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img height=700 wideth=1280 src="https://cs10.pikabu.ru/post_img/big/2018/10/06/0/1538775502134014043.jpg" class="d-block w-100" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Pubg mobile</h5>
        <p>เกมแนว Battle Royale อันดับ1 บนมือถือ</p>
      </div>
    </div>
    <div class="carousel-item">
      <img height=700 wideth=1280 src="https://www.pubgmobile.com/images/kv/TH/1.jpg" class="d-block w-100 " alt="Third">
      <div class="carousel-caption d-none d-md-block">
        <h5>Top up UC By.Pimcha</h5>
        <p corlor=dark>เติมสะดวก ครบ จบในที่เดียว</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </body>
            </div>
        </div>
    </div>
</div>
@endsection
