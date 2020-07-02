<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
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
    <link rel="stylesheet" href="/css/responsive.css" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="/js/animation.js"></script>
    <script src="/js/moving-letters.js"></script>
    <script src="/js/portfolio.js"></script>
    <script src="/js/spinkit.js"></script>
    <script src="/js/post.js"></script>
    


    <title>@yield('title', 'Tobias Ahlin')</title>

    
</head>
<body class="active" id="spinkit">
    <div class="site-header site-header-portfolio">
        <canvas class="site-nav-canvas"></canvas>
        <button class="js-menu menu menu-spinkit button-clear">
            <span class="menu-icon-line-1 menu-icon-line line line1"></span>
            <span class="menu-icon-line-2 menu-icon-line line line1"></span>
            <span class="menu-icon-line-3 menu-icon-line line line1"></span>
        </button>
        <div class="site-nav-overlay js-nav">
            <div class="nav-content">
                <div class="js-nav-header nav-header">
                    <span class="nav-header-text">Tobias Ahlin</span>
                    <div class="nav-header-line js-nav-header-line"></div>
                </div>
                <ul class="nav-categories">
                    <li class="nav-category js-nav-animate">
                        <a class="nav-link" href="/">Overview</a>
                    </li>
                    <li class="nav-category js-nav-animate">
                        <a class="nav-link" href="/blog">Blog</a>
                    </li>
                    <li class="nav-category js-nav-animate">
                        <a class="nav-link" href="/blog/tutorials">Tutorials</a>
                    </li>
                    <li class="nav-category js-nav-animate">
                        <a class="nav-link" href="/speaking">Speaking</a>
                    </li>
                </ul>
                <div class="nav-sublinks js-nav-animate">
                    <div class="js-nav-animate" style="opacity: 1;transform: translateY(0px) scale(1)">
                        <a class="nav-link nav-sublink" href="/moving-letters">Moving Letters</a>
                        <a class="nav-link nav-sublink" href="/typesource">TypeSource</a>
                        <a class="nav-link nav-sublink" href="/spinkit">SpinKit</a>
                    </div>
                </div>
            </div>
        </div>

        <button class="site-search js-search button-clear">
            <span class="site-search-icon search-icon1 search-icon2">
                    <svg width="20" height="20" viewBox="0 0 38.96 41.469">
                        <circle class="site-search-icon-circle circle1 circle2" fill="none" stroke-width="4px" cx="16.465" cy="16.484" r="14.465"></circle>
                            <path class="site-search-icon-line line-12 line-123" d="M2791.72,95.441l3.03-3.034,13.1,13.968-3.03,3.034Z" transform="translate(-2768.88 -67.938)"></path>
                    </svg>
            </span>
                <span class="site-search-close-icon">
                    <span class="site-search-close-icon-line site-search-close-icon-line-1"></span>
                    <span class="site-search-close-icon-line site-search-close-icon-line-2"></span>
                </span>
        </button>

        @yield('logo')
        @yield('blog-logo')
        
        
        <div class="js-search-overlay site-nav-overlay-search" style="opacity: 0;">
            <div class="site-search-content">
                <input type="text" placeholder="Search..." class="js-search-input siteSearchInput">
                    <div class="site-search-content-results js-site-search-content-results">
                        <div class="site-search-content-results-list">
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/ab-testing">
                                    A brief introduction to A/B-testing
                                <span class="site-search-results-item-desc">
                                    Learn how to use A/B-testing as a guiding compass for making product decisions, and how to avoid its pitfalls
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/chaining-styles">
                                    Chaining styles with a JavaScript Proxy
                                <span class="site-search-results-item-desc">
                                    If you miss method chaining from Ruby or jQuery when working with styles in JavaScript, you can recreate the pattern with a few lines of code
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/smoother-&-sharp">
                                    Smoother &amp; sharper shadows with layered box-shadows
                                <span class="site-search-results-item-desc">
                                    With a simple CSS trick, we can get fine-tuned control over how shadows are rendered, and create richer and more realistic 3D effects
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/move-from-jquery-to-vanilla-javascript">
                                    Cheat sheet for moving from jQuery to vanilla JavaScript
                                <span class="site-search-results-item-desc">
                                    This reference guide will help you convert jQuery's most common patterns to vanilla JavaScript
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/flexbox-break-to-new-row">
                                    Breaking to a new row with flexbox
                                <span class="site-search-results-item-desc">
                                    You can break to a new flexbox row or column without setting the size of an item: add a collapsed flex item between two flex items
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/masonry-with-css">
                                    CSS masonry with flexbox, :nth-child(), and order
                                <span class="site-search-results-item-desc">
                                    Creating a masonry (or mosaic) layout with flexbox produces a grid with a seemingly shuffled and obscure order, but we can achieve a natural ordering by using :nth-child() and the order property
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/common-flexbox-patterns">
                                    Common CSS Flexbox Layout Patterns with Example Code
                                <span class="site-search-results-item-desc">
                                    Quickly create grids, masonry, stacks and more layouts with these 10 CSS flexbox templates
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/meaningful-motion-w-action-driven-animation">
                                    Meaningful Motion with Action-Driven Animation
                                <span class="site-search-results-item-desc">
                                    Simple guiding principles for making animations more meaningful
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/introduction-to-chartjs">
                                    Data visualization with Chart.js: An introduction
                                <span class="site-search-results-item-desc">
                                    A step-by-step guide walking you through how to build your first interactive graph with Chart.js
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/chartjs-charts-to-get-you-started">
                                    10 Chart.js example charts to get you started
                                <span class="site-search-results-item-desc">
                                    A list of 10 graphs (bar chart, pie, line, etc.) with data set up to render  charts that you can copy and paste into your projects
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/curved-path-animations-in-css">
                                    Moving along a curved path in CSS with layered animation
                                <span class="site-search-results-item-desc">
                                    We can apply one timing function per axis to produce curved paths, by using two or more objects to drive an animation.
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item"href="/blog/how-to-animate-box-shadow">
                                    How to animate box-shadow with silky smooth performance
                                <span class="site-search-results-item-desc">
                                    Spoiler-alert: you don't. You use a pseudo-element.
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/google-web-font-inspiration">
                                    Google Web Font Inspiration with TypeSource
                                <span class="site-search-results-item-desc">
                                    I built a collection of compositions to make it easier to find and match Google Web Fonts.
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/css-trick-animating-link-underlines">
                                    Animating Link Underlines
                                <span class="site-search-results-item-desc">
                                    A quick trick: add a pseudo-element and animate it with CSS transitions on hover.
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/blog/common-mac-os-x-lion-cursors">
                                    Common Mac OS X Cursors as PNGs
                                <span class="site-search-results-item-desc">
                                    I've prepared the most common OS X cursors in a short list, if you want to include cursors in your mockups.
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/spinkit">
                                    SpinKit
                                <span class="site-search-results-item-desc">
                                    A collection of CSS spinners
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/moving-letters">
                                    Moving Letters
                                <span class="site-search-results-item-desc">
                                    Text animated with JavaScript
                                </span>
                            </a>
                            <a class="site-search-results-item js-site-search-results-item" href="/typesource">
                                    TypeSource
                                <span class="site-search-results-item-desc">
                                    Google Font inspiration
                                </span>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
        
        @yield('port')
        @yield('content')


        <div class="section contact-card">
            <h2 class="section-header">Say hi.</h2>
                <div class="contact-info">
                    <a class="grid-item-header grid-item-header-left" href="">
                        hello@
                        <br>
                        tobiasahlin.com
                    </a>
                    <div class="grid-item-divider grid-item-divider-left"></div>
                    <p class="grid-item-text grid-item-text-left">
                        I love to design and make things. I speak, teach, and consult at tech companies and startups, e.g. Spotify, Minecraft, GitHub, and Hyper Island.
                        <a href="">
                            Say hi!
                            <br>
                            <br>
                            Tobias Ahlin Bjerrome
                            <br>
                            Stockholm, Sweden
                        </a> 
                    </p>
                    <div class="contact-links">
                        <a class="contact-link" href="">
                            <span class="contact-icon">
                                <svg class="case-item-icon icon-github" fill="#fff" viewBox="0 0 62 60">
                                    <path d="M31 0a30.7 30.7 0 0 0-9.8 59.9c1.55.3 2.116-.6 2.116-1.4s-.026-2.7-.042-5.3c-8.622 1.9-10.44-4.1-10.44-4.1-1.414-3.5-3.448-4.5-3.448-4.5-2.815-1.9.213-1.9.213-1.9a6.74 6.74 0 0 1 4.746 3.2c2.766 4.7 7.254 3.3 9.023 2.6a6.3 6.3 0 0 1 1.966-4.1c-6.88-.8-14.12-3.5-14.12-15.2a11.964 11.964 0 0 1 3.193-8.3 10.9 10.9 0 0 1 .3-8.1s2.6-.9 8.525 3.1a30.617 30.617 0 0 1 15.522 0c5.92-4 8.517-3.1 8.517-3.1a10.886 10.886 0 0 1 .308 8.1 11.946 11.946 0 0 1 3.186 8.3c0 11.8-7.248 14.4-14.155 15.1a7.52 7.52 0 0 1 2.1 5.7c0 4.1-.04 7.5-.04 8.5 0 .8.56 1.7 2.13 1.4A30.708 30.708 0 0 0 31 0"></path>
                                </svg>
                            </span>
                        </a>
                        <a class="contact-link contact-link-twitter" href="">
                            <svg class="contact-icon twitter-icon-svg" fill="#fff" viewBox="0 0 60 49">
                                <path d="M60 5.8a32.794 32.794 0 0 1-7.02 2A12.573 12.573 0 0 0 58.416.9a22.046 22.046 0 0 1-7.924 3A11.967 11.967 0 0 0 41.435 0 12.256 12.256 0 0 0 29.21 12.4a11.72 11.72 0 0 0 .225 2.8A34.736 34.736 0 0 1 4.075 2.1 11.406 11.406 0 0 0 2.49 8.3a12.24 12.24 0 0 0 5.436 10.3 12.607 12.607 0 0 1-5.66-1.6v.3a12.426 12.426 0 0 0 9.96 12.1 11.632 11.632 0 0 1-3.168.5 7.87 7.87 0 0 1-2.265-.2 12.483 12.483 0 0 0 11.548 8.7 23.817 23.817 0 0 1-15.4 5.3A14.578 14.578 0 0 1 0 43.5 35.742 35.742 0 0 0 18.79 49c22.64 0 35.094-19.1 35.094-35.7v-1.6a16.4 16.4 0 0 0 6.113-5.9z"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="contact-picture">
                        <img src="/img/profile.jpg" class="contact-picture-img" alt="">
                    </div>

                </div>
        </div>

</body>
</html>