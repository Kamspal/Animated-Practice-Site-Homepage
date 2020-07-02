@extends('layouts')
@section('title', 'Cheat sheet for moving from jQuery to vanilla JavaScript | Tobias Ahlin')
@section('content')
@section('blog-logo')
        <h1 class="site-name site-name-blog">
            <a class="siteLogoLink site-link-1 site-link2" href="/">
                <svg class="siteHead-logoMark logo-color1 site-link2" width="1022" height="482" viewBox="0 0 1022 483">
                <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                </svg>
            </a>
            <a href="/blog" class="site-name-link site-link2">Blog</a>
        </h1>

        <style>
            .menu:hover>.line{background-color:#fff;
            }
            
            .menu .line{
                background-color: rgba(255,255,255,1)
            }

            .search-icon1{
                opacity: 0.65 !important;
            }

            .search-icon1:hover{
                opacity: 1 !important;
            }

            .circle1{
                stroke: #fff !important;
            }

            .line-12{
                fill: #fff !important;
            }
        </style>
@stop


        <div class="single-post">
	        <div class="single-post-head" style="background-color: #1c323d">
			    <h1 class="post-header h12">Cheat sheet for moving from jQuery to vanilla JavaScript</h1>
            </div>
    
        <div class="article article-single">
            <div class="blog-banner">
                <div class="blog-banner-content" style="color: #fff">
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

                <!--more-->

                <p>jQuery is still a useful and pragmatic library, but chances are increasingly that you’re not dependent on using it in your projects to accomplish basic tasks like selecting elements, styling them, animating them, and fetching data—things that jQuery was great at. With broad browser support of ES6 (<a class="red" href="https://caniuse.com/#feat=es6">over  96%</a> at the time of writing), now is probably a good time to move away from jQuery.</p>

                <p>I recently removed jQuery from this blog and found myself googling for some of the patterns over and over again. To spare you the time, I’ve compiled this practical reference guide with some of the most common jQuery patterns and their equivalents in JavaScript. We’ll cover how to move over to vanilla JavaScript from these concepts and functions:</p>

                <div class="post-jumper">
                    <a href="#selecting-elements" class="post-jumper-item">
                        <svg width="100" height="22" viewBox="0 0 100 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="21.5" width="21" height="12" rx="0.5" transform="rotate(-90 0.5 21.5)" fill="#E1D9E7" stroke="#88619F"></rect>
                            <rect x="17.5" y="21.5" width="21" height="12" rx="0.5" transform="rotate(-90 17.5 21.5)" fill="#88619F" stroke="#88619F"></rect>
                            <rect x="35.5" y="21.5" width="21" height="12" rx="0.5" transform="rotate(-90 35.5 21.5)" fill="#E1D9E7" stroke="#88619F"></rect>
                            <rect x="52.5" y="21.5" width="21" height="12" rx="0.5" transform="rotate(-90 52.5 21.5)" fill="#E1D9E7" stroke="#88619F"></rect>
                            <rect x="70.5" y="21.5" width="21" height="12" rx="0.5" transform="rotate(-90 70.5 21.5)" fill="#E1D9E7" stroke="#88619F"></rect>
                            <rect x="87.5" y="21.5" width="21" height="12" rx="0.5" transform="rotate(-90 87.5 21.5)" fill="#E1D9E7" stroke="#88619F"></rect>
                        </svg>

                        <span class="post-jumper-title">Selecting elements</span>
                    </a>  
                    <a href="#working-with-events" class="post-jumper-item">
                        <svg style="position: relative; bottom: -6px" width="57" height="40" viewBox="0 0 57 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="53" height="26" rx="3.5" fill="#E1D9E7" stroke="#88619F"></rect>
                            <path d="M57 29.9306L36 15L40.9 40L47.0676 31.1932L57 29.9306Z" fill="#88619F"></path>
                            <path d="M36.4123 11.9828V4.19336M39.9825 15.4023H47.772M25.0527 15.4023L33.4913 15.4023M31 20.9653L33.8158 18.1495M33.8158 12.632L31 9.81612M39.3334 12.632L42.5 9.46533" stroke="#88619F"></path>
                        </svg>

                        <span class="post-jumper-title">Events</span>
                    </a>
                    <a href="#styling-elements" class="post-jumper-item">
                        <svg width="80" height="25" viewBox="0 0 80 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.52402 20.2798C4.52402 23.3038 6.14802 24.2558 9.73202 24.2558H11.888V22.0718H10.74C8.41602 22.0718 7.88402 21.6798 7.88402 20.1118C7.88402 18.5998 8.02402 17.2558 8.02402 15.5478C8.02402 13.4198 7.21202 12.6078 5.22402 12.2718V12.1598C7.21202 11.8238 8.02402 11.0118 8.02402 8.88378C8.02402 7.23178 7.88402 5.80378 7.88402 4.31978C7.88402 2.75178 8.41602 2.35978 10.74 2.35978H11.888V0.175781H9.73202C6.14802 0.175781 4.52402 1.12778 4.52402 4.15178C4.52402 6.11178 4.80402 7.20378 4.80402 8.93978C4.80402 9.91978 3.99202 10.9558 0.968018 11.0118V13.4198C3.99202 13.4758 4.80402 14.5118 4.80402 15.4918C4.80402 17.2558 4.52402 18.2918 4.52402 20.2798Z" fill="#88619F"></path>
                            <path d="M19.9411 17.0598C19.9411 18.9078 21.2571 20.3358 23.1891 20.3358C25.1211 20.3358 26.4371 18.9078 26.4371 17.0598C26.4371 15.2118 25.1211 13.7558 23.1891 13.7558C21.2571 13.7558 19.9411 15.2118 19.9411 17.0598Z" fill="#88619F"></path>
                            <path d="M36.7301 17.0598C36.7301 18.9078 38.0461 20.3358 39.9781 20.3358C41.9101 20.3358 43.2261 18.9078 43.2261 17.0598C43.2261 15.2118 41.9101 13.7558 39.9781 13.7558C38.0461 13.7558 36.7301 15.2118 36.7301 17.0598Z" fill="#88619F"></path>
                            <path d="M53.5192 17.0598C53.5192 18.9078 54.8352 20.3358 56.7672 20.3358C58.6992 20.3358 60.0152 18.9078 60.0152 17.0598C60.0152 15.2118 58.6992 13.7558 56.7672 13.7558C54.8352 13.7558 53.5192 15.2118 53.5192 17.0598Z" fill="#88619F"></path>
                            <path d="M68.0963 22.0718V24.2558H70.2523C73.8363 24.2558 75.4603 23.3038 75.4603 20.2798C75.4603 18.2918 75.1523 17.2558 75.1523 15.4918C75.1523 14.5118 75.9643 13.4758 79.0163 13.4198V11.0118C75.9643 10.9558 75.1523 9.91978 75.1523 8.93978C75.1523 7.20378 75.4603 6.11178 75.4603 4.15178C75.4603 1.12778 73.8363 0.175781 70.2523 0.175781H68.0963V2.35978H69.2443C71.5403 2.35978 72.0723 2.75178 72.0723 4.31978C72.0723 5.80378 71.9603 7.23178 71.9603 8.88378C71.9603 11.0118 72.7443 11.8238 74.7603 12.1598V12.2718C72.7443 12.6078 71.9603 13.4198 71.9603 15.5478C71.9603 17.2558 72.0723 18.5998 72.0723 20.1118C72.0723 21.6798 71.5403 22.0718 69.2443 22.0718H68.0963Z" fill="#88619F"></path>
                        </svg>

                        <span class="post-jumper-title">.css()</span>
                    </a>
                    <a href="#document-ready" class="post-jumper-item">
                        <svg width="41" height="49" viewBox="0 0 41 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="4.5" y="3.5" width="36" height="45" rx="0.5" fill="#E1D9E7" stroke="#88619F"></rect>
                            <rect x="0.5" y="0.5" width="36" height="45" rx="0.5" fill="#E1D9E7" stroke="#88619F"></rect>
                            <path d="M12 22L16.5 26.5L25 18" stroke="#88619F" stroke-width="3"></path>
                        </svg>

                        <span class="post-jumper-title">Document ready</span>
                    </a>
                    <a href="#working-with-classes" class="post-jumper-item">
                        <svg width="92" height="37" viewBox="0 0 92 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.711243 12.9002C0.711243 14.2202 1.65124 15.2402 3.03124 15.2402C4.41124 15.2402 5.35124 14.2202 5.35124 12.9002C5.35124 11.5802 4.41124 10.5402 3.03124 10.5402C1.65124 10.5402 0.711243 11.5802 0.711243 12.9002Z" fill="#88619F"></path>
                            <path d="M20.7234 1.28023C19.8834 1.00023 18.8634 0.740234 17.7234 0.740234C14.6234 0.740234 13.2834 2.54023 13.2834 4.82024V5.08024L10.6634 5.20024V7.38024H13.2834V15.0002H16.2234V7.38024H19.6434V5.08024H16.2234V4.80023C16.2234 3.60023 16.8234 3.06024 18.0834 3.06024C18.8434 3.06024 19.5434 3.20023 20.1634 3.44024L20.7234 1.28023Z" fill="#88619F"></path>
                            <path d="M21.9556 10.0402C21.9556 13.3402 24.3956 15.2402 27.0156 15.2402C29.6356 15.2402 32.0756 13.3402 32.0756 10.0402C32.0756 6.74024 29.6356 4.84024 27.0156 4.84024C24.3956 4.84024 21.9556 6.74024 21.9556 10.0402ZM24.9756 10.0402C24.9756 8.32024 25.6556 7.22023 27.0156 7.22023C28.3756 7.22023 29.0556 8.32024 29.0556 10.0402C29.0556 11.7602 28.3756 12.8602 27.0156 12.8602C25.6556 12.8602 24.9756 11.7602 24.9756 10.0402Z" fill="#88619F"></path>
                            <path d="M34.3478 10.0402C34.3478 13.3402 36.7478 15.2402 39.8678 15.2402C41.2278 15.2402 42.7678 14.7802 43.9678 13.7802L42.7678 11.9202C42.0678 12.4202 41.1878 12.8602 40.1478 12.8602C38.5078 12.8602 37.3678 11.7602 37.3678 10.0402C37.3678 8.32024 38.5478 7.22023 40.2478 7.22023C40.9878 7.22023 41.6878 7.46024 42.4478 8.00024L43.8078 6.18023C42.9678 5.40023 41.6478 4.84024 40.0878 4.84024C37.0278 4.84024 34.3478 6.74024 34.3478 10.0402Z" fill="#88619F"></path>
                            <path d="M55.5 5.08024H52.56V11.6002C51.88 12.4802 51.36 12.7402 50.62 12.7402C49.52 12.7402 49.18 12.1402 49.18 10.8202V5.08024H46.24V11.2002C46.24 13.7002 47.2 15.2402 49.46 15.2402C50.88 15.2402 51.92 14.5802 52.8 13.5802H52.88L53.1 15.0002H55.5V5.08024Z" fill="#88619F"></path>
                            <path d="M58.0522 13.7202C59.3122 14.5602 61.1322 15.2402 62.9122 15.2402C66.0922 15.2402 67.7922 13.8402 67.7922 12.0402C67.7922 10.3202 66.0922 9.58023 64.1322 9.06024C62.7322 8.70023 61.5922 8.40023 61.5922 7.80023C61.5922 7.30023 62.0722 7.02024 63.3122 7.02024C64.3522 7.02024 65.3122 7.42024 66.2122 7.96023L67.5322 6.20024C66.4922 5.54024 65.0122 4.84024 63.2522 4.84024C60.4122 4.84024 58.6722 6.10023 58.6722 7.94024C58.6722 9.52024 60.4722 10.3602 62.2122 10.8402C63.8122 11.2802 64.8722 11.6202 64.8722 12.2202C64.8722 12.7402 64.3122 13.0602 62.9722 13.0602C61.6522 13.0602 60.5122 12.6002 59.3722 11.8802L58.0522 13.7202Z" fill="#88619F"></path>
                            <path d="M70.0844 10.0402C70.0844 13.3202 72.5044 15.2402 75.5844 15.2402C76.9044 15.2402 78.3844 14.8002 79.5044 14.0802L78.5444 12.3202C77.6644 12.7602 76.8844 13.0002 75.9844 13.0002C74.5244 13.0002 73.3044 12.3802 73.1044 10.9002H79.7844C79.8244 10.6602 79.9044 10.1202 79.9044 9.60023C79.9044 6.90023 78.3044 4.84024 75.2444 4.84024C72.6044 4.84024 70.0844 6.80024 70.0844 10.0402ZM73.0644 8.96024C73.3244 7.68024 74.2444 7.08024 75.3044 7.08024C76.6444 7.08024 77.2444 7.84024 77.2444 8.96024H73.0644Z" fill="#88619F"></path>
                            <path d="M81.9166 10.0402C81.9166 13.2802 83.5766 15.2402 86.0966 15.2402C87.0966 15.2402 88.1166 14.7002 88.8566 13.9802H88.9166L89.1366 15.0002H91.5366V0.980235H88.5966V4.36024L88.6966 5.90024C87.9966 5.26024 87.2966 4.84024 86.1566 4.84024C83.9966 4.84024 81.9166 6.80024 81.9166 10.0402ZM84.9366 10.0002C84.9366 8.12024 85.8566 7.24024 86.9366 7.24024C87.5166 7.24024 88.0566 7.42024 88.5966 7.90024V11.9202C88.0766 12.5802 87.5166 12.8402 86.8566 12.8402C85.6366 12.8402 84.9366 11.9602 84.9366 10.0002Z" fill="#88619F"></path>
                            <path d="M0.711243 33.9005C0.711243 35.2205 1.65124 36.2405 3.03124 36.2405C4.41124 36.2405 5.35124 35.2205 5.35124 33.9005C5.35124 32.5805 4.41124 31.5405 3.03124 31.5405C1.65124 31.5405 0.711243 32.5805 0.711243 33.9005Z" fill="#88619F" fill-opacity="0.468"></path>
                            <path d="M10.4634 36.0005H12.7634L13.0034 34.9205H13.0834C13.9034 35.7805 14.8634 36.2405 15.7834 36.2405C18.0034 36.2405 20.0834 34.2805 20.0834 30.8605C20.0834 27.8205 18.5634 25.8405 16.0834 25.8405C15.1234 25.8405 14.1034 26.2605 13.3234 26.9805L13.4034 25.4205V21.9805H10.4634V36.0005ZM13.4034 33.1805V29.1605C14.0234 28.5205 14.6034 28.2405 15.2434 28.2405C16.4834 28.2405 17.0634 29.1405 17.0634 30.9205C17.0634 32.9605 16.2034 33.8405 15.1234 33.8405C14.6034 33.8405 13.9634 33.6605 13.4034 33.1805Z" fill="#88619F" fill-opacity="0.468"></path>
                            <path d="M22.2556 24.3005H25.1356V32.1205C25.1356 34.6405 26.4156 36.2405 28.9156 36.2405C30.1556 36.2405 30.8556 36.0205 31.8956 35.7005L31.2356 33.5405C30.6156 33.7805 30.1356 33.8605 29.6756 33.8605C28.8556 33.8605 28.0756 33.4605 28.0756 32.2405V21.9805H22.2556V24.3005Z" fill="#88619F" fill-opacity="0.468"></path>
                            <path d="M43.5078 26.0805H40.5678V32.6005C39.8878 33.4805 39.3678 33.7405 38.6278 33.7405C37.5278 33.7405 37.1878 33.1405 37.1878 31.8205V26.0805H34.2478V32.2005C34.2478 34.7005 35.2078 36.2405 37.4678 36.2405C38.8878 36.2405 39.9278 35.5805 40.8078 34.5805H40.8878L41.1078 36.0005H43.5078V26.0805Z" fill="#88619F" fill-opacity="0.468"></path>
                            <path d="M47.32 36.0005H50.26V30.8405C51.1 29.0605 52.38 28.4205 53.6 28.4205C54.34 28.4205 54.74 28.5205 55.36 28.7005L55.96 26.2405C55.38 25.9805 54.92 25.8405 54.04 25.8405C52.46 25.8405 51 26.6205 50.02 28.2405H49.96L49.72 26.0805H47.32V36.0005Z" fill="#88619F" fill-opacity="0.468"></path>
                            <path d="M59.3122 36.0005H62.2522V30.8405C63.0922 29.0605 64.3722 28.4205 65.5922 28.4205C66.3322 28.4205 66.7322 28.5205 67.3522 28.7005L67.9522 26.2405C67.3722 25.9805 66.9122 25.8405 66.0322 25.8405C64.4522 25.8405 62.9922 26.6205 62.0122 28.2405H61.9522L61.7122 26.0805H59.3122V36.0005Z" fill="#88619F" fill-opacity="0.468"></path>
                            <path d="M70.0844 31.0405C70.0844 34.3205 72.5044 36.2405 75.5844 36.2405C76.9044 36.2405 78.3844 35.8005 79.5044 35.0805L78.5444 33.3205C77.6644 33.7605 76.8844 34.0005 75.9844 34.0005C74.5244 34.0005 73.3044 33.3805 73.1044 31.9005H79.7844C79.8244 31.6605 79.9044 31.1205 79.9044 30.6005C79.9044 27.9005 78.3044 25.8405 75.2444 25.8405C72.6044 25.8405 70.0844 27.8005 70.0844 31.0405ZM73.0644 29.9605C73.3244 28.6805 74.2444 28.0805 75.3044 28.0805C76.6444 28.0805 77.2444 28.8405 77.2444 29.9605H73.0644Z" fill="#88619F" fill-opacity="0.468"></path>
                            <path d="M81.9166 31.0405C81.9166 34.2805 83.5766 36.2405 86.0966 36.2405C87.0966 36.2405 88.1166 35.7005 88.8566 34.9805H88.9166L89.1366 36.0005H91.5366V21.9805H88.5966V25.3605L88.6966 26.9005C87.9966 26.2605 87.2966 25.8405 86.1566 25.8405C83.9966 25.8405 81.9166 27.8005 81.9166 31.0405ZM84.9366 31.0005C84.9366 29.1205 85.8566 28.2405 86.9366 28.2405C87.5166 28.2405 88.0566 28.4205 88.5966 28.9005V32.9205C88.0766 33.5805 87.5166 33.8405 86.8566 33.8405C85.6366 33.8405 84.9366 32.9605 84.9366 31.0005Z" fill="#88619F" fill-opacity="0.468"></path>
                        </svg>

                        <span class="post-jumper-title">Classes</span>
                    </a>
                    <a href="#network-requests-with-get-or-ajax" class="post-jumper-item">
                        <svg width="77" height="48" viewBox="0 0 77 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="50.5" y="27.4961" width="10" height="26" rx="0.5" transform="rotate(-90 50.5 27.4961)" fill="#E1D9E7" stroke="#88619F"></rect>
                            <rect x="0.5" y="43.4961" width="42" height="32" rx="0.5" transform="rotate(-90 0.5 43.4961)" fill="#E1D9E7" stroke="#88619F"></rect>
                            <rect x="3.5" y="27.4883" width="10" height="26" rx="0.5" transform="rotate(-90 3.5 27.4883)" fill="#F8F8F9" stroke="#88619F"></rect>
                            <path d="M21.7778 11.7202C28.0385 6.81061 34.5115 4.65116 40.5617 4.18422C46.612 3.71729 51.732 5.53534 55.8793 9.08837" stroke="#88619F"></path>
                            <path d="M59.6891 12.6072L53.1061 11.5957L58.1129 6.13616L59.6891 12.6072Z" fill="#88619F"></path>
                            <path d="M60.1672 34.7834C53.5233 39.1605 46.8945 40.7793 40.8263 40.7462C34.7581 40.7131 29.8053 38.4795 25.9648 34.5968" stroke="#88619F"></path>
                            <path d="M22.458 30.7745L28.9353 32.3248L23.4957 37.3534L22.458 30.7745Z" fill="#88619F"></path>
                        </svg>

                        <span class="post-jumper-title">.ajax()</span>
                    </a>
                    <a href="#creating-elements" class="post-jumper-item">
                        <svg width="52" height="59" viewBox="0 0 52 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 19C13 18.4477 13.4477 18 14 18H37C37.5523 18 38 18.4477 38 19V42C38 42.5523 37.5523 43 37 43H14C13.4477 43 13 42.5523 13 42V19Z" fill="#E1D9E7"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M37 19H14V42H37V19ZM14 18C13.4477 18 13 18.4477 13 19V42C13 42.5523 13.4477 43 14 43H37C37.5523 43 38 42.5523 38 42V19C38 18.4477 37.5523 18 37 18H14Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M51.3884 14.841L43.0519 19.654L42.5519 18.788L50.8884 13.975L51.3884 14.841Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.94817 39.3451L0.611694 44.1581L0.111694 43.2921L8.44817 38.479L8.94817 39.3451Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M38.0328 50.3397L35.845 46.5504L36.711 46.0504L38.8988 49.8397L38.0328 50.3397Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9674 8.65755L16.1551 12.4469L15.2891 12.9469L13.1014 9.15755L13.9674 8.65755Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M38.0318 8.65712L35.844 12.4464L34.978 11.9464L37.1657 8.15712L38.0318 8.65712Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9664 50.3411L16.1542 46.5518L17.0202 47.0518L14.8325 50.8411L13.9664 50.3411Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M51.3875 44.1577L43.051 39.3446L43.551 38.4786L51.8875 43.2916L51.3875 44.1577Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.94723 19.6554L0.610755 14.8423L1.11076 13.9763L9.44723 18.7893L8.94723 19.6554Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M26 0.183594V9.80973H25V0.183594L26 0.183594Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M26 49.19V58.8161H25V49.19H26Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M26 0.183594V9.80973H25V0.183594L26 0.183594Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M26 49.19V58.8161H25V49.19H26Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M50.0653 29.4989H45.6898V28.4989H50.0653V29.4989Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.93465 29.4989H6.31016V30.4989H1.93465V29.4989Z" fill="#88619F"></path>
                        </svg>

                        <span class="post-jumper-title">Creating elements</span>
                    </a>
                    <a href="#updating-the-dom" class="post-jumper-item">
                        <svg width="63" height="40" viewBox="0 0 63 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 11C7.44771 11 7 10.5523 7 10L7 7C7 6.44772 7.44772 6 8 6L56 6C56.5523 6 57 6.44772 57 7L57 10C57 10.5523 56.5523 11 56 11L8 11Z" fill="#E1D9E7"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 7L8 10L56 10L56 7L8 7ZM7 10C7 10.5523 7.44771 11 8 11L56 11C56.5523 11 57 10.5523 57 10L57 7C57 6.44772 56.5523 6 56 6L8 6C7.44772 6 7 6.44772 7 7L7 10Z" fill="#88619F"></path>
                            <path d="M8 40C7.44771 40 7 39.5523 7 39L7 36C7 35.4477 7.44772 35 8 35L56 35C56.5523 35 57 35.4477 57 36L57 39C57 39.5523 56.5523 40 56 40L8 40Z" fill="#E1D9E7"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 36L8 39L56 39L56 36L8 36ZM7 39C7 39.5523 7.44771 40 8 40L56 40C56.5523 40 57 39.5523 57 39L57 36C57 35.4477 56.5523 35 56 35L8 35C7.44772 35 7 35.4477 7 36L7 39Z" fill="#88619F"></path>
                            <path d="M0.999999 5C0.447714 5 -1.95703e-08 4.55228 -4.37114e-08 4L-1.74845e-07 1C-1.98987e-07 0.447717 0.447715 2.36462e-06 1 2.34047e-06L49 2.42328e-07C49.5523 2.18187e-07 50 0.447715 50 1L50 4C50 4.55228 49.5523 5 49 5L0.999999 5Z" fill="#E1D9E7"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 1L0.999999 4L49 4L49 1L1 1ZM-4.37114e-08 4C-1.95703e-08 4.55228 0.447714 5 0.999999 5L49 5C49.5523 5 50 4.55228 50 4L50 1C50 0.447715 49.5523 2.18187e-07 49 2.42328e-07L1 2.34047e-06C0.447715 2.36462e-06 -1.98987e-07 0.447717 -1.74845e-07 1L-4.37114e-08 4Z" fill="#88619F"></path>
                            <path d="M14 18C13.4477 18 13 17.5523 13 17L13 14C13 13.4477 13.4477 13 14 13L62 13C62.5523 13 63 13.4477 63 14L63 17C63 17.5523 62.5523 18 62 18L14 18Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14 14L14 17L62 17L62 14L14 14ZM13 17C13 17.5523 13.4477 18 14 18L62 18C62.5523 18 63 17.5523 63 17L63 14C63 13.4477 62.5523 13 62 13L14 13C13.4477 13 13 13.4477 13 14L13 17Z" fill="#88619F"></path>
                            <path d="M14 25C13.4477 25 13 24.5523 13 24L13 21C13 20.4477 13.4477 20 14 20L62 20C62.5523 20 63 20.4477 63 21L63 24C63 24.5523 62.5523 25 62 25L14 25Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14 21L14 24L62 24L62 21L14 21ZM13 24C13 24.5523 13.4477 25 14 25L62 25C62.5523 25 63 24.5523 63 24L63 21C63 20.4477 62.5523 20 62 20L14 20C13.4477 20 13 20.4477 13 21L13 24Z" fill="#88619F"></path>
                            <path d="M14 32C13.4477 32 13 31.5523 13 31L13 28C13 27.4477 13.4477 27 14 27L62 27C62.5523 27 63 27.4477 63 28L63 31C63 31.5523 62.5523 32 62 32L14 32Z" fill="#88619F"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14 28L14 31L62 31L62 28L14 28ZM13 31C13 31.5523 13.4477 32 14 32L62 32C62.5523 32 63 31.5523 63 31L63 28C63 27.4477 62.5523 27 62 27L14 27C13.4477 27 13 27.4477 13 28L13 31Z" fill="#88619F"></path>
                        </svg>

                        <span class="post-jumper-title">HTML &amp; text</span>
                    </a>
                </div>

                <h2 id="selecting-elements">Selecting elements
                    <a href="#selecting-elements" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#selecting-elements</span>
                    </a>
                </h2>

                <p>Selecting one or several DOM elements to do something with is one of the most basic elements of jQuery. The equivalent to <code class="language-plaintext highlighter-rouge">$()</code> or <code class="language-plaintext highlighter-rouge">jQuery()</code> in JavaScript is <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelector"><code class="language-plaintext highlighter-rouge">querySelector()</code></a> or <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelectorAll"><code class="language-plaintext highlighter-rouge">querySelectorAll()</code></a>, which, just like with jQuery, you can call with a CSS selector.</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// jQuery, select all instances of .box</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">);</span>

