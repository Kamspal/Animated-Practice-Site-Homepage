@extends('layouts')
@section('title', 'Common Mac OS X Cursors as PNGs | Tobias Ahlin')
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
	<div class="single-post-head" style="background-color: #45383c">
			<h1 class="post-header">Common Mac OS X Cursors as PNGs</h1>
    </div>
	
	<div class="article article-single">
		<div class="blog-banner">
  <div class="blog-banner-content" style="height: 70px;">
    <img src="/img/cursor.svg" alt="OS X Cursor" width="50">
  </div>
</div>

<!--more-->

<p>If you’re ever creating user interface mockups for desktop apps or web apps, you’ve likely been looking for mouse cursors to demonstrate different ways of interacting with your design. I have, at least, but have had a hard time finding pixel perfect PNGs.</p>

<p>I dug around in OS X’s System Library and managed to find the vectors used for rendering the most common cursors (including for pointing, drag and dropping, resizing, etc.), and exported them all as PNGs. If you can’t find the cursor you’re looking for in the table below, I’ve prepared <a class="red" href="/static/cursors/cursors-psd.zip">a zip with all cursors</a>.</p>

<ul class="blog-image-list">
  <li class="blog-image-list-row">
    <div><img alt="Default" src="/img/default.png"></div>
    <div><img height="22" alt="Default @2x" src="/img/default@2x.png"> </div>
    <div><img height="43" alt="Default @4x" src="/img/default@4x.png"></div>
  </li>
  <li class="blog-image-list-row">
    <div><img alt="Option" src="/img/option.png"></div>
    <div><img height="22" alt="Option @2x" src="/img/option@2x.png"> </div>
    <div><img height="43" alt="Option @4x" src="/img/option@4x.png"></div>
  </li>
  <li class="blog-image-list-row">
    <div><img alt="Pointer" src="/img/pointer.png"></div>
    <div><img height="19" alt="Pointer @2x" src="/img/pointer@2x.png"> </div>
    <div><img height="39" alt="Pointer @4x" src="/img/pointer@4x.png"></div>
  </li>
  <li class="blog-image-list-row">
    <div><img alt="Drag" src="/img/drag.png"></div>
    <div><img height="16" alt="Drag @2x" src="/img/drag@2x.png"> </div>
    <div><img height="31" alt="Drag @4x" src="/img/drag@4x.png"></div>
  </li>
  <li class="blog-image-list-row">
    <div><img alt="Type" src="/img/type.png"></div>
    <div><img height="17" alt="Type @2x" src="/img/type@2x.png"> </div>
    <div><img height="34" alt="Type @4x" src="/img/type@4x.png"></div>
  </li>
  <li class="blog-image-list-row">
    <div><img alt="Screenshot" src="/img/screenshot.png"></div>
    <div><img height="20" alt="Screenshot @2x" src="/img/screenshot@2x.png"></div>
    <div><img height="41" alt="Screenshot @4x" src="/img/screenshot@4x.png"></div>
  </li>
  <li class="blog-image-list-row">
    <div><img alt="Zoom in" src="/img/zoom-in.png"></div>
    <div><img height="17" alt="Zoom in @2x" src="/img/zoom-in@2x.png"> </div>
    <div><img height="38" alt="Zoom in @4x" src="/img/zoom-in@4x.png"></div>
  </li>
  <li class="blog-image-list-row">
    <div><img alt="Zoomn out" src="/img/zoom-out.png"></div>
    <div><img height="17" alt="Zoomn out @2x" src="/img/zoom-out@2x.png"> </div>
    <div><img height="38" alt="Zoomn out @4x" src="/img/zoom-out@4x.png"></div>
  </li>
</ul>

<p><a class="red" href="/static/cursors/cursors-psd.zip">Download all OS X cursors (PSD)</a></p>

<style>
    .blog-image-list-row {
    display: block;
    list-style: none;
    border-bottom: 1px solid #eee;
    overflow: hidden;
    }

    .blog-image-list-row div {
    float: left;
    width: 31%;
    height: 75px;
    text-align: center;
    position: relative;
    margin-bottom: 15px;
    margin-top: 15px;
    }

    .blog-image-list-row img {
    vertical-align: bottom; 
    }

    .blog-image-list-row div:after {
    position: absolute;
    width: 100%;
    content: "@2x";
    text-align: center;
    left: 0;
    bottom: 0;
    font-size: 13px;
    color: #aaa;
    }


    .blog-image-list-row div:first-child:after {
    content: "@1x";
    }

    .blog-image-list-row div:last-child:after {
    content: "@4x";
    }

</style>


	</div>
</div>       
            
            
            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #45383C">
                        <div class="post-categories-links">
                
                        <a class="post-categories-link" href="/blog/design/">design</a>
                                <span class="post-categories-link-divider">/</span>
                            
                        <a class="post-categories-link" href="/blog/resources/">resources</a> 
                
                        </div>
                        <span class="section-header section-header-small post-categories-date">12/06/2011</span>
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