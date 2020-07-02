@extends('layouts')
@section('title', '10 Chart.js example charts to get you started | Tobias Ahlin')
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
	<div class="single-post-head" style="background-color: #e8c3b9">
			<h1 class="post-header">10 Chart.js example charts to get you started</h1>
    </div>
	
	<div class="article article-single">
		<div class="blog-banner">
  <div class="blog-banner-content">
      <img class="chartjs-banner-10x" src="/img/chartjs-10x.png" alt="10 Graph.js example graphs" height="142" width="160">
  </div>
  <style>

    @media all and (max-width: 900px) {
        .chartjs-banner-10x {
        width: 120px;
        height: 106px;
        }
    }
  </style>
</div>

<!--more-->

<p><a class="red" href="http://www.chartjs.org/">Chart.js</a> is a powerful data visualization library, but I know from experience that it can be tricky to just get started and get a graph to show up. There are all sorts of things that can wrong, and I often just want to have <em>something</em> working so I can start tweaking it.</p>

<p>This is a list of 10 working graphs (bar chart, pie chart, line chart, etc.) with colors and data set up to render decent looking charts that you can copy and paste into your own projects, and quickly get going with customizing and fine-tuning to make them fit your style and purpose.</p>

<p>To use these examples, make sure to also include Chart.js:</p>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
</code></pre></div></div>

<p>These are the graphs that we’ll go through (click to get to the code):</p>

<div class="post-jumper post-jumper-5">
  <a href="#1-bar-chart" class="post-jumper-item">
    <img src="/img/bars.png" alt="Bar chart" width="95" height="60">
    <span class="post-jumper-item-title">Bar chart</span>
  </a>  
  <a href="#2-line-chart" class="post-jumper-item">
    <img src="/img/line.png" alt="Line chart" width="95" height="60">
    <span class="post-jumper-item-title">Line chart</span>
  </a>
  <a href="#3-pie-chart" class="post-jumper-item">
    <img src="/img/pie.png" alt="Pie chart" width="95" height="60">
    <span class="post-jumper-item-title">Pie chart</span>
  </a>
  <a href="#4-radar-chart" class="post-jumper-item">
    <img src="/img/radar.png" alt="Radar chart" width="95" height="60">
    <span class="post-jumper-item-title">Radar chart</span>
  </a>
  <a href="#5-polar-area-chart" class="post-jumper-item">
    <img src="/img/polar.png" alt="Polar area chart" width="95" height="60">
    <span class="post-jumper-item-title">Polar area</span>
  </a>
  <a href="#6-doughnut-chart" class="post-jumper-item">
    <img src="/img/doughnut.png" alt="Doughnut chart" width="95" height="60">
    <span class="post-jumper-item-title">Doughnut chart</span>
  </a>
  <a href="#7-horizontal-bar-chart" class="post-jumper-item">
    <img src="/img/horizontal.png" alt="Horizontal bar chart" width="95" height="60">
    <span class="post-jumper-item-title">Horizontal bars</span>
  </a>
  <a href="#8-grouped-bar-chart" class="post-jumper-item">
    <img src="/img/grouped.png" alt="Grouped bar chart" width="95" height="60">
    <span class="post-jumper-item-title">Grouped bars</span>
  </a>
  <a href="#9-mixed-chart" class="post-jumper-item">
    <img src="/img/mixed.png" alt="Mixed chart" width="95" height="60">
    <span class="post-jumper-item-title">Mixed charts</span>
  </a>
  <a href="#10-bubble-chart" class="post-jumper-item">
    <img src="/img/bubbles.png" alt="Bubble chart" width="95" height="60">
    <span class="post-jumper-item-title">Bubble chart</span>
  </a>
</div>

<h2 id="1-bar-chart">1. Bar chart<a href="#1-bar-chart" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#1-bar-chart</span></a></h2>

<p class="post-content-wrapper"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
  <canvas id="post-example-bar-chart" width="1320" height="742" style="display: block; height: 371px; width: 660px;"></canvas>
</p>

<p>Bar charts are created by setting <code class="language-plaintext highlighter-rouge">type</code> to <code class="language-plaintext highlighter-rouge">bar</code> (to flip the direction of the bars, <a class="red" href="#horizontal-bar-chart">set <code class="language-plaintext highlighter-rouge">type</code> to <code class="language-plaintext highlighter-rouge">horizontalBar</code></a>). The colors of the bars are set by passing one color to <code class="language-plaintext highlighter-rouge">backgroundColor</code> (all bars will have the same color), or an array of colors.</p>

<p>If you’re passing an array (like in the example below), the colors are assigned to the label and number that share the same index in their respective arrays. I.e., below, “Africa” being the first label, will be set to <code class="language-plaintext highlighter-rouge">#3e95cd</code> (the first color), and <code class="language-plaintext highlighter-rouge">2478</code> (the first number).</p>