<span class="c1">// Instead, select the first instance of .box</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">);</span>

<span class="c1">// …or select all instances of .box  </span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">);</span>
</code></pre></div></div>

                <h3 id="running-a-function-on-all-elements-in-a-selection">Running a function on all elements in a selection
                    <a href="#running-a-function-on-all-elements-in-a-selection" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#running-a-function-on-all-elements-in-a-selection</span>
                    </a>
                </h3>

                <p><code class="language-plaintext highlighter-rouge">querySelectorAll()</code> returns a <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/NodeList">NodeList</a> containing all of the elements matching the query. Whereas you can run a function with jQuery on the entire selection of elements simply by calling the method on the jQuery object, however, you’ll have to iterate over the NodeList of elements using <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/NodeList/forEach"><code class="language-plaintext highlighter-rouge">NodeList.forEach()</code></a> in vanilla JavaScript:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// with jQuery</span>
<span class="c1">// Hide all instances of .box</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">hide</span><span class="p">();</span>

<span class="c1">// Without jQuery</span>
<span class="c1">// Iterate over the nodelist of elements to hide all instances of .box</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">forEach</span><span class="p">(</span><span class="nx">box</span> <span class="o">=&gt;</span> <span class="p">{</span> <span class="nx">box</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">display</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">none</span><span class="dl">"</span> <span class="p">})</span>
</code></pre></div></div>

                <h3 id="finding-one-element-within-another">Finding one element within another<a href="#finding-one-element-within-another" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#finding-one-element-within-another</span></a></h3>

                <p>A common jQuery pattern is to select an element within another element using <code class="language-plaintext highlighter-rouge">.find()</code>. You can achieve the same effect, scoping the selection to an element’s children, by calling <code class="language-plaintext highlighter-rouge">querySelector</code> or <code class="language-plaintext highlighter-rouge">querySelectorAll</code> on an element:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// With jQuery</span>
