@extends('layouts')
@section('title', 'Common CSS Flexbox Layout Patterns with Example Code | Tobias Ahlin')
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
	<div class="single-post-head" style="background-color: #314964">
			<h1 class="post-header">Common CSS Flexbox Layout Patterns with Example Code</h1>
	</div>
	
	<div class="article article-single">
		<div class="blog-banner">
  <div class="blog-banner-content">
      <div class="flexbox-banner-logo">
        <div class="flexbox-box flexbox-box-1" style="transform: translateX(-30px) scaleY(0.9) scaleX(0.15);"></div>
        <div class="flexbox-box flexbox-box-2" style="transform: translateX(0px) scaleY(0.9) scaleX(0.15);"></div>
        <div class="flexbox-box flexbox-box-3" style="transform: translateX(30px) scaleY(0.9) scaleX(0.15);"></div>
      </div>
  </div>
</div>
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

<!--more-->

<p>In theory, it’s pretty straightforward to use <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">flexbox</a> (Flexible Box Module) to build complex layouts, but I’ve often found myself adding <code class="language-plaintext highlighter-rouge">display: flex</code> to an element and then promptly spending an eternity trying to figure out how to make anything behave like I expect it to. If you’re anything like me: here’s a list of 10 example flexbox layouts with CSS that you can copy and paste to get started with your own layouts. We’ll walk through these basic layout patterns (click to jump to an example):</p>

<div class="post-jumper post-jumper-5">
  <a href="#stretch-all-fixed-spacing" class="post-jumper-item">
    <div class="icon-flex flex1">
      <div class="icon-child flex1-child" style="height: 40px"></div>
      <div class="icon-child flex1-child" style="height: 40px"></div>
      <div class="icon-child flex1-child" style="height: 40px"></div>
      <div class="icon-child flex1-child" style="height: 40px"></div>
    </div>
    <span class="post-jumper-title">Stretch all</span>
  </a>  
  <a href="#stretch-middle-fixed-spacing" class="post-jumper-item">
    <div class="icon-flex flex2">
      <div class="icon-child flex2-child" style="width: 20px; height: 40px"></div>
      <div class="icon-child flex2-child flex2-child-center" style="height: 40px"></div>
      <div class="icon-child flex2-child" style="width: 20px; height: 40px"></div>
    </div>
    <span class="post-jumper-title">Stretch middle</span>
  </a>
  <a href="#alternating-grid" class="post-jumper-item">
   <div class="icon-flex flex3">
      <div style="height: 15px;" class="icon-child flex3-child"></div>
      <div style="height: 15px;" class="icon-child flex3-child"></div>
      <div style="height: 15px;" class="icon-child flex3-child"></div>
      <div style="height: 15px;" class="icon-child flex3-child"></div>
      <div style="height: 15px;" class="icon-child flex3-child"></div>
    </div>
    <span class="post-jumper-title">Alternating grid</span>
  </a>
  <a href="#3x3-grid" class="post-jumper-item">
    <div class="icon-flex flex4">
      <div style="height: 15px" class="icon-child flex4-child"></div>
      <div style="height: 15px" class="icon-child flex4-child"></div>
      <div style="height: 15px" class="icon-child flex4-child"></div>
      <div style="height: 15px" class="icon-child flex4-child"></div>
      <div style="height: 15px" class="icon-child flex4-child"></div>
      <div style="height: 15px" class="icon-child flex4-child"></div>
      <div style="height: 15px" class="icon-child flex4-child"></div>
      <div style="height: 15px" class="icon-child flex4-child"></div>
      <div style="height: 15px" class="icon-child flex4-child"></div>
    </div>
    <span class="post-jumper-title">3x3 grid</span>
  </a>
  <a href="#3x3-grid-constrained-proportions-11" class="post-jumper-item">
    <div style="width: 52px" class="icon-flex flex5">
      <div class="icon-child flex5-child"></div>
      <div class="icon-child flex5-child"></div>
      <div class="icon-child flex5-child"></div>
      <div class="icon-child flex5-child"></div>
      <div class="icon-child flex5-child"></div>
      <div class="icon-child flex5-child"></div>
      <div class="icon-child flex5-child"></div>
      <div class="icon-child flex5-child"></div>
      <div class="icon-child flex5-child"></div>
    </div>
    <span class="post-jumper-title">3x3 (1:1)</span>
  </a>
  <a href="#3x3-grid-constrained-proportions-169" class="post-jumper-item">
    <div class="icon-flex flex6">
      <div class="icon-child flex6-child"></div>
      <div class="icon-child flex6-child"></div>
      <div class="icon-child flex6-child"></div>
      <div class="icon-child flex6-child"></div>
      <div class="icon-child flex6-child"></div>
      <div class="icon-child flex6-child"></div>
      <div class="icon-child flex6-child"></div>
      <div class="icon-child flex6-child"></div>
      <div class="icon-child flex6-child"></div>
    </div>
    <span class="post-jumper-title">3x3 (16:9)</span>
  </a>
  <a href="#graph-vertical-bars" class="post-jumper-item">
    <div class="icon-flex flex7">
      <div class="icon-child flex7-child flex7-child-1"></div>
      <div class="icon-child flex7-child flex7-child-2"></div>
      <div class="icon-child flex7-child flex7-child-3"></div>
      <div class="icon-child flex7-child flex7-child-4"></div>
      <div class="icon-child flex7-child flex7-child-5"></div>
    </div>
    <span class="post-jumper-title">Vertical bars</span>
  </a>
  <a href="#graph-horizontal-bars" class="post-jumper-item">
    <div class="icon-flex flex8">
      <div class="icon-child flex8-child flex8-child-1"></div>
      <div class="icon-child flex8-child flex8-child-2"></div>
      <div class="icon-child flex8-child flex8-child-3"></div>
      <div class="icon-child flex8-child flex8-child-4"></div>
      <div class="icon-child flex8-child flex8-child-5"></div>
    </div>
    <span class="post-jumper-title">Horizontal bars</span>
  </a>
  <a href="#vertical-stack-centered" class="post-jumper-item">
    <div class="icon-flex flex9">
      <div class="icon-child flex9-child"></div>
      <div class="icon-child flex9-child"></div>
      <div class="icon-child flex9-child"></div>
      <div class="icon-child flex9-child"></div>
      <div class="icon-child flex9-child"></div>
     </div>
    <span class="post-jumper-title">Vertical stack</span>
  </a>
  <a href="#masonry-or-mosaic" class="post-jumper-item">
    <div class="icon-flex flex10 icon-flex10">
      <div class="icon-child flex10-child icon-flex10-child flex10-child-1 icon-flex10-child-1"></div>
      <div class="icon-child flex10-child icon-flex10-child flex10-child-2 icon-flex10-child-2"></div>
      <div class="icon-child flex10-child icon-flex10-child flex10-child-3 icon-flex10-child-3"></div>
      <div class="icon-child flex10-child icon-flex10-child flex10-child-4 icon-flex10-child-4"></div>
      <div class="icon-child flex10-child icon-flex10-child flex10-child-5 icon-flex10-child-5"></div>
      <div class="icon-child flex10-child icon-flex10-child flex10-child-6 icon-flex10-child-6"></div>
      <div class="icon-child flex10-child icon-flex10-child flex10-child-7 icon-flex10-child-7"></div>
      <div class="icon-child flex10-child icon-flex10-child flex10-child-8 icon-flex10-child-8"></div>
      <div class="icon-child flex10-child icon-flex10-child flex10-child-9 icon-flex10-child-9"></div>
      <div class="icon-child flex10-child icon-flex10-child flex10-child-10 icon-flex10-child-10"></div>
    </div>
    <span class="post-jumper-title">Masonry</span>
  </a>
