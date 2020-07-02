@extends('layouts')
@section('title', 'Moving along a curved path in CSS with layered animation | Tobias Ahlin')
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
			<h1 class="post-header">Moving along a curved path in CSS with layered animation</h1>
    </div>
	
	<div class="article article-single">
		<div class="blog-banner">
            <div class="blog-banner-content mnc-demo-container">
                <div class="mnc-demo-grid">
                    <div class="mnc-demo-line" style="top: 20px;"></div>
                    <div class="mnc-demo-line" style="top: 40px;"></div>
                    <div class="mnc-demo-line" style="top: 60px;"></div>
                    <div class="mnc-demo-line" style="top: 80px;"></div>
                    <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
                    <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
                    <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
                    <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
                </div>

                <div class="mnc-demo-dot"></div>
            </div>

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

        </div>

<!--more-->

<p>CSS animations and transitions are great for animating something from point A to B. That is, if you want to animate along a straight path. No matter how much you bend your <a class="red" href="https://developer.mozilla.org/en/docs/Web/CSS/timing-function">bezier curves</a>, you can’t make something move along a curved path by applying an <code class="language-plaintext highlighter-rouge">animation</code> or a <code class="language-plaintext highlighter-rouge">transition</code> to an object. You can overshoot with custom timing functions, and produce spring-like effects, but the relative movement along the X and Y-axis will always be identical.</p>

<p>Instead of turning to JavaScript for producing more natural-looking motion, there’s an easy way to work around this limitation: layered animation. By using two or more objects to drive an animation, we get fine-grained control over an object’s path, and can apply one timing function for the movement along the X-axis, and another one for the Y-axis.</p>

<h2 id="the-problem">The problem<a href="#the-problem" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/curved-path-animations-in-css/#the-problem</span></a></h2>

<div class="post-demo-content">
  <div class="mnc-demo-container mnc-demo-container-inline">
    <span class="mnc-demo-label">Regular path</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot mnc-demo-dot-straight"></div>
  </div>

  <div class="mnc-demo-container mnc-demo-container-inline">
    <span class="mnc-demo-label">What we want</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot"></div>
  </div>

  <style>
    .mnc-demo-container-inline {
        display: inline-block;
        position: relative;
        margin-right: 30px;
        margin-left: 30px;
        margin-bottom: 30px;
        margin-top: 15px;
    }

    .mnc-demo-label {
        position: absolute;
        bottom: -38px;
        left: 0;
        color: #666;
        font-size: 11px;
        text-align: center;
        width: 100%;
        border: 2px solid rgba(0,0,0,0);
    }

    .mnc-demo-container-inline .mnc-demo-dot:after {
        background-color: #333;
    }

    .mnc-demo-dot-straight {
        -webkit-animation: straightLine 2.5s infinite linear;
        animation: straightLine 2.5s infinite linear;
    }

    .mnc-demo-dot-straight:after {
        -webkit-animation: none;
        animation: none;
    }

    @-webkit-keyframes straightLine {
        50% {
        -webkit-transform: translate3D(100px, -100px, 0);
        transform: translate3D(100px, -100px, 0);
        }
    }

    @keyframes straightLine {
        50% {
        -webkit-transform: translate3D(100px, -100px, 0);
        transform: translate3D(100px, -100px, 0);
        }
    }
  
  </style>
</div>

<p>Before we dive into the solution, let’s look closer at the problem. CSS <code class="language-plaintext highlighter-rouge">animations</code> and <code class="language-plaintext highlighter-rouge">transitions</code> restrict us to animating along straight paths. How? By always taking the shortest path from point A to point B. That’s great—this is what we’re after in most cases—but we lack a way of telling CSS to “take a nicer path” rather than “take the shortest path”.</p>