<span class="c1">// Select the first instance of .box within .container</span>
<span class="kd">var</span> <span class="nx">container</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.container</span><span class="dl">"</span><span class="p">);</span>
<span class="c1">// Later...</span>
<span class="nx">container</span><span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">);</span>

<span class="c1">// Without jQuery</span>
<span class="c1">// Select the first instance of .box within .container</span>
<span class="kd">var</span> <span class="nx">container</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.container</span><span class="dl">"</span><span class="p">);</span>
<span class="c1">// Later...</span>
<span class="nx">container</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">);</span>
</code></pre></div></div>

                <h3 id="traversing-the-tree-with-parent-next-and-prev">Traversing the tree with <code class="language-plaintext highlighter-rouge">parent()</code>, <code class="language-plaintext highlighter-rouge">next()</code>, and <code class="language-plaintext highlighter-rouge">prev()</code><a href="#traversing-the-tree-with-parent-next-and-prev" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#traversing-the-tree-with-parent-next-and-prev</span></a></h3>

                <p>If you wish to traverse the DOM to select a subling or a parent element relative to another element, you can access them through <code class="language-plaintext highlighter-rouge">nextElementSibling</code>, <code class="language-plaintext highlighter-rouge">previousElementSibling</code> and <code class="language-plaintext highlighter-rouge">parentElement</code> on that element:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// with jQuery</span>
