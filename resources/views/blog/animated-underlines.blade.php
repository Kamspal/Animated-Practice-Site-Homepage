@extends('layouts')
@section('title', 'Animating Link Underlines | Tobias Ahlin')
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
	<div class="single-post-head" style="background-color: #2b2f3c">
			<h1 class="post-header">Animating Link Underlines</h1>
    </div>
	
	<div class="article article-single">
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

<div class="blog-banner">
  <div class="blog-banner-content" style="height: 70px; pointer-events: auto;">
    <div class="underlined-example-wrapper">
      <span class="underlined-example">Hover this text</span>
    </div>
  </div>
</div>

<!--more-->

<p>I recently added a simple visual effect to this blog that I quickly fell in love with: when you hover blog headers, the link’s underline is revealed by animating it out from the center. You can try it in the banner above. Creating this effect is surprisingly easy, doesn’t require any additional DOM elements to be added through HTML, and falls back nicely for browsers that don’t support CSS animations (it will just show up as a regular underline).</p>

<p>The first thing we need to do is turn off <code class="language-plaintext highlighter-rouge">text-decoration</code>, and set the link’s <code class="language-plaintext highlighter-rouge">position</code> to <code class="language-plaintext highlighter-rouge">relative</code>. For simplicitiy’s sake, we’ll also make sure the link doesn’t change color on hover. Here we’re applying the effect to all link elements inside <code class="language-plaintext highlighter-rouge">h2</code>s:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">h2</span> <span class="o">&gt;</span> <span class="nt">a</span> <span class="p">{</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="nl">color</span><span class="p">:</span> <span class="m">#000</span><span class="p">;</span>
  <span class="nl">text-decoration</span><span class="p">:</span> <span class="nb">none</span><span class="p">;</span>
<span class="p">}</span>

<span class="nt">h2</span> <span class="o">&gt;</span> <span class="nt">a</span><span class="nd">:hover</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="m">#000</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>Next, we want to add the border, and hide it through a transformation. We do this by inserting it with <code class="language-plaintext highlighter-rouge">:before</code>, and setting its X scale to <code class="language-plaintext highlighter-rouge">0</code>. As a fallback, we hide it with <code class="language-plaintext highlighter-rouge">visibility: hidden</code> for browsers that don’t support CSS animations.</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">h2</span> <span class="o">&gt;</span> <span class="nt">a</span><span class="nd">::before</span> <span class="p">{</span>
  <span class="nl">content</span><span class="p">:</span> <span class="s1">""</span><span class="p">;</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">absolute</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">2px</span><span class="p">;</span>
  <span class="nl">bottom</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">left</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">background-color</span><span class="p">:</span> <span class="m">#000</span><span class="p">;</span>
  <span class="nl">visibility</span><span class="p">:</span> <span class="nb">hidden</span><span class="p">;</span>
  <span class="nl">transform</span><span class="p">:</span> <span class="n">scaleX</span><span class="p">(</span><span class="m">0</span><span class="p">);</span>
  <span class="nl">transition</span><span class="p">:</span> <span class="n">all</span> <span class="m">0.3s</span> <span class="n">ease-in-out</span> <span class="m">0s</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>At the very bottom we tell the element to animate all changes applied to it, with a duration of <code class="language-plaintext highlighter-rouge">0.3</code> seconds. For the animation to appear, now we just need to make the element visible again on <code class="language-plaintext highlighter-rouge">hover</code>, and set its X scale back to <code class="language-plaintext highlighter-rouge">1</code>:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">h2</span> <span class="o">&gt;</span> <span class="nt">a</span><span class="nd">:hover::before</span> <span class="p">{</span>
  <span class="nl">visibility</span><span class="p">:</span> <span class="nb">visible</span><span class="p">;</span>
  <span class="nl">transform</span><span class="p">:</span> <span class="n">scaleX</span><span class="p">(</span><span class="m">1</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div></div>

<p>And that’s it! Firefox has had support for <code class="language-plaintext highlighter-rouge">animation</code> and <code class="language-plaintext highlighter-rouge">transform</code> without the <code class="language-plaintext highlighter-rouge">moz</code> prefix <a class="red" href="http://caniuse.com/css-animation">since version 16.0</a> (for over a year), so I’ve left out the prefix in the code. If you want to be safe, you should add <code class="language-plaintext highlighter-rouge">-o</code> and <code class="language-plaintext highlighter-rouge">-moz</code> to all animations and transforms.</p>

	</div>
</div>
            

            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #2B2F3C">
                        <div class="post-categories-links">
                
                             <a class="post-categories-link" href="/blog/css/">css</a>
                                    <span class="post-categories-link-divider">/</span>
                            
                            <a class="post-categories-link" href="/blog/motion/">animation</a>
                                    <span class="post-categories-link-divider">/</span>   

                            <a class="post-categories-link" href="/blog/design/">design</a>
                
                        </div>
                        <span class="section-header section-header-small post-categories-date">04/01/2014</span>
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