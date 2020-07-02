@extends('layouts')
@section('title', 'CSS masonry with flexbox, :nth-child(), and order | Tobias Ahlin')
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
			    <h1 class="post-header h12">CSS masonry with flexbox, :nth-child(), and order</h1>
            </div>

            <div class="article article-single">
		<div class="blog-banner">
            <div class="blog-banner-content">
                <div class="masonry-banner-logo">
                    <div class="masonry-box masonry-box-1" style="transform: translateX(-23px) translateY(0px) scaleY(0.2) scaleX(0.15); opacity: 1;"></div>
                    <div class="masonry-box masonry-box-2" style="transform: translateX(-23px) translateY(26px) scaleY(0.1) scaleX(0.15); opacity: 1;"></div>
                    <div class="masonry-box masonry-box-3" style="transform: translateX(-23px) translateY(52px) scaleY(0.15) scaleX(0.15); opacity: 1;"></div>
                    <div class="masonry-box masonry-box-4" style="transform: translateX(0px) translateY(0px) scaleY(0.11) scaleX(0.15); opacity: 1;"></div>
                    <div class="masonry-box masonry-box-5" style="transform: translateX(0px) translateY(26px) scaleY(0.19) scaleX(0.15); opacity: 1;"></div>
                    <div class="masonry-box masonry-box-6" style="transform: translateX(0px) translateY(52px) scaleY(0.12) scaleX(0.15); opacity: 1;"></div>
                    <div class="masonry-box masonry-box-7" style="transform: translateX(23px) translateY(0px) scaleY(0.14) scaleX(0.15); opacity: 1;"></div>
                    <div class="masonry-box masonry-box-8" style="transform: translateX(23px) translateY(26px) scaleY(0.1) scaleX(0.15); opacity: 1;"></div>
                    <div class="masonry-box masonry-box-9" style="transform: translateX(23px) translateY(52px) scaleY(0.16) scaleX(0.15); opacity: 1;"></div>
                </div>
            </div>
        </div>