<span class="c1">// Return the next, previous, and parent element of .box</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">next</span><span class="p">();</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">prev</span><span class="p">();</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">parent</span><span class="p">();</span>

<span class="c1">// Without jQuery</span>
<span class="c1">// Return the next, previous, and parent element of .box</span>
<span class="kd">var</span> <span class="nx">box</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">box</span><span class="p">.</span><span class="nx">nextElementSibling</span><span class="p">;</span>
<span class="nx">box</span><span class="p">.</span><span class="nx">previousElementSibling</span><span class="p">;</span>
<span class="nx">box</span><span class="p">.</span><span class="nx">parentElement</span><span class="p">;</span>
</code></pre></div></div>


                <h2 id="working-with-events">Working with events<a href="#working-with-events" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#working-with-events</span></a></h2>

                <p>There’s a myriad of ways to listen to events in jQuery, but whether you’re using <code class="language-plaintext highlighter-rouge">.on()</code>, <code class="language-plaintext highlighter-rouge">.bind()</code>, <code class="language-plaintext highlighter-rouge">.live</code> or <code class="language-plaintext highlighter-rouge">.click()</code>, you’ll make do with the JavaScript equivalent <code class="language-plaintext highlighter-rouge">.addEventListener</code>:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// With jQuery</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.button</span><span class="dl">"</span><span class="p">).</span><span class="nx">click</span><span class="p">(</span><span class="kd">function</span><span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span> <span class="cm">/* handle click event */</span> <span class="p">});</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.button</span><span class="dl">"</span><span class="p">).</span><span class="nx">mouseenter</span><span class="p">(</span><span class="kd">function</span><span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>  <span class="cm">/* handle click event */</span> <span class="p">});</span>
