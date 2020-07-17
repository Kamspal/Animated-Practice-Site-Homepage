<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css?family=Dosis:500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico:400" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker:400" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt:400" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker:400" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/new.css" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="/js/animation.js"></script>
    <script src="/js/moving-letters.js"></script>
  
    <link rel="icon" href="@yield('favicon','/img/favicon-32x32.png')" type="image/x-icon">
    <title>@yield('title', '')</title>
</head>
<body class="body1">

<div class="collection-header">
  <canvas class="site-nav-canvas" width="2880" height="1156" style="display: none;"></canvas>
<button class="js-menu menu button-clear menu-typesource" aria-label="Site navigation">
  <span class="menu-icon-line-1 menu-icon-line"></span>
  <span class="menu-icon-line-2 menu-icon-line"></span>
  <span class="menu-icon-line-3 menu-icon-line"></span>
</button>

<div class="site-nav-overlay js-nav" style="opacity: 0;">
  <div class="nav-content">
    <div class="js-nav-header nav-header" style="opacity: 1;">
      <span class="nav-header-text">Tobias Ahlin</span>
      <div class="nav-header-line js-nav-header-line" style="transform: scale(0.5);"></div>
    </div>

    <ul class="nav-categories">
      <li class="nav-category js-nav-animate" style="opacity: 0; transform: translateY(10px) scale(0.9);"><a href="/" class="nav-link">Overview</a></li>
      <li class="nav-category js-nav-animate" style="opacity: 0; transform: translateY(10px) scale(0.9);"><a href="/blog/" class="nav-link">Blog</a></li>
      <li class="nav-category js-nav-animate" style="opacity: 0; transform: translateY(10px) scale(0.9);"><a href="/blog/tutorials/" class="nav-link">Tutorials</a></li>
      <li class="nav-category js-nav-animate" style="opacity: 0; transform: translateY(10px) scale(0.9);"><a href="/speaking/" class="nav-link">Speaking</a></li>
    </ul>

    <div class="nav-sublinks js-nav-animate" style="opacity: 0; transform: translateY(10px) scale(0.9);">
      <div class="js-nav-animate" style="opacity: 0; transform: translateY(10px) scale(0.9);">
      <a class="nav-link nav-sublink" href="/moving-letters/">Moving Letters</a>
      <a class="nav-link nav-sublink" href="/typesource/">TypeSource</a>
      <a class="nav-link nav-sublink" href="/spinkit/">SpinKit</a>
      </div>
    </div>
  </div>

</div>

@if(Request::path() != 'moving-letters')
  <h1 class="collection-title"><a class="collection-title-link" href="/typesource">TypeSource</a></h1>

  <a class="collection-signature" href="https://twitter.com/tobiasahlin">@tobiasahlin</a>
</div>
@endif

@if(Request::path() == 'moving-letters')
<div class="header">
<h1 class="header-title title1"><span class="letter" style="transform: rotateY(0deg);">M</span><span class="letter" style="transform: rotateY(0deg);">o</span><span class="letter" style="transform: rotateY(0deg);">v</span><span class="letter" style="transform: rotateY(0deg);">i</span><span class="letter" style="transform: rotateY(0deg);">n</span><span class="letter" style="transform: rotateY(0deg);">g</span> <span class="letter" style="transform: rotateY(0deg);">L</span><span class="letter" style="transform: rotateY(0deg);">e</span><span class="letter" style="transform: rotateY(0deg);">t</span><span class="letter" style="transform: rotateY(0deg);">t</span><span class="letter" style="transform: rotateY(0deg);">e</span><span class="letter" style="transform: rotateY(0deg);">r</span><span class="letter" style="transform: rotateY(0deg);">s</span></h1>
<div class="header-links links123">
    <a href="https://twitter.com/tobiasahlin" class="header-link"><svg class="contact-icon twitter-icon-svg" fill="#fff" xmlns="http://www.w3.org/2000/svg" width="60" height="49" viewBox="0 0 60 49"><path d="M60 5.8a32.794 32.794 0 0 1-7.02 2A12.573 12.573 0 0 0 58.416.9a22.046 22.046 0 0 1-7.924 3A11.967 11.967 0 0 0 41.435 0 12.256 12.256 0 0 0 29.21 12.4a11.72 11.72 0 0 0 .225 2.8A34.736 34.736 0 0 1 4.075 2.1 11.406 11.406 0 0 0 2.49 8.3a12.24 12.24 0 0 0 5.436 10.3 12.607 12.607 0 0 1-5.66-1.6v.3a12.426 12.426 0 0 0 9.96 12.1 11.632 11.632 0 0 1-3.168.5 7.87 7.87 0 0 1-2.265-.2 12.483 12.483 0 0 0 11.548 8.7 23.817 23.817 0 0 1-15.4 5.3A14.578 14.578 0 0 1 0 43.5 35.742 35.742 0 0 0 18.79 49c22.64 0 35.094-19.1 35.094-35.7v-1.6a16.4 16.4 0 0 0 6.113-5.9z"></path></svg></a>
</div>
</div>
@endif





@yield('content')
  
</body>
</html>

<script>
    $('.composition-wrapper').click(function(){
        $('html').addClass('is-showing-source')
        $('.site-nav-canvas').addClass('canvas')
        $('.menu').addClass('menu-moving-letters');
    });
</script>