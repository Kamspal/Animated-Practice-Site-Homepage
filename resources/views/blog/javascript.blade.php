@extends('layouts')
@section('title', 'Javascript | Tobias Ahlin')
@section('content')
@section('blog-logo')
        <h1 class="site-name site-name-blog">
            <a class="siteLogoLink site-link-1" href="/">
                <svg class="siteHead-logoMark logo-color1" width="1022" height="482" viewBox="0 0 1022 483">
                <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                </svg>
            </a>
            <a href="/blog" class="site-name-link">Blog</a>
        </h1>
@stop

        <div class="section blog-categories">
            <a href="/blog" class="text-darkblue js-blog-categories-link blog-links">All.</a>
            <a href="/blog/javascript" class="text-darkgreen transform1 js-blog-categories-link blog-links posts">JS.</a>
            <a href="/blog/css" class="text-pink transform1 js-blog-categories-link blog-links">CSS</a>
            <a href="/blog/design" class="text-lightblue transform1 js-blog-categories-link blog-links">Design.</a>
            <a href="/blog/data" class="text-darkblue transform1 js-blog-categories-link blog-links">Data.</a>
            <a href="/blog/motion" class="text-red transform1 js-blog-categories-link blog-links">Motion.</a>
            <a href="/blog/tutorials" class="text-darkgreen transform1 js-blog-categories-link blog-links">Tutorials.</a>
        </div>

        <div class="section grid-items grid-items-feature-first">
                    <a href="/blog/chaining-styles" class="grid-item post-preview" style="background-color: #FDF0EC">
                        <h1 class="grid-item-header" style="color: rgba(0,0,0,1)">Chaining styles with a JavaScript Proxy</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>
                            </span>
                                <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content">
                                            <div class="post-chain-wrapper">
                                                <svg class="post-chain-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82.7 82.7">
                                                    <path fill="#FFF" d="M71.6 64.2l-7.5 7.4c-.9.9-2.1 1.3-3.4 1.3-1.4 0-2.5-.5-3.4-1.4L46.8 61.1c-.9-.9-1.4-2.1-1.4-3.4 0-1.4.6-2.7 1.7-3.7.1.1.4.4.9 1l1.1 1.1c.2.2.5.4 1 .8.4.3.9.5 1.3.7.4.1.9.2 1.4.2 1.4 0 2.5-.5 3.4-1.4.9-.9 1.4-2.1 1.4-3.4 0-.5-.1-1-.2-1.4-.1-.4-.3-.9-.7-1.3-.3-.4-.6-.8-.8-1-.2-.2-.5-.6-1.1-1.1-.5-.5-.9-.8-1-.9 1-1.1 2.2-1.6 3.6-1.6s2.5.5 3.4 1.4l10.5 10.5c.9.9 1.4 2.1 1.4 3.4.3 1.1-.2 2.3-1.1 3.2zM35.7 28.8c-.1-.1-.4-.4-.9-1l-1.1-1.1c-.2-.2-.5-.4-1-.8-.4-.3-.9-.5-1.3-.7-.4-.1-.9-.2-1.4-.2-1.4 0-2.5.5-3.4 1.4-.9.9-1.4 2.1-1.4 3.4 0 .5.1 1 .2 1.4.1.4.3.9.7 1.3.3.4.6.8.8 1 .2.2.5.6 1.1 1.1.5.5.9.8 1 .9-1 1-2.2 1.6-3.6 1.6s-2.5-.5-3.4-1.4L11.2 25.3c-.9-.9-1.4-2.1-1.4-3.4 0-1.3.5-2.4 1.4-3.4l7.5-7.4c1-.9 2.1-1.4 3.4-1.4 1.4 0 2.5.5 3.4 1.4l10.4 10.5c.9.9 1.4 2.1 1.4 3.4.1 1.5-.5 2.7-1.6 3.8zm42.8 21.7L67.9 39.9c-2.8-2.8-6.3-4.3-10.3-4.3-4.1 0-7.6 1.5-10.5 4.5l-4.5-4.5c3-2.9 4.5-6.4 4.5-10.6 0-4.1-1.4-7.5-4.2-10.3L32.4 4.3C29.6 1.4 26.1 0 22.1 0 18 0 14.6 1.4 11.8 4.2l-7.5 7.4C1.4 14.4 0 17.8 0 21.9s1.4 7.5 4.3 10.3l10.5 10.5c2.8 2.8 6.3 4.3 10.3 4.3 4.1 0 7.6-1.5 10.5-4.5l4.5 4.5c-3 2.9-4.5 6.4-4.5 10.6 0 4.1 1.4 7.5 4.2 10.3l10.4 10.5c2.8 2.9 6.3 4.3 10.3 4.3 4.1 0 7.5-1.4 10.3-4.2l7.5-7.4c2.9-2.8 4.3-6.2 4.3-10.3.1-4-1.3-7.5-4.1-10.3z"></path>
                                                </svg>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text" style="color: rgba(0,0,0,1)">
                                    If you miss method chaining from Ruby or jQuery when working with styles in JavaScript, you can recreate the pattern with a few lines of code
                                </p>
                    </a>

                    <a href="/blog/move-from-jquery-to-vanilla-javascript" class="grid-item post-preview" style="background-color: #1c323d">
                        <h1 class="grid-item-header">Cheat sheet for moving from jQuery to vanilla JavaScript</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                    <div class="blog-banner-content">
                                        <svg class="blog-banner-jquery" width="391" height="112" viewBox="0 0 3914 1124" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path class="jquery-logo-letter jquery-logo-j-dot" d="M513.764 186.355H346.729C337.938 186.355 330.905 188.114 329.147 196.904L299.256 327.006C297.498 334.039 302.773 341.071 311.564 341.071H471.566C480.357 341.071 487.39 334.039 489.148 325.248L517.281 193.388C517.281 193.388 520.797 186.355 513.764 186.355Z" fill="#fff" style=""></path>
                                              <path class="jquery-logo-letter jquery-logo-j" d="M301.014 383.27C292.223 383.27 285.19 390.302 283.432 397.335L260.574 497.548L209.584 727.864C209.584 727.864 183.211 849.175 179.694 857.965C179.694 857.965 156.837 945.872 104.089 942.356C79.4731 940.598 51.3409 935.323 51.3409 935.323C35.5166 930.049 35.5166 945.872 33.7583 954.663L0.351398 1097.07C-1.40686 1104.1 3.86789 1111.14 10.9009 1112.89C10.9009 1112.89 82.9897 1123.44 133.979 1123.44H142.771C267.607 1123.44 334.421 1049.6 376.619 849.175L425.851 615.343L471.565 399.093C473.324 392.06 468.049 383.27 461.016 383.27" fill="#fff" style=""></path>
                                              <path class="jquery-logo-letter jquery-logo-q" d="M1245.2 662.816C1245.2 662.816 1324.32 471.18 1341.91 362.175C1366.52 214.492 1292.67 0 1006.08 0C722.998 0 599.919 203.943 552.446 427.226C504.973 650.509 566.512 845.662 849.592 843.904H1280.37C1289.16 843.904 1296.19 836.871 1297.95 829.839L1334.87 690.946C1336.63 683.914 1331.36 676.881 1324.32 676.881H1289.16H1253.99C1246.96 676.881 1243.44 671.607 1243.44 666.332C1245.2 666.332 1245.2 664.574 1245.2 662.816ZM1097.51 546.779L1065.86 657.542C1064.1 664.574 1055.31 669.849 1046.52 669.849H879.483C752.888 669.849 721.239 571.393 752.888 425.468C784.537 276.027 844.318 184.604 969.154 174.055C1139.71 161.748 1174.87 281.301 1132.67 420.194L1097.51 546.779Z" fill="#fff" style=""></path>
                                              <path class="jquery-logo-letter jquery-logo-u" d="M2064.55 186.355H1908.06C1899.27 186.355 1892.24 189.872 1890.48 196.904L1839.49 437.768L1788.5 668.084C1786.74 675.116 1779.71 675.116 1770.92 675.116H1668.94C1566.96 675.116 1579.27 611.824 1600.37 515.126C1600.37 513.368 1665.42 196.904 1665.42 196.904C1667.18 189.872 1661.91 186.355 1653.12 186.355H1505.42C1496.63 186.355 1489.6 189.872 1487.84 196.904L1428.06 515.126C1398.17 687.423 1398.17 838.623 1596.85 843.897C1600.37 843.897 1911.58 843.897 1911.58 843.897C1920.37 843.897 1927.41 840.381 1929.16 833.348L1997.74 513.368L2064.55 193.388C2064.55 193.388 2068.07 186.355 2064.55 186.355Z" fill="#fff" style=""></path>
                                              <path class="jquery-logo-letter jquery-logo-e" d="M2458.4 184.604C2177.08 184.604 2110.27 358.659 2073.34 529.198C2036.42 705.011 2039.94 843.903 2330.05 843.903H2340.6C2456.64 843.903 2595.55 843.903 2595.55 843.903C2602.58 843.903 2611.37 836.871 2613.13 828.08L2641.26 717.318C2643.02 710.285 2637.74 706.769 2628.95 706.769H2366.97C2272.03 706.769 2238.62 676.881 2242.14 611.83C2242.14 604.797 2250.93 585.458 2257.96 585.458H2660.6C2678.18 585.458 2678.18 574.909 2678.18 574.909C2722.14 392.063 2723.9 184.604 2458.4 184.604ZM2532.25 460.63C2532.25 469.421 2504.12 467.663 2504.12 467.663L2286.09 465.905C2279.06 465.905 2275.54 455.356 2275.54 448.323C2275.54 448.323 2275.54 439.533 2277.3 437.775C2294.88 379.756 2344.12 346.352 2425 346.352C2514.67 346.352 2534.01 390.305 2534.01 441.291" fill="#fff" style=""></path>
                                              <path class="jquery-logo-letter jquery-logo-r" d="M3370.94 330.522L3355.11 260.197C3342.81 209.211 3305.88 186.355 3223.24 186.355H2875.11C2866.32 186.355 2859.28 189.872 2857.53 198.662L2725.66 824.558C2723.9 833.349 2723.9 838.623 2723.9 842.139C2725.66 845.655 2739.72 845.655 2748.51 845.655H2869.83C2878.63 845.655 2892.69 845.655 2896.21 843.897C2901.48 842.139 2903.24 829.832 2905 822.8L2947.2 603.033L2999.95 358.653C3001.7 351.62 3008.74 344.587 3017.53 344.587H3362.15C3367.42 344.587 3372.7 337.555 3370.94 330.522Z" fill="#fff" style=""></path>
                                              <path class="jquery-logo-letter jquery-logo-y" d="M3861.49 75.5967C3852.7 75.5967 3708.53 75.5967 3708.53 75.5967C3699.73 75.5967 3690.94 84.3873 3685.67 91.4199L3416.65 485.242C3411.38 492.274 3406.1 492.274 3404.35 483.484L3385.01 397.335C3383.25 390.302 3374.46 383.27 3367.42 383.27H3195.11C3186.32 383.27 3182.81 390.302 3184.56 397.335L3261.93 668.087C3263.69 675.12 3263.69 689.185 3261.93 696.218L3225 833.352C3223.25 840.385 3228.52 843.901 3235.55 843.901H3406.1C3414.9 843.901 3421.93 842.143 3423.69 833.352L3460.61 694.459C3462.37 687.427 3467.64 676.878 3472.92 669.846L3910.73 89.6617C3916 82.6292 3914.24 75.5967 3907.21 75.5967H3861.49Z" fill="#fff" style=""></path>
                                          </svg>
                                          <div class="blog-banner-jquery-hole"></div>
                                    </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                    With a simple CSS trick, we can get fine-tuned control over how shadows are rendered, and create richer and more realistic 3D effects
                                </p>
                    </a>

                    <a href="/blog/introduction-to-chartjs" class="grid-item post-preview" style="background-color:#98bec8">
                        <h1 class="grid-item-header">Data visualization with Chart.js: An introduction</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="banner-content">
                                            <img src="/img/chartjs-logo.svg" style="width: 110px; height: 110px" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                A step-by-step guide walking you through how to build your first interactive graph with Chart.js
                                </p>
                    </a>

                    <a href="/blog/chartjs-charts-to-get-you-started" class="grid-item post-preview" style="background-color: #e8c3b9">
                        <h1 class="grid-item-header">10 Chart.js example charts to get you started</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="banner-content">
                                            <img src="/img/chartjs-10x.png" style="width: 160px; height: 142px" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                A list of 10 graphs (bar chart, pie, line, etc.) with data set up to render  charts that you can copy and paste into your projects
                                </p>
                    </a>
        </div>