<span class="nx">$</span><span class="p">(</span><span class="nb">document</span><span class="p">).</span><span class="nx">keyup</span><span class="p">(</span><span class="kd">function</span><span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="p">{</span>  <span class="cm">/* handle key up event */</span>  <span class="p">});</span>

<span class="c1">// Without jQuery</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.button</span><span class="dl">"</span><span class="p">).</span><span class="nx">addEventListener</span><span class="p">(</span><span class="dl">"</span><span class="s2">click</span><span class="dl">"</span><span class="p">,</span> <span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span> <span class="cm">/* ... */</span> <span class="p">});</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.button</span><span class="dl">"</span><span class="p">).</span><span class="nx">addEventListener</span><span class="p">(</span><span class="dl">"</span><span class="s2">mouseenter</span><span class="dl">"</span><span class="p">,</span> <span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span> <span class="cm">/* ... */</span> <span class="p">});</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="dl">"</span><span class="s2">keyup</span><span class="dl">"</span><span class="p">,</span> <span class="p">(</span><span class="nx">e</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span> <span class="cm">/* ... */</span> <span class="p">});</span>
</code></pre></div></div>

                <h3 id="event-listening-for-dynamically-added-elements">Event listening for dynamically added elements<a href="#event-listening-for-dynamically-added-elements" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#event-listening-for-dynamically-added-elements</span></a></h3>

                <p>jQuery’s <code class="language-plaintext highlighter-rouge">.on()</code> method enables you to work with “live” event handlers, where you listen to events on objects that get dynamically added to the DOM. To accomplish something similar without jQuery you can attach the event handler on an element as you add it to the DOM:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// With jQuery</span>
<span class="c1">// Handle click events .search-result elements, </span>
<span class="c1">// even when they're added to the DOM programmatically</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.search-container</span><span class="dl">"</span><span class="p">).</span><span class="nx">on</span><span class="p">(</span><span class="dl">"</span><span class="s2">click</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">.search-result</span><span class="dl">"</span><span class="p">,</span> <span class="nx">handleClick</span><span class="p">);</span>

<span class="c1">// Without jQuery</span>
<span class="c1">// Create and add an element to the DOM</span>
<span class="kd">var</span> <span class="nx">searchElement</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="dl">"</span><span class="s2">div</span><span class="dl">"</span><span class="p">);</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.search-container</span><span class="dl">"</span><span class="p">).</span><span class="nx">appendChild</span><span class="p">(</span><span class="nx">searchElement</span><span class="p">);</span>
<span class="c1">// Add an event listener to the element</span>
<span class="nx">searchElement</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="dl">"</span><span class="s2">click</span><span class="dl">"</span><span class="p">,</span> <span class="nx">handleClick</span><span class="p">);</span>
</code></pre></div></div>

                <h3 id="triggering-and-creating-events">Triggering and creating events<a href="#triggering-and-creating-events" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#triggering-and-creating-events</span></a></h3>

                <p>The equivalent to manually triggering events with <code class="language-plaintext highlighter-rouge">trigger()</code> can be achieved by calling <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/dispatchEvent"><code class="language-plaintext highlighter-rouge">dispatchEvent()</code></a>. The <code class="language-plaintext highlighter-rouge">dispatchEvent()</code> method can be invoked on any element, and takes an <code class="language-plaintext highlighter-rouge">Event</code> as the first argument:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// With jQuery</span>
