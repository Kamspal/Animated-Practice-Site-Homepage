@extends('layouts')
@section('title', 'Resources | Tobias Ahlin')
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
            <a href="/blog/javascript" class="text-darkgreen transform1 js-blog-categories-link blog-links">JS.</a>
            <a href="/blog/css" class="text-pink transform1 js-blog-categories-link blog-links">CSS</a>
            <a href="/blog/design" class="text-lightblue transform1 js-blog-categories-link blog-links">Design.</a>
            <a href="/blog/data" class="text-darkblue transform1 js-blog-categories-link blog-links">Data.</a>
            <a href="/blog/motion" class="text-red transform1 js-blog-categories-link blog-links">Motion.</a>
            <a href="/blog/tutorials" class="text-darkgreen transform1 js-blog-categories-link blog-links">Tutorials.</a>
        </div>

        <div class="section grid-items grid-items-feature-first">
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
@endsection