</div>

<p>Every example assumes that your HTML contains an element with a class of <code class="language-plaintext highlighter-rouge">container</code> which then contains several children that all have a class of <code class="language-plaintext highlighter-rouge">item</code> (the number of children varies per example):</p>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code></pre></div></div>

<style>
    .icon-flex {
    max-height: 56px;
    max-width: 70px;
    width: 100%;
    margin: 0 auto;
    }

    .icon-child {
    border-radius: 2px;
    background-color: #A2CBFA;
    border: 1px solid #4390E1;
    box-sizing: border-box;
    }

    .flex {
    background-color: #f7f7f7;
    border-radius: 3px;
    padding: 20px;
    }

    .child {
    border-radius: 3px;
    background-color: #A2CBFA;
    border: 1px solid #4390E1;
    box-sizing: border-box;
    box-shadow: 0 2px 2px rgba(0,90,250,0.05),
        0 4px 4px rgba(0,90,250,0.05),
        0 8px 8px rgba(0,90,250,0.05),
        0 16px 16px rgba(0,90,250,0.05);
    }
</style>

<h2 id="stretch-all-fixed-spacing">Stretch all, fixed spacing<a href="#stretch-all-fixed-spacing" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/common-flexbox-patterns/#stretch-all-fixed-spacing</span></a></h2>

<div class="post-content-wrapper">
  <div class="flex flex1">
      <div class="child flex1-child"></div>
      <div class="child flex1-child"></div>
      <div class="child flex1-child"></div>
      <div class="child flex1-child"></div>
      <div class="child flex1-child"></div>
  </div>
</div>

<style>
    .flex1 {
    display: flex;
    }

    .flex1-child {
    flex-grow: 1;
    height: 100px;
    }

    .flex1-child + .flex1-child {
    margin-left: 2%;
    }
</style>

