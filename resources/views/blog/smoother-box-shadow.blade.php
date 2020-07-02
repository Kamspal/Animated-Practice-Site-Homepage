@extends('layouts')
@section('title', 'Smoother & sharper shadows with layered box-shadows | Tobias Ahlin')
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
			<h1 class="post-header h12">Smoother & sharper shadows with layered box-shadows</h1>
	</div>
	
	<div class="article article-single">
		<div class="blog-banner">
            <div class="blog-banner-content">
                <div class="blog-traditional-shadow-box">Default</div>
                <div class="blog-realistic-shadow-box">Smooth</div>
            </div>
        </div>

            <!--more-->

        <p>As light hits an object and a shadow is cast, the shadow can take on a myriad of unique characteristics. If you try to capture the subtleties of a real shadow with <code class="language-plaintext highlighter-rouge">box-shadow</code> then, well, you’re pretty much out of luck. The <code class="language-plaintext highlighter-rouge">box-shadow</code> CSS property isn’t exactly built to encourage expressiveness. It essentially produces a blurred silhouette of an object—you can change its offset, blur radius, spread, and color, but that’s it. We can’t get anywhere near to expressing the complexities and nuances of shadows in real life.</p>

        <p>But with a simple CSS technique, we can expand our range of options. If we use layered <code class="language-plaintext highlighter-rouge">box-shadow</code>s we can get more fine-grained control over how shadows are rendered:</p>

        <style>
            .blog-shadow-6 { box-shadow: 0 6px 6px rgba(0,0,0,0.4); }
            
            .blog-shadow-long {
                box-shadow: 0 1px 1px rgba(0,0,0,0.12), 0 2px 2px rgba(0,0,0,0.12), 0 4px 4px rgba(0,0,0,0.12), 0 8px 8px rgba(0,0,0,0.12), 0 16px 16px rgba(0,0,0,0.12);
            }
        </style>

        <div class="post-content-wrapper center">
            <div class="blog-traditional-shadow-box blog-shadow-big blog-shadow-6">box-shadow
                <span class="blog-shadow-label">0 6px 6px rgba(0,0,0,0.2);</span>
            </div>
            <div class="blog-realistic-shadow-box blog-shadow-big blog-shadow-long">Layered box-shadows
                <span class="blog-shadow-label">gradually increasing offset/blur</span>
            </div>
        </div>

        <p>Look at how square and clumsy the default <code class="language-plaintext highlighter-rouge">box-shadow</code> effect (first box) looks compared to the layered <code class="language-plaintext highlighter-rouge">box-shadow</code> (second box). We can achieve this effect by creating multiple <code class="language-plaintext highlighter-rouge">box-shadows</code> (separating each shadow with a comma), and increasing the offset and blur for every shadow (the <code class="language-plaintext highlighter-rouge">box-shadow</code> syntax is <code class="language-plaintext highlighter-rouge">X-offset Y-offset blur color</code>):</p>

        <div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c">/* Default box-shadow */</span>
<span class="nc">.box</span> <span class="p">{</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">3px</span> <span class="m">3px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.2</span><span class="p">);</span>
<span class="p">}</span>

<span class="c">/* Create smoother box-shadows by layering multiple
 * shadows with gradually increasing radius and offset */</span>
<span class="nc">.shadow-5</span> <span class="p">{</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">1px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.12</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">2px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.12</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">4px</span> <span class="m">4px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.12</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">8px</span> <span class="m">8px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.12</span><span class="p">),</span>
              <span class="m">0</span> <span class="m">16px</span> <span class="m">16px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.12</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div></div>

        <p>This simple layering technique gives us more control over the rendering of shadows, and with it we can fine-tune sharpness, distance, and spread. You can for example increase or decrease the number of shadows to create a smaller or larger spread. (Note that if you increase the number of layers you’ll have to decrease the alpha value for each layer if you wish to keep the strength somewhat the same.)</p>

        <style>
            .blog-shadow-medium {
                box-shadow: 0 1px 1px rgba(0,0,0,0.15), 0 2px 2px rgba(0,0,0,0.15), 0 4px 4px rgba(0,0,0,0.15), 0 8px 8px rgba(0,0,0,0.15);
            }

            .blog-shadow-extra-long {
                box-shadow: 0 1px 1px rgba(0,0,0,0.11), 0 2px 2px rgba(0,0,0,0.11), 0 4px 4px rgba(0,0,0,0.11), 0 8px 8px rgba(0,0,0,0.11), 0 16px 16px rgba(0,0,0,0.11), 0 32px 32px rgba(0,0,0,0.11);
            }
        </style>

        <div class="post-content-wrapper center">
            <div class="blog-realistic-shadow-box blog-shadow-big blog-shadow-medium">Layered box-shadows
                <span class="blog-shadow-label">4 shadows with 15% alpha</span>
            </div>
            <div class="blog-realistic-shadow-box blog-shadow-big blog-shadow-extra-long">Layered box-shadows
                <span class="blog-shadow-label">6 shadows with 11% alpha</span>
            </div>
        </div>

        <div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.shadow-4</span> <span class="p">{</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">1px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.15</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">2px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.15</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">4px</span> <span class="m">4px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.15</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">8px</span> <span class="m">8px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.15</span><span class="p">);</span>
