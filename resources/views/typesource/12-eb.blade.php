@extends('typesource.layouts1')
@section('title', 'Lora Italic - Google Web Font example "Here is Edward Beard" | TypeSource')
@section('favicon', '/img/favicon-32x32.png')
@section('content')
<div class="body1">

        <div class="collection-single typesource-single">
            <div class="collection-item collection-item-single typesource-item-single">
            <!--googleoff: index-->
                <div class="collection-item-content" contenteditable="true" spellcheck="false">
                    <div class="eb-lora">
                        <p class="eb-lora-p"><span class="eb-lora-fl">H</span>ere is Edward Bear, coming downstairs now, bump, bump, bump, on the back of his head, behind Christopher Robin. It is, as far as he knows, the only way of coming downstairs, but sometimes he feels that there really is another way, if only he could stop bumping for a moment and think of it.</p>
                        <p class="eb-lora-p">And then he feels that perhaps there isn't. Anyhow, here he is at the bottom, and ready to be introduced to you. Winnie-the-Pooh.</p>
                    </div>

                            <style type="text/css">
                                .eb-lora {
                                color: #000;
                                background-color: #f6f6f6;
                                text-align: left;
                                font-family: Lora, sans-serif;
                                font-style: italic;
                                font-weight: 400;
                                line-height: 3em;
                                padding: 11em 12em 10em;
                                }

                                .eb-lora-p {
                                font-size: 17px;
                                font-size: 1.7em;
                                max-width: 570px;
                                margin-left: auto;
                                margin-right: auto;
                                margin-bottom: 2em;
                                line-height: 1.9em;

                                }

                                .eb-lora-fl {
                                font-size: 7em;
                                float: left;
                                line-height: 0.8em;
                                margin-top: -0.29em;
                                margin-right: -0.05em;
                                }

                            </style>
                </div>
                <div class="collection-item-details">
                    <span class="collection-item-text">
            
                        <a href="https://www.google.com/fonts/specimen/Lora">Lora Italic</a>
            
                    </span>
                </div>
                <!--googleon: index-->
            </div>

            <div class="collection-content-container">
                <div class="typesource-font-item">
                    <style type="text/css">
                        .font-style1 {
                            font-family: Lora;
                            font-weight: 400;
                            font-style: italic;
                        }
                    </style>
                    <h2 class="typesource-font-header font-style1"><a class="typesource-font-header-link" href="https://www.google.com/fonts/specimen/Lora">Lora Italic</a></h2>
                    <a href="https://www.google.com/fonts/specimen/Lora" class="typesource-google-link">View Google Font</a>

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

<figure class="highlight1"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Include in &lt;head&gt; to load fonts from Google --&gt;</span>
<span class="nt">&lt;link</span> <span class="na">href=</span><span class="s">'https://fonts.googleapis.com/css?family=Lora:400italic'</span> <span class="na">rel=</span><span class="s">'stylesheet'</span> <span class="na">type=</span><span class="s">'text/css'</span><span class="nt">&gt;</span></code></pre></figure>



<figure class="highlight1"><pre><code class="language-html" data-lang="html"><span class="c">&lt;!-- Typography --&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"eb-lora"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"eb-lora-p"</span><span class="nt">&gt;&lt;span</span> <span class="na">class=</span><span class="s">"eb-lora-fl"</span><span class="nt">&gt;</span>H<span class="nt">&lt;/span&gt;</span>ere is Edward Bear, coming downstairs now, bump, bump, bump, on the back of his head, behind Christopher Robin. It is, as far as he knows, the only way of coming downstairs, but sometimes he feels that there really is another way, if only he could stop bumping for a moment and think of it.<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"eb-lora-p"</span><span class="nt">&gt;</span>And then he feels that perhaps there isn't. Anyhow, here he is at the bottom, and ready to be introduced to you. Winnie-the-Pooh.<span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/div&gt;</span>

<span class="nt">&lt;style </span><span class="na">type=</span><span class="s">"text/css"</span><span class="nt">&gt;</span>
<span class="nc">.eb-lora</span> <span class="p">{</span>
  <span class="nl">color</span><span class="p">:</span> <span class="m">#000</span><span class="p">;</span>
  <span class="nl">background-color</span><span class="p">:</span> <span class="m">#f6f6f6</span><span class="p">;</span>
  <span class="nl">text-align</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
  <span class="nl">font-family</span><span class="p">:</span> <span class="n">Lora</span><span class="p">,</span> <span class="nb">sans-serif</span><span class="p">;</span>
  <span class="nl">font-style</span><span class="p">:</span> <span class="nb">italic</span><span class="p">;</span>
  <span class="nl">font-weight</span><span class="p">:</span> <span class="m">400</span><span class="p">;</span>
  <span class="nl">line-height</span><span class="p">:</span> <span class="m">3em</span><span class="p">;</span>
  <span class="nl">padding</span><span class="p">:</span> <span class="m">11em</span> <span class="m">12em</span> <span class="m">10em</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.eb-lora-p</span> <span class="p">{</span>
  <span class="nl">font-size</span><span class="p">:</span> <span class="m">17px</span><span class="p">;</span>
  <span class="nl">font-size</span><span class="p">:</span> <span class="m">1.7em</span><span class="p">;</span>
  <span class="nl">max-width</span><span class="p">:</span> <span class="m">570px</span><span class="p">;</span>
  <span class="nl">margin-left</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
  <span class="nl">margin-right</span><span class="p">:</span> <span class="nb">auto</span><span class="p">;</span>
  <span class="nl">margin-bottom</span><span class="p">:</span> <span class="m">2em</span><span class="p">;</span>
  <span class="nl">line-height</span><span class="p">:</span> <span class="m">1.9em</span><span class="p">;</span>

<span class="p">}</span>

<span class="nc">.eb-lora-fl</span> <span class="p">{</span>
  <span class="nl">font-size</span><span class="p">:</span> <span class="m">7em</span><span class="p">;</span>
  <span class="nl">float</span><span class="p">:</span> <span class="nb">left</span><span class="p">;</span>
  <span class="nl">line-height</span><span class="p">:</span> <span class="m">0.8em</span><span class="p">;</span>
  <span class="nl">margin-top</span><span class="p">:</span> <span class="m">-0.29em</span><span class="p">;</span>
  <span class="nl">margin-right</span><span class="p">:</span> <span class="m">-0.05em</span><span class="p">;</span>
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

