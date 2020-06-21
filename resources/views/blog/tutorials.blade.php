@extends('layouts')
@section('title', 'Tutorials | Tobias Ahlin')
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
            <a href="/blog/tutorials" class="text-darkgreen transform1 js-blog-categories-link blog-links posts">Tutorials.</a>
        </div>

        <div class="section grid-items grid-items-feature-first">
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

                    <a href="" class="grid-item post-preview" style="background-color: #1c323d">
                        <h1 class="grid-item-header">Cheat sheet for moving from jQuery to vanilla JavaScript</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>   
                            </span>
                            <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content">
                                        <span class="jquery-logo-letter">j</span>
                                        <span class="jquery-logo-letter">Q</span>
                                        <span class="jquery-logo-letter">u</span>
                                        <span class="jquery-logo-letter">e</span>
                                        <span class="jquery-logo-letter">r</span>
                                        <span class="jquery-logo-letter">y</span>
                                        </div>
                                    </div>
                                    <div class="blog-banner-jquery-hole hole1"></div>
                                </div>
                                <p class="grid-item-text">
                                    With a simple CSS trick, we can get fine-tuned control over how shadows are rendered, and create richer and more realistic 3D effects
                                </p>
                    </a>

                    <a href="" class="grid-item post-preview" style="background-color: #7290a4">
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

                    <a href="" class="grid-item post-preview" style="background-color: #2b2f3c">
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

                    <a href="" class="grid-item post-preview" style="background-color: #314964">
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

                    <a href="" class="grid-item post-preview" style="background-color:#98bec8">
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

                    <a href="" class="grid-item post-preview" style="background-color: #e8c3b9">
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

                    <a class="grid-item post-preview" style="background-color: #1a1a23" href="">
                        <h1 class="grid-item-header">Chaining in jQuery</h1>
                            <span class="grid-item-button">
                                <span class="grid-item-button-label">Read more</span>
                            </span>
                                <div class="article article-preview">
                                    <div class="blog-banner">
                                        <div class="blog-banner-content" style="height:80px">
                                            <img src="/img/chain.svg" style="width:80px" alt="">
                                        </div>
                                    </div>
                                </div>
                                <p class="grid-item-text">
                                Chaining in jQuery let's you write code that is faster to execute, easier to read, and easier to maintain.
                                </p>
                    </a>

        </div>


<!-- jQuery animation -->
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

<!-- Flexbox animation -->
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

<!-- Masonry animation -->
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

<!-- Flexbox patterns -->
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