<span class="p">}</span>

<span class="nc">.shadow-6</span> <span class="p">{</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">1px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.11</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">2px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.11</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">4px</span> <span class="m">4px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.11</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">8px</span> <span class="m">8px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.11</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">16px</span> <span class="m">16px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.11</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">32px</span> <span class="m">32px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.11</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div></div>

        <p>Controlling sharpness is as easy as controlling spread, but we can use both the alpha value and the blur value of each layer to change the <em>concentration of depth</em> and the <em>blur radius</em> of the shadow respectively.</p>

        <p>The examples above use the same alpha value for all layers, but we can let the alpha value decrease or increase with every layer to create more or less diffuse shadows. For the more concentrated shadow below, the innermost shadow (with the least offset and blur) has the highest alpha value, and it decreases with every layer. The opposite is true for the more diffuse shadow of the second box, where the innermost layer has the lowest alpha value:</p>

        <style>
            .blog-shadow-sharp {
                box-shadow: 0 1px 1px rgba(0,0,0,0.25), 
                    0 2px 2px rgba(0,0,0,0.20), 
                    0 4px 4px rgba(0,0,0,0.15), 
                    0 8px 8px rgba(0,0,0,0.10),
                    0 16px 16px rgba(0,0,0,0.05);
            }

            .blog-shadow-soft {
                box-shadow: 0 1px 1px rgba(0,0,0,0.08), 
                            0 2px 2px rgba(0,0,0,0.12), 
                            0 4px 4px rgba(0,0,0,0.16), 
                            0 8px 8px rgba(0,0,0,0.20);
            }
        </style>

        <div class="post-content-wrapper center">
            <div class="blog-realistic-shadow-box blog-shadow-big blog-shadow-sharp">Sharp
                <span class="blog-shadow-label">Shadows with decreasing alpha</span>
            </div>
            <div class="blog-realistic-shadow-box blog-shadow-big blog-shadow-soft">Diffuse
                <span class="blog-shadow-label">Shadows with increasing alpha</span>
            </div>
        </div>

        <div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.blog-shadow-sharp</span> <span class="p">{</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">1px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.25</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">2px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.20</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">4px</span> <span class="m">4px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.15</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">8px</span> <span class="m">8px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.10</span><span class="p">),</span>
              <span class="m">0</span> <span class="m">16px</span> <span class="m">16px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.05</span><span class="p">);</span>
<span class="p">}</span>