<h4 id="bar-chart-html--javascript">Bar chart HTML &amp; JavaScript<a href="#bar-chart-html--javascript" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#bar-chart-html--javascript</span></a></h4>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;canvas</span> <span class="na">id=</span><span class="s">"bar-chart"</span> <span class="na">width=</span><span class="s">"800"</span> <span class="na">height=</span><span class="s">"450"</span><span class="nt">&gt;&lt;/canvas&gt;</span>
</code></pre></div></div>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// Bar chart</span>
<span class="k">new</span> <span class="nx">Chart</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">"</span><span class="s2">bar-chart</span><span class="dl">"</span><span class="p">),</span> <span class="p">{</span>
    <span class="na">type</span><span class="p">:</span> <span class="dl">'</span><span class="s1">bar</span><span class="dl">'</span><span class="p">,</span>
    <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">labels</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Asia</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Europe</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Latin America</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">North America</span><span class="dl">"</span><span class="p">],</span>
      <span class="na">datasets</span><span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Population (millions)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">#8e5ea2</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#3cba9f</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#e8c3b9</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#c45850</span><span class="dl">"</span><span class="p">],</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">2478</span><span class="p">,</span><span class="mi">5267</span><span class="p">,</span><span class="mi">734</span><span class="p">,</span><span class="mi">784</span><span class="p">,</span><span class="mi">433</span><span class="p">]</span>
        <span class="p">}</span>
      <span class="p">]</span>
    <span class="p">},</span>
    <span class="na">options</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">legend</span><span class="p">:</span> <span class="p">{</span> <span class="na">display</span><span class="p">:</span> <span class="kc">false</span> <span class="p">},</span>
      <span class="na">title</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">display</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
        <span class="na">text</span><span class="p">:</span> <span class="dl">'</span><span class="s1">Predicted world population (millions) in 2050</span><span class="dl">'</span>
      <span class="p">}</span>
    <span class="p">}</span>
<span class="p">});</span>
</code></pre></div></div>

<h2 id="2-line-chart">2. Line chart<a href="#2-line-chart" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#2-line-chart</span></a></h2>

<p class="post-content-wrapper"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
  <canvas id="post-example-line-chart" width="1320" height="742" style="display: block; height: 371px; width: 660px;"></canvas>
</p>

<p>Line charts are created by setting <code class="language-plaintext highlighter-rouge">type</code> to <code class="language-plaintext highlighter-rouge">line</code>. By default, lines come with a dark transparent fill, covering the area between the line and x-axis. I think these fills tend to obfuscate other lines, so I’ve removed them on every dataset in this example (<code class="language-plaintext highlighter-rouge">fill: false</code>).</p>

<p>If you want to remove fills for all your line graphs, a more efficiant way of achieving the same effect is to change the global default for fills: <code class="language-plaintext highlighter-rouge">Chart.defaults.global.elements.line.fill = false;</code>.</p>

