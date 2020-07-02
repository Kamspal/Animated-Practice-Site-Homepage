@extends('layouts')
@section('title', 'Data visualization with Chart.js: An introduction | Tobias Ahlin')
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
	<div class="single-post-head" style="background-color: #98bec8">
			<h1 class="post-header">Data visualization with Chart.js: An introduction</h1>
    </div>
	
	<div class="article article-single">
		<div class="blog-banner">
  <div class="blog-banner-content">
      <img class="chartjs-banner-logo" src="/img/chartjs-logo.svg" alt="Graph.js" height="110" width="110">
  </div>
</div>

<!--more-->

<p>You can tell powerful stories with data. If you want to visualize data in a blog post, on your site, or in a presentation, there are a few libraries out there that can help you achieve stunning results with relatively little work. <a class="red" href="http://www.chartjs.org">Chart.js</a> is one of those libraries. When I’m teaching data at <a class="red" href="https://www.hyperisland.com">Hyper Island</a>, this is one of the essential tools that’s included in the <a class="red" href="https://www.hyperisland.com/programs-and-courses/digital-data-strategist">Data Strategist</a> program. Although less flexible and capable than <a class="red" href="https://d3js.org">D3</a>, it’s easier to wrap your head around and to get started with, yet powerful enough to cover more than just your basic needs. In this introductory tutorial we’ll build an interactive graph and get a brief overview of the framework’s cababilities.</p>

<h2 id="what-well-build">What we’ll build<a href="#what-well-build" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#what-well-build</span></a></h2>

<p>We’re going to create a simple but powerful responsive line graph, visualizing the world population during the last 500 years, and a prediction for 2050:</p>

<h4 id="number-of-earthlings-in-millions">Number of earthlings (in millions)<a href="#number-of-earthlings-in-millions" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#number-of-earthlings-in-millions</span></a></h4>

<p class="post-content-wrapper"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
  <canvas id="myChart" width="1320" height="742" style="display: block; height: 371px; width: 660px;"></canvas>
</p>

<style>
    #myChart {
    width: 100%;
    }
</style>

<p>We’ll customize the graph to use our own colors, and you’ll be able to click the legends to toggle the visibility of the corresponding lines, as well as hover the points for details. You can <a class="red" href="/demo/chartjs-intro/static/final.zip">download the finished result</a> or <a class="red" href="/demo/chartjs-intro/">view the demo</a>.</p>

<h2 id="what-youll-need">What you’ll need<a href="#what-youll-need" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#what-youll-need</span></a></h2>

<p>No prior experience with either HTML, CSS or JavaScript is needed to go through this tutorial. Hi beginners 👋 some experience will help you grasp the nuances of what’s going on, but regardless of your level of expertize, coming out on the other side of the tutorial you’ll have a graph. All you need is a text editor (I highly recommend <a class="red" href="https://www.sublimetext.com">Sublime</a> or <a class="red" href="https://atom.io">Atom</a>).</p>

<h2 id="wait-whats-chartjs">Wait, what’s Chart.js?<a href="#wait-whats-chartjs" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#wait-whats-chartjs</span></a></h2>

<p><img alt="Chart.js logo" src="/img/chartjs-logo.svg" class="alignright"> Chart.js is a community maintained open-source library (it’s <a class="red" href="https://github.com/chartjs/Chart.js">available on GitHub</a>) that helps you easily visualize data using JavaScript. It’s similar to <a class="red" href="https://gionkunz.github.io/chartist-js/">Chartist</a> and <a class="red" href="https://developers.google.com/chart/">Google Charts</a>. It supports 8 different chart types (including bars, lines, &amp; pies), and they’re all responsive. In other words, you set up your chart once, and Chart.js will do the heavy-lifting for you and make sure that it’s always legible (for example by removing some uncritical details if the chart gets smaller).</p>

<p>In a gist, this is what you need to do to draw a chart with Chart.js:</p>

<ol>
  <li>Define <em>where</em> on your page to draw the graph.</li>
  <li>Define <em>what type of graph</em> you want to draw.</li>
  <li><em>Supply Chart.js with data</em>, labels, and other options.</li>
</ol>

<p>…and you’ll get a beautiful, responsive, graph! Although we won’t dig too deep into changing the design of our graph in this tutorial, Chart.js graphs are highly customizable. As a rule, whatever you see you can affect, and although the charts look good without much customization, you’ll likely be able to realize all your (or someone else’s) design visions with some extra effort.</p>