<p>The most basic flexbox pattern: getting a few boxes to stretch and fill the full width of their parent element. All you need to do is to set <code class="language-plaintext highlighter-rouge">display: flex</code> on the container, and a <code class="language-plaintext highlighter-rouge">flex-grow</code> value above <code class="language-plaintext highlighter-rouge">0</code> on the children:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.item</span> <span class="p">{</span>
  <span class="nl">flex-grow</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">100px</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.item</span> <span class="o">+</span> <span class="nc">.item</span> <span class="p">{</span>
  <span class="nl">margin-left</span><span class="p">:</span> <span class="m">2%</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>We use a <code class="language-plaintext highlighter-rouge">+</code> selector to only add gaps between pairs of items (essentially just skipping the left margin for the first item in the list).</p>

<p>Increasing <code class="language-plaintext highlighter-rouge">flex-grow</code> will increase <em>the amount of space</em> that an element is allowed to stretch to compared to any other element. If we set <code class="language-plaintext highlighter-rouge">flex-grow</code>to <code class="language-plaintext highlighter-rouge">2</code> on the middle element here, we would basically divide up the available space into 6 chunks (1 chunk for each item plus 1 extra for the middle item, 1+1+2+1+1). The middle item gets two chunks (<code class="language-plaintext highlighter-rouge">flex-grow: 2</code>) worth of space, and all other elements get one chunk (<code class="language-plaintext highlighter-rouge">flex-grow: 1</code>).</p>

<div class="post-content-wrapper">
  <div class="flex flex1">
      <div class="child flex1-child"></div>
      <div class="child flex1-child"></div>
      <div class="child flex1-child" style="flex-grow: 2"></div>
      <div class="child flex1-child"></div>
      <div class="child flex1-child"></div>
  </div>
</div>

<h2 id="stretch-middle-fixed-spacing">Stretch middle, fixed spacing<a href="#stretch-middle-fixed-spacing" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/common-flexbox-patterns/#stretch-middle-fixed-spacing</span></a></h2>

<div class="post-content-wrapper">
  <div class="flex flex2">
    <div class="child flex2-child"></div>
    <div class="child flex2-child flex2-child-center"></div>
    <div class="child flex2-child"></div>
  </div>
</div>
<style>
  /* Example 2 */
    .flex2 {
    display: flex;
    }

    .flex2-child {
    height: 100px;
    width: 100px;
    }

    .flex2-child-center {
    flex-grow: 1;
    }

    .flex2-child + .flex2-child {
    margin-left: 2%;
    }
</style>

<p>A common app and web pattern is to create a top bar where we want to stretch only the middle element, but keep the right most and left most elements fixed. If we just want one element to stretch, we can set a fixed width (e.g. <code class="language-plaintext highlighter-rouge">100px</code>) on an element that should stay static, and <code class="language-plaintext highlighter-rouge">flex-grow: 1</code> on the element that should stretch:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.item</span> <span class="p">{</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">100px</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">100px</span><span class="p">;</span> <span class="c">/* A fixed width as the default */</span>
<span class="p">}</span>

<span class="nc">.item-center</span> <span class="p">{</span> 
  <span class="nl">flex-grow</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span> <span class="c">/* Set the middle element to grow and stretch */</span>
<span class="p">}</span>

<span class="nc">.item</span> <span class="o">+</span> <span class="nc">.item</span> <span class="p">{</span> 
  <span class="nl">margin-left</span><span class="p">:</span> <span class="m">2%</span><span class="p">;</span> 
<span class="p">}</span>
</code></pre></div></div>

<p>Even if the middle element here has a defined <code class="language-plaintext highlighter-rouge">width</code> of <code class="language-plaintext highlighter-rouge">100px</code>, <code class="language-plaintext highlighter-rouge">flex-grow</code> will make it stretch to take up all the available space.</p>

<h2 id="alternating-grid">Alternating grid<a href="#alternating-grid" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/common-flexbox-patterns/#alternating-grid</span></a></h2>

<p>A layout pattern that I use on my <a  class="red" href="/blog/">blog overview</a> is to create a grid with some variation: after every row of two equally sized items there’s one item that takes up an entire row:</p>

<div class="post-content-wrapper">
  <div class="flex flex3">
    <div class="child flex3-child"></div>
    <div class="child flex3-child"></div>
    <div class="child flex3-child"></div>
    <div class="child flex3-child"></div>
    <div class="child flex3-child"></div>
  </div>
</div>
<style type="text/css">
  /* Example 3 */
    .flex3 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    }

    .flex3-child {
    width: 49%;
    height: 100px;
    margin-bottom: 2%;
    }

    .flex3-child:nth-child(3n) {
    width: 100%;
    }
</style>

<p>To accomplish this we need to:</p>

