@extends('layouts')
@section('title', 'How to animate box-shadow with silky smooth performance | Tobias Ahlin')
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
	<div class="single-post-head" style="background-color: #8e5ea2">
			<h1 class="post-header">How to animate box-shadow with silky smooth performance</h1>
    </div>
	
	<div class="article article-single">
		<div class="blog-banner">
  <div class="blog-banner-content" style="height: 90px;">
    <div class="box-shadow-demo"></div>
  </div>

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

</div>

<!--more-->

<p>How do you animate the <code class="language-plaintext highlighter-rouge">box-shadow</code> property in CSS without causing re-paints on every frame, and heavily impacting the performance of your page? Short answer: you don’t. Animating a change of <code class="language-plaintext highlighter-rouge">box-shadow</code> <em>will</em> hurt performance.</p>

<p>There’s an easy way of mimicking the same effect, however, with minimal re-paints, that should let your animations run at a solid 60 FPS: animate the <code class="language-plaintext highlighter-rouge">opacity</code> of a pseudo-element.</p>

<h2 id="demo">Demo<a href="#demo" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/how-to-animate-box-shadow/#demo</span></a></h2>

<p><a href="/demo/animate-box-shadow/"><img src="/img/demo.gif" alt="Recording of box-shadow demo in action"></a></p>

<p><a class="red" href="/demo/animate-box-shadow/">Have a look at the demo</a> and compare the two different techniques we’ll be exploring. If the two examples look the same to you, that’s the point. The only difference is how we apply and animate the shadow. On the left we’re animating <code class="language-plaintext highlighter-rouge">box-shadow</code> on <code class="language-plaintext highlighter-rouge">hover</code>, and on the right we’re adding a pseudo-element with <code class="language-plaintext highlighter-rouge">:after</code>, applying the shadow to that, and animating the <code class="language-plaintext highlighter-rouge">opacity</code> of that element.</p>

<p>If you bring up your developer tools and hover one of these items, you should see something similar to this (green bars are paints; less is better):</p>

<p><a href="/demo/animate-box-shadow/"><img src="/img/animation-performance.png" alt="Animation performance when hovering the different boxes"></a></p>

<p>There are clearly more re-paints when hovering the cards on the left side (animating <code class="language-plaintext highlighter-rouge">box-shadow</code>), compared to hovering the cards on the right side (which animate the <code class="language-plaintext highlighter-rouge">opacity</code> of their pseudo-element).</p>

<p>Why are we seeing this effect? There are <a class="red" href="https://csstriggers.com">very few CSS properties</a> that can be animated without constantly triggering repaints for every frame, namely <code class="language-plaintext highlighter-rouge">opacity</code> and <code class="language-plaintext highlighter-rouge">transform</code>. We minimize the amount of repaints (and work that your browser has to do) by sticking to only changing these two properties during the animation.</p>

<p>This is the <strong>critical difference</strong> between the two techniques, stripping out all of the other layout styles:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c">/* The slow way */</span>
<span class="nc">.make-it-slow</span> <span class="p">{</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.15</span><span class="p">);</span>
  <span class="nl">transition</span><span class="p">:</span> <span class="n">box-shadow</span> <span class="m">0.3s</span> <span class="n">ease-in-out</span><span class="p">;</span>
<span class="p">}</span>

<span class="c">/* Transition to a bigger shadow on hover */</span>
<span class="nc">.make-it-slow</span><span class="nd">:hover</span> <span class="p">{</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">5px</span> <span class="m">15px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.3</span><span class="p">);</span>
<span class="p">}</span>

<span class="c">/* The fast way */</span>
<span class="nc">.make-it-fast</span> <span class="p">{</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.15</span><span class="p">);</span>
<span class="p">}</span>

<span class="c">/* Pre-render the bigger shadow, but hide it */</span>
<span class="nc">.make-it-fast</span><span class="nd">::after</span> <span class="p">{</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">5px</span> <span class="m">15px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.3</span><span class="p">);</span>
  <span class="nl">opacity</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">transition</span><span class="p">:</span> <span class="n">opacity</span> <span class="m">0.3s</span> <span class="n">ease-in-out</span><span class="p">;</span>
<span class="p">}</span>