<h2 id="step-1-add-chartjs">Step 1: Add Chart.js<a href="#step-1-add-chartjs" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#step-1-add-chartjs</span></a></h2>

<p>First of we need to add Chart.js to our page so that we can use the library. For this project, I’ve prepared a simple playground with a HTML file with only the essentials. <a class="red" href="/demo/chartjs-intro/static/starting-point.zip">Download the starting point</a> and open the folder, and you should see three files:</p>

<ul style="list-style: square">
  <li>index.html</li>
  <li>styles.css</li>
  <li>script.js</li>
</ul>

<p>I’ve added some basic styling to <code class="language-plaintext highlighter-rouge">style.css</code>, but <code class="language-plaintext highlighter-rouge">script.js</code> is completely empty—this is where we’ll add the code to draw our graph in a moment. For now, open up <code class="language-plaintext highlighter-rouge">index.html</code> in a text editor. To use Chart.js we need to link to the library inside of our <code class="language-plaintext highlighter-rouge">head</code>. You could download the library and host it yourself, but the easiest (and probably fastest) way is to just use a CDN (<em>content delivery network</em>, in this instance a fancy way of saying “nice people who’re hosting the libraries we need”).</p>

<p>If you go to <a class="red" href="http://www.chartjs.org">chartjs.org</a> and click on <em>Documentation</em>, you’ll see a link to <a class="red" href="https://cdnjs.com/libraries/Chart.js">their recommended CDN</a>. Follow the link, and look for the URL ending with <code class="language-plaintext highlighter-rouge">Chart.min.js</code>. At the time of this writing, the latest version is <code class="language-plaintext highlighter-rouge">2.5.0</code>:</p>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
</code></pre></div></div>

<p>Copy and paste this row onto row 5 in <code class="language-plaintext highlighter-rouge">index.html</code>. After pasting, your <code class="language-plaintext highlighter-rouge">head</code> should look like so:</p>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;head&gt;</span>
  <span class="nt">&lt;title&gt;</span>World population<span class="nt">&lt;/title&gt;</span>
  <span class="nt">&lt;script </span><span class="na">src=</span><span class="s">"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
  <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">type=</span><span class="s">"text/css"</span> <span class="na">href=</span><span class="s">"style.css"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/head&gt;</span>
</code></pre></div></div>

<h2 id="step-2-prepare-a-place-in-your-html-to-render-the-chart">Step 2: Prepare a place in your HTML to render the chart<a href="#step-2-prepare-a-place-in-your-html-to-render-the-chart" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#step-2-prepare-a-place-in-your-html-to-render-the-chart</span></a></h2>

<p>The last thing we need to prepare before we can start visualizing our data is to define an area in our HTML where we want to draw the graph. For Chart.js you do this by adding a <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/API/Canvas_API"><code class="language-plaintext highlighter-rouge">canvas</code></a> element, and setting <code class="language-plaintext highlighter-rouge">width</code> and <code class="language-plaintext highlighter-rouge">height</code> to define the proportions of your graph.</p>

<p>On row 13 in <code class="language-plaintext highlighter-rouge">index.html</code>, copy and paste this row to create your canvas element:</p>

<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nt">&lt;canvas</span> <span class="na">id=</span><span class="s">"myChart"</span> <span class="na">width=</span><span class="s">"1600"</span> <span class="na">height=</span><span class="s">"900"</span><span class="nt">&gt;&lt;/canvas&gt;</span>
</code></pre></div></div>

<p>Notice that we’ve added an <code class="language-plaintext highlighter-rouge">id</code> (<code class="language-plaintext highlighter-rouge">myChart</code>) to the <code class="language-plaintext highlighter-rouge">canvas</code> element that we can later use to reference our designated graph element in JavaScript or CSS. What this ID is set to has no significance for Chart.js; you can name it whatever you want. What matters is that you use the exact same ID when you reference it in JavaScript or CSS. If you’re adding several graphs to a page, just make sure that every ID is unique (you could for example give your graphs more specific names, like <code class="language-plaintext highlighter-rouge">populationChart</code> or <code class="language-plaintext highlighter-rouge">regionChart</code>).</p>

<h2 id="step-3-prepare-the-data">Step 3: Prepare the data<a href="#step-3-prepare-the-data" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#step-3-prepare-the-data</span></a></h2>

<p>The data we’re using is from <a class="red" href="https://en.wikipedia.org/wiki/World_population#Population_growth_by_region">Wikipedia’s article on World population</a>, and includes a world population prediction from <a class="red" href="https://esa.un.org/unpd/wpp/Publications/Files/Key_Findings_WPP_2015.pdf">UN’s World Population Prospects report</a>. Here’s the raw data that we’ll be using:</p>

