@extends('layouts')
@section('title', 'Animation | Tobias Ahlin')
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
            <a href="/blog/motion" class="text-red transform1 js-blog-categories-link blog-links posts">Motion.</a>
            <a href="/blog/tutorials" class="text-darkgreen transform1 js-blog-categories-link blog-links">Tutorials.</a>
        </div>

        <div class="section grid-items grid-items-feature-first">
                    <a href="" class="grid-item post-preview" style="background-color: #2b2f3c">
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

                    <a href="" class="grid-item post-preview" style="background-color: #45383c">
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

                    <a href="" class="grid-item post-preview" style="background-color: #8e5ea2">
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
                    
                    <a href="" class="grid-item post-preview" style="background-color: #2b2f3c">
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

                    <a href="" class="grid-item post-preview" style="background-color: #c45850">
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
        </div>

<!-- Action-Driven animation -->
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
@endsection