<h4 id="line-chart-html--javascript">Line chart: HTML &amp; JavaScript<a href="#line-chart-html--javascript" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#line-chart-html--javascript</span></a></h4>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;canvas</span> <span class="na">id=</span><span class="s">"line-chart"</span> <span class="na">width=</span><span class="s">"800"</span> <span class="na">height=</span><span class="s">"450"</span><span class="nt">&gt;&lt;/canvas&gt;</span>
</code></pre></div></div>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="k">new</span> <span class="nx">Chart</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">"</span><span class="s2">line-chart</span><span class="dl">"</span><span class="p">),</span> <span class="p">{</span>
  <span class="na">type</span><span class="p">:</span> <span class="dl">'</span><span class="s1">line</span><span class="dl">'</span><span class="p">,</span>
  <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
    <span class="na">labels</span><span class="p">:</span> <span class="p">[</span><span class="mi">1500</span><span class="p">,</span><span class="mi">1600</span><span class="p">,</span><span class="mi">1700</span><span class="p">,</span><span class="mi">1750</span><span class="p">,</span><span class="mi">1800</span><span class="p">,</span><span class="mi">1850</span><span class="p">,</span><span class="mi">1900</span><span class="p">,</span><span class="mi">1950</span><span class="p">,</span><span class="mi">1999</span><span class="p">,</span><span class="mi">2050</span><span class="p">],</span>
    <span class="na">datasets</span><span class="p">:</span> <span class="p">[{</span> 
        <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">86</span><span class="p">,</span><span class="mi">114</span><span class="p">,</span><span class="mi">106</span><span class="p">,</span><span class="mi">106</span><span class="p">,</span><span class="mi">107</span><span class="p">,</span><span class="mi">111</span><span class="p">,</span><span class="mi">133</span><span class="p">,</span><span class="mi">221</span><span class="p">,</span><span class="mi">783</span><span class="p">,</span><span class="mi">2478</span><span class="p">],</span>
        <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span><span class="p">,</span>
        <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span>
        <span class="na">fill</span><span class="p">:</span> <span class="kc">false</span>
      <span class="p">},</span> <span class="p">{</span> 
        <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">282</span><span class="p">,</span><span class="mi">350</span><span class="p">,</span><span class="mi">411</span><span class="p">,</span><span class="mi">502</span><span class="p">,</span><span class="mi">635</span><span class="p">,</span><span class="mi">809</span><span class="p">,</span><span class="mi">947</span><span class="p">,</span><span class="mi">1402</span><span class="p">,</span><span class="mi">3700</span><span class="p">,</span><span class="mi">5267</span><span class="p">],</span>
        <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Asia</span><span class="dl">"</span><span class="p">,</span>
        <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#8e5ea2</span><span class="dl">"</span><span class="p">,</span>
        <span class="na">fill</span><span class="p">:</span> <span class="kc">false</span>
      <span class="p">},</span> <span class="p">{</span> 
        <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">168</span><span class="p">,</span><span class="mi">170</span><span class="p">,</span><span class="mi">178</span><span class="p">,</span><span class="mi">190</span><span class="p">,</span><span class="mi">203</span><span class="p">,</span><span class="mi">276</span><span class="p">,</span><span class="mi">408</span><span class="p">,</span><span class="mi">547</span><span class="p">,</span><span class="mi">675</span><span class="p">,</span><span class="mi">734</span><span class="p">],</span>
        <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Europe</span><span class="dl">"</span><span class="p">,</span>
        <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#3cba9f</span><span class="dl">"</span><span class="p">,</span>
        <span class="na">fill</span><span class="p">:</span> <span class="kc">false</span>
      <span class="p">},</span> <span class="p">{</span> 
        <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">40</span><span class="p">,</span><span class="mi">20</span><span class="p">,</span><span class="mi">10</span><span class="p">,</span><span class="mi">16</span><span class="p">,</span><span class="mi">24</span><span class="p">,</span><span class="mi">38</span><span class="p">,</span><span class="mi">74</span><span class="p">,</span><span class="mi">167</span><span class="p">,</span><span class="mi">508</span><span class="p">,</span><span class="mi">784</span><span class="p">],</span>
        <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Latin America</span><span class="dl">"</span><span class="p">,</span>
        <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#e8c3b9</span><span class="dl">"</span><span class="p">,</span>
        <span class="na">fill</span><span class="p">:</span> <span class="kc">false</span>
      <span class="p">},</span> <span class="p">{</span> 
        <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">6</span><span class="p">,</span><span class="mi">3</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="mi">7</span><span class="p">,</span><span class="mi">26</span><span class="p">,</span><span class="mi">82</span><span class="p">,</span><span class="mi">172</span><span class="p">,</span><span class="mi">312</span><span class="p">,</span><span class="mi">433</span><span class="p">],</span>
        <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">North America</span><span class="dl">"</span><span class="p">,</span>
        <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#c45850</span><span class="dl">"</span><span class="p">,</span>
        <span class="na">fill</span><span class="p">:</span> <span class="kc">false</span>
      <span class="p">}</span>
    <span class="p">]</span>
  <span class="p">},</span>
  <span class="na">options</span><span class="p">:</span> <span class="p">{</span>
    <span class="na">title</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">display</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
      <span class="na">text</span><span class="p">:</span> <span class="dl">'</span><span class="s1">World population per region (in millions)</span><span class="dl">'</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">});</span>
</code></pre></div></div>

<h2 id="3-pie-chart">3. Pie chart<a href="#3-pie-chart" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#3-pie-chart</span></a></h2>

<p class="post-content-wrapper"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
  <canvas id="post-example-pie-chart" width="1320" height="742" style="display: block; height: 371px; width: 660px;"></canvas>
</p>

<p>Pie charts are created by setting <code class="language-plaintext highlighter-rouge">type</code> to <code class="language-plaintext highlighter-rouge">pie</code>. They are almost identical to <a class="red" href="#doughnut-chart">doughnut charts</a>, and will work with the same configurations (part from changing the type).</p>

<h4 id="pie-chart-html--javascript">Pie chart: HTML &amp; JavaScript<a href="#pie-chart-html--javascript" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#pie-chart-html--javascript</span></a></h4>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;canvas</span> <span class="na">id=</span><span class="s">"pie-chart"</span> <span class="na">width=</span><span class="s">"800"</span> <span class="na">height=</span><span class="s">"450"</span><span class="nt">&gt;&lt;/canvas&gt;</span>
</code></pre></div></div>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="k">new</span> <span class="nx">Chart</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">"</span><span class="s2">pie-chart</span><span class="dl">"</span><span class="p">),</span> <span class="p">{</span>
    <span class="na">type</span><span class="p">:</span> <span class="dl">'</span><span class="s1">pie</span><span class="dl">'</span><span class="p">,</span>
    <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">labels</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Asia</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Europe</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Latin America</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">North America</span><span class="dl">"</span><span class="p">],</span>
      <span class="na">datasets</span><span class="p">:</span> <span class="p">[{</span>
        <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Population (millions)</span><span class="dl">"</span><span class="p">,</span>
        <span class="na">backgroundColor</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">#8e5ea2</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#3cba9f</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#e8c3b9</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#c45850</span><span class="dl">"</span><span class="p">],</span>
        <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">2478</span><span class="p">,</span><span class="mi">5267</span><span class="p">,</span><span class="mi">734</span><span class="p">,</span><span class="mi">784</span><span class="p">,</span><span class="mi">433</span><span class="p">]</span>
      <span class="p">}]</span>
    <span class="p">},</span>
    <span class="na">options</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">title</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">display</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
        <span class="na">text</span><span class="p">:</span> <span class="dl">'</span><span class="s1">Predicted world population (millions) in 2050</span><span class="dl">'</span>
      <span class="p">}</span>
    <span class="p">}</span>
