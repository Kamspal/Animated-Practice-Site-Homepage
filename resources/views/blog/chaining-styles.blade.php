@extends('layouts')
@section('title', 'Chaining styles with a JavaScript Proxy | Tobias Ahlin')
@section('content')
@section('blog-logo')
        <h1 class="site-name site-name-blog color-white">
            <a class="siteLogoLink site-link-1 site-link3" href="/">
                <svg class="siteHead-logoMark logo-color1 site-link3" width="1022" height="482" viewBox="0 0 1022 483">
                <path d="M634.184 481.999L567.587 379.929L500.99 481.999H247.355L573.255 0L886.402 481.999H634.184ZM198.374 198.47H0V0H518.605L198.374 472.076V198.47Z" />
                <path d="M626.67 0C626.67 0 848.8 0 962.621 0C978.369 0 993.472 6.26031 1004.61 17.3996C1015.74 28.5423 1022 43.6521 1022 59.4083C1022 152.061 1022 329.939 1022 422.592C1022 438.348 1015.74 453.458 1004.61 464.6C993.472 475.74 978.369 482 962.621 482H939.816L626.67 0Z" />
                </svg>
            </a>
            <a href="/blog" class="site-name-link site-link3">Blog</a>
        </h1>

        <style>
            .menu:hover>.line1{background-color:#000;
                transform:scaleX(1.2)
            }

            .menu .line1{
                background-color: rgba(0,0,0,0.6)
            }

            .search-icon2{
                opacity: 0.65 !important;
            }

            .search-icon2:hover{
                opacity: 1 !important;
            }

            .circle2{
                stroke: #000 !important;
            }

            .line-123{
                fill: #000 !important;
            }
        </style>
@stop


<div class="single-post">
	<div class="single-post-head" style="background-color: #FDF0EC">
			<h1 class="post-header h12" style="color: rgba(0,0,0,1)">Chaining styles with a JavaScript Proxy</h1>
	</div>
	
	<div class="article article-single">
		<div class="blog-banner">
            <div class="blog-banner-content">
                <div class="post-chain-wrapper">
                    <svg class="post-chain-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82.7 82.7">
                        <path fill="#FFF" d="M71.6 64.2l-7.5 7.4c-.9.9-2.1 1.3-3.4 1.3-1.4 0-2.5-.5-3.4-1.4L46.8 61.1c-.9-.9-1.4-2.1-1.4-3.4 0-1.4.6-2.7 1.7-3.7.1.1.4.4.9 1l1.1 1.1c.2.2.5.4 1 .8.4.3.9.5 1.3.7.4.1.9.2 1.4.2 1.4 0 2.5-.5 3.4-1.4.9-.9 1.4-2.1 1.4-3.4 0-.5-.1-1-.2-1.4-.1-.4-.3-.9-.7-1.3-.3-.4-.6-.8-.8-1-.2-.2-.5-.6-1.1-1.1-.5-.5-.9-.8-1-.9 1-1.1 2.2-1.6 3.6-1.6s2.5.5 3.4 1.4l10.5 10.5c.9.9 1.4 2.1 1.4 3.4.3 1.1-.2 2.3-1.1 3.2zM35.7 28.8c-.1-.1-.4-.4-.9-1l-1.1-1.1c-.2-.2-.5-.4-1-.8-.4-.3-.9-.5-1.3-.7-.4-.1-.9-.2-1.4-.2-1.4 0-2.5.5-3.4 1.4-.9.9-1.4 2.1-1.4 3.4 0 .5.1 1 .2 1.4.1.4.3.9.7 1.3.3.4.6.8.8 1 .2.2.5.6 1.1 1.1.5.5.9.8 1 .9-1 1-2.2 1.6-3.6 1.6s-2.5-.5-3.4-1.4L11.2 25.3c-.9-.9-1.4-2.1-1.4-3.4 0-1.3.5-2.4 1.4-3.4l7.5-7.4c1-.9 2.1-1.4 3.4-1.4 1.4 0 2.5.5 3.4 1.4l10.4 10.5c.9.9 1.4 2.1 1.4 3.4.1 1.5-.5 2.7-1.6 3.8zm42.8 21.7L67.9 39.9c-2.8-2.8-6.3-4.3-10.3-4.3-4.1 0-7.6 1.5-10.5 4.5l-4.5-4.5c3-2.9 4.5-6.4 4.5-10.6 0-4.1-1.4-7.5-4.2-10.3L32.4 4.3C29.6 1.4 26.1 0 22.1 0 18 0 14.6 1.4 11.8 4.2l-7.5 7.4C1.4 14.4 0 17.8 0 21.9s1.4 7.5 4.3 10.3l10.5 10.5c2.8 2.8 6.3 4.3 10.3 4.3 4.1 0 7.6-1.5 10.5-4.5l4.5 4.5c-3 2.9-4.5 6.4-4.5 10.6 0 4.1 1.4 7.5 4.2 10.3l10.4 10.5c2.8 2.9 6.3 4.3 10.3 4.3 4.1 0 7.5-1.4 10.3-4.2l7.5-7.4c2.9-2.8 4.3-6.2 4.3-10.3.1-4-1.3-7.5-4.1-10.3z"></path>
                    </svg>
                </div>  
            </div>
        </div>


            <!--more-->

