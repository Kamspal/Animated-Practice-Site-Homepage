@extends('layouts')
@section('title', 'Merriweather Light - Google Web Font example "The Please of Finding Things Out" | TypeSource')
@section('content')
<div class="body1">
        <div class="collection-single typesource-single">
            <div class="collection-item collection-item-single typesource-item-single">
                <!--googleoff: index-->
                <div class="collection-item-content" contenteditable="true" spellcheck="false">
                    <div class="fto">
                            <h1 class="fto-r1">The Pleasure</h1>
                            <h1 class="fto-r2">of</h1>
                            <h1 class="fto-r3">Finding Things Out</h1>
                    </div>

                        <style type="text/css">
                            .fto {
                            color: #000;
                            text-align: center;
                            background-color: #f6f6f6;
                            font-family: Merriweather, serif;
                            font-weight: 300;
                            font-style: italic;
                            line-height: 3em;
                            padding-top: 12em;
                            padding-bottom: 13em;
                            }

                            .fto-r1 {
                            font-size: 6.5em;
                            font-weight: 300;
                            line-height: 1.2em;
                            }

                            .fto-r2 {
                            font-size: 3em;
                            color: #d44b15;
                            line-height: 1em;
                            font-weight: 300;
                            position: relative;
                            display: inline-block;
                            }

                            .fto-r2::after {
                            content: '';
                            height: 1px;
                            background-color: #d44b15;
                            width: 2em;
                            position: absolute;
                            top: 0.5em;
                            left: -2.5em;
                            }

                            .fto-r2::before {
                            content: '';
                            height: 1px;
                            background-color: #d44b15;
                            width: 2em;
                            position: absolute;
                            top: 0.5em;
                            right: -2.5em;
                            }

                            .fto-r3 {
                            font-size: 4.3em;
                            line-height: 1.4em;
                            font-weight: 300;
                            }

                        </style>
                </div>
                    <div class="collection-item-details">
                        <span class="collection-item-text">
                            
                            <a href="https://www.google.com/fonts/specimen/Lato">Merriweather Light Italic</a>
                            
                        </span>
                    </div>
                    <!--googleon: index-->
            </div>

            <div class="collection-content-container">
                <div class="typesource-font-item">
                        <style type="text/css">
                            .font-style1 {
                                font-family: Merriweather;
                                font-weight: 300;
                                font-style: italic;
                            }
                        </style>
                    <h2 class="typesource-font-header font-style1"><a class="typesource-font-header-link" href="https://www.google.com/fonts/specimen/Merriweather">Merriweather Light Italic</a></h2>
                    <a href="https://www.google.com/fonts/specimen/Merriweather" class="typesource-google-link">View Google Font</a>

                    <div class="collection-item typesource-font-card font-style1">
                        <p class="typesource-font-sentence">
                            Grumpy wizards make toxic brew for the evil Queen and Jack.
                        </p>

                        <div class="typesource-font-characters">
                            <p>abcdefghijklmnopqrstuvwxyz</p>
                            <p>ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
                            <p>123456789 !?:%;&amp;_/"()’[]'$£@”</p>
                        </div>
                    </div>
                </div>
                    

                <div class="typesource-font-item">

                        <h2 class="typesource-font-header">HTML &amp; CSS <span class="typesource-font-header-details">for this example</span></h2>
                                <div class="collection-item typesource-font-card">

<figure class="highlight1" style="overflow-x: scroll"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Include in &lt;head&gt; to load fonts from Google --&gt;</span>
<span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">'https://fonts.googleapis.com/css?family=Merriweather:300italic'</span> <span class="na">rel=</span><span class="s">'stylesheet'</span> <span class="na">type=</span><span class="s">'text/css'</span><span class="nt">&gt;</span></code></pre></figure>



<figure class="highlight1"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Typography --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fto"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"fto-r1"</span><span class="nt">&gt;</span>The Pleasure<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"fto-r2"</span><span class="nt">&gt;</span>of<span class="nt">&lt;/h1&gt;</span>
  <span class="nt">&lt;h1</span> <span class="na">class=</span><span class="s">"fto-r3"</span><span class="nt">&gt;</span>Finding Things Out<span class="nt">&lt;/h1&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;style </span><span class="na">type=</span><span class="s">"text/css"</span><span class="nt">&gt;</span>
