<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/new.css" type="text/css">

    <script src="/js/apps.js"></script>
    <script src="/js/portfolio.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script>
        // Clear localStorage if number of posts have changed
        app.search.postCountKey = "postCount";
        var postCountCached = parseInt(localStorage.getItem(app.search.postCountKey));
        var postCount = 126;

	// If number of posts have changed, clear cache
        if (postCount != postCountCached) { localStorage.clear(); }
        localStorage.setItem(app.search.postCountKey, 126); 
    </script>

    <title>Tobias Ahlin</title>
</head>
<body class="layout-portfolio">
    <div class="site-header site-header-portfolio">
        <canvas class="site-nav-canvas" width="2880" height="948"></canvas>
        <button class="js-menu menu button-clear">
            <span class="menu-icon-line-1 menu-icon-line"></span>
            <span class="menu-icon-line-2 menu-icon-line"></span>
            <span class="menu-icon-line-3 menu-icon-line"></span>
        </button>
        <div class="site-nav-overlay js-nav">
            <div class="nav-content">
                <div class="js-nav-header nav-header">
                    <span class="nav-header-text">Tobias Ahlin</span>
                    <div class="nav-header-line js-nav-header-line"></div>
                </div>
                <ul class="nav-categories">
                    <li class="nav-category js-nav-animate">
                        <a class="nav-link" href="">Overview</a>
                    </li>
                    <li class="nav-category js-nav-animate">
                        <a class="nav-link" href="">Blog</a>
                    </li>
                    <li class="nav-category js-nav-animate">
                        <a class="nav-link" href="">Tutorials</a>
                    </li>
                    <li class="nav-category js-nav-animate">
                        <a class="nav-link" href="">Speaking</a>
                    </li>
                </ul>
                <div class="nav-sublinks js-nav-animate">
                    <div class="js-nav-animate" style="opacity: 1;transform: translateY(0px) scale(1)">
                        <a class="nav-link nav-sublink" href="">Moving Letters</a>
                        <a class="nav-link nav-sublink" href="">TypeSource</a>
                        <a class="nav-link nav-sublink" href="">Spin Kit</a>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="site-name site-name-portfolio">
            <a class="siteLogoLink" href="">
                <svg class="siteHead-logoMark" width="1022" height="482" viewBox="0 0 1022 483">
                <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                </svg>
            </a>
        </h1>
        <button class="site-search js-search button-clear" style="opacity:1">
            <span class="site-search-icon" style="opacity:1">
                <svg width="20" height="20" viewBox="0 0 38 41">
                    <circle class="site-search-icon-circle" fill="none" stroke-width="4px" cx="16.465" cy="16.484" r="14.465"></circle>
                        <path class="site-search-icon-line" d="M2791.72,95.441l3.03-3.034,13.1,13.968-3.03,3.034Z" transform="translate(-2768.88 -67.938)"></path>
                </svg>
            <span class="site-search-close-icon" style="display: block">
                <span class="site-search-close-icon-line site-search-close-icon-line-1" style="transform: rotateZ(225deg)"></span>
                <span class="site-search-close-icon-line site-search-close-icon-line-2" style="transform: rotateZ(225deg)"></span>
            </span>
        </button>
        <div class="js-search-overlay site-nav-overlay-search">
            <div class="site-search-content">
                <input type="text" placeholder="Search..." class="js-search-input siteSearchInput">
                    <div class="site-search-content-results js-site-search-content-results">
                        <div class="site-search-content-results-list"></div>
                    </div>
            </div>
        </div>
    </div>
        <div class="portfolio-header-bg"></div>

        <div class="section hero-section">
            <div class="hero-tab">
                <h1 class="hero-name">
                    <span class="hero-tobias">
                        <span class="hero-name-inner">Tobias</span>
                    </span>
                    <span class="hero-ahlin">
                        <span class="hero-name-inner">Ahlin</span>
                    </span>
                    <span class="hero-bjerrome">
                        <span class="hero-name-inner">Bjerrome</span>
                    </span>
                </h1>
                    <div class="tab-container">
                        <svg  class="tab"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>

                        <svg  class="tab-outline"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>

                        <svg  class="tab-outline"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>

                        <svg  class="tab-outline"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>

                        <svg  class="tab-outline"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>

                        <svg  class="tab-outline"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>

                        <svg  class="tab-outline"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>

                        <svg  class="tab-outline"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>

                        <svg  class="tab-outline"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>

                        <svg  class="tab-outline"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>

                        <svg  class="tab-outline"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>

                        <svg  class="tab-outline"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>

                        <svg  class="tab-outline"  width="1022" height="482" viewBox="0 0 1022 482" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                        </svg>
        
                    </div>
            </div>
                <h2 class="portfolio-intro-header">I design, tinker, & teach.</h2>
        </div>

        <div class="section grid-items grid-items-feature-first grid-items-peak">
                <h2 class="section-header">Blog.</h2>
                    <a class="grid-item post-preview" style="background-color: #3bab87" href="">
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
                    <a class="grid-item post-preview" style="background-color: #FDF0EC" href="">
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
                    <a class="grid-item post-preview" style="background-color: #98bec8" href="">
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
                    <a class="grid-item grid-item-wide case-item-blog" href="">
                        <div class="grid-item-bg"></div>
                            <h3 class="grid-item-header grid-item-header-blog">Read all posts</h3>
                                <div class="grid-item-divider"></div>
                                    <p class="grid-item-text">
                                        I write about design, CSS, animation, and the projects that are keeping me busy.
                                    </p>
                    </a>
        </div>

        <div class="section grid-items grid-items-feature-first">
            <h2 class="section-header">Projects.</h2>
                <a class="grid-item grid-item-dark-text grid-item-tall case-item-spinkit" href="">
                    <h3 class="grid-item-header">SpinKit</h3>
                        <span class="grid-item-button">
                            <span class="grid-item-button-label">View project</span>
                        </span>
                        <div class="case-item-content">
                            <div class="content-spinkit"></div>
                        </div>
                        <p class="grid-item-text">
                            Nobody likes to wait… but you can make it less of a pain. I've created 
                            <strong>SpinKit</strong>
                            , an open-source collection of loading spinners animated with CSS.
                        </p>
                </a>
                <a class="grid-item grid-item-tall case-item-moving-letters" href="">
                    <span class="grid-item-button">
                        <span class="grid-item-button-label">View project</span>
                    </span>
                        <h3 class="grid-item-header grid-item-header-ml">
                            <span class="grid-item-ml-text-wrapper">
                                <span class="grid-item-header-ml-letter">Moving Letters</span>
                            </span>
                        </h3>
                        <div class="grid-item-divider"></div>
                        <p class="grid-item-text">
                            If you want more playful and expressive typography, I've created an open-source collection of text effects animated with JavaScript and anime.js.
                        </p>
                </a>
                <a class="grid-item grid-item-tall" style="background-color: #1a1a1a" href="">
                    <span class="grid-item-button">
                        <span class="grid-item-button-label">View project</span>
                    </span>
                        <h3 class="grid-item-header grid-item-header-typesource">Typesource</h3>
                            <div class="grid-item-divider"></div>
                                <p class="grid-item-text">
                                    I created
                                    <strong>Typesource</strong>
                                    as a way to browse web fonts by how they look and feel, rather by their name and attributes. 
                                </p>
                </a>
        </div>

        <div class="section grid-items">
            <h2 class="section-header">Work.</h2>
                <a class="grid-item grid-item-wide grid-item-minecraft" href="">
                    <span class="grid-item-button">
                        <span class="grid-item-button-label">View project</span>
                    </span>
                        <h3 class="grid-item-header grid-item-header-minecraft">Minecraft</h3>
                            <div class="case-item-content">
                                <svg class="case-item-icon icon-mojang" viewBox="0 0 114.688 114.688">
                                    <path class="cls-1" fill="#fff" d="M114.7-.01H33.026A33.04 33.04 0 0 0-.01 33.024V114.7h81.67a33.037 33.037 0 0 0 33.04-33.037V-.01zM71.57 46.643c-18.207-12.147-39.143-4.147-39.143 14.67 0 38.393 63.608 24.467 63.608 24.467s0 9.785-9.786 9.785H27.532c-9.784 0-9.784-9.784-9.784-9.784V36.85c0-9.787 9.783-9.787 9.783-9.787h19.572c9.788 0 19.572 9.786 19.572 9.786 0-28.5 9 10.57 19.572 0 6.92-6.92 9.785 34.25 9.785 34.25l-9.786-4.89s0-9.787-14.68-19.566zm9.785-14.68a4.89 4.89 0 0 1-4.89-4.894c0-2.7 2.19-14.68 4.89-14.68s4.89 11.975 4.89 14.675a4.89 4.89 0 0 1-4.89 4.894z"></path>
                                </svg>
                            </div>
                                <p class="grid-item-text grid-item-text-minecraft">
                                    As the 
                                    <strong>Experience Design Director</strong>
                                    for
                                    <strong>Minecraft</strong>
                                    I worked with the team at 
                                    <strong>Mojang</strong>
                                    to overhaul their UI infrastructure and design and iterate on new and old Minecraft games.
                                </p>
                                <br>
                                <br>
                                    <div class="grid-item-minecraft-block" data-frames="21" style="background-position: -2500px 112px"></div>
                </a>
                <a class="grid-item case-item-spotify" href="">
                    <div class="grid-item-bg" style="background-image: url(/img/spotify.jpg)"></div>
                        <span class="grid-item-button">
                            <span class="grid-item-button-label">View project</span>
                        </span>
                            <h3 class="grid-item-header">Spotify</h3>
                                <div class="case-item-content">
                                    <svg class="case-item-icon icon-spotify" viewBox="-434 236 90 90">
                                        <path fill="#fff" d="M-389 326c-24.9 0-45-20.1-45-45s20.1-45 45-45 45 20.1 45 45-20.1 45-45 45zm-26.1-30.8c.2 1.3 1.4 2.2 2.7 2.2.4 0 .9-.1 1.3-.2 4.3-.9 8.6-1.6 13-1.7 3.4-.1 6.8 0 10.1.6 5.5.8 10.6 2.6 15.4 5.4.2.1.5.3.7.4 1.3.6 2.8.1 3.5-1.1.7-1.2.4-2.8-.7-3.6-.2-.2-.5-.3-.7-.5-2.8-1.7-5.8-3-8.9-4.1-5.6-1.9-11.4-2.7-17.3-2.8l-6 .3c-3.6.3-7.1.9-10.6 1.7-.3.1-.6.1-.8.2-1.3.6-2 1.9-1.7 3.2zm.2-10.9c.8.3 1.7.3 2.5.1 5.1-1.5 10.4-2.2 15.5-2.2 4.1 0 8 .4 11.9 1.1 5 .9 9.8 2.4 14.4 4.8 1 .5 1.9 1.1 2.9 1.6 1.7 1 3.8.5 4.8-1.2.9-1.4.7-3.7-1.2-4.8-.2-.1-.3-.2-.5-.3-3.5-2.1-7.2-3.7-11.1-4.9-7.6-2.5-15.5-3.5-23.5-3.2-3.7.1-7.4.6-11.1 1.4-1.5.3-3 .7-4.4 1.2-1.4.4-2.3 1.7-2.4 3.2 0 1.4.9 2.7 2.2 3.2zm56.6-15.8c-3.1-1.8-6.3-3.2-9.6-4.4-8.2-2.8-16.6-4.1-25.3-4.3-3.5-.1-7 0-10.5.3-3.3.3-6.5.8-9.8 1.5-1.3.3-2.6.6-3.9 1-1.7.6-2.8 2.2-2.8 4 .1 1.8 1.3 3.4 3 3.9.8.2 1.6.2 2.4 0 1.3-.4 2.6-.7 3.9-1 3.6-.8 7.2-1.2 10.9-1.4 3.2-.2 6.4-.1 9.6 0 3.1.2 6.1.5 9.2 1.1 4.4.8 8.6 1.9 12.7 3.5 2.1.8 4.1 1.8 6 2.9 2.9 1.6 6.3-.4 6.3-3.6 0-.3-.1-.6-.1-.9-.2-1.1-.9-2-2-2.6z"></path>
                                    </svg>
                                </div>
                                <p class="grid-item-text">
                                    Early on at Spotify I lead the UI design for all products and worked with building the design team.
                                </p>
                </a>
                <a class="grid-item case-item-speaking" href="">
                    <div class="grid-item-bg" style="background-image: url(/img/speaking.jpg)"></div>
                        <span class="grid-item-button">
                            <span class="grid-item-button-label">Read more</span>
                        </span>
                            <h3 class="grid-item-header">
                                Speaking
                                <span class="ampersand">&</span>
                                <br>
                                coaching
                            </h3>
                                <div class="grid-item-divider"></div>
                                    <p class="grid-item-text">
                                        I speak at events and facilitate workshops within design, digitalization, and innovation.
                                    </p>
                </a>
                <a class="grid-item grid-item-wide case-item-hi" href="">
                    <div class="grid-item-bg" style="background-image: url(/img/curriculum.jpg)"></div>
                        <span class="grid-item-button">
                            <span class="grid-item-button-label">View program</span>
                        </span>
                            <h3 class="grid-item-header">Teaching at Hyper Island</h3>
                                <div class="grid-item-divider"></div>
                                    <p class="grid-item-text">
                                        I've worked as an Industry Leader at 
                                        <strong>Hyper Island</strong>
                                        for several years. I've written curriculums, managed courses, and taught programming, design, statistics, data strategy, and rhetorics.
                                    </p>
                </a>
                <a class="grid-item case-item-lookback" href="">
                    <div class="grid-item-bg" style="background-image: url(/img/lookback.jpg)"></div>
                        <span class="grid-item-button">
                            <span class="grid-item-button-label">View project</span>
                        </span>
                            <h3 class="grid-item-header">Lookback</h3>
                                <div class="case-item-content">
                                    <svg class="case-item-icon icon-lookback" fill="#fff" viewBox="0 0 654 308">
                                        <path d="M500.56 0c-35.59 0-79.43 21.67-134.88 66.29-14.7 12.13-28.11 23.48-39.45 33.79-10.83-10.06-24.25-21.66-39.46-33.79C232.1 21.67 187.48 0 152.67 0 68.6 0 0 69.39 0 154c0 85.38 68.6 153.99 152.67 153.99 35.59 0 79.43-21.66 134.87-66.29 14.7-12.12 28.11-23.47 39.46-33.79 10.83 10.06 24.24 21.67 39.46 33.79 55.44 44.63 99.28 66.29 134.87 66.29C585.4 307.99 654 238.6 654 154 653.23 69.39 584.37 0 500.56 0zM238.29 180.57c-57.77 45.91-82.01 48.23-85.88 48.23-40.75 0-73.755-33.79-73.755-75.06s33.265-74.81 73.755-74.81c4.38 0 28.11 2.58 85.88 48.24 11.34 9.03 22.18 18.57 31.2 26.83-9.54 8.25-19.6 17.02-31.2 26.57zm110.11 6.7l-50.28-6.7-3.87-50.05 31.98-30.69 6.7 50.04 50.55 3.87zm152.16 41.79c-4.39 0-28.11-2.58-85.88-48.24-11.35-9.03-22.18-18.57-31.2-26.82 9.02-8.26 19.6-17.29 30.43-26.06 57.76-46.43 82.01-49.01 85.87-49.01 40.75 0 73.76 33.79 73.76 75.07.77 41.27-32.49 75.06-72.98 75.06z"></path>
                                    </svg>
                                </div>
                                    <p class="grid-item-text">
                                        At Lookback I made it easier to conduct user research for digital products.
                                    </p>
                </a>
                <a class="grid-item case-item-designpriset" href="">
                    <div class="grid-item-bg" style="background-image: url(/img/designpriset.jpg)"></div>
                        <span class="grid-item-button">
                            <span class="grid-item-button-label">View project</span>
                        </span>
                            <h3 class="grid-item-header">Swedish Design Awards</h3>
                                <div class="grid-item-divider"></div>
                                    <p class="grid-item-text">I'm a jury member for the Swedish Design Awards (Svenska designpriset), working with all digital categories.</p>
                </a>
                <a class="grid-item grid-item-wide case-item-gh" href="">
                    <div class="grid-item-bg" style="background-image: url(/img/github.png)"></div>
                        <span class="grid-item-button">
                            <span class="grid-item-button-label">View project</span>
                        </span>
                            <h3 class="grid-item-header grid-item-header-gh">Github</h3>
                                <div class="case-item-content">
                                    <svg class="case-item-icon icon-github" fill="#fff" viewBox="0 0 62 60">
                                        <path d="M31 0a30.7 30.7 0 0 0-9.8 59.9c1.55.3 2.116-.6 2.116-1.4s-.026-2.7-.042-5.3c-8.622 1.9-10.44-4.1-10.44-4.1-1.414-3.5-3.448-4.5-3.448-4.5-2.815-1.9.213-1.9.213-1.9a6.74 6.74 0 0 1 4.746 3.2c2.766 4.7 7.254 3.3 9.023 2.6a6.3 6.3 0 0 1 1.966-4.1c-6.88-.8-14.12-3.5-14.12-15.2a11.964 11.964 0 0 1 3.193-8.3 10.9 10.9 0 0 1 .3-8.1s2.6-.9 8.525 3.1a30.617 30.617 0 0 1 15.522 0c5.92-4 8.517-3.1 8.517-3.1a10.886 10.886 0 0 1 .308 8.1 11.946 11.946 0 0 1 3.186 8.3c0 11.8-7.248 14.4-14.155 15.1a7.52 7.52 0 0 1 2.1 5.7c0 4.1-.04 7.5-.04 8.5 0 .8.56 1.7 2.13 1.4A30.708 30.708 0 0 0 31 0"></path>
                                    </svg>
                                </div>
                                    <p class="grid-item-text grid-item-text-gh">
                                        At GitHub I worked as a product designer and front-end developer with GitHub.com, the native GitHub client, GitHub Pages, and more.
                                    </p>
                </a>

        </div>

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
                        <img src="img/profile.jpg" class="contact-picture-img" alt="">
                    </div>

                </div>
        </div>

</body>
</html>