<span class="p">});</span>
</code></pre></div></div>

<h2 id="4-radar-chart">4. Radar chart<a href="#4-radar-chart" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#4-radar-chart</span></a></h2>

<p class="post-content-wrapper"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
  <canvas id="post-example-radar-chart" width="1320" height="990" style="display: block; height: 495px; width: 660px;"></canvas>
</p>

<h4 id="radar-chart-html--javascript">Radar chart: HTML &amp; JavaScript<a href="#radar-chart-html--javascript" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#radar-chart-html--javascript</span></a></h4>

<p>Radar charts—also known as web charts, spider charts, star charts—are created by setting <code class="language-plaintext highlighter-rouge">type</code> to <code class="language-plaintext highlighter-rouge">radar</code>. Radar charts typically require more vertical space than other graphs to be legible, so you might have to tweak the graph proportions.</p>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;canvas</span> <span class="na">id=</span><span class="s">"radar-chart"</span> <span class="na">width=</span><span class="s">"800"</span> <span class="na">height=</span><span class="s">"600"</span><span class="nt">&gt;&lt;/canvas&gt;</span>
</code></pre></div></div>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="k">new</span> <span class="nx">Chart</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">"</span><span class="s2">radar-chart</span><span class="dl">"</span><span class="p">),</span> <span class="p">{</span>
    <span class="na">type</span><span class="p">:</span> <span class="dl">'</span><span class="s1">radar</span><span class="dl">'</span><span class="p">,</span>
    <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">labels</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Asia</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Europe</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Latin America</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">North America</span><span class="dl">"</span><span class="p">],</span>
      <span class="na">datasets</span><span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">1950</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">fill</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(179,181,198,0.2)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(179,181,198,1)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">pointBorderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#fff</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">pointBackgroundColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(179,181,198,1)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mf">8.77</span><span class="p">,</span><span class="mf">55.61</span><span class="p">,</span><span class="mf">21.69</span><span class="p">,</span><span class="mf">6.62</span><span class="p">,</span><span class="mf">6.82</span><span class="p">]</span>
        <span class="p">},</span> <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">2050</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">fill</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(255,99,132,0.2)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(255,99,132,1)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">pointBorderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#fff</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">pointBackgroundColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(255,99,132,1)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">pointBorderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#fff</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mf">25.48</span><span class="p">,</span><span class="mf">54.16</span><span class="p">,</span><span class="mf">7.61</span><span class="p">,</span><span class="mf">8.06</span><span class="p">,</span><span class="mf">4.45</span><span class="p">]</span>
        <span class="p">}</span>
      <span class="p">]</span>
    <span class="p">},</span>
    <span class="na">options</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">title</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">display</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
        <span class="na">text</span><span class="p">:</span> <span class="dl">'</span><span class="s1">Distribution in % of world population</span><span class="dl">'</span>
      <span class="p">}</span>
    <span class="p">}</span>
<span class="p">});</span>
</code></pre></div></div>

<h2 id="5-polar-area-chart">5. Polar area chart<a href="#5-polar-area-chart" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#5-polar-area-chart</span></a></h2>

<p class="post-content-wrapper"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
  <canvas id="post-example-polar-chart" width="1320" height="742" style="display: block; height: 371px; width: 660px;"></canvas>
</p>

<p>A polar area chart is created by setting <code class="language-plaintext highlighter-rouge">type</code> to <code class="language-plaintext highlighter-rouge">polarArea</code>. Polar area charts are closely related to pie charts, with the difference that in addition to the angles representing the relative size of the data points, the radius of each element is set in relation to its value.</p>

<h4 id="polar-chart-html--javascript">Polar chart: HTML &amp; JavaScript<a href="#polar-chart-html--javascript" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#polar-chart-html--javascript</span></a></h4>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;canvas</span> <span class="na">id=</span><span class="s">"polar-chart"</span> <span class="na">width=</span><span class="s">"800"</span> <span class="na">height=</span><span class="s">"450"</span><span class="nt">&gt;&lt;/canvas&gt;</span>
</code></pre></div></div>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="k">new</span> <span class="nx">Chart</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">"</span><span class="s2">polar-chart</span><span class="dl">"</span><span class="p">),</span> <span class="p">{</span>
    <span class="na">type</span><span class="p">:</span> <span class="dl">'</span><span class="s1">polarArea</span><span class="dl">'</span><span class="p">,</span>
    <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">labels</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Asia</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Europe</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Latin America</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">North America</span><span class="dl">"</span><span class="p">],</span>
      <span class="na">datasets</span><span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Population (millions)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">#8e5ea2</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#3cba9f</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#e8c3b9</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#c45850</span><span class="dl">"</span><span class="p">],</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">2478</span><span class="p">,</span><span class="mi">5267</span><span class="p">,</span><span class="mi">734</span><span class="p">,</span><span class="mi">784</span><span class="p">,</span><span class="mi">433</span><span class="p">]</span>
        <span class="p">}</span>
      <span class="p">]</span>
    <span class="p">},</span>
    <span class="na">options</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">title</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">display</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
        <span class="na">text</span><span class="p">:</span> <span class="dl">'</span><span class="s1">Predicted world population (millions) in 2050</span><span class="dl">'</span>
      <span class="p">}</span>
    <span class="p">}</span>
