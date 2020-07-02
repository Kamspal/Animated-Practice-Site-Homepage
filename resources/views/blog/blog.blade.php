@extends('layouts')
@section('title', 'Blog | Tobias Ahlin')
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
            <a href="/blog" class="text-darkblue js-blog-categories-link blog-links posts">All.</a>
            <a href="/blog/javascript" class="text-darkgreen transform1 js-blog-categories-link blog-links">JS.</a>
            <a href="/blog/css" class="text-pink transform1 js-blog-categories-link blog-links">CSS</a>
            <a href="/blog/design" class="text-lightblue transform1 js-blog-categories-link blog-links">Design.</a>
            <a href="/blog/data" class="text-darkblue transform1 js-blog-categories-link blog-links">Data.</a>
            <a href="/blog/motion" class="text-red transform1 js-blog-categories-link blog-links">Motion.</a>
            <a href="/blog/tutorials" class="text-darkgreen transform1 js-blog-categories-link blog-links">Tutorials.</a>
        </div>

        <div class="section grid-items grid-items-feature-first">
                
                    <a href="/blog/ab-testing" class="grid-item post-preview" style="background-color: #3bab87">
                        <h1 class="grid-item-header" style="color: rgba(255,255,255,1)">A brief introduction to A/B-testing</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>
                            </span>
                                <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content">
                                            <img src="/img/icon.svg" width="145px" alt="">  
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text" style="color: rgba(255,255,255,1)">
                                    Learn how to use A/B-testing as a guiding compass for making product decisions, and how to avoid its pitfalls
                                </p>
                    </a>

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

                    <a href="/blog/smoother-&-sharp" class="grid-item post-preview" style="background-color: #98bec8">
                        <h1 class="grid-item-header">Smoother & sharper shadows with layered box-shadows</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>
                            </span>
                                <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content">
                                            <div class="blog-traditional-shadow-box">Default</div>
                                            <div class="blog-realistic-shadow-box">Smooth</div>  
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                    With a simple CSS trick, we can get fine-tuned control over how shadows are rendered, and create richer and more realistic 3D effects
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

                    <a href="/blog/flexbox-break-to-new-row" class="grid-item post-preview" style="background-color: #7290a4">
                        <h1 class="grid-item-header">Breaking to a new row with flexbox</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content">
                                            <div class="flexbox-break-banner-logo">
                                                <div class="flexbox-break-box flexbox-break-box-1"></div>
                                                <div class="flexbox-break-box flexbox-break-box-2"></div>
                                                <div class="flexbox-break-box flexbox-break-box-3"></div>
                                                <div class="flexbox-break-box flexbox-break-box-4"></div>
                                                <div class="flexbox-break-box flexbox-break-box-5"></div>
                                                <div class="flexbox-break-box flexbox-break-box-6"></div>
                                                <div class="flexbox-break-box flexbox-break-box-7"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                You can break to a new flexbox row or column without setting the size of an item: add a collapsed flex item between two flex items
                                </p>
                    </a>

                    <a href="/blog/masonry-with-css" class="grid-item post-preview" style="background-color: #2b2f3c">
                        <h1 class="grid-item-header">CSS masonry with flexbox, :nth-child(), and order</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content">
                                            <div class="masonry-banner-logo">
                                                <div class="masonry-box masonry-box-1"></div>
                                                <div class="masonry-box masonry-box-2"></div>
                                                <div class="masonry-box masonry-box-3"></div>
                                                <div class="masonry-box masonry-box-4"></div>
                                                <div class="masonry-box masonry-box-5"></div>
                                                <div class="masonry-box masonry-box-6"></div>
                                                <div class="masonry-box masonry-box-7"></div>
                                                <div class="masonry-box masonry-box-8"></div>
                                                <div class="masonry-box masonry-box-9"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                Creating a masonry (or mosaic) layout with flexbox produces a grid with a seemingly shuffled and obscure order, but we can achieve a natural ordering by using :nth-child() and the order property
                                </p>
                    </a>

                    <a href="/blog/common-flexbox-patterns" class="grid-item post-preview" style="background-color: #314964">
                        <h1 class="grid-item-header">Common CSS Flexbox Layout Patterns with Example Code</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content">
                                            <div class="flexbox-banner-logo">
                                                <div class="flexbox-box flexbox-box-1"></div>
                                                <div class="flexbox-box flexbox-box-2"></div>
                                                <div class="flexbox-box flexbox-box-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                Quickly create grids, masonry, stacks and more layouts with these 10 CSS flexbox templates
                                </p>
                    </a>

                    <a href="/blog/meaningful-motion-w-action-driven-animation" class="grid-item post-preview" style="background-color: #2b2f3c">
                        <h1 class="grid-item-header">Meaningful Motion with Action-Driven Animation</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="post-ada-container">
                                            <div class="post-ada-window">
                                                <div class="post-ada-message">Do something?</div>
                                                <div class="post-ada-button post-ada-button-cancel">
                                                    Cancel
                                                    <div class="post-ada-button-overlay"></div>
                                                </div>
                                                <div class="post-ada-button post-ada-button-ok">
                                                    Do it
                                                    <div class="post-ada-button-overlay"></div>
                                                </div>
                                            </div>
                                            <img src="/img/cursor.png" class="post-ada-cursor" style="width: 30px" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                Simple guiding principles for making animations more meaningful
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

                    <a href="/blog/curved-path-animations-in-css" class="grid-item post-preview" style="background-color: #45383c">
                        <h1 class="grid-item-header">Moving along a curved path in CSS with layered animation</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content mnc-demo-container">
                                            <div class="mnc-demo-grid">
                                              <div class="mnc-demo-line" style="top: 20px"></div>
                                              <div class="mnc-demo-line" style="top: 40px"></div>
                                              <div class="mnc-demo-line" style="top: 60px"></div>
                                              <div class="mnc-demo-line" style="top: 80px"></div>
                                              <div class="mnc-demo-line-vertical" style="left: 20px"></div>
                                              <div class="mnc-demo-line-vertical" style="left: 40px"></div>
                                              <div class="mnc-demo-line-vertical" style="left: 60px"></div>
                                              <div class="mnc-demo-line-vertical" style="left: 80px"></div>
                                            </div>
                                            <div class="mnc-demo-dot">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                We can apply one timing function per axis to produce curved paths, by using two or more objects to drive an animation.
                                </p>
                    </a>

                    <a href="/blog/how-to-animate-box-shadow" class="grid-item post-preview" style="background-color: #8e5ea2">
                        <h1 class="grid-item-header">How to animate box-shadow with silky smooth performance</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content" style="height: 90px">
                                            <div class="box-shadow-demo"></div>
                                          </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                Spoiler-alert: you don't. You use a pseudo-element.
                                </p>
                    </a>

                    <a href="/blog/google-web-font-inspiration" class="grid-item post-preview" style="background-color: #9ba5b5">
                        <h1 class="grid-item-header">Google Web Font Inspiration with TypeSource</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content">
                                            <img src="/img/typesource.svg" style="width:90px" alt="">
                                          </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                I built a collection of compositions to make it easier to find and match Google Web Fonts.
                                </p>
                    </a>

                    <a href="/blog/css-trick-animating-link-underlines" class="grid-item post-preview" style="background-color: #2b2f3c">
                        <h1 class="grid-item-header">Animating Link Underlines</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content" style="height: 70px; pointer-events: auto">
                                            <div class="underlined-example-wrapper">
                                                <span class="underlined-example">Hover this text</span>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                A quick trick: add a pseudo-element and animate it with CSS transitions on hover.
                                </p>
                    </a>

                    <a href="/blog/common-mac-os-x-lion-cursors" class="grid-item post-preview" style="background-color: #45383c">
                        <h1 class="grid-item-header">Common Mac OS X Cursors as PNGs</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content" style="height: 70px">
                                          <img src="/img/cursor.svg" style="width:50px" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                I've prepared the most common OS X cursors in a short list, if you want to include cursors in your mockups.
                                </p>
                    </a>

        </div>