<h4 id="world-historical-and-predicted-populations-in-millions">World historical and predicted populations (in millions)<a href="#world-historical-and-predicted-populations-in-millions" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#world-historical-and-predicted-populations-in-millions</span></a></h4>

<table class="article-table">
  <thead>
    <tr>
      <th style="text-align: left">Region</th>
      <th style="text-align: right">1500</th>
      <th style="text-align: right">1600</th>
      <th style="text-align: right">1700</th>
      <th style="text-align: right">1750</th>
      <th style="text-align: right">1800</th>
      <th style="text-align: right">1850</th>
      <th style="text-align: right">1900</th>
      <th style="text-align: right">1950</th>
      <th style="text-align: right">1999</th>
      <th style="text-align: right">2050</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="text-align: left"><strong>Africa</strong></td>
      <td style="text-align: right">86</td>
      <td style="text-align: right">114</td>
      <td style="text-align: right">106</td>
      <td style="text-align: right">106</td>
      <td style="text-align: right">107</td>
      <td style="text-align: right">111</td>
      <td style="text-align: right">133</td>
      <td style="text-align: right">221</td>
      <td style="text-align: right">783</td>
      <td style="text-align: right">2478</td>
    </tr>
    <tr>
      <td style="text-align: left"><strong>Asia</strong></td>
      <td style="text-align: right">282</td>
      <td style="text-align: right">350</td>
      <td style="text-align: right">411</td>
      <td style="text-align: right">502</td>
      <td style="text-align: right">635</td>
      <td style="text-align: right">809</td>
      <td style="text-align: right">947</td>
      <td style="text-align: right">1402</td>
      <td style="text-align: right">3700</td>
      <td style="text-align: right">5267</td>
    </tr>
    <tr>
      <td style="text-align: left"><strong>Europe</strong></td>
      <td style="text-align: right">168</td>
      <td style="text-align: right">170</td>
      <td style="text-align: right">178</td>
      <td style="text-align: right">190</td>
      <td style="text-align: right">203</td>
      <td style="text-align: right">276</td>
      <td style="text-align: right">408</td>
      <td style="text-align: right">547</td>
      <td style="text-align: right">675</td>
      <td style="text-align: right">734</td>
    </tr>
    <tr>
      <td style="text-align: left"><strong>Latin America</strong></td>
      <td style="text-align: right">40</td>
      <td style="text-align: right">20</td>
      <td style="text-align: right">10</td>
      <td style="text-align: right">16</td>
      <td style="text-align: right">24</td>
      <td style="text-align: right">38</td>
      <td style="text-align: right">74</td>
      <td style="text-align: right">167</td>
      <td style="text-align: right">508</td>
      <td style="text-align: right">784&nbsp;</td>
    </tr>
    <tr>
      <td style="text-align: left"><strong>North America</strong></td>
      <td style="text-align: right">6</td>
      <td style="text-align: right">3</td>
      <td style="text-align: right">2</td>
      <td style="text-align: right">2</td>
      <td style="text-align: right">7</td>
      <td style="text-align: right">26</td>
      <td style="text-align: right">82</td>
      <td style="text-align: right">172</td>
      <td style="text-align: right">312</td>
      <td style="text-align: right">433</td>
    </tr>
  </tbody>
</table>

<p>To draw lines and add labels along axes, Chart.js expects the data to be passed in the form of a set of <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array">arrays</a>, like so: <code class="language-plaintext highlighter-rouge">[10, 4, 7]</code>. We’re going to use 6 arrays in total: one for all the year labels to be shown along the X axis (1500-2050) and one array for each region containing the population data. So all we need to do is copy each row in our table above, seperate each value with a comma, and then end and start the list with []-brackets.</p>