<span class="p">});</span>
</code></pre></div></div>

<h2 id="6-doughnut-chart">6. Doughnut chart<a href="#6-doughnut-chart" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#6-doughnut-chart</span></a></h2>

<p class="post-content-wrapper"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
  <canvas id="post-example-doughnut-chart" width="1320" height="742" style="display: block; height: 371px; width: 660px;"></canvas>
</p>

<p>Doughnut charts are created by setting <code class="language-plaintext highlighter-rouge">type</code> to <code class="language-plaintext highlighter-rouge">doughnut</code>. They are almost identical to <a class="red" href="#pie-chart">pie charts</a>, and will work the same configurations.</p>

<h4 id="doughnut-chart-html--javascript">Doughnut chart: HTML &amp; JavaScript<a href="#doughnut-chart-html--javascript" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#doughnut-chart-html--javascript</span></a></h4>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;canvas</span> <span class="na">id=</span><span class="s">"doughnut-chart"</span> <span class="na">width=</span><span class="s">"800"</span> <span class="na">height=</span><span class="s">"450"</span><span class="nt">&gt;&lt;/canvas&gt;</span>
</code></pre></div></div>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="k">new</span> <span class="nx">Chart</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">"</span><span class="s2">doughnut-chart</span><span class="dl">"</span><span class="p">),</span> <span class="p">{</span>
    <span class="na">type</span><span class="p">:</span> <span class="dl">'</span><span class="s1">doughnut</span><span class="dl">'</span><span class="p">,</span>
    <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">labels</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Asia</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Europe</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Latin America</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">North America</span><span class="dl">"</span><span class="p">],</span>
      <span class="na">datasets</span><span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Population (millions)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">#8e5ea2</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#3cba9f</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#e8c3b9</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#c45850</span><span class="dl">"</span><span class="p">],</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">2478</span><span class="p">,</span><span class="mi">5267</span><span class="p">,</span><span class="mi">734</span><span class="p">,</span><span class="mi">784</span><span class="p">,</span><span class="mi">433</span><span class="p">]</span>
        <span class="p">}</span>
      <span class="p">]</span>
    <span class="p">},</span>
    <span class="na">options</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">title</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">display</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
        <span class="na">text</span><span class="p">:</span> <span class="dl">'</span><span class="s1">Predicted world population (millions) in 2050</span><span class="dl">'</span>
      <span class="p">}</span>
    <span class="p">}</span>
<span class="p">});</span>
</code></pre></div></div>

<h2 id="7-horizontal-bar-chart">7. Horizontal bar chart<a href="#7-horizontal-bar-chart" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#7-horizontal-bar-chart</span></a></h2>

<p class="post-content-wrapper"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
  <canvas id="post-example-bar-chart-horizontal" width="1320" height="742" style="display: block; height: 371px; width: 660px;"></canvas>
</p>

<p>Horizontal bar charts are created by setting <code class="language-plaintext highlighter-rouge">type</code> to <code class="language-plaintext highlighter-rouge">horizontalBar</code>. They are identical to regular bar charts in every other aspect, and will work with the same configurations.</p>

<h4 id="horizontal-bar-chart-html--javascript">Horizontal bar chart: HTML &amp; JavaScript<a href="#horizontal-bar-chart-html--javascript" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#horizontal-bar-chart-html--javascript</span></a></h4>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;canvas</span> <span class="na">id=</span><span class="s">"bar-chart-horizontal"</span> <span class="na">width=</span><span class="s">"800"</span> <span class="na">height=</span><span class="s">"450"</span><span class="nt">&gt;&lt;/canvas&gt;</span>
</code></pre></div></div>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="k">new</span> <span class="nx">Chart</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">"</span><span class="s2">bar-chart-horizontal</span><span class="dl">"</span><span class="p">),</span> <span class="p">{</span>
    <span class="na">type</span><span class="p">:</span> <span class="dl">'</span><span class="s1">horizontalBar</span><span class="dl">'</span><span class="p">,</span>
    <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">labels</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Asia</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Europe</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">Latin America</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">North America</span><span class="dl">"</span><span class="p">],</span>
      <span class="na">datasets</span><span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Population (millions)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">#8e5ea2</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#3cba9f</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#e8c3b9</span><span class="dl">"</span><span class="p">,</span><span class="dl">"</span><span class="s2">#c45850</span><span class="dl">"</span><span class="p">],</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">2478</span><span class="p">,</span><span class="mi">5267</span><span class="p">,</span><span class="mi">734</span><span class="p">,</span><span class="mi">784</span><span class="p">,</span><span class="mi">433</span><span class="p">]</span>
        <span class="p">}</span>
      <span class="p">]</span>
    <span class="p">},</span>
    <span class="na">options</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">legend</span><span class="p">:</span> <span class="p">{</span> <span class="na">display</span><span class="p">:</span> <span class="kc">false</span> <span class="p">},</span>
      <span class="na">title</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">display</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
        <span class="na">text</span><span class="p">:</span> <span class="dl">'</span><span class="s1">Predicted world population (millions) in 2050</span><span class="dl">'</span>
      <span class="p">}</span>
    <span class="p">}</span>
