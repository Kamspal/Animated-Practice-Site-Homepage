@extends('layouts')
@section('title', 'Breaking to a new row with flexbox | Tobias Ahlin')
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
	        <div class="single-post-head" style="background-color: #7290a4">
			    <h1 class="post-header h12">Breaking to a new row with flexbox</h1>
            </div>

            <div class="article article-single">
                <div class="blog-banner">
                    <div class="blog-banner-content">
                        <div class="flexbox-break-banner-logo">
                            <div class="flexbox-break-box flexbox-break-box-1" style="transform: translateY(-20px) translateX(-27px) scaleY(0.36) scaleX(0.17);"></div><div class="flexbox-break-box flexbox-break-box-2" style="transform: translateY(-20px) translateX(0px) scaleY(0.36) scaleX(0.17);"></div><div class="flexbox-break-box flexbox-break-box-3" style="transform: translateY(-20px) translateX(27px) scaleY(0.36) scaleX(0.17);"></div><div class="flexbox-break-box flexbox-break-box-4" style="transform: translateY(0px) translateX(0px) scaleY(0.36) scaleX(0.72);"></div><div class="flexbox-break-box flexbox-break-box-5" style="transform: translateY(20px) translateX(-27px) scaleY(0.36) scaleX(0.17);"></div><div class="flexbox-break-box flexbox-break-box-6" style="transform: translateY(20px) translateX(0px) scaleY(0.36) scaleX(0.17);"></div><div class="flexbox-break-box flexbox-break-box-7" style="transform: translateY(20px) translateX(27px) scaleY(0.36) scaleX(0.17);"></div>
                        </div>
                    </div>
                </div>


                <style>
                    .flexbox-break-banner-logo {
                    margin-top: 20px;
                    width: 100px;
                    height: 30px;
                    display: inline-block;
                    position: relative;
                    }

                    .flexbox-break-box {
                    background-color: #fff;
                    width: 100%;
                    height: 100%;
                    position: absolute;
                    top: 0;
                    left: 0;
                    transform-origin: 50% 0;
                    }
                </style>

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

                <!-- more -->

                <p>Here’s the challenge: if you want to create a flexbox layout with several rows of items, how do you control which item ends up in which row? Presume you want to create a layout that looks something like this, with three stacked items and alternating full-width items:</p>

                <div class="post-content-wrapper">
                    <div class="flex-rows">
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-break flex-rows-break-invisible"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-break flex-rows-break-invisible"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-break flex-rows-break-invisible"></div>
                        <div class="flex-rows-child"></div>
                    </div>
                </div>

                <p>A common way of controlling the positioning and size of flex items is to use <code class="language-plaintext highlighter-rouge">width</code> or <code class="language-plaintext highlighter-rouge">flex-basis</code>; if we set the fourth item to have a width of 100% it’ll be positioned on its own row. But what if we don’t want to or can’t set the width of individual items, do we really need to? Or is there a way of just telling flexbox to line break at certain points?</p>

                <p>There’s no property that we can set on a flex item to make it break to a new row, but we can insert a collapsed row (you can think of it as a <code class="language-plaintext highlighter-rouge">&lt;br&gt;</code>) between two flex items two achieve something similar. In a gist:</p>

                <div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c">/* Inserting this collapsed row between two flex items will make 
 * the flex item that comes after it break to a new row */</span>