<!-- jQuery animation -->
<style>
  .blog-banner-jquery {
    width: 200px;
    height: 100px;
    position: relative;
    z-index: 3;
  }

  .blog-banner-jquery-hole {
    background-color: rgba(0,0,0,0.3);
    width: 90px;
    height: 90px;
    border-radius: 50%;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    margin: auto;
    z-index: 1;
    transform: scale(0);
  }
</style>
<script>
  var removeJqueryTimeline = anime.timeline({ loop: true });
  removeJqueryTimeline
  .add({
    targets: '.blog-banner-jquery-hole',
    scaleY: [0,0],
    scaleX: [0,0],
    duration: 100
  })
  .add({
    targets: '.blog-banner-jquery-hole',
    scaleY: 1,
    scaleX: 1,
    duration: 900,
    delay: 200
  })
  .add({
    targets: '.jquery-logo-letter',
    translateX: "2000px",
    translateY: "500px",
    scaleY: 0,
    scaleX: 0,
    opacity: 0,
    easing: "easeInExpo",
    delay: function(el, i) { return i*70 },
    duration: 500
  })
  .add({
    targets: '.blog-banner-jquery-hole',
    scaleY: 1.4,
    scaleX: 1.4,
    duration: 600,
    offset: "-=520"
  })
  .add({
    targets: '.blog-banner-jquery-hole',
    scaleY: 0,
    scaleX: 0,
    duration: 600,
    easing: "easeInExpo"
  })
  .add({
    targets: '.jquery-logo-letter',
    translateX: [0,0],
    translateY: [0,0],
    scaleY: [1,1],
    scaleX: [1,1],
    opacity: [0,1],
    easing: "easeOutExpo",
    delay: function(el, i) { return 1400+i*70 },
    duration: 1200
  });
  app.animations.track(removeJqueryTimeline, document.querySelector(".blog-banner-jquery-hole"));
</script>
@endsection