<ol>
  <li>Set <code class="language-plaintext highlighter-rouge">flex-wrap: wrap</code> on the container (or all <code class="language-plaintext highlighter-rouge">items</code> would be rendered on a single row)</li>
  <li>Set <code class="language-plaintext highlighter-rouge">justify-content: space-between</code> on the container, to only create space between the elements (and not between the edge of the parent element and items)</li>
  <li>Set every item’s <code class="language-plaintext highlighter-rouge">width</code> to <code class="language-plaintext highlighter-rouge">49%</code> (or something similar that is equal to or less than <code class="language-plaintext highlighter-rouge">50%</code>)</li>
  <li>Set every third item’s <code class="language-plaintext highlighter-rouge">width</code> to <code class="language-plaintext highlighter-rouge">100%</code> so that it fills that entire row. We can target every third item in the list with the <code class="language-plaintext highlighter-rouge">nth-child()</code> selector.</li>
</ol>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
  <span class="nl">flex-wrap</span><span class="p">:</span> <span class="n">wrap</span><span class="p">;</span>
  <span class="nl">justify-content</span><span class="p">:</span> <span class="n">space-between</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.item</span> <span class="p">{</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">48%</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">100px</span><span class="p">;</span>
  <span class="nl">margin-bottom</span><span class="p">:</span> <span class="m">2%</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.item</span><span class="nd">:nth-child</span><span class="o">(</span><span class="nt">3n</span><span class="o">)</span> <span class="p">{</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>If you want the first row to be full-width and the two following items to share a row, note that you can’t write <code class="language-plaintext highlighter-rouge">.item:nth-child(1n) { width: 100% }</code>—that would target all items. You have to target the first item by selecting every third element, and then stepping back two items: <code class="language-plaintext highlighter-rouge">.item:nth-child(3n-2) { width: 100% }</code>.</p>

<h2 id="3x3-grid">3x3 grid<a href="#3x3-grid" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/common-flexbox-patterns/#3x3-grid</span></a></h2>

<div class="post-content-wrapper">
  <div class="flex flex4">
    <div class="child flex4-child"></div>
    <div class="child flex4-child"></div>
    <div class="child flex4-child"></div>
    <div class="child flex4-child"></div>
    <div class="child flex4-child"></div>
    <div class="child flex4-child"></div>
    <div class="child flex4-child"></div>
    <div class="child flex4-child"></div>
    <div class="child flex4-child"></div>
  </div>  
</div>
<style>
    .flex4 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    }

    .flex4-child {
    flex: 0 32%;
    height: 100px;
    margin-bottom: 2%;
    }
</style>

<p>We can create a 3x3 grid by setting <code class="language-plaintext highlighter-rouge">flex-grow</code> to <code class="language-plaintext highlighter-rouge">0</code> and <code class="language-plaintext highlighter-rouge">flex-basis</code> to the preferred width for all children (here done using the <code class="language-plaintext highlighter-rouge">flex</code> short-hand: <code class="language-plaintext highlighter-rouge">flex: 0 32%</code>). The margins between the items are the leftovers from every row, i.e. (100%-32x3)/2=2%. I’ve matched the margin (<code class="language-plaintext highlighter-rouge">margin-bottom: 2%</code>) to achieve even spacing between all elements:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
  <span class="nl">flex-wrap</span><span class="p">:</span> <span class="n">wrap</span><span class="p">;</span>
  <span class="nl">justify-content</span><span class="p">:</span> <span class="n">space-between</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.item</span> <span class="p">{</span>
  <span class="nl">flex</span><span class="p">:</span> <span class="m">0</span> <span class="m">32%</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">100px</span><span class="p">;</span>
  <span class="nl">margin-bottom</span><span class="p">:</span> <span class="m">2%</span><span class="p">;</span> <span class="c">/* (100-32*3)/2 */</span>
<span class="p">}</span>
</code></pre></div></div>
<p>You can change the <code class="language-plaintext highlighter-rouge">flex-basis</code> to increase or decrease the number of items on each row. <code class="language-plaintext highlighter-rouge">flex: 0 24%</code> would put 4 items on every row, <code class="language-plaintext highlighter-rouge">flex: 0 19%</code> would put 5 items on every row, and so on so forth.</p>

<h2 id="3x3-grid-constrained-proportions-11">3x3 grid, constrained proportions (1:1)<a href="#3x3-grid-constrained-proportions-11" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/common-flexbox-patterns/#3x3-grid-constrained-proportions-11</span></a></h2>
<div class="post-content-wrapper">
  <div class="flex flex5">
    <div class="child flex5-child"></div>
    <div class="child flex5-child"></div>
    <div class="child flex5-child"></div>
    <div class="child flex5-child"></div>
    <div class="child flex5-child"></div>
    <div class="child flex5-child"></div>
    <div class="child flex5-child"></div>
    <div class="child flex5-child"></div>
    <div class="child flex5-child"></div>
  </div>
</div>
<style>
    .flex5 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    }

    .flex5-child {
    width: 32%;
    padding-bottom: 32%;
    margin-bottom: 2%; /* (100-32*3)/2 */
    }
</style>