<span class="p">});</span>
</code></pre></div></div>

<h2 id="8-grouped-bar-chart">8. Grouped bar chart<a href="#8-grouped-bar-chart" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#8-grouped-bar-chart</span></a></h2>

<p class="post-content-wrapper"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
  <canvas id="post-example-bar-chart-grouped" width="1320" height="742" style="display: block; height: 371px; width: 660px;"></canvas>
</p>

<p>A grouped bar chart is not a unique chart type per say, but it requires you to setup your data a bit differently compared to the bar charts we’ve seen so far.</p>

<p><code class="language-plaintext highlighter-rouge">type</code> is still set to <code class="language-plaintext highlighter-rouge">bar</code>, but as soon as you pass more than one object to <code class="language-plaintext highlighter-rouge">datasets</code>, Chart.js will create a new group of bars for every object. Setting the color for that group of bars is then done by passing a color to <code class="language-plaintext highlighter-rouge">backgroundColor</code>.</p>

<h4 id="grouped-bar-chart-html--javascript">Grouped bar chart: HTML &amp; JavaScript<a href="#grouped-bar-chart-html--javascript" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#grouped-bar-chart-html--javascript</span></a></h4>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;canvas</span> <span class="na">id=</span><span class="s">"bar-chart-grouped"</span> <span class="na">width=</span><span class="s">"800"</span> <span class="na">height=</span><span class="s">"450"</span><span class="nt">&gt;&lt;/canvas&gt;</span>
</code></pre></div></div>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="k">new</span> <span class="nx">Chart</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">"</span><span class="s2">bar-chart-grouped</span><span class="dl">"</span><span class="p">),</span> <span class="p">{</span>
    <span class="na">type</span><span class="p">:</span> <span class="dl">'</span><span class="s1">bar</span><span class="dl">'</span><span class="p">,</span>
    <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">labels</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">1900</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">1950</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">1999</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">2050</span><span class="dl">"</span><span class="p">],</span>
      <span class="na">datasets</span><span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">133</span><span class="p">,</span><span class="mi">221</span><span class="p">,</span><span class="mi">783</span><span class="p">,</span><span class="mi">2478</span><span class="p">]</span>
        <span class="p">},</span> <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Europe</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#8e5ea2</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">408</span><span class="p">,</span><span class="mi">547</span><span class="p">,</span><span class="mi">675</span><span class="p">,</span><span class="mi">734</span><span class="p">]</span>
        <span class="p">}</span>
      <span class="p">]</span>
    <span class="p">},</span>
    <span class="na">options</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">title</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">display</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
        <span class="na">text</span><span class="p">:</span> <span class="dl">'</span><span class="s1">Population growth (millions)</span><span class="dl">'</span>
      <span class="p">}</span>
    <span class="p">}</span>
<span class="p">});</span>
</code></pre></div></div>

<h2 id="9-mixed-chart">9. Mixed chart<a href="#9-mixed-chart" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#9-mixed-chart</span></a></h2>

<p class="post-content-wrapper"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
  <canvas id="post-example-mixed-chart" width="1320" height="742" style="display: block; height: 371px; width: 660px;"></canvas>
</p>

<p>You can mix several charts and overlay them on top of each other. This is done by setting <code class="language-plaintext highlighter-rouge">type</code> to <code class="language-plaintext highlighter-rouge">bar</code> (<strong>not</strong> to e.g. <code class="language-plaintext highlighter-rouge">mixed</code> or <code class="language-plaintext highlighter-rouge">line</code>—it has to be <code class="language-plaintext highlighter-rouge">bar</code>), and then setting the bar type for every dataset object in your datasets array.</p>

<p>To produce the graph above, for example, we have four data objects: two set to <code class="language-plaintext highlighter-rouge">bar</code>, and two set to <code class="language-plaintext highlighter-rouge">line</code>, while the <code class="language-plaintext highlighter-rouge">type</code> for the Chart object is set to <code class="language-plaintext highlighter-rouge">bar</code>.</p>