<!-- jQuery Animation -->
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

<!-- New row flexbox -->
<style>
  .flexbox-break-banner-logo {
    margin-top: 20px;
    width: 100px;
    height: 30px;
    display: inline-block;
    position: relative;
  }

  .flexbox-break-box {
    background-color: #fff;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transform-origin: 50% 0;
  }
</style>
<script>
  var postMasonryBoxTimeline = anime.timeline({ loop: true });
  postMasonryBoxTimeline
    .add({ /* just one line */ 
      targets: '.flexbox-break-box',
      translateX: function(el, i) { return -60+i*20 },
      scaleY: 0.36,
      scaleX: 0.12,
      delay: function(el, i) { return i*70 },
      easing: "easeOutExpo",
      duration: 600
    })
    .add({
      targets: '.flexbox-break-box',
      translateY: function(el, i) { 
        if (i > 3) return 20;
        if (i == 3) return 0;
        return -20;
      },
      translateX: function(el, i) {
        if (i == 0 || i == 4) return -27;
        if (i == 1 || i == 3 || i == 5) return 0;
        return 27;
      },
      scaleY: 0.36,
      scaleX: function(el, i) { return i == 3 ? 0.72 : 0.17 },
      easing: "easeOutExpo",
      delay: function(el, i) { return 800 + i*20 },
      duration: 700
    })
    .add({
      targets: '.flexbox-break-box',
      translateY: 0,
      translateX: 0,
      scaleY: 0.36,
      scaleX: 0.12,
      easing: "easeInExpo",
      delay: function(el, i) { return 800 + i*70 },
      duration: 600
    })
    .add({
      targets: '.flexbox-break-box',
      translateX: -60,
      scaleY: 0.36,
      scaleX: 0.12,
      duration: 800
    });
    app.animations.track(postMasonryBoxTimeline, document.querySelector(".flexbox-break-banner-logo"));