<p>We can create a grid full of items with constrained proportions by using a somewhat hacky <code class="language-plaintext highlighter-rouge">padding</code> CSS trick. If we use <code class="language-plaintext highlighter-rouge">%</code> when setting <code class="language-plaintext highlighter-rouge">padding</code> on an element the <code class="language-plaintext highlighter-rouge">padding</code> is set relative to that item’s parent’s <code class="language-plaintext highlighter-rouge">width</code>, <code class="language-plaintext highlighter-rouge">.container</code> in this case. We can use that effect to create a square by setting an item’s <code class="language-plaintext highlighter-rouge">width</code> and <code class="language-plaintext highlighter-rouge">padding-bottom</code> to the same value (and effectively setting the <code class="language-plaintext highlighter-rouge">height</code> of that element through <code class="language-plaintext highlighter-rouge">padding-bottom</code>):</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
  <span class="nl">flex-wrap</span><span class="p">:</span> <span class="n">wrap</span><span class="p">;</span>
  <span class="nl">justify-content</span><span class="p">:</span> <span class="n">space-between</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.item</span> <span class="p">{</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">32%</span><span class="p">;</span>
  <span class="nl">padding-bottom</span><span class="p">:</span> <span class="m">32%</span><span class="p">;</span> <span class="c">/* Same as width, sets height */</span>
  <span class="nl">margin-bottom</span><span class="p">:</span> <span class="m">2%</span><span class="p">;</span> <span class="c">/* (100-32*3)/2 */</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>Since we’ve created an element that is effectively made up of only padding, and there’s no place left for content, we need to set <code class="language-plaintext highlighter-rouge">position: relative</code> on the <code class="language-plaintext highlighter-rouge">.item</code> in this example and add a child element with <code class="language-plaintext highlighter-rouge">position: absolute</code>, and use that element to “reset” the canvas and add content.</p>

<h2 id="3x3-grid-constrained-proportions-169">3x3 grid, constrained proportions (16:9)<a href="#3x3-grid-constrained-proportions-169" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/common-flexbox-patterns/#3x3-grid-constrained-proportions-169</span></a></h2>

<div class="post-content-wrapper">
  <div class="flex flex6">
    <div class="child flex6-child"></div>
    <div class="child flex6-child"></div>
    <div class="child flex6-child"></div>
    <div class="child flex6-child"></div>
    <div class="child flex6-child"></div>
    <div class="child flex6-child"></div>
    <div class="child flex6-child"></div>
    <div class="child flex6-child"></div>
    <div class="child flex6-child"></div>
  </div>
</div>
<style>
    .flex6 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    }

    .flex6-child {
    width: 32%;
    padding-bottom: 18%; /* Proportions between 32 and 18 is 16:9 */
    margin-bottom: 2%; /* (100-32*3)/2 */
    }
</style>

<p>To change the proportions of the items all you need to do is change the proportions of the <code class="language-plaintext highlighter-rouge">width</code> and <code class="language-plaintext highlighter-rouge">padding-bottom</code> on the <code class="language-plaintext highlighter-rouge">.item</code>. Changing the <code class="language-plaintext highlighter-rouge">width</code> would affect the number of items on each row, so as to not affect the grid structure we can for example change <code class="language-plaintext highlighter-rouge">padding-bottom</code> to <code class="language-plaintext highlighter-rouge">18%</code> to create 16:9 (equivalent to 32:18) rectangles.</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
  <span class="nl">flex-wrap</span><span class="p">:</span> <span class="n">wrap</span><span class="p">;</span>
  <span class="nl">justify-content</span><span class="p">:</span> <span class="n">space-between</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.item</span> <span class="p">{</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">32%</span><span class="p">;</span>
  <span class="nl">padding-bottom</span><span class="p">:</span> <span class="m">18%</span><span class="p">;</span> <span class="c">/* 32:18, i.e. 16:9 */</span>
  <span class="nl">margin-bottom</span><span class="p">:</span> <span class="m">2%</span><span class="p">;</span> <span class="c">/* (100-32*3)/2 */</span>
<span class="p">}</span>
</code></pre></div></div>

<h2 id="graph-vertical-bars">Graph: vertical bars<a href="#graph-vertical-bars" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/common-flexbox-patterns/#graph-vertical-bars</span></a></h2>
<div class="post-content-wrapper">
  <div class="flex flex7">
    <div class="child flex7-child flex7-child-1"></div>
    <div class="child flex7-child flex7-child-2"></div>
    <div class="child flex7-child flex7-child-3"></div>
    <div class="child flex7-child flex7-child-4"></div>
    <div class="child flex7-child flex7-child-5"></div>
  </div>
</div>
<style>
    .flex7 {
    display: flex;
    height: 300px;
    justify-content: space-between;
    align-items: flex-end;
    }

    .flex7-child {
    width: 14%;
    }

    .flex7-child-1 { height: 40%; }
    .flex7-child-2 { height: 50%; }
    .flex7-child-3 { height: 60%; }
    .flex7-child-4 { height: 20%; }
    .flex7-child-5 { height: 30%; }