<p>One of the delights of working with Ruby and jQuery is the ability to chain methods, enabling you to conveniently invoke multiple methods on the same target. In jQuery, for example, most methods return a jQuery object, so you can build a chain of methods where every new method operates on the previous target. This enables you to update some styles, run an animation, and update an attribute, all without querying for that element over and over again:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nx">$</span><span class="p">(</span><span class="dl">"</span><span class="s2">.menu</span><span class="dl">"</span><span class="p">)</span>
  <span class="p">.</span><span class="nx">css</span><span class="p">(</span><span class="dl">"</span><span class="s2">color</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">#fff</span><span class="dl">"</span><span class="p">)</span>
  <span class="p">.</span><span class="nx">data</span><span class="p">(</span><span class="dl">"</span><span class="s2">mode</span><span class="dl">"</span><span class="p">,</span> <span class="dl">"</span><span class="s2">light</span><span class="dl">"</span><span class="p">)</span>
  <span class="p">.</span><span class="nx">fadeIn</span><span class="p">();</span>
</code></pre></div></div>

<p>Short and sweet. If you’ve updated the styles of an object with vanilla JavaScript, you might’ve been annoyed about the fact that you can’t chain style changes, and so you have to do something like this:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="kd">let</span> <span class="nx">menu</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="dl">"</span><span class="s2">.menu</span><span class="dl">"</span><span class="p">);</span>
<span class="nx">menu</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">color</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">#fff</span><span class="dl">"</span><span class="p">;</span>
<span class="nx">menu</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">backgroundColor</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">#000</span><span class="dl">"</span><span class="p">;</span>
<span class="nx">menu</span><span class="p">.</span><span class="nx">style</span><span class="p">.</span><span class="nx">opacity</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">1</span><span class="dl">"</span><span class="p">;</span>
</code></pre></div></div>

<p>There are a few different ways of making this more convenient, but the other day I started thinking about if it would be possible to use a <a class="red" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Proxy"><code class="language-plaintext highlighter-rouge">Proxy</code></a> object (at the time of writing, <a class="red" href="https://caniuse.com/#search=proxy">global support is at 92.76%</a>) to enable chaining of style changes. Turns out, it’s relatively easy. We’ll walk through how to create a light-weight Proxy handler that will enable us to shorten the code above to this:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nx">style</span><span class="p">(</span><span class="dl">"</span><span class="s2">.menu</span><span class="dl">"</span><span class="p">)</span>
  <span class="p">.</span><span class="nx">color</span><span class="p">(</span><span class="dl">"</span><span class="s2">#fff</span><span class="dl">"</span><span class="p">)</span>
  <span class="p">.</span><span class="nx">backgroundColor</span><span class="p">(</span><span class="dl">"</span><span class="s2">#000</span><span class="dl">"</span><span class="p">)</span>
  <span class="p">.</span><span class="nx">opacity</span><span class="p">(</span><span class="dl">"</span><span class="s2">1</span><span class="dl">"</span><span class="p">);</span>