<p>The table above, reformatted to arrays, looks like so:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// Our labels along the x-axis</span>
<span class="kd">var</span> <span class="nx">years</span> <span class="o">=</span> <span class="p">[</span><span class="mi">1500</span><span class="p">,</span><span class="mi">1600</span><span class="p">,</span><span class="mi">1700</span><span class="p">,</span><span class="mi">1750</span><span class="p">,</span><span class="mi">1800</span><span class="p">,</span><span class="mi">1850</span><span class="p">,</span><span class="mi">1900</span><span class="p">,</span><span class="mi">1950</span><span class="p">,</span><span class="mi">1999</span><span class="p">,</span><span class="mi">2050</span><span class="p">];</span>
<span class="c1">// For drawing the lines</span>
<span class="kd">var</span> <span class="nx">africa</span> <span class="o">=</span> <span class="p">[</span><span class="mi">86</span><span class="p">,</span><span class="mi">114</span><span class="p">,</span><span class="mi">106</span><span class="p">,</span><span class="mi">106</span><span class="p">,</span><span class="mi">107</span><span class="p">,</span><span class="mi">111</span><span class="p">,</span><span class="mi">133</span><span class="p">,</span><span class="mi">221</span><span class="p">,</span><span class="mi">783</span><span class="p">,</span><span class="mi">2478</span><span class="p">];</span>
<span class="kd">var</span> <span class="nx">asia</span> <span class="o">=</span> <span class="p">[</span><span class="mi">282</span><span class="p">,</span><span class="mi">350</span><span class="p">,</span><span class="mi">411</span><span class="p">,</span><span class="mi">502</span><span class="p">,</span><span class="mi">635</span><span class="p">,</span><span class="mi">809</span><span class="p">,</span><span class="mi">947</span><span class="p">,</span><span class="mi">1402</span><span class="p">,</span><span class="mi">3700</span><span class="p">,</span><span class="mi">5267</span><span class="p">];</span>
<span class="kd">var</span> <span class="nx">europe</span> <span class="o">=</span> <span class="p">[</span><span class="mi">168</span><span class="p">,</span><span class="mi">170</span><span class="p">,</span><span class="mi">178</span><span class="p">,</span><span class="mi">190</span><span class="p">,</span><span class="mi">203</span><span class="p">,</span><span class="mi">276</span><span class="p">,</span><span class="mi">408</span><span class="p">,</span><span class="mi">547</span><span class="p">,</span><span class="mi">675</span><span class="p">,</span><span class="mi">734</span><span class="p">];</span>
<span class="kd">var</span> <span class="nx">latinAmerica</span> <span class="o">=</span> <span class="p">[</span><span class="mi">40</span><span class="p">,</span><span class="mi">20</span><span class="p">,</span><span class="mi">10</span><span class="p">,</span><span class="mi">16</span><span class="p">,</span><span class="mi">24</span><span class="p">,</span><span class="mi">38</span><span class="p">,</span><span class="mi">74</span><span class="p">,</span><span class="mi">167</span><span class="p">,</span><span class="mi">508</span><span class="p">,</span><span class="mi">784</span><span class="p">];</span>
<span class="kd">var</span> <span class="nx">northAmerica</span> <span class="o">=</span> <span class="p">[</span><span class="mi">6</span><span class="p">,</span><span class="mi">3</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="mi">2</span><span class="p">,</span><span class="mi">7</span><span class="p">,</span><span class="mi">26</span><span class="p">,</span><span class="mi">82</span><span class="p">,</span><span class="mi">172</span><span class="p">,</span><span class="mi">312</span><span class="p">,</span><span class="mi">433</span><span class="p">];</span>
</code></pre></div></div>

<p>Copy all of these rows, and paste them into <code class="language-plaintext highlighter-rouge">script.js</code>.</p>

<h2 id="step-4-draw-a-line">Step 4: Draw a line!<a href="#step-4-draw-a-line" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#step-4-draw-a-line</span></a></h2>

<p>At last! We’ve arrived at the moment of truth. Visualizing data with Graph.js is pretty straightforward. All we need to do is define what graph we want to draw, and pass in the data that we want to visualize. Let’s start by drawing one single line to see if we can get it to work: below the data that you just pasted into <code class="language-plaintext highlighter-rouge">script.js</code>, add these lines of JavaScript:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="kd">var</span> <span class="nx">ctx</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">"</span><span class="s2">myChart</span><span class="dl">"</span><span class="p">);</span>
<span class="kd">var</span> <span class="nx">myChart</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Chart</span><span class="p">(</span><span class="nx">ctx</span><span class="p">,</span> <span class="p">{</span>
  <span class="na">type</span><span class="p">:</span> <span class="dl">'</span><span class="s1">line</span><span class="dl">'</span><span class="p">,</span>
  <span class="na">data</span><span class="p">:</span> <span class="p">{</span>
    <span class="na">labels</span><span class="p">:</span> <span class="nx">years</span><span class="p">,</span>
    <span class="na">datasets</span><span class="p">:</span> <span class="p">[</span>
      <span class="p">{</span> 
        <span class="na">data</span><span class="p">:</span> <span class="nx">africa</span>
      <span class="p">}</span>
    <span class="p">]</span>
  <span class="p">}</span>
<span class="p">});</span>
</code></pre></div></div>