<span class="nc">.fto</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="m">#000</span><span class="p">;</span>
  <span class="nl">text-align</span><span class="p">:</span> <span class="nb">center</span><span class="p">;</span>
  <span class="nl">background-color</span><span class="p">:</span> <span class="m">#f6f6f6</span><span class="p">;</span>
  <span class="nl">font-family</span><span class="p">:</span> <span class="n">Merriweather</span><span class="p">,</span> <span class="nb">serif</span><span class="p">;</span>
  <span class="nl">font-weight</span><span class="p">:</span> <span class="m">300</span><span class="p">;</span>
  <span class="nl">font-style</span><span class="p">:</span> <span class="nb">italic</span><span class="p">;</span>
  <span class="nl">line-height</span><span class="p">:</span> <span class="m">3em</span><span class="p">;</span>
  <span class="nl">padding-top</span><span class="p">:</span> <span class="m">12em</span><span class="p">;</span>
  <span class="nl">padding-bottom</span><span class="p">:</span> <span class="m">13em</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.fto-r1</span> <span class="p">{</span>
  <span class="nl">font-size</span><span class="p">:</span> <span class="m">6.5em</span><span class="p">;</span>
  <span class="nl">font-weight</span><span class="p">:</span> <span class="m">300</span><span class="p">;</span>
  <span class="nl">line-height</span><span class="p">:</span> <span class="m">1.2em</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.fto-r2</span> <span class="p">{</span>
  <span class="nl">font-size</span><span class="p">:</span> <span class="m">3em</span><span class="p">;</span>
  <span class="nl">color</span><span class="p">:</span> <span class="m">#d44b15</span><span class="p">;</span>
  <span class="nl">line-height</span><span class="p">:</span> <span class="m">1em</span><span class="p">;</span>
  <span class="nl">font-weight</span><span class="p">:</span> <span class="m">300</span><span class="p">;</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">relative</span><span class="p">;</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">inline-block</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.fto-r2</span><span class="nd">::after</span> <span class="p">{</span>
  <span class="nl">content</span><span class="p">:</span> <span class="s2">''</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="nl">background-color</span><span class="p">:</span> <span class="m">#d44b15</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">2em</span><span class="p">;</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">absolute</span><span class="p">;</span>
  <span class="nl">top</span><span class="p">:</span> <span class="m">0.5em</span><span class="p">;</span>
  <span class="nl">left</span><span class="p">:</span> <span class="m">-2.5em</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.fto-r2</span><span class="nd">::before</span> <span class="p">{</span>
  <span class="nl">content</span><span class="p">:</span> <span class="s2">''</span><span class="p">;</span>
  <span class="nl">height</span><span class="p">:</span> <span class="m">1px</span><span class="p">;</span>
  <span class="nl">background-color</span><span class="p">:</span> <span class="m">#d44b15</span><span class="p">;</span>
  <span class="nl">width</span><span class="p">:</span> <span class="m">2em</span><span class="p">;</span>
  <span class="nl">position</span><span class="p">:</span> <span class="nb">absolute</span><span class="p">;</span>
  <span class="nl">top</span><span class="p">:</span> <span class="m">0.5em</span><span class="p">;</span>
  <span class="nl">right</span><span class="p">:</span> <span class="m">-2.5em</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.fto-r3</span> <span class="p">{</span>
  <span class="nl">font-size</span><span class="p">:</span> <span class="m">4.3em</span><span class="p">;</span>
  <span class="nl">line-height</span><span class="p">:</span> <span class="m">1.4em</span><span class="p">;</span>
  <span class="nl">font-weight</span><span class="p">:</span> <span class="m">300</span><span class="p">;</span>
<span class="p">}</span>

<span class="nt">&lt;/style&gt;</span></code></pre></figure>

                                </div>
                </div>
            </div>
    </div>

    <div class="collection-divider">
                                <a href="/typesource/" class="collection-divider-button collection-button">Browse more examples</a>
                    </div>

                        <div class="footer-more-projects">
                                <h2 class="collection-inline-header">More projects</h2>

                                <div class="collection-projects-footer">
                                <a href="/spinkit/" class="collection-project collection-project-spinkit">
                                    <div class="collection-project-preview collection-project-preview-spinkit"></div>
                                    <h2 class="collection-project-header">SpinKit</h2>
                                    <p class="collection-project-description">A collection of CSS spinners</p>
                                </a>

                                <a href="/typesource/" class="collection-project collection-project-typesource"  style="display: none">
                                    <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="52" height="60" viewBox="0 0 52 60" class="collection-project-preview collection-project-preview-typesource"><path fill="#f7f7f7" d="M50 20c-1.105 0-2-.896-2-2v-2c0-6.63-5.373-12-12-12h-4v44c0 4.417 3.582 8 8 8 1.104 0 2 .895 2 2 0 1.104-.896 2-2 2H12c-1.105 0-2-.896-2-2 0-1.105.895-2 2-2 4.418 0 8-3.583 8-8V4h-4C9.372 4 4 9.37 4 16v2c0 1.104-.896 2-2 2-1.105 0-2-.896-2-2V2C0 .894.895 0 2 0h48c1.104 0 2 .895 2 2v16c0 1.104-.896 2-2 2z"></path></svg>
                                    <h2 class="collection-project-header">TypeSource</h2>
                                    <p class="collection-project-description">Google Font inspiration</p>
                                </a>

                                <a href="/moving-letters/" class="collection-project collection-project-moving-letters">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="52" viewBox="0 0 69.53 45.75" class="collection-project-preview collection-project-preview-moving-letters"><path fill="#fff" data-name="M copy" class="cls-1" d="M25.06 45.747h11.12V32.234c0-4.646-.98-11.755-1.55-16.33h.28l3.66 10.7 6.34 15.414h4.5l6.34-15.414 3.8-10.7h.28c-.56 4.575-1.55 11.684-1.55 16.33v13.513h11.26V-.003H57.01l-6.89 19-2.54 7.46h-.28l-2.53-7.46-7.18-19H25.06v45.75z"></path><path fill="#fff" d="M6 9.812h12v4H6v-4zm-6 10h18v4H0v-4zm10 10h8v4h-8v-4z"></path></svg>
                                    <h2 class="collection-project-header">Moving Letters</h2>
                                    <p class="collection-project-description">Text animated with JS</p>
                                </a>
                                </div>
                        </div>


                    <div class="collection-footer-info">
                                <div class="collection-footer-box collection-footer-profile">
                                        <img src="/img/profile1.jpg" alt="Photo of Tobias" width="102" class="collection-profile-image">
                                        <h2 class="collection-inline-header collection-inline-header-w-subheader"><a href="https://twitter.com/tobiasahlin">By Tobias Ahlin</a></h2>
                                        <a class="collection-twitter-link" href="https://twitter.com/tobiasahlin" style="color:#2babee">@tobiasahlin</a>
                                        <p>Letter animation code is free to use, licensed under <a href="https://opensource.org/licenses/MIT" style="color:#2babee">MIT</a>. Site design 
                                        &amp; code © Tobias Ahlin, 2020.</p>
                                </div>

                                        <div class="collection-footer-divider"></div>

                                    <div class="collection-footer-box footer-email-sign-up">
                                        <h2 class="collection-inline-header">Get notified of new projects</h2>

                                        <div id="mc_embed_signup">
                                            <form action="//tobiasahlin.us6.list-manage.com/subscribe/post?u=b53336ca4dca0dadf0c41405a&amp;id=323f88401f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="novalidate">
                                                <div id="mc_embed_signup_scroll">
                                                    <div class="mc-field-group">
                                                        <input type="email" placeholder="your@email.com" value="" name="EMAIL" class="required email" id="mce-EMAIL" aria-required="true">
                                                    </div>
                                                    <div id="mce-responses">
                                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_b53336ca4dca0dadf0c41405a_323f88401f" tabindex="-1" value=""></div>
                                                    <input type="submit" value="Let me know!" name="subscribe" id="mc-embedded-subscribe" class="button">
                                                </div>
                                            </form>
                                        </div>
                                        <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script>
                                        <script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                                        <!--End mc_embed_signup-->
                                    </div>
                    </div>

</div>
@endsection