</script>

<!-- Css Masonry -->
<style>
  .masonry-banner-logo {
    width: 100px;
    height: 70px;
    display: inline-block;
    position: relative;
  }

  .masonry-box {
    background-color: #fff;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transform-origin: 50% 0;
  }
</style>
<script>
  var postMasonryBoxTimeline = anime.timeline({ loop: true });
  postMasonryBoxTimeline
    .add({ 
      targets: '.masonry-box',
      translateX: function(el, i) { 
        if (i < 3) return "-23px";
        if (i > 5) return "23px";
        return 0;
      },
      opacity: [0,1],
      translateY: function(el, i) { 
        var amount = (i%3)*26;
        return amount + "px";
      },
      scaleY: function(el, i) {
        if (i == 0) return 0.2;
        if (i == 1) return 0.1;
        if (i == 2) return 0.15;
        if (i == 3) return 0.11;
        if (i == 4) return 0.19;
        if (i == 5) return 0.12;
        if (i == 6) return 0.14;
        if (i == 7) return 0.1;
        if (i == 8) return 0.16;
      },
      scaleX: [0, 0.15],
      duration: 600,
      delay: function(el, i) {
        return 400 + i*70;
      },
      easing: "easeOutExpo"
    }).add({ 
      targets: '.masonry-box',
      translateX: function(el, i) { 
        if (i < 3) return "-23px";
        if (i > 5) return "23px";
        return 0;
      },
      translateY: function(el, i) { 
        if (i == 0) return 0  + "px";
        if (i == 1) return 24 + "px";
        if (i == 2) return 38 + "px";
        if (i == 3) return 0  + "px";
        if (i == 4) return 15 + "px";
        if (i == 5) return 38 + "px";
        if (i == 6) return 0  + "px";
        if (i == 7) return 18 + "px";
        if (i == 8) return 32 + "px";
      },
      scaleY: function(el, i) {
        if (i == 0) return 0.2;
        if (i == 1) return 0.1;
        if (i == 2) return 0.15;
        if (i == 3) return 0.11;
        if (i == 4) return 0.19;
        if (i == 5) return 0.12;
        if (i == 6) return 0.14;
        if (i == 7) return 0.1;
        if (i == 8) return 0.16;
      },
      scaleX: 0.15,
      duration: 500,
      delay: 700,
      easing: "easeOutExpo"
    }).add({ 
      targets: '.masonry-box',
      opacity: 0,
      translateY: "+=10px",
      duration: 700,
      translateX: function(el, i) { 
        if (i < 3) return "-23px";
        if (i > 5) return "23px";
        return 0;
      },
      scaleY: function(el, i) {
        if (i == 0) return 0.2;
        if (i == 1) return 0.1;
        if (i == 2) return 0.18;
        if (i == 3) return 0.11;
        if (i == 4) return 0.19;
        if (i == 5) return 0.12;
        if (i == 6) return 0.14;
        if (i == 7) return 0.1;
        if (i == 8) return 0.14;
      },
      scaleX: 0.15,
      delay: function(el, i) { return 1800 + i*40 },
      easing: "easeInExpo"
    });
  app.animations.track(postMasonryBoxTimeline, document.querySelector(".masonry-banner-logo"));