<span class="nc">.break</span> <span class="p">{</span>
  <span class="nl">flex-basis</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

                <div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"break"</span><span class="nt">&gt;&lt;/div&gt;</span> <span class="c">&lt;!-- break --&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div></div>

                <p>Let’s walk through some scenarios when you might want to use this, and look at some interesting layout techniques that it enables us to use.</p>

                <p>Note that all of the code examples below requires and assumes that you have a flex container with <code class="language-plaintext highlighter-rouge">display: flex</code> and <code class="language-plaintext highlighter-rouge">flex-wrap: wrap</code> and that the flex items are added to that container:</p>

                <div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
  <span class="nl">flex-wrap</span><span class="p">:</span> <span class="n">wrap</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

                <div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code></pre></div></div>

                <h2 id="inserting-a-line-breaking-flex-item">Inserting a line-breaking flex item<a href="#inserting-a-line-breaking-flex-item" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/flexbox-break-to-new-row/#inserting-a-line-breaking-flex-item</span></a></h2>

                <p>Using an element to break to a new flex row comes with an interesting effect: we can skip specifying the width of any item in our flex layout and rely completely on the line breaks to define the flow of our grid.</p>

                <p>Let’s start with a simple example. Say that we have two items shown side by side (these are set to grow with <code class="language-plaintext highlighter-rouge">flex-grow: 1</code>, and they have no defined <code class="language-plaintext highlighter-rouge">width</code> or <code class="language-plaintext highlighter-rouge">flex-basis</code>):</p>

                <div class="post-content-wrapper">
                    <div class="flex-rows">
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                    </div>
                </div>

                <p>We can insert a line breaking element between the items to make them both take up 100% of the available space:</p>

                <div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"break"</span><span class="nt">&gt;&lt;/div&gt;</span> <span class="c">&lt;!-- break to a new row --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code></pre></div></div>

                <p>This produces a layout with two vertically stacked full-width items (I’ve added a border to the <code class="language-plaintext highlighter-rouge">.break</code> element to illustrate its position and behavior):</p>

                <div class="post-content-wrapper">
                    <div class="flex-rows">
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-break"></div>
                        <div class="flex-rows-child"></div>
                    </div>
                </div>

                <p>How does this work? Since we’ve said that <code class="language-plaintext highlighter-rouge">.break</code> should take up 100% of the width of the container (because we set <code class="language-plaintext highlighter-rouge">flex-basis: 100%</code>), the breaking flex item needs to sit on its own row to accomplish that. It can’t share a row with the first item so it will break to a new row, which will leave the first item alone on one row. The first item will then grow to fill the remaining space (since we set <code class="language-plaintext highlighter-rouge">flex-grow: 1</code>). The same logic applies to the second item.</p>

                <p>We can use this technique to compose the layout at the top of the post by breaking before and after every fourth item:</p>

                <div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"break"</span><span class="nt">&gt;&lt;/div&gt;</span> <span class="c">&lt;!-- break --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"break"</span><span class="nt">&gt;&lt;/div&gt;</span> <span class="c">&lt;!-- break --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code></pre></div></div>

                <p>This will produce the layout at the top of the blog post. Essentially an item won’t break to a new row unless we insert the line-breaking element:</p>

                <div class="post-content-wrapper">
                    <div class="flex-rows">
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-break"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-break"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                    </div>
                </div>

                <p>Again, we didn’t need to specify the width on any of those items. The same technique will work for columns if we have a flex container with <code class="language-plaintext highlighter-rouge">flex-direction: column</code>, and set the <code class="language-plaintext highlighter-rouge">width</code> (rather than <code class="language-plaintext highlighter-rouge">height</code>) to <code class="language-plaintext highlighter-rouge">0</code> for our breaking element:</p>

                <div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c">/* Use a collapsed column to break to a new column */</span>
<span class="nc">.break-column</span> <span class="p">{</span>
  <span class="nl">flex-basis</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

                <div class="post-content-wrapper">
                    <div class="flex-rows flex-rows-columns">
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-break"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-break"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                    </div>
                </div>

                <p>This approach of using line breaking elements to define a layout definitely adds some bloat and noise to our HTML, but it can be a powerful tool when used in the right way. <a class="red" href="/blog/masonry-with-css/">We can, for example, use it to build a masonry layout with CSS only</a>, and position the breaks dynamically with the <code class="language-plaintext highlighter-rouge">order</code> property. We can also break to a new row without having to modify the width of any content item, and we can rely solely on <code class="language-plaintext highlighter-rouge">flex-grow</code> to distribute space in a grid layout.</p>

                <p>Suppose that we’re looking to create this layout:</p>

                <div class="post-content-wrapper">
                    <div class="flex-rows">
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child flex-rows-child-wide"></div>
                        <div class="flex-rows-child"></div>
                    </div>
                </div>

                <p>And assume that we want to do so by setting different values of <code class="language-plaintext highlighter-rouge">flex-grow</code> to distribute the space (rather than using <code class="language-plaintext highlighter-rouge">flex-basis</code> or <code class="language-plaintext highlighter-rouge">width</code>, which you’d have to recalculate as soon as you added or removed items):</p>

                <div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.item</span> <span class="p">{</span> <span class="nl">flex-grow</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item-wide</span> <span class="p">{</span> <span class="nl">flex-grow</span><span class="p">:</span> <span class="m">3</span><span class="p">;</span> <span class="p">}</span>
</code></pre></div></div>

                <div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item-wide"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
</code></pre></div></div>

                <p>If we then want to add another row of items below that row:</p>

                <div class="post-content-wrapper">
                    <div class="flex-rows">
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child flex-rows-child-wide"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-break flex-rows-break-invisible"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                    </div>
                </div>

                <p>We wouldn’t be able to do so without resorting to setting <code class="language-plaintext highlighter-rouge">flex-basis</code> or <code class="language-plaintext highlighter-rouge">width</code> on at least some of the items (or creating a nested flexbox layout with one flex item for every row). If all of the items just have different values of <code class="language-plaintext highlighter-rouge">flex-grow</code> nothing would make them break to a new row, they’d all just squeeze in on one row together:</p>

                <div class="post-content-wrapper">
                    <div class="flex-rows">
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child flex-rows-child-wide"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                    </div>
                </div>

                <p>Cozy, but not what we’re after. If we insert a breaking element, however, we can construct this layout by distributing all space with <code class="language-plaintext highlighter-rouge">flex-grow</code>:</p>

                <div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.item</span> <span class="p">{</span> <span class="nl">flex-grow</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item-wide</span> <span class="p">{</span> <span class="nl">flex-grow</span><span class="p">:</span> <span class="m">3</span><span class="p">;</span> <span class="p">}</span>
</code></pre></div></div>

                <div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item-wide"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"break"</span><span class="nt">&gt;&lt;/div&gt;</span> <span class="c">&lt;!-- break --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
</code></pre></div></div>

                <p>Yielding the desired layout, with all sizes defined proportionally through <code class="language-plaintext highlighter-rouge">flex-grow</code>:</p>

                <div class="post-content-wrapper">
                    <div class="flex-rows">
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child flex-rows-child-wide"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-break"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                    </div>
                </div>

                <p>And if there’s a scenario when we need five items in the first row we don’t have to change any of the CSS to make that work, we can just add those items before the line break:</p>

                <div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item-wide"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"break"</span><span class="nt">&gt;&lt;/div&gt;</span> <span class="c">&lt;!-- break --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
</code></pre></div></div>

                <div class="post-content-wrapper">
                    <div class="flex-rows">
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child flex-rows-child-wide"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-break flex-rows-break-invisible"></div>
                        <div class="flex-rows-child"></div>
                        <div class="flex-rows-child"></div>
                    </div>
                </div>

                <p>All that you need to add to your CSS to use line-breaking elements are these two classes (the only difference between the two classes is that <code class="language-plaintext highlighter-rouge">width</code> (and not <code class="language-plaintext highlighter-rouge">height</code>) needs to be set to <code class="language-plaintext highlighter-rouge">0</code> for the element to collapse when used in a column layout):</p>

                <div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c">/* Inserting a collapsed row between two flex items will make 
 * the flex item that comes after it break to a new row */</span>
<span class="nc">.break</span> <span class="p">{</span>
  <span class="nl">flex-basis</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
<span class="p">}</span>

<span class="c">/* Use a collapsed column to break to a new column */</span>
<span class="nc">.break-column</span> <span class="p">{</span>
  <span class="nl">flex-basis</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

                <p>You could certainly achieve the same effect or similar effects by nesting flexboxes and having one flex item for every row, and in many cases just utilizing <code class="language-plaintext highlighter-rouge">flex-basis</code>, <code class="language-plaintext highlighter-rouge">width</code>, or the content within the flex items is probably the preferred way of controlling the flow of items in a flexbox layout. But inserting line-breaking flex items is approachable and easy to grok, it works, and the technique comes with some unique characteristics that may come in handy.</p>

        
                <style>
                    .flex-rows {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                    padding: 20px 20px 5px 20px;
                    }

                    .flex-rows-columns {
                    flex-direction: column;
                    height: 300px;
                    }

                    .flex-rows-child {
                    border-radius: 3px;
                    background-color: #A2CBFA;
                    border: 1px solid #4390E1;
                    box-sizing: border-box;
                    box-shadow: 0 2px 2px rgba(0,90,250,0.05),
                        0 4px 4px rgba(0,90,250,0.05),
                        0 8px 8px rgba(0,90,250,0.05),
                        0 16px 16px rgba(0,90,250,0.05);
                        height: 60px;
                    flex-grow: 1;
                    margin-bottom: 2%;
                    }

                    .flex-rows-child-wide { flex-grow: 3; }

                    .flex-rows-child + .flex-rows-child { margin-left: 2%; }

                    .flex-rows-columns .flex-rows-child {
                    height: auto;
                    width: 30%;
                    margin-left: 0;
                    }

                    .flex-rows-break {
                    flex-basis: 100%;
                    height: 0;
                    margin: 0;
                    border: 1px solid #ddd;
                    margin-bottom: 2%;
                    }

                    .flex-rows-break-invisible { 
                    border: 0; 
                    margin: 0;
                    }

                    .flex-rows-columns .flex-rows-break {
                    width: 0;
                    height: auto;
                    }
                </style>

            </div>
        </div>

        <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #7290a4">
                        <div class="post-categories-links">
                
                            <a class="post-categories-link" href="/blog/css/">css</a>
                                <span class="post-categories-link-divider">/</span>

                            <a class="post-categories-link" href="/blog/tutorials/">tutorial</a>
                
                        </div>
                        <span class="section-header section-header-small post-categories-date">29/04/2019</span>
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