<span class="c">/* Transition to showing the bigger shadow on hover */</span>
<span class="nc">.make-it-fast</span><span class="nd">:hover::after</span> <span class="p">{</span>
  <span class="nl">opacity</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>In the example that performs better we have two layers: one for the box, and one for the shadow, and only animate the <code class="language-plaintext highlighter-rouge">opacity</code> property of the shadow layer.</p>

<h2 id="breaking-it-down">Breaking it down<a href="#breaking-it-down" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/how-to-animate-box-shadow/#breaking-it-down</span></a></h2>

<p>With the fundamentals in place, let’s look at how to create <a class="red" href="/demo/animate-box-shadow/">the 3D card effect showcased in the demo</a>. The first step is to move the shadow to a pseudo-element, like we did above. Let’s also add all of the layout code to create the card:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c">/* All HTML you need is &lt;div class="box"&gt;&lt;/div&gt; */</span>

<span class="c">/* Create a simple white box, and add the shadow for the initial state */</span>
<span class="nc">.box</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">inline-block</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">100px</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">100px</span><span class="p">;</span>
  <span class="nl">border-radius</span><span class="p">:</span> <span class="m">5px</span><span class="p">;</span>
  <span class="nl">background-color</span><span class="p">:</span> <span class="m">#fff</span><span class="p">;</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.15</span><span class="p">);</span>
  <span class="nl">transition</span><span class="p">:</span> <span class="n">all</span> <span class="m">0.3s</span> <span class="n">ease-in-out</span><span class="p">;</span>
<span class="p">}</span>

<span class="c">/* Create the hidden pseudo-element */</span>
<span class="c">/* include the shadow for the end state */</span>
<span class="nc">.box</span><span class="nd">::after</span> <span class="p">{</span>
  <span class="nl">content</span><span class="p">:</span> <span class="s2">''</span><span class="p">;</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">absolute</span><span class="p">;</span>
  <span class="nl">z-index</span><span class="p">:</span> <span class="m">-1</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">opacity</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">border-radius</span><span class="p">:</span> <span class="m">5px</span><span class="p">;</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">5px</span> <span class="m">15px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.3</span><span class="p">);</span>
  <span class="nl">transition</span><span class="p">:</span> <span class="n">opacity</span> <span class="m">0.3s</span> <span class="n">ease-in-out</span><span class="p">;</span>
<span class="p">}</span>

</code></pre></div></div>

<p>Note that we’re adding a <code class="language-plaintext highlighter-rouge">transition</code> to both the <code class="language-plaintext highlighter-rouge">.box</code>, and <code class="language-plaintext highlighter-rouge">.box::after</code>, since we’re going to animate both of these elements: <code class="language-plaintext highlighter-rouge">transform</code> for <code class="language-plaintext highlighter-rouge">.box</code>, and <code class="language-plaintext highlighter-rouge">opacity</code> for <code class="language-plaintext highlighter-rouge">.box::after</code>.</p>

<p>These styles give us a white box with a subtle <code class="language-plaintext highlighter-rouge">box-shadow</code>. The stronger shadow from <code class="language-plaintext highlighter-rouge">.box::after</code> is completely hidden at this point, and you can’t interact with the box:</p>

<div class="post-demo-content">
  <div class="box"></div>

  <style>

    .box {
        position: relative;
        display: inline-block;
        width: 100px;
        height: 100px;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        transition: all 0.3s ease-in-out;
    }
  </style>
</div>

<p>To create the same effect as in the <a class="red" href="/demo/animate-box-shadow/">demo</a>, now all we need to do is to scale up the <code class="language-plaintext highlighter-rouge">.box</code> on hover, and fade in the pseudo-element and its shadow:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c">/* Scale up the box */</span>
<span class="nc">.box</span><span class="nd">:hover</span> <span class="p">{</span>
  <span class="nl">transform</span><span class="p">:</span> <span class="n">scale</span><span class="p">(</span><span class="m">1.2</span><span class="p">,</span> <span class="m">1.2</span><span class="p">);</span>
<span class="p">}</span>

<span class="c">/* Fade in the pseudo-element with the bigger shadow */</span>
<span class="nc">.box</span><span class="nd">:hover::after</span> <span class="p">{</span>
  <span class="nl">opacity</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>That’s it! Hover the box to preview the effect:</p>

<div class="post-demo-content">
  <div class="box2"></div>

  <style>

    .box2 {
        position: relative;
        display: inline-block;
        width: 100px;
        height: 100px;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
    }

    /* Create the hidden pseudo-element */
    /* include the shadow for the end state */
    .box2::after {
        content: '';
        position: absolute;
        z-index: -1;
        width: 100%;
        height: 100%;
        border-radius: 5px;
        left: 0;
        top: 0;
        opacity: 0;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1)
    }

    .box2:hover {
        -webkit-transform: scale(1.25, 1.25);
        transform: scale(1.25, 1.25);
    }

    .box2:hover::after {
        opacity: 1;
    }
  </style>
</div>