<h4 id="mixed-chart-html--javascript">Mixed chart: HTML &amp; JavaScript<a href="#mixed-chart-html--javascript" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#mixed-chart-html--javascript</span></a></h4>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;canvas</span> <span class="na">id=</span><span class="s">"mixed-chart"</span> <span class="na">width=</span><span class="s">"800"</span> <span class="na">height=</span><span class="s">"450"</span><span class="nt">&gt;&lt;/canvas&gt;</span>
</code></pre></div></div>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="k">new</span> <span class="nx">Chart</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">"</span><span class="s2">mixed-chart</span><span class="dl">"</span><span class="p">),</span> <span class="p">{</span>
    <span class="na">type</span><span class="p">:</span> <span class="dl">'</span><span class="s1">bar</span><span class="dl">'</span><span class="p">,</span>
    <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">labels</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">1900</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">1950</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">1999</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">2050</span><span class="dl">"</span><span class="p">],</span>
      <span class="na">datasets</span><span class="p">:</span> <span class="p">[{</span>
          <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Europe</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">type</span><span class="p">:</span> <span class="dl">"</span><span class="s2">line</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#8e5ea2</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">408</span><span class="p">,</span><span class="mi">547</span><span class="p">,</span><span class="mi">675</span><span class="p">,</span><span class="mi">734</span><span class="p">],</span>
          <span class="na">fill</span><span class="p">:</span> <span class="kc">false</span>
        <span class="p">},</span> <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">type</span><span class="p">:</span> <span class="dl">"</span><span class="s2">line</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">133</span><span class="p">,</span><span class="mi">221</span><span class="p">,</span><span class="mi">783</span><span class="p">,</span><span class="mi">2478</span><span class="p">],</span>
          <span class="na">fill</span><span class="p">:</span> <span class="kc">false</span>
        <span class="p">},</span> <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Europe</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">type</span><span class="p">:</span> <span class="dl">"</span><span class="s2">bar</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(0,0,0,0.2)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">408</span><span class="p">,</span><span class="mi">547</span><span class="p">,</span><span class="mi">675</span><span class="p">,</span><span class="mi">734</span><span class="p">],</span>
        <span class="p">},</span> <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">type</span><span class="p">:</span> <span class="dl">"</span><span class="s2">bar</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(0,0,0,0.2)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">backgroundColorHover</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[</span><span class="mi">133</span><span class="p">,</span><span class="mi">221</span><span class="p">,</span><span class="mi">783</span><span class="p">,</span><span class="mi">2478</span><span class="p">]</span>
        <span class="p">}</span>
      <span class="p">]</span>
    <span class="p">},</span>
    <span class="na">options</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">title</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">display</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
        <span class="na">text</span><span class="p">:</span> <span class="dl">'</span><span class="s1">Population growth (millions): Europe &amp; Africa</span><span class="dl">'</span>
      <span class="p">},</span>
      <span class="na">legend</span><span class="p">:</span> <span class="p">{</span> <span class="na">display</span><span class="p">:</span> <span class="kc">false</span> <span class="p">}</span>
    <span class="p">}</span>
<span class="p">});</span>
</code></pre></div></div>

<h2 id="10-bubble-chart">10. Bubble chart<a href="#10-bubble-chart" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#10-bubble-chart</span></a></h2>

<p class="post-content-wrapper"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
  <canvas id="post-example-bubble-chart" width="1320" height="1320" style="display: block; height: 660px; width: 660px;"></canvas>
</p>

<p>Last but not least, there’s the bubble chart, a favorite of <a class="red" href="https://www.ted.com/talks/hans_rosling_shows_the_best_stats_you_ve_ever_seen">Hans Rosling</a>. Bubble charts can be great for visualizing a lot of different data points simultaneously. In this example, every bubble is made up of three values: x position, y position, and size (<code class="language-plaintext highlighter-rouge">r</code>)—showing the GDP, happiness, and population, respectively, of each country.</p>

<p>In the example above, I’m using the happiness index from the <a class="red" href="http://worldhappiness.report/wp-content/uploads/sites/2/2016/03/HR-V1Ch2_web.pdf">World Happiness Report</a> for a country’s Y position, GDP estimates from <a class="red" href="http://bit.ly/2dcX425">International Monetary Fund</a> to set the X position, and the population size to set the size of the bubble. (Note that I’ve removed some of the data in the example code to reduce the amount of code you have to copy.)</p>

<p>You can pass several objects (setting <code class="language-plaintext highlighter-rouge">x</code>, <code class="language-plaintext highlighter-rouge">y</code>, and <code class="language-plaintext highlighter-rouge">x</code>) to each <code class="language-plaintext highlighter-rouge">data</code> array within every dataset object (each object will create a new bubble), but in this example I’m using only one object per array since I want every bubble to have a unique color and label.</p>