</script>

<!-- Common CSS flexbox -->
<style>
  .flexbox-banner-logo {
    width: 100px;
    height: 100px;
    display: inline-block;
    position: relative;
  }

  .flexbox-box {
    background-color: #fff;
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }
</style>
<script>
  var postFlexBoxTimeline = anime.timeline({ loop: true });
  postFlexBoxTimeline
    .add({ /* hamburger */ 
      targets: '.flexbox-box',
      translateY: function(el, i) { return -23+(i*23) },
      scaleY: 0.15,
      duration: 500
    })
    .add({ /* collapsed hamburger */
      targets: '.flexbox-box',
      translateY: 0,
      scaleY: 0.15,
      duration: 900,
      easing: "easeInOutExpo",
      delay: 800
    })
    .add({ /* one vertical line */
      targets: '.flexbox-box',
      scaleY: 1,
      scaleX: 0.15,
      easing: "easeOutExpo",
      duration: 400
    })
    .add({ /* flipped hamburger */
      targets: '.flexbox-box',
      translateX: function(el, i) { return -30+(i*30) },
      scaleY: 0.9,
      scaleX: 0.15,
      easing: "easeOutExpo",
      duration: 700
    })
    .add({ /* Wide flipped hamburger */
      targets: '.flexbox-box',
      translateX: function(el, i) { return -50+(i*50) },
      scaleY: 0.9,
      scaleX: function(el, i) { return i == 1 ? 0.7 : 0.15 },
      easing: "easeOutExpo",
      duration: 500,
      delay: 800
    })
    .add({ /* Wide collapsed flipped hamburger */
      targets: '.flexbox-box',
      translateX: function(el, i) { return -50+(i*50) },
      scaleY: 0.15,
      scaleX: function(el, i) { return i == 1 ? 0.7 : 0.15 },
      easing: "easeOutExpo",
      duration: 500,
      delay: 800
    })
    .add({
      targets: '.flexbox-box',
      translateX: function(el, i) { 
        if (i == 0) return "-23px";
        if (i == 1) return 0;
        return "23px";
      },
      translateY: function(el, i) { return i == 1 ? "-12px" : "12px" },
      scaleY: 0.15,
      scaleX: function(el, i) { return i == 1 ? 0.84 : 0.38 },
      easing: "easeOutExpo",
      duration: 500,
      delay: 800
    })
    .add({ /* hamburger */ 
      targets: '.flexbox-box',
      translateY: function(el, i) { 
        if (i == 0) return 0;
        if (i == 1) return "-23px";
        return "23px";
      },
      translateX: 0,
      scaleY: 0.15,
      scaleX: 1,
      easing: "easeOutExpo",
      duration: 500,
      delay: 800
    });
  app.animations.track(postFlexBoxTimeline, document.querySelector(".flexbox-banner-logo"));
</script>