<span class="nc">.blog-shadow-diffuse</span> <span class="p">{</span>
    <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">1px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.08</span><span class="p">),</span> 
                <span class="m">0</span> <span class="m">2px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.12</span><span class="p">),</span> 
                <span class="m">0</span> <span class="m">4px</span> <span class="m">4px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.16</span><span class="p">),</span> 
                <span class="m">0</span> <span class="m">8px</span> <span class="m">8px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.20</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div></div>

        <p>We can also increase the <code class="language-plaintext highlighter-rouge">blur</code> in higher incremenents, to increase the spread and create softer, almost dreamy, effects:</p>

        <style>
            .blog-shadow-softer {
                box-shadow: 0 1px 2px rgba(0,0,0,0.07), 
                    0 2px 4px rgba(0,0,0,0.07), 
                    0 4px 8px rgba(0,0,0,0.07), 
                    0 8px 16px rgba(0,0,0,0.07),
                    0 16px 32px rgba(0,0,0,0.07), 
                    0 32px 64px rgba(0,0,0,0.07);
            }
        </style>

        <div class="post-content-wrapper center">
            <div class="blog-realistic-shadow-box blog-shadow-big blog-shadow-softer">Dreamy soft
                <span class="blog-shadow-label">Higher blur increase</span>
            </div>
        </div>

        <div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.blog-shadow-dreamy</span> <span class="p">{</span>
    <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.07</span><span class="p">),</span> 
                <span class="m">0</span> <span class="m">2px</span> <span class="m">4px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.07</span><span class="p">),</span> 
                <span class="m">0</span> <span class="m">4px</span> <span class="m">8px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.07</span><span class="p">),</span> 
                <span class="m">0</span> <span class="m">8px</span> <span class="m">16px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.07</span><span class="p">),</span>
                <span class="m">0</span> <span class="m">16px</span> <span class="m">32px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.07</span><span class="p">),</span> 
                <span class="m">0</span> <span class="m">32px</span> <span class="m">64px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.07</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div></div>

        <p>Finally, we can control the distance by decoupling the blur radius and Y-offset, and increase the offset in bigger or smaller increments:</p>

        <style>
            .blog-shadow-distance-short {
                box-shadow: 0 1px 1px rgba(0,0,0,0.11), 
                            0 2px 2px rgba(0,0,0,0.11), 
                            0 4px 4px rgba(0,0,0,0.11), 
                            0 6px 8px rgba(0,0,0,0.11),
                            0 8px 16px rgba(0,0,0,0.11);    
            }

            .blog-shadow-distance-long {
            box-shadow: 0 2px 1px rgba(0,0,0,0.09), 
                        0 4px 2px rgba(0,0,0,0.09), 
                        0 8px 4px rgba(0,0,0,0.09), 
                        0 16px 8px rgba(0,0,0,0.09),
                        0 32px 16px rgba(0,0,0,0.09);
            }
        </style>

        <div class="post-content-wrapper center">
            <div class="blog-realistic-shadow-box blog-shadow-big blog-shadow-distance-short">Shorter
                <span class="blog-shadow-label">Shadows with smaller distances</span>
            </div>
            <div class="blog-realistic-shadow-box blog-shadow-big blog-shadow-distance-long">Longer
                <span class="blog-shadow-label">Shadows with larger distances</span>
            </div>
        </div>

        <div class="language-css highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nc">.shadow-shorter</span> <span class="p">{</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">1px</span> <span class="m">1px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.11</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">2px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.11</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">4px</span> <span class="m">4px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.11</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">6px</span> <span class="m">8px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.11</span><span class="p">),</span>
              <span class="m">0</span> <span class="m">8px</span> <span class="m">16px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.11</span><span class="p">);</span>
<span class="p">}</span>

<span class="nc">.shadow-longer</span> <span class="p">{</span>
  <span class="nl">box-shadow</span><span class="p">:</span> <span class="m">0</span> <span class="m">2px</span> <span class="m">1px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.09</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">4px</span> <span class="m">2px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.09</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">8px</span> <span class="m">4px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.09</span><span class="p">),</span> 
              <span class="m">0</span> <span class="m">16px</span> <span class="m">8px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.09</span><span class="p">),</span>
              <span class="m">0</span> <span class="m">32px</span> <span class="m">16px</span> <span class="n">rgba</span><span class="p">(</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0</span><span class="p">,</span><span class="m">0.09</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div></div>

        <p>Which combination of all of these techniques to use is of course highly dependent on the context that you’re working in, but with layered shadows we can at the very least gain some more control to help us achieve our desired look and feel.</p>

        <h2 id="further-reading">Further reading<a href="#further-reading" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/layered-smooth-box-shadows/#further-reading</span></a></h2>

        <ul>
            <li><a class="red" href="/blog/how-to-animate-box-shadow/">Learn how to minimize repaints while animating box-shadows</a></li>
        </ul>


            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #98bec8">
                        <div class="post-categories-links">
                
                            <a class="post-categories-link" href="/blog/css/">css</a>
                                <span class="post-categories-link-divider">/</span>
                        
                            <a class="post-categories-link" href="/blog/design/">design</a>
                                <span class="post-categories-link-divider">/</span>

                            <a class="post-categories-link" href="/blog/tutorials/">tutorial</a>
                
                        </div>
                        <span class="section-header section-header-small post-categories-date">19/09/2019</span>
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