<p>To summarize, here’s all the CSS, with all vendor prefixes, and some custom easing for additional ✨👌:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.box</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">inline-block</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">100px</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">100px</span><span class="p">;</span>
  <span class="nl">background-color</span><span class="p">:</span> <span class="m">#fff</span><span class="p">;</span>
  <span class="nl">border-radius</span><span class="p">:</span> <span class="m">5px</span><span class="p">;</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span> <span class="m">0</span><span class="p">,</span> <span class="m">0</span><span class="p">,</span> <span class="m">0.1</span><span class="p">);</span>
  <span class="nl">border-radius</span><span class="p">:</span> <span class="m">5px</span><span class="p">;</span>
  <span class="nl">-webkit-transition</span><span class="p">:</span> <span class="n">all</span> <span class="m">0.6s</span> <span class="n">cubic-bezier</span><span class="p">(</span><span class="m">0.165</span><span class="p">,</span> <span class="m">0.84</span><span class="p">,</span> <span class="m">0.44</span><span class="p">,</span> <span class="m">1</span><span class="p">);</span>
  <span class="nl">transition</span><span class="p">:</span> <span class="n">all</span> <span class="m">0.6s</span> <span class="n">cubic-bezier</span><span class="p">(</span><span class="m">0.165</span><span class="p">,</span> <span class="m">0.84</span><span class="p">,</span> <span class="m">0.44</span><span class="p">,</span> <span class="m">1</span><span class="p">);</span>
<span class="p">}</span>

<span class="nc">.box</span><span class="nd">::after</span> <span class="p">{</span>
  <span class="nl">content</span><span class="p">:</span> <span class="s1">""</span><span class="p">;</span>
  <span class="nl">border-radius</span><span class="p">:</span> <span class="m">5px</span><span class="p">;</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">absolute</span><span class="p">;</span>
  <span class="nl">z-index</span><span class="p">:</span> <span class="m">-1</span><span class="p">;</span>
  <span class="nl">top</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">left</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">5px</span> <span class="m">15px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span> <span class="m">0</span><span class="p">,</span> <span class="m">0</span><span class="p">,</span> <span class="m">0.3</span><span class="p">);</span>
  <span class="nl">opacity</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">-webkit-transition</span><span class="p">:</span> <span class="n">all</span> <span class="m">0.6s</span> <span class="n">cubic-bezier</span><span class="p">(</span><span class="m">0.165</span><span class="p">,</span> <span class="m">0.84</span><span class="p">,</span> <span class="m">0.44</span><span class="p">,</span> <span class="m">1</span><span class="p">);</span>
  <span class="nl">transition</span><span class="p">:</span> <span class="n">all</span> <span class="m">0.6s</span> <span class="n">cubic-bezier</span><span class="p">(</span><span class="m">0.165</span><span class="p">,</span> <span class="m">0.84</span><span class="p">,</span> <span class="m">0.44</span><span class="p">,</span> <span class="m">1</span><span class="p">);</span>
<span class="p">}</span>

<span class="nc">.box</span><span class="nd">:hover</span> <span class="p">{</span>
  <span class="nl">-webkit-transform</span><span class="p">:</span> <span class="n">scale</span><span class="p">(</span><span class="m">1.25</span><span class="p">,</span> <span class="m">1.25</span><span class="p">);</span>
  <span class="nl">transform</span><span class="p">:</span> <span class="n">scale</span><span class="p">(</span><span class="m">1.25</span><span class="p">,</span> <span class="m">1.25</span><span class="p">);</span>
<span class="p">}</span>

<span class="nc">.box</span><span class="nd">:hover::after</span> <span class="p">{</span>
    <span class="nl">opacity</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span>
<span class="p">}</span>

</code></pre></div></div>

<p>That’s certainly a lot of CSS to achieve the same effect as simply animating <code class="language-plaintext highlighter-rouge">box-shadow</code>, just with improved performance. Why bother?</p>

<p>Even if your desktop likely handles animating <code class="language-plaintext highlighter-rouge">box-shadow</code> without any issues, your phone may not, and even your desktop may start to stutter when animating a more complex layout.</p>

<p>Keep transitions and animations to only <code class="language-plaintext highlighter-rouge">transform</code> and <code class="language-plaintext highlighter-rouge">opacity</code>, and you’re certain to achieve the best possible performance, and with that, the best possible user experience.</p>

<h2 id="further-reading">Further reading<a href="#further-reading" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/how-to-animate-box-shadow/#further-reading</span></a></h2>

<ul>
  <li>Learn how to <a class="red" href="/blog/layered-smooth-box-shadows/">use layered box-shadows to create sharper and smoother shadows</a></li>
</ul>

	</div>
</div>

            
            
            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #8E5EA2">
                        <div class="post-categories-links">
                
                             <a class="post-categories-link" href="/blog/css/">css</a>
                                    <span class="post-categories-link-divider">/</span>
                            
                            <a class="post-categories-link" href="/blog/motion/">animation</a>
                                    <span class="post-categories-link-divider">/</span>   

                            <a class="post-categories-link" href="/blog/tutorials/">tutorial</a>
                
                        </div>
                        <span class="section-header section-header-small post-categories-date">18/11/2015</span>
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