<p>…open up <code class="language-plaintext highlighter-rouge">index.html</code> in a browser, refresh and…&nbsp;tada! You created a graph! It’s not the prettiest, but hey, it’s rising and it’s looking all professional!</p>

<p>What’s happening in this bit of code? Let’s break it down. First, we locate the <code class="language-plaintext highlighter-rouge">canvas</code> element that we added earlier to our <code class="language-plaintext highlighter-rouge">index.html</code> file (notice <code class="language-plaintext highlighter-rouge">"myChart"</code>):</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="kd">var</span> <span class="nx">ctx</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="dl">"</span><span class="s2">myChart</span><span class="dl">"</span><span class="p">);</span>
</code></pre></div></div>

<p>Then, using that <code class="language-plaintext highlighter-rouge">canvas</code> element, we create a line chart (<code class="language-plaintext highlighter-rouge">type: 'line'</code>), and pass along some of our data. <code class="language-plaintext highlighter-rouge">labels: years</code> sets our array of <code class="language-plaintext highlighter-rouge">years</code> (that we created earlier) for the labels along the x-axis, and <code class="language-plaintext highlighter-rouge">data: africa</code> uses our <code class="language-plaintext highlighter-rouge">africa</code> variable to draw the line.</p>

<p>For every line that we want to create, we add another <code class="language-plaintext highlighter-rouge">object</code> to the <code class="language-plaintext highlighter-rouge">datasets</code> array. On every <code class="language-plaintext highlighter-rouge">object</code> we can make a range of adjustments: we can not only pass the data to draw the line, but we can change the name, change the beavior, and change the looks of the line.</p>

<p>Let’s try that right now. You may have noticed that our line is missing a label (it says <em>undefined</em> at the top of the graph), and it’s not very colorful. Boo! Let’s make it ✨👌</p>

<h2 id="step-5-style-the-line">Step 5: Style the line<a href="#step-5-style-the-line" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#step-5-style-the-line</span></a></h2>

<p>Start out by giving our first line a name. After <code class="language-plaintext highlighter-rouge">data: africa</code>, add a comma and create a new row, and add <code class="language-plaintext highlighter-rouge">label: "Africa"</code>:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nx">data</span><span class="p">:</span> <span class="nx">africa</span><span class="p">,</span>
<span class="nx">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span>
</code></pre></div></div>

<p>To set the border color and remove the big gray area below the graph, add another comma after <code class="language-plaintext highlighter-rouge">label: "Africa"</code> and add these two lines:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nx">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span>
<span class="nx">fill</span><span class="p">:</span> <span class="kc">false</span>
</code></pre></div></div>

<p>Well ain’t that ✨👌 (refresh and you should see a blue line named Africa)!</p>

<h2 id="step-6-add-the-rest-of-the-data">Step 6: Add the rest of the data<a href="#step-6-add-the-rest-of-the-data" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#step-6-add-the-rest-of-the-data</span></a></h2>

<p>All we need to do now is copy the code for Africa and paste it another four times, adding a comma after every <code class="language-plaintext highlighter-rouge">}</code>. Go through the list of lines and make sure that you use <em>all</em> our region variables (<code class="language-plaintext highlighter-rouge">asia</code>, <code class="language-plaintext highlighter-rouge">europe</code>, etc.), and name the lines accordingly. Once you’re done, it should look something like this:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="p">{</span> 
  <span class="nl">data</span><span class="p">:</span> <span class="nx">africa</span><span class="p">,</span>
  <span class="nx">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Africa</span><span class="dl">"</span><span class="p">,</span>
  <span class="nx">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span>
  <span class="nx">fill</span><span class="p">:</span> <span class="kc">false</span>
<span class="p">},</span>
<span class="p">{</span> 
  <span class="na">data</span><span class="p">:</span> <span class="nx">asia</span><span class="p">,</span>
  <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Asia</span><span class="dl">"</span><span class="p">,</span>
  <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span>
  <span class="na">fill</span><span class="p">:</span> <span class="kc">false</span>
<span class="p">},</span>
<span class="p">{</span> 
  <span class="na">data</span><span class="p">:</span> <span class="nx">europe</span><span class="p">,</span>
  <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Europe</span><span class="dl">"</span><span class="p">,</span>
  <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span>
  <span class="na">fill</span><span class="p">:</span> <span class="kc">false</span>
<span class="p">},</span>
<span class="p">{</span> 
  <span class="na">data</span><span class="p">:</span> <span class="nx">latinAmerica</span><span class="p">,</span>
  <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Latin America</span><span class="dl">"</span><span class="p">,</span>
  <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span>
  <span class="na">fill</span><span class="p">:</span> <span class="kc">false</span>
<span class="p">},</span>
<span class="p">{</span> 
  <span class="na">data</span><span class="p">:</span> <span class="nx">northAmerica</span><span class="p">,</span>
  <span class="na">label</span><span class="p">:</span> <span class="dl">"</span><span class="s2">North America</span><span class="dl">"</span><span class="p">,</span>
  <span class="na">borderColor</span><span class="p">:</span> <span class="dl">"</span><span class="s2">#3e95cd</span><span class="dl">"</span><span class="p">,</span>
  <span class="na">fill</span><span class="p">:</span> <span class="kc">false</span>
<span class="p">}</span>
</code></pre></div></div>