<p>The most straightforward way of animating between two points in CSS (with hardware acceleration) is to use <code class="language-plaintext highlighter-rouge">transform</code> to <code class="language-plaintext highlighter-rouge">translate</code> an object over time. This produces movement along a linear path. In this <code class="language-plaintext highlighter-rouge">@keyframes</code> block, we’re going back and forth between (0,0) and (100,-100), as seen in the example above:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="k">@keyframes</span> <span class="n">straightLine</span> <span class="p">{</span>
  <span class="nt">50</span><span class="o">%</span> <span class="p">{</span>
    <span class="nl">transform</span><span class="p">:</span> <span class="n">translate3D</span><span class="p">(</span><span class="m">100px</span><span class="p">,</span> <span class="m">-100px</span><span class="p">,</span> <span class="m">0</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="nc">.dot</span> <span class="p">{</span>
  <span class="nl">animation</span><span class="p">:</span> <span class="n">straightLine</span> <span class="m">2.5s</span> <span class="n">infinite</span> <span class="n">linear</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>This isn’t complicated, but let’s stop here for a moment. To understand the solution to the problem we need to, at least visually, take the animation apart.</p>

<p>At <code class="language-plaintext highlighter-rouge">0%</code> we start out at (0,0), and at <code class="language-plaintext highlighter-rouge">50%</code> we use <code class="language-plaintext highlighter-rouge">translate3D(100px, -100px, 0)</code> to move to (100,-100), then back again. Put another way, we move the object <code class="language-plaintext highlighter-rouge">100px</code> to the right, and <code class="language-plaintext highlighter-rouge">100px</code> upwards, and these two translations combined move the object at an angle.</p>

<div class="post-demo-content">
  <div class="mnc-demo-container mnc-demo-container-inline">
    <span class="mnc-demo-label">X movement</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot mnc-demo-dot-straight mnc-demo-dot-straightX"></div>
  </div>

  <div class="mnc-demo-container mnc-demo-container-inline">
    <span class="mnc-demo-label">Y movement</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot mnc-demo-dot-straight mnc-demo-dot-straightY"></div>
  </div>

  <div class="mnc-demo-container mnc-demo-container-inline">
    <span class="mnc-demo-label">Combined</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot mnc-demo-dot-straight"></div>
  </div>


  <style>
    .mnc-demo-dot-straightX {
        -webkit-animation: straightLineX 2.5s infinite linear;
        animation: straightLineX 2.5s infinite linear;
    }

    .mnc-demo-dot-straightY {
        -webkit-animation: straightLineY 2.5s infinite linear;
        animation: straightLineY 2.5s infinite linear;
    }

    @-webkit-keyframes straightLineX {
        50% {
        -webkit-transform: translateX(100px);
        transform: translateX(100px);
        }
    }

    @keyframes straightLineX {
        50% {
        -webkit-transform: translateX(100px);
        transform: translateX(100px);
        }
    }

    @-webkit-keyframes straightLineY {
        50% {
        -webkit-transform: translateX(100px);
        transform: translateX(100px);
        }
    }

    @keyframes straightLineY {
        50% {
        -webkit-transform: translateY(-100px);
        transform: translateY(-100px);
        }
    }
  </style>
</div>

<h2 id="the-solution-one-timing-function-per-axis">The solution: one timing function per axis<a href="#the-solution-one-timing-function-per-axis" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/curved-path-animations-in-css/#the-solution-one-timing-function-per-axis</span></a></h2>

<p>So how do we create a curved path like the one showcased in the earlier example? To create a path that doesn’t go in a straight line, <strong>we want the movement speed along the X-axis and Y-axis to be out of sync</strong>.</p>

<p>The previous examples all used <code class="language-plaintext highlighter-rouge">linear</code> timing functions, but if we add a container around the object we want to animate, we can apply one timing function for the X-axis, and another one for the Y-axis. Below, we’re using <code class="language-plaintext highlighter-rouge">ease-in</code> for the X-axis, and <code class="language-plaintext highlighter-rouge">ease-out</code> for the Y-axis:</p>

<div class="post-demo-content">
  <div class="mnc-demo-container mnc-demo-container-inline">
    <span class="mnc-demo-label">X: ease-in</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot mnc-demo-dot-straight mnc-demo-dot-ease-in"></div>
  </div>

  <div class="mnc-demo-container mnc-demo-container-inline">
    <span class="mnc-demo-label">Y: ease-out</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot mnc-demo-dot-straight mnc-demo-dot-ease-out"></div>
  </div>

  <div class="mnc-demo-container mnc-demo-container-inline">
    <span class="mnc-demo-label">Combined</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot mnc-demo-dot-combined"></div>
  </div>

  <style>
        .mnc-demo-dot-ease-in {
        -webkit-animation: combined-xAxis 2.5s infinite ease-in;
        animation: combined-xAxis 2.5s infinite ease-in;
        }

        .mnc-demo-dot-ease-out {
        -webkit-animation: combined-yAxis 2.5s infinite ease-out;
        animation: combined-yAxis 2.5s infinite ease-out;
        }

        .mnc-demo-dot-combined {
        -webkit-animation: combined-xAxis 2.5s infinite ease-in;
        animation: combined-xAxis 2.5s infinite ease-in;
        }

        .mnc-demo-dot-combined::after {
        -webkit-animation: combined-yAxis 2.5s infinite ease-out;
        animation: combined-yAxis 2.5s infinite ease-out;
        }

        @keyframes combined-xAxis {
        50% {
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            -webkit-transform: translateX(100px);
            transform: translateX(100px);
        }
        }

        @-webkit-keyframes combined-xAxis {
        50% {
            -webkit-animation-timing-function: ease-in;
            animation-timing-function: ease-in;
            -webkit-transform: translateX(100px);
            transform: translateX(100px);
        }
        }

        @keyframes combined-yAxis {
        50% {
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
            -webkit-transform: translateY(-100px);
            transform: translateY(-100px);
        }
        }

        @-webkit-keyframes combined-yAxis {
        50% {
            -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
            -webkit-transform: translateY(-100px);
            transform: translateY(-100px);
        }
        }
    
  </style>
</div>

<h2 id="the-implementation-one-object-per-axis">The implementation: one object per axis<a href="#the-implementation-one-object-per-axis" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/curved-path-animations-in-css/#the-implementation-one-object-per-axis</span></a></h2>

<p>Unfortunately, we can’t just stack <code class="language-plaintext highlighter-rouge">transform</code> animations; only the last animation to be declared would run. So, how do we actually combine two animations? We put one object inside another, and run one animation on the container element, and a different one on the child element.</p>

<p>In all the examples above, where we’ve seen the dot move along a curved path, we’ve seen two separate elements being animated, but the container has been completely transparent. To clearly see how the two objects interact in the curved examples, we can change the container to render a bordered box:</p>

<div class="post-demo-content">
  <div class="mnc-demo-container mnc-demo-container-inline">
    <span class="mnc-demo-label">X: container</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot mnc-demo-dot-square mnc-demo-dot-straight mnc-demo-dot-ease-in"></div>
  </div>

  <div class="mnc-demo-container mnc-demo-container-inline">
    <span class="mnc-demo-label">Y: object</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot mnc-demo-dot-straight mnc-demo-dot-ease-out"></div>
  </div>

  <div class="mnc-demo-container mnc-demo-container-inline">
    <span class="mnc-demo-label">Combined</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot mnc-demo-dot-square mnc-demo-dot-combined"></div>
  </div>

  <style>
    .mnc-demo-dot-square {
      border-radius: 0;
      border: 1px solid #000;
      width: 20px;
      height: 20px;
    }

    .mnc-demo-dot-square::after {
      display: none;
    }

    .mnc-demo-dot-combined.mnc-demo-dot-square::after {
      display: block;
    }

    </style>
</div>

<p>The dot sits inside the bordered box, and follows the box’s motion along the X-axis, while it itself moves up and down along the Y-axis. Remove the border of the box, and we’ve got our curved path. Rather than adding two objects in our HTML, though, we can produce a pseudo-element. If we have this in our HTML:</p>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"dot"</span><span class="nt">&gt;&lt;/div&gt;</span>
</code></pre></div></div>

<p>We can add a pseudo-element like so:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.dot</span> <span class="p">{</span>
  <span class="c">/* Container. Animate along the X-axis */</span>
<span class="p">}</span>

<span class="nc">.dot</span><span class="nd">::after</span> <span class="p">{</span>
  <span class="c">/* Render dot, and animate along Y-axis */</span>
<span class="p">}</span>
</code></pre></div></div>

<p>Then we need two separate animation blocks: one for the X-axis, and one for the Y-axis. Notice how one uses <code class="language-plaintext highlighter-rouge">ease-in</code>, while the other one uses <code class="language-plaintext highlighter-rouge">ease-out</code>:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.dot</span> <span class="p">{</span>
  <span class="c">/* Some layout code… */</span>
  <span class="nl">animation</span><span class="p">:</span> <span class="n">xAxis</span> <span class="m">2.5s</span> <span class="n">infinite</span> <span class="n">ease-in</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.dot</span><span class="nd">::after</span> <span class="p">{</span>
  <span class="c">/* Render dot */</span>
  <span class="nl">animation</span><span class="p">:</span> <span class="n">yAxis</span> <span class="m">2.5s</span> <span class="n">infinite</span> <span class="n">ease-out</span><span class="p">;</span>
<span class="p">}</span>

<span class="k">@keyframes</span> <span class="n">xAxis</span> <span class="p">{</span>
  <span class="nt">50</span><span class="o">%</span> <span class="p">{</span>
    <span class="nl">animation-timing-function</span><span class="p">:</span> <span class="n">ease-in</span><span class="p">;</span>
    <span class="nl">transform</span><span class="p">:</span> <span class="n">translateX</span><span class="p">(</span><span class="m">100px</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@keyframes</span> <span class="n">yAxis</span> <span class="p">{</span>
  <span class="nt">50</span><span class="o">%</span> <span class="p">{</span>
    <span class="nl">animation-timing-function</span><span class="p">:</span> <span class="n">ease-out</span><span class="p">;</span>
    <span class="nl">transform</span><span class="p">:</span> <span class="n">translateY</span><span class="p">(</span><span class="m">-100px</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div></div>

<p>With some custom bezier curves that overshoot we can produce the example showcased at the beginning of the post:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.demo-dot</span> <span class="p">{</span>
  <span class="nl">animation</span><span class="p">:</span> <span class="n">xAxis</span> <span class="m">2.5s</span> <span class="n">infinite</span> <span class="n">cubic-bezier</span><span class="p">(</span><span class="m">0.02</span><span class="p">,</span> <span class="m">0.01</span><span class="p">,</span> <span class="m">0.21</span><span class="p">,</span> <span class="m">1</span><span class="p">);</span>
<span class="p">}</span>

<span class="nc">.demo-dot</span><span class="nd">::after</span> <span class="p">{</span>
  <span class="nl">content</span><span class="p">:</span> <span class="s2">''</span><span class="p">;</span>
  <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">20px</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">20px</span><span class="p">;</span>
  <span class="nl">border-radius</span><span class="p">:</span> <span class="m">20px</span><span class="p">;</span>
  <span class="nl">background-color</span><span class="p">:</span> <span class="m">#fff</span><span class="p">;</span>
  <span class="nl">animation</span><span class="p">:</span> <span class="n">yAxis</span> <span class="m">2.5s</span> <span class="n">infinite</span> <span class="n">cubic-bezier</span><span class="p">(</span><span class="m">0.3</span><span class="p">,</span> <span class="m">0.27</span><span class="p">,</span> <span class="m">0.07</span><span class="p">,</span> <span class="m">1.64</span><span class="p">);</span>
<span class="p">}</span>

<span class="k">@keyframes</span> <span class="n">yAxis</span> <span class="p">{</span>
  <span class="nt">50</span><span class="o">%</span> <span class="p">{</span>
    <span class="nl">animation-timing-function</span><span class="p">:</span> <span class="n">cubic-bezier</span><span class="p">(</span><span class="m">0.02</span><span class="p">,</span> <span class="m">0.01</span><span class="p">,</span> <span class="m">0.21</span><span class="p">,</span> <span class="m">1</span><span class="p">);</span>
    <span class="nl">transform</span><span class="p">:</span> <span class="n">translateY</span><span class="p">(</span><span class="m">-100px</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@keyframes</span> <span class="n">xAxis</span> <span class="p">{</span>
  <span class="nt">50</span><span class="o">%</span> <span class="p">{</span>
    <span class="nl">animation-timing-function</span><span class="p">:</span> <span class="n">cubic-bezier</span><span class="p">(</span><span class="m">0.3</span><span class="p">,</span> <span class="m">0.27</span><span class="p">,</span> <span class="m">0.07</span><span class="p">,</span> <span class="m">1.64</span><span class="p">);</span>
    <span class="nl">transform</span><span class="p">:</span> <span class="n">translateX</span><span class="p">(</span><span class="m">100px</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div></div>

<p>Which brings us back to where we started:</p>

<div class="post-demo-content">
  <div class="mnc-demo-container mnc-demo-container-inline">
    <span class="mnc-demo-label">X movement</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot mnc-demo-dot-final mnc-demo-dot-final-x"></div>

  </div>
  <div class="mnc-demo-container mnc-demo-container-inline">

    <span class="mnc-demo-label">Y movement</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot mnc-demo-dot-final mnc-demo-dot-final-y"></div>

  </div>
  <div class="mnc-demo-container mnc-demo-container-inline">

    <span class="mnc-demo-label">Curved path</span>
    <div class="mnc-demo-grid">
      <div class="mnc-demo-line" style="top: 20px;"></div>
      <div class="mnc-demo-line" style="top: 40px;"></div>
      <div class="mnc-demo-line" style="top: 60px;"></div>
      <div class="mnc-demo-line" style="top: 80px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 20px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 40px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 60px;"></div>
      <div class="mnc-demo-line-vertical" style="left: 80px;"></div>
    </div>

    <div class="mnc-demo-dot"></div>
  </div>
</div>

<p>You may have noticed that we’ve been using <code class="language-plaintext highlighter-rouge">@keyframes</code> blocks in all of the examples so far, but that’s purely because we happened to need several keyframes to move the dot back and forth. Layered animation works just as well with the <code class="language-plaintext highlighter-rouge">transition</code> property, if you only need to animate from point A to point B.</p>

<p>If you have an absolutely positioned element you can achieve a curved path by animating the <code class="language-plaintext highlighter-rouge">left</code> and <code class="language-plaintext highlighter-rouge">bottom</code> properties, of a single element, and avoid the need of a container element. There’s a good reason to avoid doing so, however: it performs significantly worse, and will trigger a redraw for every frame of the animation. Using layered animation with a pseudo-element and animating the hardware-accelerated <code class="language-plaintext highlighter-rouge">translate</code> property produces a great-looking animation while making sure it also performs well.</p>

	</div>
</div>
            
            
            
            
            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #45383C">
                        <div class="post-categories-links">
                
                             <a class="post-categories-link" href="/blog/css/">css</a>
                                    <span class="post-categories-link-divider">/</span>
                            
                            <a class="post-categories-link" href="/blog/motion/">animation</a>
                                    <span class="post-categories-link-divider">/</span>   

                            <a class="post-categories-link" href="/blog/design/">design</a>
                
                        </div>
                        <span class="section-header section-header-small post-categories-date">07/01/2016</span>
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