</code></pre></div></div>

<p>We’ll use roughly the same strategy as jQuery does: we’ll fetch the style object of an element and wrap it with a Proxy in order to intercept (trap) all <code class="language-plaintext highlighter-rouge">get</code> calls to that <code class="language-plaintext highlighter-rouge">style</code> object, take the accessed property and update its value if a value is passed, and then return the <code class="language-plaintext highlighter-rouge">Proxy</code> handler wrapping the <code class="language-plaintext highlighter-rouge">style</code> object again, enabling us to build an infinite chain of commands.</p>

<p>Since we’ll repurpose the get method to also act as a setter, we’ll retain the get functionality by returning the value of a property if you don’t pass any arguments to the function (i.e. you’ll get a value through <code class="language-plaintext highlighter-rouge">style(".menu").color()</code> rather than <code class="language-plaintext highlighter-rouge">style(".menu").color</code>). Here’s the gist of the technique:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="kd">let</span> <span class="nx">styleProxy</span> <span class="o">=</span> <span class="p">{</span>
  <span class="na">get</span><span class="p">:</span> <span class="p">(</span><span class="nx">object</span><span class="p">,</span> <span class="nx">property</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
    <span class="k">return</span> <span class="p">(</span><span class="nx">value</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
      <span class="k">if</span> <span class="p">(</span><span class="nx">value</span><span class="p">)</span> <span class="p">{</span>
        <span class="nx">object</span><span class="p">[</span><span class="nx">property</span><span class="p">]</span> <span class="o">=</span> <span class="nx">value</span><span class="p">;</span>
        <span class="k">return</span> <span class="k">new</span> <span class="nb">Proxy</span><span class="p">(</span><span class="nx">object</span><span class="p">,</span> <span class="nx">styleProxy</span><span class="p">);</span>
      <span class="p">}</span>
      <span class="k">return</span> <span class="nx">object</span><span class="p">[</span><span class="nx">property</span><span class="p">];</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="kd">let</span> <span class="nx">style</span> <span class="o">=</span> <span class="p">(</span><span class="nx">selector</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
  <span class="kd">let</span> <span class="nx">element</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="nx">selector</span><span class="p">);</span>

  <span class="k">return</span> <span class="k">new</span> <span class="nb">Proxy</span><span class="p">(</span><span class="nx">element</span><span class="p">.</span><span class="nx">style</span><span class="p">,</span> <span class="nx">styleProxy</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div></div>

<p>Let’s break it down, and quickly walk through how a <code class="language-plaintext highlighter-rouge">Proxy</code> works.</p>

<h2 id="its-a-trap">It’s a trap!<a href="#its-a-trap" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chaining-styles-with-proxy/#its-a-trap</span></a></h2>

<p>The first aspects to understand about using a Proxy are <code class="language-plaintext highlighter-rouge">handlers</code> and <code class="language-plaintext highlighter-rouge">traps</code>. We can create a <code class="language-plaintext highlighter-rouge">handler</code> to <code class="language-plaintext highlighter-rouge">trap</code> a series of operations, e.g. <code class="language-plaintext highlighter-rouge">get()</code>, <code class="language-plaintext highlighter-rouge">set()</code>, and <code class="language-plaintext highlighter-rouge">apply()</code>. In essence, we’ll get a chance to intercept those operations on the object we’re wrapping and do with them whatever we want—we can return different values depending on some logic, or simply forward the operation to the original target.</p>

<p>As a simple example, we can always return the same value regardless of what property you try to access, even if no property has been set on the original object:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="kd">let</span> <span class="nx">handler</span> <span class="o">=</span> <span class="p">{</span>
  <span class="na">get</span><span class="p">:</span> <span class="p">()</span> <span class="o">=&gt;</span> <span class="p">{</span>
    <span class="k">return</span> <span class="dl">"</span><span class="s2">hodor</span><span class="dl">"</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="kd">let</span> <span class="nx">person</span> <span class="o">=</span> <span class="p">{</span> <span class="na">name</span><span class="p">:</span> <span class="dl">"</span><span class="s2">Wylis</span><span class="dl">"</span> <span class="p">}</span> 
<span class="kd">let</span> <span class="nx">proxied</span> <span class="o">=</span> <span class="k">new</span> <span class="nb">Proxy</span><span class="p">(</span><span class="nx">person</span><span class="p">,</span> <span class="nx">handler</span><span class="p">);</span>

<span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">person</span><span class="p">.</span><span class="nx">name</span><span class="p">);</span>  <span class="c1">// "Wylis"</span>
<span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">proxied</span><span class="p">.</span><span class="nx">name</span><span class="p">);</span> <span class="c1">// "hodor"</span>
<span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">proxied</span><span class="p">.</span><span class="nx">age</span><span class="p">);</span> <span class="c1">//  "hodor"</span>
<span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span><span class="nx">proxied</span><span class="p">.</span><span class="nx">favoriteFood</span><span class="p">);</span> <span class="c1">// "hodor"</span>
</code></pre></div></div>

<h2 id="always-return-a-function">Always return a function<a href="#always-return-a-function" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chaining-styles-with-proxy/#always-return-a-function</span></a></h2>

<p>This enables us to completely change how an object works. To enable chaining for the <code class="language-plaintext highlighter-rouge">style</code> object, we’ll expand <code class="language-plaintext highlighter-rouge">get</code> to also work as <code class="language-plaintext highlighter-rouge">set</code>. We’ll still only trap <code class="language-plaintext highlighter-rouge">get</code>, but rather than returning the value of a property when it’s accessed we’ll return a function that returns the value of the property only if the function is invoked without any arguments. If an argument is passed, we’ll use it to update that property’s value.</p>

<p>Let’s start by just getting the basics into place. Let’s create a new <code class="language-plaintext highlighter-rouge">handler</code> called <code class="language-plaintext highlighter-rouge">getProxy</code>, and create a <code class="language-plaintext highlighter-rouge">get</code> trap, where we always return a function. Thus if we just log a property, we’ll get a function. But if we invoke that function, we’ll see what it returns (in this case “test”):</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="kd">let</span> <span class="nx">getProxy</span> <span class="o">=</span> <span class="p">{</span>
  <span class="na">get</span><span class="p">:</span> <span class="p">()</span> <span class="o">=&gt;</span> <span class="p">{</span>
    <span class="k">return</span> <span class="p">()</span> <span class="o">=&gt;</span> <span class="p">{</span>
      <span class="k">return</span> <span class="dl">"</span><span class="s2">test</span><span class="dl">"</span><span class="p">;</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="kd">let</span> <span class="nx">proxied</span> <span class="o">=</span> <span class="k">new</span> <span class="nb">Proxy</span><span class="p">({},</span> <span class="nx">getProxy</span><span class="p">);</span>

<span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span> <span class="nx">proxied</span><span class="p">.</span><span class="nx">name</span> <span class="p">);</span>   <span class="c1">// Our function: (argument) =&gt; { return "test"; }</span>
<span class="nx">console</span><span class="p">.</span><span class="nx">log</span><span class="p">(</span> <span class="nx">proxied</span><span class="p">.</span><span class="nx">name</span><span class="p">()</span> <span class="p">);</span> <span class="c1">// The value: "test"</span>
</code></pre></div></div>

<h2 id="use-the-function-to-get-and-set-values">Use the function to get and set values<a href="#use-the-function-to-get-and-set-values" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chaining-styles-with-proxy/#use-the-function-to-get-and-set-values</span></a></h2>

<p>Inside our new function, we can check if an argument is being passed to it when it’s invoked. If something is passed, we can use that argument to update the property. If no arguments are passed we can simply return the value of that property, basically maintaining the original <code class="language-plaintext highlighter-rouge">get</code> functionality while expanding it with a <code class="language-plaintext highlighter-rouge">set</code> option.</p>

<p>Let’s create a new Proxy, this time called <code class="language-plaintext highlighter-rouge">styleProxy</code>. We’ll check if something is being passed to it, and get and set accordingly. Our proxy handler is also being passed an <code class="language-plaintext highlighter-rouge">object</code> (the object we’re wrapping and intercepting) and a <code class="language-plaintext highlighter-rouge">property</code> argument (the property we’re operating on), and we can use these two to operate on the original target.</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="kd">let</span> <span class="nx">styleProxy</span> <span class="o">=</span> <span class="p">{</span>
  <span class="na">get</span><span class="p">:</span> <span class="p">(</span><span class="nx">object</span><span class="p">,</span> <span class="nx">property</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
    <span class="k">return</span> <span class="p">(</span><span class="nx">value</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
      <span class="k">if</span> <span class="p">(</span><span class="nx">value</span><span class="p">)</span> <span class="p">{</span>
        <span class="c1">// "object" is the object that we're wrapping</span>
        <span class="c1">// "property" is the property of the object that we're accessing</span>
        <span class="c1">// "value" is what we passed to the function</span>
        <span class="c1">// Let's use these three to update the style object:</span>
        <span class="nx">object</span><span class="p">[</span><span class="nx">property</span><span class="p">]</span> <span class="o">=</span> <span class="nx">value</span><span class="p">;</span>
      <span class="p">}</span> <span class="k">else</span> <span class="p">{</span>
        <span class="c1">// If no arguments were passed, simply return the</span>
        <span class="c1">// value of that property:</span>
        <span class="k">return</span> <span class="nx">object</span><span class="p">[</span><span class="nx">property</span><span class="p">];</span>
      <span class="p">}</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div></div>

<p>This enables our handler’s get method to act both as a setter and getter:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nx">style</span><span class="p">(</span><span class="dl">"</span><span class="s2">.menu</span><span class="dl">"</span><span class="p">).</span><span class="nx">color</span><span class="p">(</span><span class="dl">"</span><span class="s2">#fff</span><span class="dl">"</span><span class="p">);</span> <span class="c1">// Gets a function which updates color to "#fff"</span>
<span class="nx">style</span><span class="p">(</span><span class="dl">"</span><span class="s2">.menu</span><span class="dl">"</span><span class="p">).</span><span class="nx">color</span><span class="p">();</span>       <span class="c1">// No arguments passed, just returns "#fff"</span>
</code></pre></div></div>

<p>Note that since we’re not creating a <code class="language-plaintext highlighter-rouge">trap</code> for the <code class="language-plaintext highlighter-rouge">set</code> operation, we can still set a property’s value by assigning a value to it directly:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="c1">// Works like expected</span>
<span class="nx">style</span><span class="p">(</span><span class="dl">"</span><span class="s2">.menu</span><span class="dl">"</span><span class="p">).</span><span class="nx">color</span> <span class="o">=</span> <span class="dl">"</span><span class="s2">#fff</span><span class="dl">"</span><span class="p">;</span>
</code></pre></div></div>

<h2 id="return-the-style-object-wrapped-in-a-proxy">Return the style object wrapped in a proxy<a href="#return-the-style-object-wrapped-in-a-proxy" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/chaining-styles-with-proxy/#return-the-style-object-wrapped-in-a-proxy</span></a></h2>

<p>Now that we’re in control of what’s being returned after we update a property, we can simply return the original <code class="language-plaintext highlighter-rouge">style</code> object wrapped in our <code class="language-plaintext highlighter-rouge">Proxy</code> handler if an argument is passed, completing our chaining method:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="kd">let</span> <span class="nx">styleProxy</span> <span class="o">=</span> <span class="p">{</span>
  <span class="na">get</span><span class="p">:</span> <span class="p">(</span><span class="nx">object</span><span class="p">,</span> <span class="nx">property</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
    <span class="k">return</span> <span class="p">(</span><span class="nx">value</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
      <span class="k">if</span> <span class="p">(</span><span class="nx">value</span><span class="p">)</span> <span class="p">{</span>
        <span class="nx">object</span><span class="p">[</span><span class="nx">property</span><span class="p">]</span> <span class="o">=</span> <span class="nx">value</span><span class="p">;</span>
        <span class="c1">// Return the original target, wrapped in the same Proxy handler</span>
        <span class="k">return</span> <span class="k">new</span> <span class="nb">Proxy</span><span class="p">(</span><span class="nx">object</span><span class="p">,</span> <span class="nx">styleProxy</span><span class="p">);</span>
      <span class="p">}</span>
      <span class="k">return</span> <span class="nx">object</span><span class="p">[</span><span class="nx">property</span><span class="p">];</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div></div>
<p>When we use method chaining, then, this is what’s happening behind the scenes:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="nx">style</span><span class="p">(</span><span class="dl">"</span><span class="s2">.menu</span><span class="dl">"</span><span class="p">)</span>              <span class="c1">// Returns the style object in a Proxy</span>
  <span class="p">.</span><span class="nx">color</span><span class="p">(</span><span class="dl">"</span><span class="s2">#fff</span><span class="dl">"</span><span class="p">)</span>            <span class="c1">// Updates color and returns a Proxy</span>
  <span class="p">.</span><span class="nx">backgroundColor</span><span class="p">(</span><span class="dl">"</span><span class="s2">#000</span><span class="dl">"</span><span class="p">)</span>  <span class="c1">// Updates bgColor and returns a Proxy</span>
  <span class="p">.</span><span class="nx">opacity</span><span class="p">(</span><span class="dl">"</span><span class="s2">1</span><span class="dl">"</span><span class="p">);</span>            <span class="c1">// ... and so on so forth</span>
</code></pre></div></div>

<p>Here’s the solution in full:</p>

<div class="language-javascript highlighter-rouge"><div class="highlight"><pre class="highlight1"><code><span class="kd">let</span> <span class="nx">styleProxy</span> <span class="o">=</span> <span class="p">{</span>
  <span class="na">get</span><span class="p">:</span> <span class="p">(</span><span class="nx">object</span><span class="p">,</span> <span class="nx">property</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
    <span class="k">return</span> <span class="p">(</span><span class="nx">value</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
      <span class="k">if</span> <span class="p">(</span><span class="nx">value</span><span class="p">)</span> <span class="p">{</span>
        <span class="nx">object</span><span class="p">[</span><span class="nx">property</span><span class="p">]</span> <span class="o">=</span> <span class="nx">value</span><span class="p">;</span>
        <span class="k">return</span> <span class="k">new</span> <span class="nb">Proxy</span><span class="p">(</span><span class="nx">object</span><span class="p">,</span> <span class="nx">styleProxy</span><span class="p">);</span>
      <span class="p">}</span>
      <span class="k">return</span> <span class="nx">object</span><span class="p">[</span><span class="nx">property</span><span class="p">];</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="kd">let</span> <span class="nx">style</span> <span class="o">=</span> <span class="p">(</span><span class="nx">selector</span><span class="p">)</span> <span class="o">=&gt;</span> <span class="p">{</span>
  <span class="kd">let</span> <span class="nx">element</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="nx">selector</span><span class="p">);</span>

  <span class="k">return</span> <span class="k">new</span> <span class="nb">Proxy</span><span class="p">(</span><span class="nx">element</span><span class="p">.</span><span class="nx">style</span><span class="p">,</span> <span class="nx">styleProxy</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div></div>

<p>I can’t confidently say that I recommend this approach—and I won’t be using it on this site anytime soon due to the just-too-low browser support, but I find it fascinating how bendable JavaScript is, and how with the Proxy API we can go even further.</p>

    </div>



    
            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #FDF0EC">
                        <div class="post-categories-links" style="color: rgba(0,0,0,1)">
                
                            <a class="post-categories-link" href="/blog/css/">css</a>
                                <span class="post-categories-link-divider">/</span>
                        
                            <a class="post-categories-link" href="/blog/javascript/">javascript</a>
                                <span class="post-categories-link-divider">/</span>

                            <a class="post-categories-link" href="/blog/tutorials/">tutorial</a>
                
                        </div>
                        <span class="section-header section-header-small post-categories-date">19/09/20219</span>
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
</div>
@endsection