</style>

<p>If you want to use flexbox to create a simple graph visualization, all you need to do is to set <code class="language-plaintext highlighter-rouge">align-items</code> of the container to <code class="language-plaintext highlighter-rouge">flex-end</code> and define a <code class="language-plaintext highlighter-rouge">height</code> for each bar. <code class="language-plaintext highlighter-rouge">flex-end</code> will make sure that the bars are anchored to the bottom of the graph.</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">300px</span><span class="p">;</span>
  <span class="nl">justify-content</span><span class="p">:</span> <span class="n">space-between</span><span class="p">;</span>
  <span class="nl">align-items</span><span class="p">:</span> <span class="n">flex-end</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.item</span> <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="m">14%</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item-1</span> <span class="p">{</span> <span class="nl">height</span><span class="p">:</span> <span class="m">40%</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item-2</span> <span class="p">{</span> <span class="nl">height</span><span class="p">:</span> <span class="m">50%</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item-3</span> <span class="p">{</span> <span class="nl">height</span><span class="p">:</span> <span class="m">60%</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item-4</span> <span class="p">{</span> <span class="nl">height</span><span class="p">:</span> <span class="m">20%</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item-5</span> <span class="p">{</span> <span class="nl">height</span><span class="p">:</span> <span class="m">30%</span><span class="p">;</span> <span class="p">}</span>
</code></pre></div></div>

<h2 id="graph-horizontal-bars">Graph: horizontal bars<a href="#graph-horizontal-bars" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/common-flexbox-patterns/#graph-horizontal-bars</span></a></h2>

<div class="post-content-wrapper">
  <div class="flex flex8">
    <div class="child flex8-child flex8-child-1"></div>
    <div class="child flex8-child flex8-child-2"></div>
    <div class="child flex8-child flex8-child-3"></div>
    <div class="child flex8-child flex8-child-4"></div>
    <div class="child flex8-child flex8-child-5"></div>
  </div>
</div>
<style>
    .flex8 {
    display: flex;
    height: 300px;
    justify-content: space-between;
    flex-direction: column;
    }

    .flex8-child {
    height: 14%;
    }

    .flex8-child-1 { width: 40%; }
    .flex8-child-2 { width: 50%; }
    .flex8-child-3 { width: 60%; }
    .flex8-child-4 { width: 20%; }
    .flex8-child-5 { width: 30%; }
</style>

<p>Using the same technique as for vertical bars, we can simply add <code class="language-plaintext highlighter-rouge">flex-direction</code> on the <code class="language-plaintext highlighter-rouge">container</code> with a value of <code class="language-plaintext highlighter-rouge">column</code> to create a set of horizontal bars. <code class="language-plaintext highlighter-rouge">flex-direction</code> can have a value of <code class="language-plaintext highlighter-rouge">row</code> (default) or <code class="language-plaintext highlighter-rouge">column</code>, where a <code class="language-plaintext highlighter-rouge">row</code> runs horizontally (→) and a <code class="language-plaintext highlighter-rouge">column</code> runs vertically (↓). You can also reverse the direction of both by using <code class="language-plaintext highlighter-rouge">row-reverse</code> (←) and <code class="language-plaintext highlighter-rouge">column-reverse</code> (↑) respectively.</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">300px</span><span class="p">;</span>
  <span class="nl">justify-content</span><span class="p">:</span> <span class="n">space-between</span><span class="p">;</span>
  <span class="nl">flex-direction</span><span class="p">:</span> <span class="n">column</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.item</span> <span class="p">{</span> <span class="nl">height</span><span class="p">:</span> <span class="m">14%</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item-1</span> <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="m">40%</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item-2</span> <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="m">50%</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item-3</span> <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="m">60%</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item-4</span> <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="m">20%</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item-5</span> <span class="p">{</span> <span class="nl">width</span><span class="p">:</span> <span class="m">30%</span><span class="p">;</span> <span class="p">}</span>
</code></pre></div></div>

<h2 id="vertical-stack-centered">Vertical stack (centered)<a href="#vertical-stack-centered" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/common-flexbox-patterns/#vertical-stack-centered</span></a></h2>

<div class="post-content-wrapper">
  <div class="flex flex9">
    <div class="child flex9-child"></div>
    <div class="child flex9-child"></div>
    <div class="child flex9-child"></div>
    <div class="child flex9-child"></div>
    <div class="child flex9-child"></div>
  </div>
</div>
<style>
    .flex9 {
    display: flex;
    flex-direction: column;
    align-items: center;
    }

    .flex9-child {
    width: 40%;
    height: 40px;
    margin-bottom: 2%;
    }
</style>

<p>To create a vertical stack and make the items run from top to bottom all we need to do is to change the <code class="language-plaintext highlighter-rouge">flex-direction</code> from the default value of <code class="language-plaintext highlighter-rouge">row</code> to <code class="language-plaintext highlighter-rouge">column</code>:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
  <span class="nl">flex-direction</span><span class="p">:</span> <span class="n">column</span><span class="p">;</span>
  <span class="nl">align-items</span><span class="p">:</span> <span class="nb">center</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.item</span> <span class="p">{</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">40px</span><span class="p">;</span>
  <span class="nl">margin-bottom</span><span class="p">:</span> <span class="m">10px</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<h2 id="masonry-or-mosaic">Masonry (or mosaic)<a href="#masonry-or-mosaic" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/common-flexbox-patterns/#masonry-or-mosaic</span></a></h2>

<div class="post-content-wrapper">
  <div class="flex flex10">
    <div class="child flex10-child flex10-child-1">1</div>
    <div class="child flex10-child flex10-child-2">2</div>
    <div class="child flex10-child flex10-child-3">3</div>
    <div class="child flex10-child flex10-child-4">4</div>
    <div class="child flex10-child flex10-child-5">5</div>
    <div class="child flex10-child flex10-child-6">6</div>
    <div class="child flex10-child flex10-child-7">7</div>
    <div class="child flex10-child flex10-child-8">8</div>
    <div class="child flex10-child flex10-child-9">9</div>
    <div class="child flex10-child flex10-child-10">10</div>
  </div>
</div>
<style>
    .flex10 {
    display: flex;
    flex-flow: column wrap;
    align-content: space-between;
    height: 580px;
    }

    .flex10::before,
    .flex10::after {
    content: "";
    flex-basis: 100%;
    width: 0;
    order: 2;
    border: 1px solid #ddd;
    }

    .icon-flex10::before,
    .icon-flex10::after {
    border: 0;
    }

    .flex10-child {
    width: 32%;
    margin-bottom: 2%; /* (100-32*3)/2 */
    padding: 10px;
    box-sizing: border-box;
    text-align: center;
    color: white;
    }

    .flex10-child-1 { height: 200px; }
    .flex10-child-2 { height: 250px; }
    .flex10-child-3 { height: 225px; }
    .flex10-child-4 { height: 100px; }
    .flex10-child-5 { height: 100px; }
    .flex10-child-6 { height: 125px; }
    .flex10-child-7 { height: 100px; }
    .flex10-child-8 { height: 75px; }
    .flex10-child-9 { height: 100px; }
    .flex10-child-10 { height: 100px; }

    .flex10-child:nth-child(3n+1) { order: 1; }
    .flex10-child:nth-child(3n+2) { order: 2; }
    .flex10-child:nth-child(3n) { order: 3; }

    /* For icon at the top */
    .icon-flex10-child {
    padding: 0;
    border-radius: 1px;
    }
    .icon-flex10-child-1 { height: 10px; }
    .icon-flex10-child-2 { height: 22px; }
    .icon-flex10-child-3 { height: 14px; }
    .icon-flex10-child-4 { height: 15px; }
    .icon-flex10-child-5 { height: 16px; }
    .icon-flex10-child-6 { height: 17px; }
    .icon-flex10-child-7 { height: 12px; }
    .icon-flex10-child-8 { height: 12px; }
    .icon-flex10-child-9 { height: 12px; }
    .icon-flex10-child-10 { height: 10px; }
</style>

<p>You’ve probably seen masonry (or mosaic) layouts all over the internet, but it’s likely that they were all powered by <a class="red" href="https://masonry.desandro.com">Masonry</a> or a similar JavaScript library. Flexbox might seem like a great candidate to finally create this layout with CSS only, and it’s certainly possible, but it’s surprisingly hacky.</p>

<p>One of the main challenges of creating a masonry layout with flexbox is that to make an item affect the positioning of an item above and below it we need to change the <code class="language-plaintext highlighter-rouge">flex-direction</code> of the container to <code class="language-plaintext highlighter-rouge">column</code>, which makes items run from top to bottom. This creates a layout that looks great, and similar to the masonry effect, but it could be confusing for users; it creates an unexpected ordering of elements. If you read from left to right the elements would seem to be shuffled and appear in a seemingly random order, for example 1, 3, 6, 2, 4, 7, 8, etc.</p>

<p>Luckily, we can use the <code class="language-plaintext highlighter-rouge">order</code> property to change in which order elements are rendered. We can combine that property with some clever use of the <code class="language-plaintext highlighter-rouge">nth-child()</code> selector to order items dynamically depending on their original order. If we want to create a masonry layout with three columns we can divide all the items into three “groups”, like so:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c">/* Re-order items into rows */</span>
<span class="nc">.item</span><span class="nd">:nth-child</span><span class="o">(</span><span class="nt">3n</span><span class="o">+</span><span class="nt">1</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item</span><span class="nd">:nth-child</span><span class="o">(</span><span class="nt">3n</span><span class="o">+</span><span class="nt">2</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">2</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item</span><span class="nd">:nth-child</span><span class="o">(</span><span class="nt">3n</span><span class="o">)</span>   <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">3</span><span class="p">;</span> <span class="p">}</span>

<span class="c">/* Force new columns */</span>
<span class="nc">.container</span><span class="nd">::before</span><span class="o">,</span>
<span class="nc">.container</span><span class="nd">::after</span> <span class="p">{</span>
  <span class="nl">content</span><span class="p">:</span> <span class="s1">""</span><span class="p">;</span>
  <span class="nl">flex-basis</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">order</span><span class="p">:</span> <span class="m">2</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>I’ve written <a class="red" href="/blog/masonry-with-css/">another post that explains in detail how this works and why</a>. This will set the <code class="language-plaintext highlighter-rouge">order</code> to <code class="language-plaintext highlighter-rouge">1</code> for the 1st element, 4th element, 7th element, etc. Elements with the same <code class="language-plaintext highlighter-rouge">order</code> value will be ordered on ascending order according to the source code order, or which value was <em>set</em> first, so in this example we’re producing three sets ordered like so: <code class="language-plaintext highlighter-rouge">1, 4, 7, 10</code> (3n+1) with <code class="language-plaintext highlighter-rouge">order: 1</code>, <code class="language-plaintext highlighter-rouge">2, 5, 8</code> (3n+2) with <code class="language-plaintext highlighter-rouge">order: 2</code>, and <code class="language-plaintext highlighter-rouge">3, 6, 9</code> (3n) with <code class="language-plaintext highlighter-rouge">order: 3</code>. These three groups represent our three columns. Put together the order becomes <code class="language-plaintext highlighter-rouge">1, 4, 7, 10, 2, 5, 8, 3, 6, 9</code>.</p>

<p>If we make sure to render each of those groups as one column (no more, no less), it’ll create the illusion that the items have returned to their original order when you read from left to right. If we visually parse the grid as rows, the first row will contain the first element from every group (<code class="language-plaintext highlighter-rouge">1, 2, 3</code>), the second row will contain the second element from every group (<code class="language-plaintext highlighter-rouge">4, 5, 6</code>), and so on so forth. We then insert elements between the columns that take up 100% of the parent’s height, <a class="red" href="/blog/flexbox-break-to-new-row/">which force the columns to line break</a> and not accidentally merge with adjacent columns. Here’s the full CSS snippet:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
  <span class="nl">flex-flow</span><span class="p">:</span> <span class="n">column</span> <span class="n">wrap</span><span class="p">;</span>
  <span class="nl">align-content</span><span class="p">:</span> <span class="n">space-between</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">580px</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.item</span> <span class="p">{</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">32%</span><span class="p">;</span>
  <span class="nl">margin-bottom</span><span class="p">:</span> <span class="m">2%</span><span class="p">;</span> <span class="c">/* (100-32*3)/2 */</span>
<span class="p">}</span>

<span class="c">/* Re-order items into rows */</span>
<span class="nc">.item</span><span class="nd">:nth-child</span><span class="o">(</span><span class="nt">3n</span><span class="o">+</span><span class="nt">1</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item</span><span class="nd">:nth-child</span><span class="o">(</span><span class="nt">3n</span><span class="o">+</span><span class="nt">2</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">2</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item</span><span class="nd">:nth-child</span><span class="o">(</span><span class="nt">3n</span><span class="o">)</span>   <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">3</span><span class="p">;</span> <span class="p">}</span>

<span class="c">/* Force new columns */</span>
<span class="nc">.container</span><span class="nd">::before</span><span class="o">,</span>
<span class="nc">.container</span><span class="nd">::after</span> <span class="p">{</span>
  <span class="nl">content</span><span class="p">:</span> <span class="s1">""</span><span class="p">;</span>
  <span class="nl">flex-basis</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">order</span><span class="p">:</span> <span class="m">2</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>Visually this achieves something that is very close to the masonry effect. How is the tab order affected? Luckily, not at all. <code class="language-plaintext highlighter-rouge">order</code> only changes the visual representation of objects, not the tab order, so tabbing through the grid will work as intended.</p>

<p>If you want to make a masonry layout with more than three columns (or want a better understanding of how this works) I recommend reading <a class="red" href="/blog/masonry-with-css/">the dedicated post on how to create masonry layouts with CSS</a>.</p>

	</div>
</div>


            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #314964">
                        <div class="post-categories-links">
                
                            <a class="post-categories-link" href="/blog/css/">css</a>
                                <span class="post-categories-link-divider">/</span>

                            <a class="post-categories-link" href="/blog/tutorials/">tutorial</a>
                
                        </div>
                        <span class="section-header section-header-small post-categories-date">15/04/2019</span>
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