<!-- Action Driven Motion -->
<style>
  .post-ada-container {
    width: 100px;
    height: 80px;
    position: relative;
    display: inline-block;
    color: #000;
  }
  .post-ada-window {
      border-radius: 3px;
      background-color: #fff;
      text-align: center;
      display: block;
      width: 100%;
      height: 100%;
      font-family: SF UI, SF Display, Helvetica Neue, Arial, sans-serif;
      font-weight: 400;
      font-size: 10px;
      transform: translateZ(0);
      overflow: hidden;
  }
  .post-ada-message { padding-top: 15px; transform: translateZ(0); }
  .post-ada-button {
    position: absolute;
    bottom: 0;
    height: 20px;
    background-color: #e5e5e5;
    border-top: 1px solid #cecece;
    width: 50%;
    line-height: 20px;
    padding-bottom: 1px;
  }
  .post-ada-button-overlay {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background-color: #000;
    opacity: 0;
  }
  .post-ada-button-cancel { left: 0; }
  .post-ada-button-ok { right: 0; border-left: 1px solid #cecece; }
  .post-ada-container .post-ada-cursor { position: absolute; bottom: -25px; right: -18px; }

</style>
<script>
  // Post icon animation
  var postIconTimeline = anime.timeline({ loop: true });
  postIconTimeline
    .add({
      targets: '.post-ada-cursor',
      translateX: "-75px",
      easing: "easeOutBack",
      duration: 400,
      delay: 100
    }).add({
      // Press button
      targets: '.post-ada-button-cancel .post-ada-button-overlay',
      opacity: [0, 0.3],
      easing: 'easeOutExpo',
      duration: 100
    }).add({
      // Press button
      targets: '.post-ada-button-cancel .post-ada-button-overlay',
      opacity: [0.3, 0],
      easing: 'easeOutExpo',
      duration: 100
    }).add({
      // Shrink modal
      targets: '.post-ada-window',
      scale: 0.7,
      opacity: 0,
      easing: "easeOutExpo",
      duration: 600
    }).add({
      // Reveal modal
      targets: '.post-ada-window',
      scale: 1,
      opacity: 1,
      easing: "easeOutExpo",
      duration: 600,
      delay: 1000
    }).add({
      // Move cursor
      targets: '.post-ada-cursor',
      translateX: "0px",
      easing: "easeOutBack",
      duration: 400,
      delay: 100
    }).add({
      // Press button
      targets: '.post-ada-button-ok .post-ada-button-overlay',
      opacity: [0, 0.3],
      easing: 'easeOutExpo',
      duration: 100,
      delay: 200
    }).add({
      // Press button
      targets: '.post-ada-button-ok .post-ada-button-overlay',
      opacity: [0.3, 0],
      easing: 'easeOutExpo',
      duration: 100
    }).add({
      // Expand modal
      targets: '.post-ada-window',
      scale: 1.3,
      opacity: 0,
      easing: "easeOutExpo",
      duration: 600
    }).add({
      // Reveal modal
      targets: '.post-ada-window',
      scale: [0.6, 1],
      opacity: 1,
      easing: "easeOutExpo",
      duration: 600,
      delay: 1000
    });
  app.animations.track(postIconTimeline, document.querySelector(".post-ada-window"));
</script>

<!-- Moving along curved path -->
<style>
  .mnc-demo-container {
    height: 100px;
    width: 100px;
    position: relative;
    margin-right: auto;
    margin-left: auto;
  }

  .mnc-demo-grid {
    overflow: hidden;
    border: 2px solid rgba(0,0,0,0.2);
    height: 100%;
    width: 100%;
  }

  .mnc-demo-line {
    width: 100%;
    height: 2px;
    background-color: rgba(0,0,0,0.2);
    position: absolute;
  }

  .mnc-demo-line-vertical {
    width: 2px;
    height: 100%;
    background-color: rgba(0,0,0,0.2);
    position: absolute;
  }

  .mnc-demo-dot {
    will-change: transform;
    -webkit-animation: xAxis 2.5s infinite cubic-bezier(0.02, 0.01, 0.21, 1);
    animation: xAxis 2.5s infinite cubic-bezier(0.02, 0.01, 0.21, 1);
    position: absolute;
    bottom: -10px;
    left: -10px;
  }

  .mnc-demo-dot:after {
    content: '';
    display: block;
    will-change: transform;
    width: 20px;
    height: 20px;
    border-radius: 20px;
    background-color: #fff;
    -webkit-animation: yAxis 2.5s infinite cubic-bezier(0.3, 0.27, 0.07, 1.64);
    animation: yAxis 2.5s infinite cubic-bezier(0.3, 0.27, 0.07, 1.64);
  }

  .mnc-demo-dot-final-x {
    -webkit-animation: xAxis 2.5s infinite cubic-bezier(0.02, 0.01, 0.21, 1);
    animation: xAxis 2.5s infinite cubic-bezier(0.02, 0.01, 0.21, 1);
  }

  .mnc-demo-dot-final-y {
    -webkit-animation: yAxis 2.5s infinite cubic-bezier(0.3, 0.27, 0.07, 1.64);
    animation: yAxis 2.5s infinite cubic-bezier(0.3, 0.27, 0.07, 1.64);
  }

  .mnc-demo-dot-final::after {
    -webkit-animation: none;
    animation: none;
  }

  @keyframes yAxis {
    50% {
      -webkit-animation-timing-function: cubic-bezier(0.02, 0.01, 0.21, 1);
      animation-timing-function: cubic-bezier(0.02, 0.01, 0.21, 1);
      -webkit-transform: translateY(-100px);
      transform: translateY(-100px);
    }
  }

  @-webkit-keyframes yAxis {
    50% {
      -webkit-animation-timing-function: cubic-bezier(0.02, 0.01, 0.21, 1);
      animation-timing-function: cubic-bezier(0.02, 0.01, 0.21, 1);
      -webkit-transform: translateY(-100px);
      transform: translateY(-100px);
    }
  }

  @keyframes xAxis {
    50% {
      -webkit-animation-timing-function: cubic-bezier(0.3, 0.27, 0.07, 1.64);
      animation-timing-function: cubic-bezier(0.3, 0.27, 0.07, 1.64);
      -webkit-transform: translateX(100px);
      transform: translateX(100px);
    }
  }

  @-webkit-keyframes xAxis {
    50% {
      -webkit-animation-timing-function: cubic-bezier(0.3, 0.27, 0.07, 1.64);
      animation-timing-function: cubic-bezier(0.3, 0.27, 0.07, 1.64);
      -webkit-transform: translateX(100px);
      transform: translateX(100px);
    }
  }

</style>

<!-- Animate Box-shadow -->
<style>
    .box-shadow-demo {
      display: inline-block;
      background-color: #fff;
      width: 90px;
      height: 90px;
      border-radius: 5px;
      box-shadow: 0 1px 2px rgba(0,0,0,0.2);
      position: relative;
      border-radius: 5px;
      -webkit-animation: scaleAnimation 3.5s infinite cubic-bezier(0.165, 0.84, 0.44, 1);
      animation: scaleAnimation 3.5s infinite cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    .box-shadow-demo::after {
      content: "";
      border-radius: 5px;
      position: absolute;
      z-index: -1;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      box-shadow: 0 5px 15px rgba(0,0,0,0.5);
      opacity: 0;
      -webkit-animation: fadeAnimation 3.5s infinite cubic-bezier(0.165, 0.84, 0.44, 1);
      animation: fadeAnimation 3.5s infinite cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    @-webkit-keyframes fadeAnimation {
      0%, 80%, 100% {  opacity: 0; } 
      30%, 50% {  opacity: 1; }
    }

    @-webkit-keyframes scaleAnimation {
      0%, 80%, 100% {
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
      } 30%, 50% {
        -webkit-transform: scale(1.3, 1.3);
        transform: scale(1.3, 1.3);
      }
    }

    @keyframes fadeAnimation {
      0%, 80%, 100% {  opacity: 0; } 
      30%, 50% {  opacity: 1; }
    }

    @keyframes scaleAnimation {
      0%, 80%, 100% { 
        -webkit-transform: scale(1, 1);
        transform: scale(1, 1);
      } 30%, 50% {
        -webkit-transform: scale(1.3, 1.3);
        transform: scale(1.3, 1.3);
      }
    }

</style>

<!-- Animating link underlines -->
<style>
  .underlined-example-wrapper {
    padding: 21px 20px 19px;
    background-color: rgba(0,0,0,0.5);
    display: inline-block;
  }

  .underlined-example {
    position: relative;
    color: #fff;
    text-decoration: none;
    font-size: 24px;
    display:inline-block;
  }

  .underlined-example:hover {
    color: #fff;
  }

  .underlined-example::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #fff;
    visibility: hidden;
    transition: all 0.3s ease-in-out 0s;
    transform: scaleX(0);
  }

  .underlined-example:hover::before,
  .post-preview:hover .underlined-example::before {
    visibility: visible;
    transform: scaleX(1);
  }
</style>
@endsection