<span class="c1">// Trigger myEvent on document and .box</span>
<span class="nx">$</span><span class="p">(</span><span class="nb">document</span><span class="p">).</span><span class="nx">trigger</span><span class="p">(</span><span class="dl">"</span><span class="s2">myEvent</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">trigger</span><span class="p">(</span><span class="dl">"</span><span class="s2">myEvent</span><span class="dl">"</span><span class="p">);</span>

<span class="c1">// Without jQuery</span>
<span class="c1">// Create and dispatch myEvent</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">dispatchEvent</span><span class="p">(</span><span class="k">new</span> <span class="nx">Event</span><span class="p">(</span><span class="dl">"</span><span class="s2">myEvent</span><span class="dl">"</span><span class="p">));</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">dispatchEvent</span><span class="p">(</span><span class="k">new</span> <span class="nx">Event</span><span class="p">(</span><span class="dl">"</span><span class="s2">myEvent</span><span class="dl">"</span><span class="p">));</span>
</code></pre></div></div>

                <h2 id="styling-elements">Styling elements<a href="#styling-elements" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#styling-elements</span></a></h2>

                <p>If you’re calling <code class="language-plaintext highlighter-rouge">.css()</code> on an element to change its inline CSS with jQuery, you’d use <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/style"><code class="language-plaintext highlighter-rouge">.style</code></a> in JavaScript and assign values to its different properties to achieve the same effect:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// With jQuery</span>
<span class="c1">// Select .box and change text color to #000</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">css</span><span class="p">(</span><span class="dl">"</span><span class="s2">color</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">#000</span><span class="dl">"</span><span class="p">);</span>

<span class="c1">// Without jQuery</span>
<span class="c1">// Select the first .box and change its text color to #000</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">style</span><span class="p">.</span><span class="nx">color</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">#000</span><span class="dl">"</span><span class="p">;</span>
</code></pre></div></div>

                <p>With jQuery, you can pass an object with key-value pairs to style many properties at once. In JavaScript you can set the values one at a time, or set the entire style string:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// With jQuery</span>
<span class="c1">// Pass multiple styles</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">css</span><span class="p">({</span>
  <span class="dl">"</span><span class="s2">color</span><span class="dl">"</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#000</span><span class="dl">"</span><span class="p">,</span>
  <span class="dl">"</span><span class="s2">background-color</span><span class="dl">"</span><span class="p">:</span> <span class="dl">"</span><span class="s2">red</span><span class="dl">"</span>
<span class="p">});</span>

<span class="c1">// Without jQuery</span>
<span class="c1">// Set color to #000 and background to red</span>
<span class="kd">var</span> <span class="nx">box</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">box</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">color</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">#000</span><span class="dl">"</span><span class="p">;</span>
<span class="nx">box</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">backgroundColor</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">red</span><span class="dl">"</span><span class="p">;</span>

<span class="c1">// Set all styles at once (and override any existing styles)</span>
<span class="nx">box</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">cssText</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">color: #000; background-color: red</span><span class="dl">"</span><span class="p">;</span>
</code></pre></div></div>

                <h3 id="hide-and-show"><code class="language-plaintext highlighter-rouge">hide()</code> and <code class="language-plaintext highlighter-rouge">show()</code><a href="#hide-and-show" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#hide-and-show</span></a></h3>

                <p>The <code class="language-plaintext highlighter-rouge">.hide()</code> and <code class="language-plaintext highlighter-rouge">.show()</code> convenience methods are equivalent to accessing the <code class="language-plaintext highlighter-rouge">.style</code> property and setting <code class="language-plaintext highlighter-rouge">display</code> to <code class="language-plaintext highlighter-rouge">none</code> and <code class="language-plaintext highlighter-rouge">block</code>:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// With jQuery</span>
<span class="c1">// Hide and show and element</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">hide</span><span class="p">();</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">show</span><span class="p">();</span>

<span class="c1">// Without jQuery</span>
<span class="c1">// Hide and show an element by changing "display" to block and none</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">style</span><span class="p">.</span><span class="nx">display</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">none</span><span class="dl">"</span><span class="p">;</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">style</span><span class="p">.</span><span class="nx">display</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">block</span><span class="dl">"</span><span class="p">;</span>
</code></pre></div></div>

                <h2 id="document-ready">Document ready<a href="#document-ready" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#document-ready</span></a></h2>

                <p>If you need to wait for the DOM to fully load before e.g. attaching events to objects in the DOM, you’d typically use <code class="language-plaintext highlighter-rouge">$(document).ready()</code> or the common short-hand <code class="language-plaintext highlighter-rouge">$()</code> in jQuery. We can easily construct a similar function to replace it with by listening to <code class="language-plaintext highlighter-rouge">DOMContentLoaded</code>:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// With jQuery</span>
<span class="nx">$</span><span class="p">(</span><span class="nb">document</span><span class="p">).</span><span class="nx">ready</span><span class="p">(</span><span class="kd">function</span><span class="p">()</span> <span class="p">{</span> 
  <span class="cm">/* Do things after DOM has fully loaded */</span>
<span class="p">});</span>

<span class="c1">// Without jQuery</span>
<span class="c1">// Define a convenience method and use it</span>
<span class="kd">var</span> <span class="nx">ready</span> <span class="o">=</span> <span class="p">(</span><span class="nx">callback</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
  <span class="k">if</span> <span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">readyState</span> <span class="o">!=</span> <span class="dl">"</span><span class="s2">loading</span><span class="dl">"</span><span class="p">)</span> <span class="nx">callback</span><span class="p">();</span>
  <span class="k">else</span> <span class="nb">document</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="dl">"</span><span class="s2">DOMContentLoaded</span><span class="dl">"</span><span class="p">,</span> <span class="nx">callback</span><span class="p">);</span>
<span class="p">}</span>

<span class="nx">ready</span><span class="p">(()</span> <span class="o">=&gt;</span> <span class="p">{</span> 
  <span class="cm">/* Do things after DOM has fully loaded */</span> 
<span class="p">});</span>
</code></pre></div></div>

                <h2 id="working-with-classes">Working with classes<a href="#working-with-classes" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#working-with-classes</span></a></h2>

                <p>You can easily access and work with classes through the <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Element/classList"><code class="language-plaintext highlighter-rouge">classList</code></a> property to toggle, replace, add, and remove classes:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// With jQuery</span>
<span class="c1">// Add, remove, and the toggle the "focus" class</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">addClass</span><span class="p">(</span><span class="dl">"</span><span class="s2">focus</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">removeClass</span><span class="p">(</span><span class="dl">"</span><span class="s2">focus</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">toggleClass</span><span class="p">(</span><span class="dl">"</span><span class="s2">focus</span><span class="dl">"</span><span class="p">);</span>

