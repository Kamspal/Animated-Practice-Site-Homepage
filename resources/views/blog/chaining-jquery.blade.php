@extends('layouts')
@section('title', 'Chaining in jQuery | Tobias Ahlin')
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
	<div class="single-post-head" style="background-color: #1a1a23">
            <h1 class="post-header">Chaining in jQuery</h1>
    </div>
	
	<div class="article article-single">
		<div class="blog-banner banner-blue">
  <div class="blog-banner-content" style="height: 80px;">
    <img src="/img/chain.svg" alt="Icon of a chain" width="80">
  </div>
</div>

<!--more-->

<p>Chaining in jQuery let’s you write code that is faster to execute, easier to read, and easier to maintain. Even if you haven’t heard of chaining, if you’ve worked with jQuery it’s likely that you’ve already seen jQuery code utilizing chaining.</p>

<p>So what does it look like? Let’s compare two snippets of code—they accomplish the exact same thing, but one uses chaining, and the other one doesn’t:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// No chaining</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">#menu</span><span class="dl">"</span><span class="p">).</span><span class="nx">fadeIn</span><span class="p">(</span><span class="dl">"</span><span class="s2">fast</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">#menu</span><span class="dl">"</span><span class="p">).</span><span class="nx">addClass</span><span class="p">(</span><span class="dl">"</span><span class="s2">active</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">#menu</span><span class="dl">"</span><span class="p">).</span><span class="nx">css</span><span class="p">(</span><span class="dl">"</span><span class="s2">marginRight</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">10px</span><span class="dl">"</span><span class="p">);</span>
	
<span class="c1">// vs. with chaining</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">#menu</span><span class="dl">"</span><span class="p">).</span><span class="nx">fadeIn</span><span class="p">(</span><span class="dl">"</span><span class="s2">fast</span><span class="dl">"</span><span class="p">)</span>
  <span class="p">.</span><span class="nx">addClass</span><span class="p">(</span><span class="dl">"</span><span class="s2">active</span><span class="dl">"</span><span class="p">)</span>
  <span class="p">.</span><span class="nx">css</span><span class="p">(</span><span class="dl">"</span><span class="s2">marginRight</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">10px</span><span class="dl">"</span><span class="p">);</span>
</code></pre></div></div>

<p>Yup, it’s shorter—but <strong>what’s so great about this</strong>? And <strong>why does that even work</strong>?</p>

<h2 id="how-it-works">How it Works<a href="#how-it-works" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/quick-guide-chaining-in-jquery/#how-it-works</span></a></h2>

<p>Almost all <strong>jQuery methods return a jQuery object</strong>. I.e., after you’ve run a method on your selection, you can continue running more methods. You can even change your selection (in this case with <code class="language-plaintext highlighter-rouge">find()</code>), and continue to run methods on your new selection.</p>

<p>The obvious benefit is <strong>you write less code</strong>. It’s easier and faster to write—and to manage. But <strong>your code also runs faster</strong>. Look at the first snippet without chaining. Every single row tells jQuery to first search the entire DOM for an object, and then run a method on that object. When we use chaining, jQuery only has to search for the object one single time. And when we use <code class="language-plaintext highlighter-rouge">find()</code> to change the selection, we use the already selected object as a starting point—in this case <code class="language-plaintext highlighter-rouge">#menu</code>.</p>

<h2 id="putting-it-to-use">Putting it to Use<a href="#putting-it-to-use" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/quick-guide-chaining-in-jquery/#putting-it-to-use</span></a></h2>

<p>Chaining even works with events, and there’s a whole arsenal of methods simply to change your selection—a task called <a class="red" href="http://api.jquery.com/category/traversing/">traversing</a>. Here’s a simple chaining of events; we add a click event and a mouseleave event to <code class="language-plaintext highlighter-rouge">#button</code>.</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// Chaining of events</span>
<span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">#button</span><span class="dl">"</span><span class="p">).</span><span class="nx">click</span><span class="p">(</span><span class="kd">function</span><span class="p">(</span><span class="nx">e</span><span class="p">){</span>
  <span class="nx">alert</span><span class="p">(</span><span class="dl">"</span><span class="s2">You clicked me!</span><span class="dl">"</span><span class="p">);</span>
<span class="p">}).</span><span class="nx">mouseleave</span><span class="p">(</span><span class="kd">function</span><span class="p">(</span><span class="nx">e</span><span class="p">){</span>
  <span class="nx">alert</span><span class="p">(</span><span class="dl">"</span><span class="s2">You left me!</span><span class="dl">"</span><span class="p">);</span>
<span class="p">});</span>
</code></pre></div></div>

<p>Easy, right? Here’s a snippet from this very blog you’re reading:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">#thumbnails li</span><span class="dl">"</span><span class="p">).</span><span class="nx">mouseenter</span><span class="p">(</span><span class="kd">function</span><span class="p">(</span><span class="nx">e</span><span class="p">){</span>
  <span class="nx">$</span><span class="p">(</span><span class="k">this</span><span class="p">)</span>
	  <span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="dl">"</span><span class="s2">img</span><span class="dl">"</span><span class="p">)</span>
	    <span class="p">.</span><span class="nx">stop</span><span class="p">()</span>
	    <span class="p">.</span><span class="nx">animate</span><span class="p">({</span><span class="na">opacity</span><span class="p">:</span> <span class="mf">0.8</span><span class="p">},</span> <span class="mi">300</span><span class="p">)</span>
	  <span class="p">.</span><span class="nx">end</span><span class="p">()</span>
	  <span class="p">.</span><span class="nx">find</span><span class="p">(</span><span class="dl">"</span><span class="s2">.viewcasestudy</span><span class="dl">"</span><span class="p">)</span>
	    <span class="p">.</span><span class="nx">fadeIn</span><span class="p">(</span><span class="dl">"</span><span class="s2">fast</span><span class="dl">"</span><span class="p">);</span>
<span class="p">});</span>
</code></pre></div></div>

<p>This snippet creates the effect when you hover an entry on the startpage (notice that I use <code class="language-plaintext highlighter-rouge">mouseenter()</code> and not <code class="language-plaintext highlighter-rouge">mouseover()</code>—<a class="red" href="http://api.jquery.com/mouseover/">there’s a big difference</a>). It uses traversing to find the thumbnail—fades the thumbnail to 80% during 0.3 seconds—then uses traversing to target the View Case Study button, which fades in.</p>

<h2 id="learn-more">Learn More<a href="#learn-more" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/quick-guide-chaining-in-jquery/#learn-more</span></a></h2>

<p>This was a crash course in chaining in jQuery, and I promise we’ll dig in further later on. If you can’t wait to learn more, here’s some further reading:</p>

<ul>
  <li><a class="red" href="http://net.tutsplus.com/tutorials/javascript-ajax/10-super-helpful-traversing-functions-in-jquery/">10 Really Helpful Traversing Functions</a></li>
  <li><a class="red" href="http://www.learningjquery.com/2006/11/how-to-get-anything-you-want-part-1">How to Get Anything You Want</a></li>
  <li><a class="red" href="http://api.jquery.com/end/">.end() - jQuery API</a></li>
</ul>

	</div>
</div>


            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #1A1A23">
                        <div class="post-categories-links">
                
                             <a class="post-categories-link" href="/blog/jquery">jquery</a>
                                    <span class="post-categories-link-divider">/</span>

                            <a class="post-categories-link" href="/blog/tutorials/">tutorial</a>
                
                        </div>
                        <span class="section-header section-header-small post-categories-date">24/04/2010</span>
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