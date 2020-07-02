@extends('layouts')
@section('title', 'Design | Tobias Ahlin')
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
            <a href="/blog/design" class="text-lightblue transform1 js-blog-categories-link blog-links posts">Design.</a>
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

                    <a href="/spinkit" class="grid-item post-preview" style="background-color: #c45850">
                        <h1 class="grid-item-header">Introducing SpinKit</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="banner-red blog-banner">
                                        <div class="blog-banner-content">
                                            <div class="content-spinkit"></div>
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                A collection of loading spinners animated with CSS.
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