<p>If you refresh, you should have a graph visualizing the earth’s population over time 🎉 Hooray!</p>

<p>The lines are all the same color though. You can pick any color that you want for a line, but to use the same color scheme as in my example graph, change the <code class="language-plaintext highlighter-rouge">borderColor</code> value for each of the new regions: <code class="language-plaintext highlighter-rouge">#8e5ea2</code>, <code class="language-plaintext highlighter-rouge">#3cba9f</code>, <code class="language-plaintext highlighter-rouge">#e8c3b9</code>, <code class="language-plaintext highlighter-rouge">#c45850</code>.</p>

<p>And with that, you’re done! Your finished graph should look <a class="red" href="/demo/chartjs-intro/">something like this</a>.</p>

<h2 id="troubleshooting">Troubleshooting<a href="#troubleshooting" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#troubleshooting</span></a></h2>

<p>Are you stuck somewhere? Is something not working? Don’t worry, that happens all the time. First of all, I recommend right-clicking somewhere on your page, selecting <em>Inspect Element</em> (or an equivelent), and then selecting the <em>Console</em>. If you’re using Safari and this option is not showing up: open <em>Preferences</em>, select <em>Advanced</em>, and at the very bottom, check <em>Show Develop menu in menu bar</em>.</p>

<p>As soon as something is not working, get into the habit of checking the console for errors. In this particular case, unfortunately, Chart.js has a tendency to not throw very useful errors. To overcome any obstacles that you can’t resolve by working with the Console, you can compare your code with the intended result after each step:</p>

<ul style="list-style: square">
  <li><a class="red" href="/demo/chartjs-intro/static/01-Add Chartjs.zip">Step 1: Add Chart.js</a> (zip)</li>
  <li><a class="red" href="/demo/chartjs-intro/static/02-Canvas.zip">Step 2: Prepare a place in your HTML to render the chart</a> (zip)</li>
  <li><a class="red" href="/demo/chartjs-intro/static/03-Prepare data.zip">Step 3: Prepare the data</a> (zip)</li>
  <li><a class="red" href="/demo/chartjs-intro/static/04-Draw a line.zip">Step 4: Draw a line!</a> (zip)</li>
  <li><a class="red" href="/demo/chartjs-intro/static/05-Style the line.zip">Step 5: Style the line</a> (zip)</li>
  <li><a class="red" href="/demo/chartjs-intro/static/06-Add the data.zip">Step 6: Add the rest of the data</a> (zip)</li>
</ul>

<h2 id="next-steps">Next steps<a href="#next-steps" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/introduction-to-chartjs/#next-steps</span></a></h2>

<p>Isn’t it amazing how by visualizing data you can take a cluster of disconnected numbers and create small simple stories that are completely intuitive to grasp? If you want to go beyond line graphs and start playing around with different ways of visualizing data, I recommend reading through the <a class="red" href="http://www.chartjs.org/docs/">Chart.js documentation</a>, or using my collection of Chart.js examples to kickstart your project: <a class="red" href="/blog/chartjs-charts-to-get-you-started/">10 Chart.js example charts to get you started</a>.</p>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="/js/script.js"></script>
    


	</div>
</div>



            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #99BEC8">
                        <div class="post-categories-links">
                
                            <a class="post-categories-link" href="/blog/data/">data</a>
                                    <span class="post-categories-link-divider">/</span>    
                            
                            <a class="post-categories-link" href="/blog/javascript/">javascript</a>
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