<h4 id="bubble-chart-html--javascript">Bubble chart: HTML &amp; JavaScript<a href="#bubble-chart-html--javascript" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#bubble-chart-html--javascript</span></a></h4>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;canvas</span> <span class="na">id=</span><span class="s">"bubble-chart"</span> <span class="na">width=</span><span class="s">"800"</span> <span class="na">height=</span><span class="s">"800"</span><span class="nt">&gt;&lt;/canvas&gt;</span>
</code></pre></div></div>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="k">new</span> <span class="nx">Chart</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">"</span><span class="s2">bubble-chart</span><span class="dl">"</span><span class="p">),</span> <span class="p">{</span>
    <span class="na">type</span><span class="p">:</span> <span class="dl">'</span><span class="s1">bubble</span><span class="dl">'</span><span class="p">,</span>
    <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">labels</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span><span class="p">,</span>
      <span class="na">datasets</span><span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">China</span><span class="dl">"</span><span class="p">],</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(255,221,50,0.2)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(255,221,50,1)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[{</span>
            <span class="na">x</span><span class="p">:</span> <span class="mi">21269017</span><span class="p">,</span>
            <span class="na">y</span><span class="p">:</span> <span class="mf">5.245</span><span class="p">,</span>
            <span class="na">r</span><span class="p">:</span> <span class="mi">15</span>
          <span class="p">}]</span>
        <span class="p">},</span> <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">Denmark</span><span class="dl">"</span><span class="p">],</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(60,186,159,0.2)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(60,186,159,1)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[{</span>
            <span class="na">x</span><span class="p">:</span> <span class="mi">258702</span><span class="p">,</span>
            <span class="na">y</span><span class="p">:</span> <span class="mf">7.526</span><span class="p">,</span>
            <span class="na">r</span><span class="p">:</span> <span class="mi">10</span>
          <span class="p">}]</span>
        <span class="p">},</span> <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">Germany</span><span class="dl">"</span><span class="p">],</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(0,0,0,0.2)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#000</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[{</span>
            <span class="na">x</span><span class="p">:</span> <span class="mi">3979083</span><span class="p">,</span>
            <span class="na">y</span><span class="p">:</span> <span class="mf">6.994</span><span class="p">,</span>
            <span class="na">r</span><span class="p">:</span> <span class="mi">15</span>
          <span class="p">}]</span>
        <span class="p">},</span> <span class="p">{</span>
          <span class="na">label</span><span class="p">:</span> <span class="p">[</span><span class="dl">"</span><span class="s2">Japan</span><span class="dl">"</span><span class="p">],</span>
          <span class="na">backgroundColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(193,46,12,0.2)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">rgba(193,46,12,1)</span><span class="dl">"</span><span class="p">,</span>
          <span class="na">data</span><span class="p">:</span> <span class="p">[{</span>
            <span class="na">x</span><span class="p">:</span> <span class="mi">4931877</span><span class="p">,</span>
            <span class="na">y</span><span class="p">:</span> <span class="mf">5.921</span><span class="p">,</span>
            <span class="na">r</span><span class="p">:</span> <span class="mi">15</span>
          <span class="p">}]</span>
        <span class="p">}</span>
      <span class="p">]</span>
    <span class="p">},</span>
    <span class="na">options</span><span class="p">:</span> <span class="p">{</span>
      <span class="na">title</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">display</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
        <span class="na">text</span><span class="p">:</span> <span class="dl">'</span><span class="s1">Predicted world population (millions) in 2050</span><span class="dl">'</span>
      <span class="p">},</span> <span class="na">scales</span><span class="p">:</span> <span class="p">{</span>
        <span class="na">yAxes</span><span class="p">:</span> <span class="p">[{</span> 
          <span class="na">scaleLabel</span><span class="p">:</span> <span class="p">{</span>
            <span class="na">display</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
            <span class="na">labelString</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Happiness</span><span class="dl">"</span>
          <span class="p">}</span>
        <span class="p">}],</span>
        <span class="na">xAxes</span><span class="p">:</span> <span class="p">[{</span> 
          <span class="na">scaleLabel</span><span class="p">:</span> <span class="p">{</span>
            <span class="na">display</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
            <span class="na">labelString</span><span class="p">:</span> <span class="dl">"</span><span class="s2">GDP (PPP)</span><span class="dl">"</span>
          <span class="p">}</span>
        <span class="p">}]</span>
      <span class="p">}</span>
    <span class="p">}</span>
<span class="p">});</span>
</code></pre></div></div>

<h2 id="next-steps">Next steps<a href="#next-steps" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chartjs-charts-to-get-you-started/#next-steps</span></a></h2>

<p>I hope you’ll be able to kick-start your process and quickly get started with these template graphs. Chart.js is highly customizable, so if you want to change the design of the graphs I recommend digging into <a class="red" href="http://www.chartjs.org/docs/">the official documentation</a> to explore all the parameters that you can tweak.</p>

<p>If you’re new to <a class="red" href="http://www.chartjs.org/">Chart.js</a> and want to get a better overview of the library, I recommend reading my earlier post: <a class="red" href="/blog/introduction-to-chartjs/">Data visualization with Chart.js: An introduction</a>.</p>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

        <script src="/js/chartjs-example.js"></script>


	</div>
</div>


            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #E8C3B9">
                        <div class="post-categories-links">
                
                             <a class="post-categories-link" href="/blog/javascript/">javascript</a>
                                    <span class="post-categories-link-divider">/</span>
                            
                            <a class="post-categories-link" href="/blog/data/">data</a>
                                    <span class="post-categories-link-divider">/</span>   

                            <a class="post-categories-link" href="/blog/tutorials/">tutorial</a>
                
                        </div>
                        <span class="section-header section-header-small post-categories-date">03/05/2017</span>
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