<span class="c1">// Without jQuery</span>
<span class="c1">// Add, remove, and the toggle the "focus" class</span>
<span class="kd">var</span> <span class="nx">box</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">box</span><span class="p">.</span><span class="nx">classList</span><span class="p">.</span><span class="nx">add</span><span class="p">(</span><span class="dl">"</span><span class="s2">focus</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">box</span><span class="p">.</span><span class="nx">classList</span><span class="p">.</span><span class="nx">remove</span><span class="p">(</span><span class="dl">"</span><span class="s2">focus</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">box</span><span class="p">.</span><span class="nx">classList</span><span class="p">.</span><span class="nx">toggle</span><span class="p">(</span><span class="dl">"</span><span class="s2">focus</span><span class="dl">"</span><span class="p">);</span>
</code></pre></div></div>

                <p>If you want to remove or add multiple classes you can just pass multiple arguments to <code class="language-plaintext highlighter-rouge">.add()</code> and <code class="language-plaintext highlighter-rouge">.remove()</code>:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// Add "focus" and "highlighted" classes, and then remove them</span>
<span class="kd">var</span> <span class="nx">box</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">box</span><span class="p">.</span><span class="nx">classList</span><span class="p">.</span><span class="nx">add</span><span class="p">(</span><span class="dl">"</span><span class="s2">focus</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">highlighted</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">box</span><span class="p">.</span><span class="nx">classList</span><span class="p">.</span><span class="nx">remove</span><span class="p">(</span><span class="dl">"</span><span class="s2">focus</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">highlighted</span><span class="dl">"</span><span class="p">);</span>
</code></pre></div></div>

                <p>If you’re toggling two classes that are mutually exclusive, you can access the <code class="language-plaintext highlighter-rouge">classList</code> property and call <code class="language-plaintext highlighter-rouge">.replace()</code> to replace one class with another:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// Remove the "focus" class and add "blurred"</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">classList</span><span class="p">.</span><span class="nx">replace</span><span class="p">(</span><span class="dl">"</span><span class="s2">focus</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">blurred</span><span class="dl">"</span><span class="p">);</span>
</code></pre></div></div>

                <h3 id="checking-if-an-element-has-a-class">Checking if an element has a class<a href="#checking-if-an-element-has-a-class" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#checking-if-an-element-has-a-class</span></a></h3>

                <p>If you only want to run a function depending on if an element has a certain class, you can replace jQuery’s <code class="language-plaintext highlighter-rouge">.hasClass()</code> with <code class="language-plaintext highlighter-rouge">.classList.contains()</code>:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// With jQuery</span>
<span class="c1">// Check if .box has a class of "focus", and do something</span>
<span class="k">if</span> <span class="p">(</span><span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">hasClass</span><span class="p">(</span><span class="dl">"</span><span class="s2">focus</span><span class="dl">"</span><span class="p">))</span> <span class="p">{</span>
  <span class="c1">// Do something...</span>
<span class="p">}</span>

<span class="c1">// Without jQuery</span>
<span class="c1">// Check if .box has a class of "focus", and do something</span>
<span class="k">if</span> <span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.box</span><span class="dl">"</span><span class="p">).</span><span class="nx">classList</span><span class="p">.</span><span class="nx">contains</span><span class="p">(</span><span class="dl">"</span><span class="s2">focus</span><span class="dl">"</span><span class="p">))</span> <span class="p">{</span>
  <span class="c1">// Do something...</span>
<span class="p">}</span>
</code></pre></div></div>

                <h2 id="network-requests-with-get-or-ajax">Network requests with .get() or .ajax()<a href="#network-requests-with-get-or-ajax" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#network-requests-with-get-or-ajax</span></a></h2>

                <p><a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API"><code class="language-plaintext highlighter-rouge">fetch()</code></a> lets you create network requests in a similar fashion to jQuery’s <code class="language-plaintext highlighter-rouge">ajax()</code> and <code class="language-plaintext highlighter-rouge">get()</code> methods. <code class="language-plaintext highlighter-rouge">fetch()</code> takes a URL as an argument, and returns a <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise">Promise</a> that you can use to handle the response:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// With jQuery</span>
<span class="nx">$</span><span class="p">.</span><span class="nx">ajax</span><span class="p">({</span>
    <span class="na">url</span><span class="p">:</span> <span class="dl">"</span><span class="s2">data.json</span><span class="dl">"</span>
  <span class="p">}).</span><span class="nx">done</span><span class="p">(</span><span class="kd">function</span><span class="p">(</span><span class="nx">data</span><span class="p">)</span> <span class="p">{</span>
    <span class="c1">// ...</span>
  <span class="p">}).</span><span class="nx">fail</span><span class="p">(</span><span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
    <span class="c1">// Handle error</span>
  <span class="p">});</span>

<span class="c1">// Without jQuery</span>
<span class="nx">fetch</span><span class="p">(</span><span class="dl">"</span><span class="s2">data.json</span><span class="dl">"</span><span class="p">)</span>
  <span class="p">.</span><span class="nx">then</span><span class="p">(</span><span class="nx">data</span> <span class="o">=&gt;</span> <span class="p">{</span>
    <span class="c1">// Handle data</span>
  <span class="p">}).</span><span class="k">catch</span><span class="p">(</span><span class="nx">error</span> <span class="o">=&gt;</span> <span class="p">{</span>
    <span class="c1">// Handle error</span>
  <span class="p">});</span>
</code></pre></div></div>

                <h2 id="creating-elements">Creating elements<a href="#creating-elements" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#creating-elements</span></a></h2>

                <p>If you want to dynamically create an element in JavaScript to add to the DOM you can call <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Document/createElement"><code class="language-plaintext highlighter-rouge">createElement()</code></a> on <code class="language-plaintext highlighter-rouge">document</code> and pass it a tag name to indicate what element you want to create:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// Create a div &amp; span</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">&lt;div/&gt;</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">&lt;span/&gt;</span><span class="dl">"</span><span class="p">);</span>

<span class="c1">// Create a div and a span</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="dl">"</span><span class="s2">div</span><span class="dl">"</span><span class="p">);</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="dl">"</span><span class="s2">span</span><span class="dl">"</span><span class="p">);</span>
</code></pre></div></div>

                <p>If you want to add some content to those elements, you can simply set the <code class="language-plaintext highlighter-rouge">textContent</code> property, or create a text node with <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Document/createTextNode"><code class="language-plaintext highlighter-rouge">createTextNode</code></a> and append it to the element:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="kd">var</span> <span class="nx">element</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="dl">"</span><span class="s2">div</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">element</span><span class="p">.</span><span class="nx">textContent</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">Text</span><span class="dl">"</span>