<style>
    .masonry-banner-logo {
    width: 100px;
    height: 70px;
    display: inline-block;
    position: relative;
    }

    .masonry-box {
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

<!--more-->

<p>On the surface it seems fairly easy to create a masonry layout with <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">flexbox</a>; all you need to do is set <code class="language-plaintext highlighter-rouge">flex-flow</code> to <code class="language-plaintext highlighter-rouge">column wrap</code> and voilà, you have a masonry layout. Sort of. The problem with this approach is that it produces a grid with a seemingly shuffled and obscure order. Items will be (unbeknownst to the user) rendered from top to bottom and someone parsing the grid from left to right will read the boxes in a somewhat arbitrary order, for example 1, 3, 6, 2, 4, 7, 8, 5, and so on so forth.</p>



<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c">/* Render items as columns */</span>
<span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
  <span class="nl">flex-flow</span><span class="p">:</span> <span class="n">column</span> <span class="n">wrap</span><span class="p">;</span>
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

<p>This will create a masonry layout with items rendered as columns but ordered as rows (the gray vertical lines represent the pseudo elements that <a class="red" href="/blog/flexbox-break-to-new-row/">force line breaks</a>:</p>

<div class="post-content-wrapper">
  <div class="flex-masonry">
    <div class="flex-child flex-masonry-child flex-masonry-child-1">1</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-2">2</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-3">3</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-4">4</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-5">5</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-6">6</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-7">7</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-8">8</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-9">9</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-10">10</div>
  </div>
</div>

<p>Let’s break down the problem (or <a class="red" href="#the-solution">jump to the solution</a>, or <a class="red" href="https://codepen.io/collection/XPjvPP/">see the codepen collection</a>).</p>

<h2 id="pick-your-poison-a-shuffled-order-or-weird-gaps">Pick your poison: a shuffled order, or weird gaps<a href="#pick-your-poison-a-shuffled-order-or-weird-gaps" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/masonry-with-css/#pick-your-poison-a-shuffled-order-or-weird-gaps</span></a></h2>

<p>Flexbox is not really built for masonry—if you set a fixed height on a flex container (so that items can wrap when they overflow) and <code class="language-plaintext highlighter-rouge">flex-flow</code> to <code class="language-plaintext highlighter-rouge">column wrap</code>, you’ll achieve something like this:</p>

<div class="post-content-wrapper">
  <div class="flex-columns">
    <div class="flex-child flex-column-child flex-column-child-1">1</div>
    <div class="flex-child flex-column-child flex-column-child-2">2</div>
    <div class="flex-child flex-column-child flex-column-child-3">3</div>
    <div class="flex-child flex-column-child flex-column-child-4">4</div>
    <div class="flex-child flex-column-child flex-column-child-5">5</div>
    <div class="flex-child flex-column-child flex-column-child-6">6</div>
    <div class="flex-child flex-column-child flex-column-child-7">7</div>
    <div class="flex-child flex-column-child flex-column-child-8">8</div>
    <div class="flex-child flex-column-child flex-column-child-9">9</div>
    <div class="flex-child flex-column-child flex-column-child-10">10</div>
  </div>
</div>

<p>Items are rendered in columns from top to bottom, producing an arbitrary order when read from left to right. This is of course the expected outcome and desirable in many scenarios, but not when we’re trying to create a masonry layout, and it becomes increasingly disorienting as a page grows taller.</p>

<p>If we instead change the <code class="language-plaintext highlighter-rouge">flex-direction</code> to <code class="language-plaintext highlighter-rouge">row</code> and have elements of varying heights we’ll achieve the correct order but with weird and unexpected gaps all over our grid:</p>

<div class="post-content-wrapper">
  <div class="flex-rows">
    <div class="flex-child flex-row-child flex-column-child-1">1</div>
    <div class="flex-child flex-row-child flex-column-child-2">2</div>
    <div class="flex-child flex-row-child flex-column-child-3">3</div>
    <div class="flex-child flex-row-child flex-column-child-4">4</div>
    <div class="flex-child flex-row-child flex-column-child-5">5</div>
    <div class="flex-child flex-row-child flex-column-child-6">6</div>
    <div class="flex-child flex-row-child flex-column-child-7">7</div>
    <div class="flex-child flex-row-child flex-column-child-8">8</div>
    <div class="flex-child flex-row-child flex-column-child-9">9</div>
    <div class="flex-child flex-row-child flex-column-child-10">10</div>
  </div>
</div>

<p>So it seems impossible to get the best of both worlds: items rendered as columns but ordered as rows. You might decide to use <code class="language-plaintext highlighter-rouge">flex-direction: column</code> and just move around the elements in your HTML to achieve the right <em>visual</em> order, but this can be cumbersome, it’s unnecessarily complex, and it will mess up the tab order of the elements.</p>

<h2 id="re-ordering-elements-with-order-and-nth-child">Re-ordering elements with <code class="language-plaintext highlighter-rouge">order</code> and <code class="language-plaintext highlighter-rouge">nth-child()</code><a href="#re-ordering-elements-with-order-and-nth-child" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/masonry-with-css/#re-ordering-elements-with-order-and-nth-child</span></a></h2>

<p>The <code class="language-plaintext highlighter-rouge">order</code> property affects the order of items contained in a CSS flexbox or grid, and we can use it to re-order items for our soon-to-be masonry layout. The <code class="language-plaintext highlighter-rouge">order</code> property is pretty straight-forward to use: if you have two elements and one has <code class="language-plaintext highlighter-rouge">order: 1</code> and the other one has <code class="language-plaintext highlighter-rouge">order: 2</code> the element with <code class="language-plaintext highlighter-rouge">order: 1</code> will be rendered before the other element, independent of their HTML source code order.</p>

<p>The CSS masonry solution depends on a detail of the <code class="language-plaintext highlighter-rouge">order</code> specification: what happens if two or more elements have the same <code class="language-plaintext highlighter-rouge">order</code> value? Which comes first? Flexbox falls back on the source code order: the element that appears first in the source code will be rendered before other elements with the same order value. This fact gives us the possibility to easily re-group items in our grid so that we can change the ordering from columns to rows, while still rendering those rows as columns, using <code class="language-plaintext highlighter-rouge">nth-child()</code>.</p>

<p>Look at the table below. To achieve a sensible order using <code class="language-plaintext highlighter-rouge">flex-direction: row</code> we’d just have to render elements in the default order: <code class="language-plaintext highlighter-rouge">1, 2, 3, 4, 5, 6</code> , etc.</p>

<table class="article-table masonry-table-1">
  <thead>
    <tr>
      <th style="text-align: left">&nbsp;</th>
      <th style="text-align: center">Column 1</th>
      <th style="text-align: center">Column 2</th>
      <th style="text-align: center">Column 3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="text-align: left">Row 1</td>
      <td style="text-align: center">1</td>
      <td style="text-align: center">2</td>
      <td style="text-align: center">3</td>
    </tr>
    <tr>
      <td style="text-align: left">Row 2</td>
      <td style="text-align: center">4</td>
      <td style="text-align: center">5</td>
      <td style="text-align: center">6</td>
    </tr>
    <tr>
      <td style="text-align: left">Row 3</td>
      <td style="text-align: center">7</td>
      <td style="text-align: center">8</td>
      <td style="text-align: center">9</td>
    </tr>
    <tr>
      <td style="text-align: left">Row 4</td>
      <td style="text-align: center">10</td>
      <td style="text-align: center">11</td>
      <td style="text-align: center">12</td>
    </tr>
  </tbody>
</table>

<p>If we want to achieve the <em>same</em> order while using <code class="language-plaintext highlighter-rouge">flex-direction: column</code> we need to change the order of the elements to match the order of each column in the table (rather than each row):</p>

<table class="article-table masonry-table-2">
  <thead>
    <tr>
      <th style="text-align: left">&nbsp;</th>
      <th style="text-align: center">Column 1</th>
      <th style="text-align: center">Column 2</th>
      <th style="text-align: center">Column 3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="text-align: left">Row 1</td>
      <td style="text-align: center"><strong>1</strong></td>
      <td style="text-align: center">2</td>
      <td style="text-align: center">3</td>
    </tr>
    <tr>
      <td style="text-align: left">Row 2</td>
      <td style="text-align: center"><strong>4</strong></td>
      <td style="text-align: center">5</td>
      <td style="text-align: center">6</td>
    </tr>
    <tr>
      <td style="text-align: left">Row 3</td>
      <td style="text-align: center"><strong>7</strong></td>
      <td style="text-align: center">8</td>
      <td style="text-align: center">9</td>
    </tr>
    <tr>
      <td style="text-align: left">Row 4</td>
      <td style="text-align: center"><strong>10</strong></td>
      <td style="text-align: center">11</td>
      <td style="text-align: center">12</td>
    </tr>
  </tbody>
</table>
<style>
    .masonry-table-2 tr td:nth-child(2), .masonry-table tr th:nth-child(2) {
    background-color: #A2CBFA;
    border-radius: 2px;
    }
</style>

<p>I.e. the first elements in our flexbox layout have to be <code class="language-plaintext highlighter-rouge">1, 4, 7, 10</code>. These items will fill up the first column, followed by <code class="language-plaintext highlighter-rouge">2, 5, 8, 11</code> for the 2nd column and <code class="language-plaintext highlighter-rouge">3, 6, 9, 12</code> for the 3rd and last column. This is where the <code class="language-plaintext highlighter-rouge">nth-child()</code> selector comes in. We can use it to select every third element (3n), starting with the first element (3n+1), and set all those elements to have the same <code class="language-plaintext highlighter-rouge">order</code> value:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.item</span><span class="nd">:nth-child</span><span class="o">(</span><span class="nt">3n</span><span class="o">+</span><span class="nt">1</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span> <span class="p">}</span>
</code></pre></div></div>

<p>This selector sets <code class="language-plaintext highlighter-rouge">order: 1</code> for element <code class="language-plaintext highlighter-rouge">1, 4, 7, 10</code> in our container, i.e. the entire first column. In other words we’re using a combination of <code class="language-plaintext highlighter-rouge">nth-child()</code> and <code class="language-plaintext highlighter-rouge">order</code> to re-order items depending on their original order. To create the 2nd and 3rd column we just change the offset:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.item</span><span class="nd">:nth-child</span><span class="o">(</span><span class="nt">3n</span><span class="o">+</span><span class="nt">1</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item</span><span class="nd">:nth-child</span><span class="o">(</span><span class="nt">3n</span><span class="o">+</span><span class="nt">2</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">2</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item</span><span class="nd">:nth-child</span><span class="o">(</span><span class="nt">3n</span><span class="o">)</span>   <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">3</span><span class="p">;</span> <span class="p">}</span>
</code></pre></div></div>

<p>Here we’re producing three sets: <code class="language-plaintext highlighter-rouge">1, 4, 7, 10</code> (3n+1) with <code class="language-plaintext highlighter-rouge">order: 1</code>, <code class="language-plaintext highlighter-rouge">2, 5, 8, 11</code> (3n+2) with <code class="language-plaintext highlighter-rouge">order: 2</code>, and <code class="language-plaintext highlighter-rouge">3, 6, 9, 12</code> (3n) with <code class="language-plaintext highlighter-rouge">order: 3</code>. All together the order becomes <code class="language-plaintext highlighter-rouge">1, 4, 7, 10, 2, 5, 8, 11, 3, 6, 9, 12</code>.</p>

<p>If we make sure to render each of those groups as one column (and no more), it’ll create the illusion that the items have returned to their original order when you read from left to right. If we visually parse the grid as rows the first row will contain the first element from every group (<code class="language-plaintext highlighter-rouge">1, 2, 3</code>), the second row will contain the second element from every group (<code class="language-plaintext highlighter-rouge">4, 5, 6</code>), and so on so forth. With this technique we can create a masonry layout with items rendered as columns but ordered as rows.</p>

<div class="post-content-wrapper">
  <div class="flex-masonry">
    <div class="flex-child flex-masonry-child flex-masonry-child-1">1</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-2">2</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-3">3</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-4">4</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-5">5</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-6">6</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-7">7</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-8">8</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-9">9</div>
    <div class="flex-child flex-masonry-child flex-masonry-child-10">10</div>
  </div>
</div>

<p>How is the tab order affected by shuffling around elements like this? Luckily, not at all. <code class="language-plaintext highlighter-rouge">order</code> only changes the visual representation of objects, not the tab order, so tabbing through the grid will work as intended.</p>

<h2 id="preventing-columns-from-merging">Preventing columns from merging<a href="#preventing-columns-from-merging" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/masonry-with-css/#preventing-columns-from-merging</span></a></h2>

<p>If you have many items in a masonry layout this technique will fairly certainly break down at some point. We’re counting on that every “group” that we’ve created will be rendered as exactly one column but in reality items can have different heights and columns can easily start to merge. The first column could be longer than the other two, for example, which could make the third column start at the end of the second column:</p>

<div class="post-content-wrapper">
  <div class="flex-masonryfail">
    <div class="flex-child flex-masonry-child flex-masonryfail-child-1">1</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-2">2</div>
    <div class="flex-child flex-masonry-child flex-child-highlight flex-masonryfail-child-3">3</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-4">4</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-5">5</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-6">6</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-7">7</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-8">8</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-9">9</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-10">10</div>
  </div>
</div>

<p>The highlighted box here (3) has to be rendered at the start of the third column or the ordering algorithm will break, but if there’s space for another element at the end of the 2nd column it will naturally be rendered there.</p>

<p>We can fix this wrapping issue by forcing columns to restart at certain points. There’s no easy way of saying “this element should line break” with flexbox, but <a class="red" href="/blog/flexbox-break-to-new-row/">we can achieve this effect by adding invisible elements that take up 100% of the container’s height</a>. As they require 100% of the parent’s height to be rendered they won’t fit in a column together with any other element, so they’ll essentially force line breaks by creating  collapsed columns.</p>

<p>We have to insert these line break elements into our grid and array of elements, so what we’re looking for is to create this sequence of elements: <code class="language-plaintext highlighter-rouge">1, 4, 7, 10, &lt;break&gt;, 2, 5, 8, 11, &lt;break&gt;, 3, 6, 9, 12</code>. We can use pseudo-elements on the container to add these, and we can set the <code class="language-plaintext highlighter-rouge">order</code> to <code class="language-plaintext highlighter-rouge">2</code> on both of them. Adding a pseudo-element with <code class="language-plaintext highlighter-rouge">:before</code> will make it the first child of the container and adding a pseudo-element with <code class="language-plaintext highlighter-rouge">:after</code> will make it the last child of the container, so if we set <code class="language-plaintext highlighter-rouge">order: 2</code> on both of them they will become the first and the last element of the <code class="language-plaintext highlighter-rouge">order: 2</code> “group” (as they appear before and after the other elements): <code class="language-plaintext highlighter-rouge">:before, 2, 5, 8, 11, :after</code>.</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c">/* Force new columns */</span>
<span class="nc">.container</span><span class="nd">::before</span><span class="o">,</span>
<span class="nc">.container</span><span class="nd">::after</span> <span class="p">{</span>
  <span class="nl">content</span><span class="p">:</span> <span class="s1">""</span><span class="p">;</span>
  <span class="nl">flex-basis</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">order</span><span class="p">:</span> <span class="m">2</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>I’ve highlighted the pseudo-elements below to show their effect. Notice that despite that box 3 would fit in the 2nd column it’s rendered as the first element in the last column:</p>

<div class="post-content-wrapper">
  <div class="flex-masonryfail flex-masonryfail-fixed">
    <div class="flex-child flex-masonry-child flex-masonryfail-child-1">1</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-2">2</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-3">3</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-4">4</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-5">5</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-6">6</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-7">7</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-8">8</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-9">9</div>
    <div class="flex-child flex-masonry-child flex-masonryfail-child-10">10</div>
  </div>
</div>

<h2 id="the-solution">The solution<a href="#the-solution" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/masonry-with-css/#the-solution</span></a></h2>

<p>As a final step, you need to make sure that your flex container has a set height that makes it taller than your tallest column (so that all columns will fit). Put together, this will produce a CSS masonry layout with three columns (<a class="red" href="https://codepen.io/tobiasahlin/pen/JVmLRa">also available as a codepen</a>):</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
  <span class="nl">flex-flow</span><span class="p">:</span> <span class="n">column</span> <span class="n">wrap</span><span class="p">;</span>
  <span class="nl">align-content</span><span class="p">:</span> <span class="n">space-between</span><span class="p">;</span>
  <span class="c">/* Your container needs a fixed height, and it 
   * needs to be taller than your tallest column. */</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">600px</span><span class="p">;</span> 
<span class="p">}</span>

<span class="nc">.item</span> <span class="p">{</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">32%</span><span class="p">;</span>
  <span class="nl">margin-bottom</span><span class="p">:</span> <span class="m">2%</span><span class="p">;</span> <span class="c">/* Optional */</span>
<span class="p">}</span>

<span class="c">/* Re-order items into 3 rows */</span>
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

<p>Your HTML should look like this, with one <code class="language-plaintext highlighter-rouge">&lt;div /&gt;</code> for every item in your grid:</p>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  ...
<span class="nt">&lt;/div&gt;</span>
</code></pre></div></div>

<h2 id="working-with-more-than-three-columns">Working with more than three columns<a href="#working-with-more-than-three-columns" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/masonry-with-css/#working-with-more-than-three-columns</span></a></h2>

<p>To create a masonry layout with more than three columns we need to do a few things: adapt our sorting algorithm, update the width of the items, and insert line break elements manually (instead of using pseudo-elements). For quick access to the final result I’ve compiled <a class="red" href="https://codepen.io/collection/XPjvPP/">a list of codepens showcasing flexbox masonry with 3, 4, 5 and 6 columns</a>.</p>

<p>Since we’re limited to creating just two pseudo-elements with <code class="language-plaintext highlighter-rouge">:before</code> and <code class="language-plaintext highlighter-rouge">:after</code> we need to resort to manually adding break elements into our container (you need one less break element than the number of columns in your layout). You can just append them to the end of your container, they’ll be sorted into their respective columns:</p>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;&lt;/div&gt;</span>
  ...
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"item break"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"item break"</span><span class="nt">&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"item break"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div></div>

<p>We’re inserting column breaks as <code class="language-plaintext highlighter-rouge">span</code>s in order to sort them independently from the content items. We need a way to “restart” the counting once we reach the break elements, or an uneven number of content items could make the first break element start after the 3rd column, for example. The <code class="language-plaintext highlighter-rouge">:nth-of-type</code> selector targets elements of different types independently, so we can decouple the order of the content items and the column breaks like so:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.item</span><span class="nd">:nth-of-type</span><span class="o">(</span><span class="nt">4n</span><span class="o">+</span><span class="nt">1</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item</span><span class="nd">:nth-of-type</span><span class="o">(</span><span class="nt">4n</span><span class="o">+</span><span class="nt">2</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">2</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item</span><span class="nd">:nth-of-type</span><span class="o">(</span><span class="nt">4n</span><span class="o">+</span><span class="nt">3</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">3</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item</span><span class="nd">:nth-of-type</span><span class="o">(</span><span class="nt">4n</span><span class="o">)</span>   <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">4</span><span class="p">;</span> <span class="p">}</span>
</code></pre></div></div>

<p>The break elements, like previously, take up the full height of the container:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c">/* Force new columns */</span>
<span class="nc">.break</span> <span class="p">{</span>
  <span class="nl">flex-basis</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">margin</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>This will create a masonry layout with four columns (<a class="red" href="https://codepen.io/tobiasahlin/pen/OGBvqW">view codepen</a>):</p>

<div class="post-content-wrapper">
  <div class="flex-masonry flex-masonry-4columns">
    <div class="flex-child flex-masonry-child-4columns flex-masonry-child-1">1</div>
    <div class="flex-child flex-masonry-child-4columns flex-masonry-child-2">2</div>
    <div class="flex-child flex-masonry-child-4columns flex-masonry-child-3">3</div>
    <div class="flex-child flex-masonry-child-4columns flex-masonry-child-4">4</div>
    <div class="flex-child flex-masonry-child-4columns flex-masonry-child-5">5</div>
    <div class="flex-child flex-masonry-child-4columns flex-masonry-child-6">6</div>
    <div class="flex-child flex-masonry-child-4columns flex-masonry-child-7">7</div>
    <div class="flex-child flex-masonry-child-4columns flex-masonry-child-8">8</div>
    <div class="flex-child flex-masonry-child-4columns flex-masonry-child-9">9</div>
    <div class="flex-child flex-masonry-child-4columns flex-masonry-child-10">10</div>
    <div class="flex-child flex-masonry-child-4columns flex-masonry-child-11">11</div>
    <div class="flex-child flex-masonry-child-4columns flex-masonry-child-12">12</div>
    <span class="flex-masonry-child-4columns flex-masonry-break"></span>
    <span class="flex-masonry-child-4columns flex-masonry-break"></span>
    <span class="flex-masonry-child-4columns flex-masonry-break"></span>
  </div>
</div>

<p>Here’s the full solution for a CSS masonry layout with four columns:</p>

<div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.container</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">flex</span><span class="p">;</span>
  <span class="nl">flex-flow</span><span class="p">:</span> <span class="n">column</span> <span class="n">wrap</span><span class="p">;</span>
  <span class="nl">align-content</span><span class="p">:</span> <span class="n">space-between</span><span class="p">;</span>
  <span class="c">/* Your container needs a fixed height, and it 
   * needs to be taller than your tallest column. */</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">600px</span><span class="p">;</span> 
<span class="p">}</span>

<span class="nc">.item</span> <span class="p">{</span>
  <span class="nl">width</span><span class="p">:</span><span class="m">24%</span><span class="p">;</span>
  <span class="nl">margin-bottom</span><span class="p">:</span> <span class="m">2%</span><span class="p">;</span> <span class="c">/* Optional */</span>
<span class="p">}</span>

<span class="c">/* Re-order items into 4 rows */</span>
<span class="nc">.item</span><span class="nd">:nth-of-type</span><span class="o">(</span><span class="nt">4n</span><span class="o">+</span><span class="nt">1</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">1</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item</span><span class="nd">:nth-of-type</span><span class="o">(</span><span class="nt">4n</span><span class="o">+</span><span class="nt">2</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">2</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item</span><span class="nd">:nth-of-type</span><span class="o">(</span><span class="nt">4n</span><span class="o">+</span><span class="nt">3</span><span class="o">)</span> <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">3</span><span class="p">;</span> <span class="p">}</span>
<span class="nc">.item</span><span class="nd">:nth-of-type</span><span class="o">(</span><span class="nt">4n</span><span class="o">)</span>   <span class="p">{</span> <span class="nl">order</span><span class="p">:</span> <span class="m">4</span><span class="p">;</span> <span class="p">}</span>

<span class="c">/* Force new columns */</span>
<span class="nc">.break</span> <span class="p">{</span>
  <span class="nl">flex-basis</span><span class="p">:</span> <span class="m">100%</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">margin</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div></div>

<p>This CSS-only way of creating a masonry (or mosaic) layout is surely not as robust, flexible, and foolproof as a JavaScript implementation (like <a class="red" href="https://masonry.desandro.com/">Masonry</a>) but if you don’t want to rely on a third-party library just to create a masonry layout I hope that these layouts tricks can come in handy.</p>

<p>For help with more common CSS flexbox patterns, <a class="red" href="/blog/common-flexbox-patterns/">I’ve compiled a list of flexbox examples that you can copy and paste into your projects</a> and <a class="red" href="/blog/flexbox-break-to-new-row/">written in-depth about the line-breaking flexbox item technique</a>.</p>

<style>
    .flex-masonry,
    .flex-masonryfail {
    background-color: #f7f7f7;
    border-radius: 3px;
    padding: 20px;
    display: flex;
    flex-flow: column wrap;
    align-content: space-between;
    height: 580px;
    }

    .flex-columns {
    background-color: #f7f7f7;
    border-radius: 3px;
    padding: 20px;
    display: flex;
    flex-flow: column wrap;
    align-content: space-between;
    height: 530px;
    }

    .flex-rows {
    padding: 20px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    }

    .flex-child {
    border-radius: 3px;
    background-color: #A2CBFA;
    border: 1px solid #4390E1;
    box-shadow: 0 2px 2px rgba(0,90,250,0.05),
        0 4px 4px rgba(0,90,250,0.05),
        0 8px 8px rgba(0,90,250,0.05),
        0 16px 16px rgba(0,90,250,0.05);
    width: 32%;
    margin-bottom: 2%; /* (100-32*3)/2 */
    padding: 10px;
    box-sizing: border-box;
    text-align: center;
    color: white;
    }

    .flex-child-highlight {
    background-color: #cc4a8b;
    border-color: #8a2155;
    }

    .flex-column-child-1 { height: 200px; }
    .flex-column-child-2 { height: 150px; }
    .flex-column-child-3 { height: 125px; }
    .flex-column-child-4 { height: 150px; }
    .flex-column-child-5 { height: 100px; }
    .flex-column-child-6 { height: 125px; }
    .flex-column-child-7 { height: 100px; }
    .flex-column-child-8 { height: 125px; }
    .flex-column-child-9 { height: 100px; }
    .flex-column-child-10 { height: 100px; }

    .flex-masonry-child-1 { height: 200px; }
    .flex-masonry-child-2 { height: 205px; }
    .flex-masonry-child-3 { height: 175px; }
    .flex-masonry-child-4 { height: 100px; }
    .flex-masonry-child-5 { height: 100px; }
    .flex-masonry-child-6 { height: 155px; }
    .flex-masonry-child-7 { height: 100px; }
    .flex-masonry-child-8 { height: 175px; }
    .flex-masonry-child-9 { height: 150px; }
    .flex-masonry-child-10 { height: 100px; }
    .flex-masonry-child-11 { height: 150px; }
    .flex-masonry-child-12 { height: 100px; }

    .flex-masonryfail-child-1 { height: 200px; }
    .flex-masonryfail-child-2 { height: 205px; }
    .flex-masonryfail-child-3 { height: 75px; }
    .flex-masonryfail-child-4 { height: 100px; }
    .flex-masonryfail-child-5 { height: 100px; }
    .flex-masonryfail-child-6 { height: 155px; }
    .flex-masonryfail-child-7 { height: 100px; }
    .flex-masonryfail-child-8 { height: 75px; }
    .flex-masonryfail-child-9 { height: 150px; }
    .flex-masonryfail-child-10 { height: 100px; }

    .flex-masonry-child:nth-child(3n+1) { order: 1; }
    .flex-masonry-child:nth-child(3n+2) { order: 2; }
    .flex-masonry-child:nth-child(3n) { order: 3; }

    .flex-masonry::before,
    .flex-masonry::after {
    content: "";
    flex-basis: 100%;
    width: 0;
    order: 2;
    border: 1px solid #ddd;
    }

    .flex-masonryfail-fixed::before,
    .flex-masonryfail-fixed::after {
    content: "";
    flex-basis: 100%;
    width: 0;
    order: 2;
    border: 1px solid #8a2155;
    }

    /* Four columns */
    .flex-masonry-4columns {
    height: 520px;
    }

    .flex-masonry-4columns::after,
    .flex-masonry-4columns::before {
    content: none;
    }

    .flex-masonry-child-4columns {
    width: 24%;
    }

    .flex-masonry-child-4columns:nth-of-type(4n+1) { order: 1; }
    .flex-masonry-child-4columns:nth-of-type(4n+2) { order: 2; }
    .flex-masonry-child-4columns:nth-of-type(4n+3) { order: 3; }
    .flex-masonry-child-4columns:nth-of-type(4n)   { order: 4; }

    .flex-masonry-break {
    flex-basis: 100%;
    width: 0;
    border: 1px solid #ddd;
    margin: 0;
    }
</style>


    </div>
</div>

            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #2b2f3c">
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