<span class="c1">// or create a textNode and append it</span>
<span class="kd">var</span> <span class="nx">text</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createTextNode</span><span class="p">(</span><span class="dl">"</span><span class="s2">Text</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">element</span><span class="p">.</span><span class="nx">appendChild</span><span class="p">(</span><span class="nx">text</span><span class="p">);</span>
</code></pre></div></div>

                <h2 id="updating-the-dom">Updating the DOM<a href="#updating-the-dom" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#updating-the-dom</span></a></h2>

                <p>If you’re looking to change the text of an element or to add new elements to the DOM chances are that you’ve come across <code class="language-plaintext highlighter-rouge">innerHTML()</code>, but using it may expose you to cross-site scripting (XSS) attacks. <a class="red" href="https://gomakethings.com/preventing-cross-site-scripting-attacks-when-using-innerhtml-in-vanilla-javascript/">Although you can work around it and sanitize the HTML</a>, there are some safer alternatives.</p>

                <p>If you’re only looking to read or update the text of an element, you can use the <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Node/textContent"><code class="language-plaintext highlighter-rouge">textContent</code></a> property of an object to return the current text, or update it:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// With jQuery</span>
<span class="c1">// Update the text of a .button</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.button</span><span class="dl">"</span><span class="p">).</span><span class="nx">text</span><span class="p">(</span><span class="dl">"</span><span class="s2">New text</span><span class="dl">"</span><span class="p">);</span>
<span class="c1">// Read the text of a .button</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.button</span><span class="dl">"</span><span class="p">).</span><span class="nx">text</span><span class="p">();</span> <span class="c1">// Returns "New text"</span>

<span class="c1">// Without jQuery</span>
<span class="c1">// Update the text of a .button</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.button</span><span class="dl">"</span><span class="p">).</span><span class="nx">textContent</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">New text</span><span class="dl">"</span><span class="p">;</span>
<span class="c1">// Read the text of a .button</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.button</span><span class="dl">"</span><span class="p">).</span><span class="nx">textContent</span><span class="p">;</span> <span class="c1">// Returns "New text"</span>
</code></pre></div></div>

                <p>If you’re constructing a new element, you can then add that element to another element by using the method on the parent <code class="language-plaintext highlighter-rouge">appendChild()</code>:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// Create div element and append it to .container</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.container</span><span class="dl">"</span><span class="p">).</span><span class="nx">append</span><span class="p">(</span><span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">&lt;div/&gt;</span><span class="dl">"</span><span class="p">));</span>

<span class="c1">// Create a div and append it to .container</span>
<span class="kd">var</span> <span class="nx">element</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="dl">"</span><span class="s2">div</span><span class="dl">"</span><span class="p">);</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.container</span><span class="dl">"</span><span class="p">).</span><span class="nx">appendChild</span><span class="p">(</span><span class="nx">element</span><span class="p">);</span>
</code></pre></div></div>

                <p>Put together, here’s how to create a div, update its text and class, and add it to the DOM:</p>

                <div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// Create a div</span>
<span class="kd">var</span> <span class="nx">element</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">createElement</span><span class="p">(</span><span class="dl">"</span><span class="s2">div</span><span class="dl">"</span><span class="p">);</span>

<span class="c1">// Update its class</span>
<span class="nx">element</span><span class="p">.</span><span class="nx">classList</span><span class="p">.</span><span class="nx">add</span><span class="p">(</span><span class="dl">"</span><span class="s2">box</span><span class="dl">"</span><span class="p">);</span>

<span class="c1">// Set its text</span>
<span class="nx">element</span><span class="p">.</span><span class="nx">textContent</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">Text inside box</span><span class="dl">"</span><span class="p">;</span>

<span class="c1">// Append the element to .container</span>
<span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.container</span><span class="dl">"</span><span class="p">).</span><span class="nx">appendChild</span><span class="p">(</span><span class="nx">element</span><span class="p">);</span>
</code></pre></div></div>

                <h2 id="in-summary">In summary<a href="#in-summary" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/move-from-jquery-to-vanilla-javascript/#in-summary</span></a></h2>

                <p>This is by no means a comprehensive guide to any of the native JavaScript methods utilized here, but I hope it’s been helpful a guide if you’re looking to move away from jQuery. In summary, here are the methods that we’ve covered:</p>

                <ul style="list-style: square">
                    <li>Selecting elements with <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelector"><code class="language-plaintext highlighter-rouge">querySelector</code></a> and <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelectorAll"><code class="language-plaintext highlighter-rouge">querySelectorAll</code></a></li>
                    <li>Listening for events with <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener"><code class="language-plaintext highlighter-rouge">addEventListener</code></a></li>
                    <li>Updating CSS and styles through <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/style"><code class="language-plaintext highlighter-rouge">style</code></a> property</li>
                    <li>Working with classes through the <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Element/classList"><code class="language-plaintext highlighter-rouge">classList</code></a> property</li>
                    <li>AJAX requests with <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch"><code class="language-plaintext highlighter-rouge">fetch</code></a></li>
                    <li>Triggering events with <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/dispatchEvent"><code class="language-plaintext highlighter-rouge">dispatchEvent</code></a></li>
                    <li>Creating elements with <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Document/createElement"><code class="language-plaintext highlighter-rouge">createElement</code></a></li>
                    <li>Updating text through the <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Node/textContent"><code class="language-plaintext highlighter-rouge">textContent</code></a> property</li>
                    <li>Adding elements to the DOM with <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Node/appendChild"><code class="language-plaintext highlighter-rouge">appendChild</code></a></li>
                </ul>



    </div>
</div>

            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #1C323D">
                        <div class="post-categories-links">
                
                            <a class="post-categories-link" href="/blog/javascript/">javascript</a>
                                <span class="post-categories-link-divider">/</span>

                            <a class="post-categories-link" href="/blog/tutorials/">tutorial</a>
                
                        </div>
                        <span class="section-header section-header-small post-categories-date">21/07/2019</span>
                    </div>
            </div>

            <div class="newsletter-signup section section-dense">

                <h2 class="section-header section-header-subscribe">Subscribe.</h2>
                    <div id="mc_embed_signup" class="newsletter-signup-container">
                        <div class="section-content newsletter-content newsletter-content-left">
                            <h3 class="grid-item-header grid-item-header-left text-decoration">Get new posts delivered to your inbox</h3>
                            <div class="grid-item-divider grid-item-divider-left"></div>
                            <p class="grid-item-text grid-item-text-left" style="text-align: left;">They're not frequent, promise ✌️ you can also 
                                <a href="/feed.xml" style="color: inherit">subscribe to the RSS feed</a>.
                            </p>
                        </div>

                        <div class="section-content newsletter-content newsletter-content-right">
                            <form action="//tobiasahlin.us6.list-manage.com/subscribe/post?u=b53336ca4dca0dadf0c41405a&amp;id=a3482fb718" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form2" target="_blank" novalidate="">
                                <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group">
                                        <label for="mce-EMAIL">email@example.com</label>
                                        <input type="email" placeholder="email@example.com" value="" name="EMAIL" class="required email" id="mce-EMAIL1">
                                        <div class="newsletter-input-border"></div>
                                    </div>
                                    <div id="mce-responses">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b53336ca4dca0dadf0c41405a_a3482fb718" tabindex="-1" value=""></div>
                                    <input type="submit" value="Subscribe" name="subscribe" id="" class="newsletter-signup-button1">
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
@endsection