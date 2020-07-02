@extends('layouts')
@section('title', 'Moving Letters | Text animated with JavaScript & anime.js')
@section('content')
    <div class="background">
        <div class="composition-source" style="display: none">
            <a href="/moving-letters" class="composition-back-button" style="opacity: 0;display: none;transform: translateX(-40px) scale(0.8);">
                <svg class="composition-back-image" viewBox="0 0 102.125 102.125">
                    <path fill="#fff" d="M115.594,59.919a51.05,51.05,0,1,1-51.05,51.05A51.05,51.05,0,0,1,115.594,59.919ZM139,108.031H102.868l16.6-16.6-4.216-4.187L91.5,111l23.754,23.754,4.187-4.186-16.569-16.6H139v-5.938Z" transform="translate(-64.531 -59.906)"></path>
                </svg>
            </a>
            <div class="composition-source-container" style="transform: translateX(100%); display: block;">
                <h1 class="composition-source-header composition-source-text" style="opacity: 0; transform: translateY(0px);">Effect 1</h1>
                <h2 class="composition-source-subheader composition-source-text" style="opacity: 0; transform: translateY(0px);">HTML</h2>
                <pre class="highlight composition-source-text" style="opacity: 0; transform: translateY(0px);">
                    <code class="composition-source-code composition-source-code-html">
                        <h1 class="ml1">
                            <span class="text-wrapper">
                                <span class="line line1"></span>
                                <span class="letters">THURSDAY</span>
                                <span class="line line2"></span>
                            </span>
                        </h1>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
                    </code>
                </pre>
                <h2 class="composition-source-subheader composition-source-text" style="opacity: 0; transform: translateY(0px);">CSS</h2>
                <pre class="highlight composition-source-text" style="opacity: 0; transform: translateY(0px);">
                    <code class="composition-source-code composition-source-code-css">
                        .ml1{
                            font-weight: 900;
                            font-size: 3.5em;
                            }

                            .ml1 .letter{
                            display: inline-block;
                            line-height: 1em;
                            }

                            .ml1 .text-wrapper{
                            position: relative;
                            display: inline-block;
                            padding-top: 0.1em;
                            padding-right: 0.05em;
                            padding-bottom: 0.15em;
                            }

                            .ml1 .line{
                            opacity: 0;
                            position: absolute;
                            left: 0;
                            height: 3px;
                            width: 100%;
                            background-color: #fff;
                            transform-origin: 0 0;
                            }

                            .ml1 .line1 { top: 0; }
                            .ml1 .line2 { bottom: 0; }
                    </code>
                </pre>
                <h2 class="composition-source-subheader composition-source-text" style="opacity: 0; transform: translateY(0px);">Javascript</h2>
                <pre class="highlight composition-source-text" style="opacity: 0; transform: translateY(0px);">
                    <code class="composition-source-code composition-source-code-js">
                        // Wrap every letter in a span
                            var textWrapper = document.querySelector('.ml1 .letters');
                            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                            anime.timeline({loop: true})
                            .add({
                                targets: '.ml1 .letter',
                                scale: [0.3,1],
                                opacity: [0,1],
                                translateZ: 0,
                                easing: "easeOutExpo",
                                duration: 600,
                                delay: (el, i) => 70 * (i+1)
                            }).add({
                                targets: '.ml1 .line',
                                scaleX: [0,1],
                                opacity: [0.5,1],
                                easing: "easeOutExpo",
                                duration: 700,
                                offset: '-=875',
                                delay: (el, i, l) => 80 * (l - i)
                            }).add({
                                targets: '.ml1',
                                opacity: 0,
                                duration: 1000,
                                easing: "easeOutExpo",
                                delay: 1000
                            });
                    </code>
                </pre>
            </div>
        </div>

    
        <div class="compositions">
    
            <div class="composition" style="background-color: #9ba5b5">
                    <span class="composition-hint">
                        <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                        Source
                    </span>
                <pre class="hidden">
                    <code class="composition-static-html">
                    &lt;h1 class="ml1"&gt;
                    &lt;span class="text-wrapper"&gt;
                        &lt;span class="line line1"&gt;&lt;/span&gt;
                        &lt;span class="letters"&gt;THURSDAY&lt;/span&gt;
                        &lt;span class="line line2"&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;/h1&gt;
                    </code>
                </pre>
                <div class="composition-wrapper" data-color="9ba5b5">
                    <h1 class="ml1" style="opacity:1">
                        <span class="text-wrapper">
                            <span class="line line1" style="opacity: 1; transform: scaleX(1);"></span>
                                <span class="letters">
                                    <span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">T</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">H</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">U</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">R</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">S</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">D</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">A</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">Y</span>
                                </span>
                            <span class="line line2" style="opacity: 1; transform: scaleX(1);"></span>
                        </span>
                    </h1>

                    <!--more-->

                    <script>
                        // Wrap every letter in a span
                        var textWrapper = document.querySelector('.ml1 .letters');
                        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                        ml.timelines["ml1"] = anime.timeline({loop: true})
                        .add({
                            targets: '.ml1 .letter',
                            scale: [0.3,1],
                            opacity: [0,1],
                            translateZ: 0,
                            easing: "easeOutExpo",
                            duration: 600,
                            delay: (el, i) => 70 * (i+1)
                        }).add({
                            targets: '.ml1 .line',
                            scaleX: [0,1],
                            opacity: [0.5,1],
                            easing: "easeOutExpo",
                            duration: 700,
                            offset: '-=875',
                            delay: (el, i, l) => 80 * (l - i)
                        }).add({
                            targets: '.ml1',
                            opacity: 0,
                            duration: 1000,
                            easing: "easeOutExpo",
                            delay: 1000
                        });
                    </script>

                    <style>
                        .ml1 {
                        font-weight: 900;
                        font-size: 3.5em;
                        }

                        .ml1 .letter {
                        display: inline-block;
                        line-height: 1em;
                        }

                        .ml1 .text-wrapper {
                        position: relative;
                        display: inline-block;
                        padding-top: 0.1em;
                        padding-right: 0.05em;
                        padding-bottom: 0.15em;
                        }

                        .ml1 .line {
                        opacity: 0;
                        position: absolute;
                        left: 0;
                        height: 3px;
                        width: 100%;
                        background-color: #fff;
                        transform-origin: 0 0;
                        }

                        .ml1 .line1 { top: 0; }
                        .ml1 .line2 { bottom: 0; }
                    </style>


                </div>
            </div>
            
            <div class="composition" style="background-color: #e8c3b9;">
                <span class="composition-hint">
                    <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                        Source</span>
                <pre class="hidden">
                    <code class="composition-static-html">
                        &lt;h1 class="ml2"&gt;Sunny mornings&lt;/h1&gt;
                    </code>
                </pre>
                <div class="composition-wrapper" data-color="e8c3b9">
                    <h1 class="ml2" style="opacity: 1;">
                        <span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">S</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">u</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">n</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">n</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">y</span> <span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">m</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">o</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">r</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">n</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">i</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">n</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">g</span><span class="letter" style="opacity: 1; transform: scale(1) translateZ(0px);">s</span>
                    </h1>

                    <!--more-->

                <script>
                    // Wrap every letter in a span
                    var textWrapper = document.querySelector('.ml2');
                    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                    ml.timelines["ml2"] = anime.timeline({loop: true})
                    .add({
                        targets: '.ml2 .letter',
                        scale: [4,1],
                        opacity: [0,1],
                        translateZ: 0,
                        easing: "easeOutExpo",
                        duration: 950,
                        delay: (el, i) => 70*i
                    }).add({
                        targets: '.ml2',
                        opacity: 0,
                        duration: 1000,
                        easing: "easeOutExpo",
                        delay: 1000
                    });
                </script>

                <style>
                    .ml2 {
                    font-weight: 900;
                    font-size: 3.5em;
                    }

                    .ml2 .letter {
                    display: inline-block;
                    line-height: 1em;
                    }
                </style>


                </div>
            </div>
            
            <div class="composition" style="background-color: #224a54">
                <span class="composition-hint">
                <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                Source</span>
                <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml3"&gt;Great Thinkers&lt;/h1&gt;

                </code></pre>
                <div class="composition-wrapper" data-color="224a54">
                <h1 class="ml3" style="opacity: 1;"><span class="letter" style="opacity: 1;">G</span><span class="letter" style="opacity: 1;">r</span><span class="letter" style="opacity: 1;">e</span><span class="letter" style="opacity: 1;">a</span><span class="letter" style="opacity: 1;">t</span> <span class="letter" style="opacity: 1;">T</span><span class="letter" style="opacity: 1;">h</span><span class="letter" style="opacity: 1;">i</span><span class="letter" style="opacity: 1;">n</span><span class="letter" style="opacity: 0.999994;">k</span><span class="letter" style="opacity: 0.987707;">e</span><span class="letter" style="opacity: 0.96196;">r</span><span class="letter" style="opacity: 0.920686;">s</span></h1>

                <!--more-->

                <script>
                    // Wrap every letter in a span
                    var textWrapper = document.querySelector('.ml3');
                    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                    ml.timelines["ml3"] = anime.timeline({loop: true})
                    .add({
                        targets: '.ml3 .letter',
                        opacity: [0,1],
                        easing: "easeInOutQuad",
                        duration: 2250,
                        delay: (el, i) => 150 * (i+1)
                    }).add({
                        targets: '.ml3',
                        opacity: 0,
                        duration: 1000,
                        easing: "easeOutExpo",
                        delay: 1000
                    });
                </script>

                <style>
                    .ml3 {
                    font-weight: 900;
                    font-size: 3.5em;
                    }
                </style>


                </div>
            </div>
            
            <div class="composition" style="background-color: #1a1a1a">
                <span class="composition-hint">
                <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                Source</span>
                <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml4"&gt;
                    &lt;span class="letters letters-1"&gt;Ready&lt;/span&gt;
                    &lt;span class="letters letters-2"&gt;Set&lt;/span&gt;
                    &lt;span class="letters letters-3"&gt;Go!&lt;/span&gt;
                    &lt;/h1&gt;

                </code></pre>
                    <div class="composition-wrapper" data-color="1a1a1a">
                    <h1 class="ml4" style="opacity: 1;">
                <span class="letters letters-1" style="opacity: 1.00155; transform: scale(1.00124);">Ready</span>
                <span class="letters letters-2" style="opacity: 0; transform: scale(0.2);">Set</span>
                <span class="letters letters-3" style="opacity: 0; transform: scale(0.2);">Go!</span>
                </h1>

                <!--more-->

                <script>
                    var ml4 = {};
                    ml4.opacityIn = [0,1];
                    ml4.scaleIn = [0.2, 1];
                    ml4.scaleOut = 3;
                    ml4.durationIn = 800;
                    ml4.durationOut = 600;
                    ml4.delay = 500;

                    ml.timelines["ml4"] = anime.timeline({loop: true})
                    .add({
                        targets: '.ml4 .letters-1',
                        opacity: ml4.opacityIn,
                        scale: ml4.scaleIn,
                        duration: ml4.durationIn
                    }).add({
                        targets: '.ml4 .letters-1',
                        opacity: 0,
                        scale: ml4.scaleOut,
                        duration: ml4.durationOut,
                        easing: "easeInExpo",
                        delay: ml4.delay
                    }).add({
                        targets: '.ml4 .letters-2',
                        opacity: ml4.opacityIn,
                        scale: ml4.scaleIn,
                        duration: ml4.durationIn
                    }).add({
                        targets: '.ml4 .letters-2',
                        opacity: 0,
                        scale: ml4.scaleOut,
                        duration: ml4.durationOut,
                        easing: "easeInExpo",
                        delay: ml4.delay
                    }).add({
                        targets: '.ml4 .letters-3',
                        opacity: ml4.opacityIn,
                        scale: ml4.scaleIn,
                        duration: ml4.durationIn
                    }).add({
                        targets: '.ml4 .letters-3',
                        opacity: 0,
                        scale: ml4.scaleOut,
                        duration: ml4.durationOut,
                        easing: "easeInExpo",
                        delay: ml4.delay
                    }).add({
                        targets: '.ml4',
                        opacity: 0,
                        duration: 500,
                        delay: 500
                    });
                </script>

                <style>
                    .ml4 {
                    position: relative;
                    font-weight: 900;
                    font-size: 4.5em;
                    }
                    .ml4 .letters {
                    position: absolute;
                    margin: auto;
                    left: 0;
                    top: 0.3em;
                    right: 0;
                    opacity: 0; 
                    }
                </style>


                </div>
            </div>
            
            <div class="composition" style="background-color: #f3e9c6">
                <span class="composition-hint">
                <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                Source</span>
                <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml5"&gt;
                    &lt;span class="text-wrapper"&gt;
                        &lt;span class="line line1"&gt;&lt;/span&gt;
                        &lt;span class="letters letters-left"&gt;Signal&lt;/span&gt;
                        &lt;span class="letters ampersand"&gt;&amp;amp;&lt;/span&gt;
                        &lt;span class="letters letters-right"&gt;Noise&lt;/span&gt;
                        &lt;span class="line line2"&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;/h1&gt;

                </code></pre>
                    <div class="composition-wrapper" data-color="f3e9c6">
                    <h1 class="ml5">
                <span class="text-wrapper">
                    <span class="line line1" style="opacity: 0.513186; transform: scaleX(0.0263717);"></span>
                    <span class="letters letters-left" style="opacity: 0; transform: translateX(0.5em);">Signal</span>
                    <span class="letters ampersand" style="opacity: 0; transform: scaleY(0.5);">&amp;</span>
                    <span class="letters letters-right" style="opacity: 0; transform: translateX(-0.5em);">Noise</span>
                    <span class="line line2" style="opacity: 0.513186; transform: scaleX(0.0263717);"></span>
                </span>
                </h1>

                    <!--more-->

                    <script>
                        ml.timelines["ml5"] = anime.timeline({loop: true})
                        .add({
                            targets: '.ml5 .line',
                            opacity: [0.5,1],
                            scaleX: [0, 1],
                            easing: "easeInOutExpo",
                            duration: 700
                        }).add({
                            targets: '.ml5 .line',
                            duration: 600,
                            easing: "easeOutExpo",
                            translateY: (el, i) => (-0.625 + 0.625*2*i) + "em"
                        }).add({
                            targets: '.ml5 .ampersand',
                            opacity: [0,1],
                            scaleY: [0.5, 1],
                            easing: "easeOutExpo",
                            duration: 600,
                            offset: '-=600'
                        }).add({
                            targets: '.ml5 .letters-left',
                            opacity: [0,1],
                            translateX: ["0.5em", 0],
                            easing: "easeOutExpo",
                            duration: 600,
                            offset: '-=300'
                        }).add({
                            targets: '.ml5 .letters-right',
                            opacity: [0,1],
                            translateX: ["-0.5em", 0],
                            easing: "easeOutExpo",
                            duration: 600,
                            offset: '-=600'
                        }).add({
                            targets: '.ml5',
                            opacity: 0,
                            duration: 1000,
                            easing: "easeOutExpo",
                            delay: 1000
                        });
                    </script>

                    <style>
                        .ml5 {
                        position: relative;
                        font-weight: 300;
                        font-size: 4.5em;
                        color: #402d2d;
                        }

                        .ml5 .text-wrapper {
                        position: relative;
                        display: inline-block;
                        padding-top: 0.1em;
                        padding-right: 0.05em;
                        padding-bottom: 0.15em;
                        line-height: 1em;
                        }

                        .ml5 .line {
                        position: absolute;
                        left: 0;
                        top: 0;
                        bottom: 0;
                        margin: auto;
                        height: 3px;
                        width: 100%;
                        background-color: #402d2d;
                        transform-origin: 0.5 0;
                        }

                        .ml5 .ampersand {
                        font-family: Baskerville, serif;
                        font-style: italic;
                        font-weight: 400;
                        width: 1em;
                        margin-right: -0.1em;
                        margin-left: -0.1em;
                        }

                        .ml5 .letters {
                        display: inline-block;
                        opacity: 0;
                        }
                    </style>


                </div>
            </div>
            
            <div class="composition" style="background-color: #c1605c">
                        <span class="composition-hint">
                        <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                        Source</span>
                        <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml6"&gt;
                    &lt;span class="text-wrapper"&gt;
                        &lt;span class="letters"&gt;Beautiful Questions&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;/h1&gt;

                    </code></pre>
                        <div class="composition-wrapper" data-color="c1605c">
                        <h1 class="ml6">
                    <span class="text-wrapper">
                        <span class="letters"><span class="letter" style="transform: translateY(-0.22153em) translateZ(0px);">B</span><span class="letter" style="transform: translateY(-0.140154em) translateZ(0px);">e</span><span class="letter" style="transform: translateY(0.260483em) translateZ(0px);">a</span><span class="letter" style="transform: translateY(0.906524em) translateZ(0px);">u</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">t</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">i</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">f</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">u</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">l</span> <span class="letter" style="transform: translateY(1.1em) translateZ(0px);">Q</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">u</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">e</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">s</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">t</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">i</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">o</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">n</span><span class="letter" style="transform: translateY(1.1em) translateZ(0px);">s</span></span>
                    </span>
                    </h1>

                        <!--more-->

                        <script>
                            // Wrap every letter in a span
                            var textWrapper = document.querySelector('.ml6 .letters');
                            textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                            ml.timelines["ml6"] = anime.timeline({loop: true})
                            .add({
                                targets: '.ml6 .letter',
                                translateY: ["1.1em", 0],
                                translateZ: 0,
                                duration: 750,
                                delay: (el, i) => 50 * i
                            }).add({
                                targets: '.ml6',
                                opacity: 0,
                                duration: 1000,
                                easing: "easeOutExpo",
                                delay: 1000
                            });
                        </script>

                        <style>
                            .ml6 {
                            position: relative;
                            font-weight: 900;
                            font-size: 3.3em;
                            }

                            .ml6 .text-wrapper {
                            position: relative;
                            display: inline-block;
                            padding-top: 0.2em;
                            padding-right: 0.05em;
                            padding-bottom: 0.1em;
                            overflow: hidden;
                            }

                            .ml6 .letter {
                            display: inline-block;
                            line-height: 1em;
                            }
                        </style>


                    </div>
            </div>
            
            <div class="composition" style="background-color: #45383c">
                        <span class="composition-hint">
                        <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                        Source</span>
                        <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml7"&gt;
                    &lt;span class="text-wrapper"&gt;
                        &lt;span class="letters"&gt;Reality is broken&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;/h1&gt;

                    </code></pre>
                        <div class="composition-wrapper" data-color="45383c">
                        <h1 class="ml7">
                    <span class="text-wrapper">
                        <span class="letters"><span class="letter" style="transform: translateY(0.214512em) translateX(0.107256em) translateZ(0px) rotateZ(35.1019deg);">R</span><span class="letter" style="transform: translateY(0.367687em) translateX(0.183843em) translateZ(0px) rotateZ(60.1669deg);">e</span><span class="letter" style="transform: translateY(0.622523em) translateX(0.311261em) translateZ(0px) rotateZ(101.867deg);">a</span><span class="letter" style="transform: translateY(0.972511em) translateX(0.486256em) translateZ(0px) rotateZ(159.138deg);">l</span><span class="letter" style="transform: translateY(1.1em) translateX(0.55em) translateZ(0px) rotateZ(180deg);">i</span><span class="letter" style="transform: translateY(1.1em) translateX(0.55em) translateZ(0px) rotateZ(180deg);">t</span><span class="letter" style="transform: translateY(1.1em) translateX(0.55em) translateZ(0px) rotateZ(180deg);">y</span> <span class="letter" style="transform: translateY(1.1em) translateX(0.55em) translateZ(0px) rotateZ(180deg);">i</span><span class="letter" style="transform: translateY(1.1em) translateX(0.55em) translateZ(0px) rotateZ(180deg);">s</span> <span class="letter" style="transform: translateY(1.1em) translateX(0.55em) translateZ(0px) rotateZ(180deg);">b</span><span class="letter" style="transform: translateY(1.1em) translateX(0.55em) translateZ(0px) rotateZ(180deg);">r</span><span class="letter" style="transform: translateY(1.1em) translateX(0.55em) translateZ(0px) rotateZ(180deg);">o</span><span class="letter" style="transform: translateY(1.1em) translateX(0.55em) translateZ(0px) rotateZ(180deg);">k</span><span class="letter" style="transform: translateY(1.1em) translateX(0.55em) translateZ(0px) rotateZ(180deg);">e</span><span class="letter" style="transform: translateY(1.1em) translateX(0.55em) translateZ(0px) rotateZ(180deg);">n</span></span>
                    </span>
                    </h1>

                    <!--more-->

                    <script>
                        // Wrap every letter in a span
                        var textWrapper = document.querySelector('.ml7 .letters');
                        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                        ml.timelines["ml7"] = anime.timeline({loop: true})
                        .add({
                            targets: '.ml7 .letter',
                            translateY: ["1.1em", 0],
                            translateX: ["0.55em", 0],
                            translateZ: 0,
                            rotateZ: [180, 0],
                            duration: 750,
                            easing: "easeOutExpo",
                            delay: (el, i) => 50 * i
                        }).add({
                            targets: '.ml7',
                            opacity: 0,
                            duration: 1000,
                            easing: "easeOutExpo",
                            delay: 1000
                        });
                    </script>

                    <style>
                        .ml7 {
                        position: relative;
                        font-weight: 900;
                        font-size: 3.7em;
                        }
                        .ml7 .text-wrapper {
                        position: relative;
                        display: inline-block;
                        padding-top: 0.2em;
                        padding-right: 0.05em;
                        padding-bottom: 0.1em;
                        overflow: hidden;
                        }
                        .ml7 .letter {
                        transform-origin: 0 100%;
                        display: inline-block;
                        line-height: 1em;
                        }
                    </style>


                </div>
            </div>
            
            <div class="composition" style="background-color: #98bec8">
                        <span class="composition-hint">
                        <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                        Source</span>
                        <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml8"&gt;
                    &lt;span class="letters-container"&gt;
                        &lt;span class="letters letters-left"&gt;Hi&lt;/span&gt;
                        &lt;span class="letters bang"&gt;!&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;span class="circle circle-white"&gt;&lt;/span&gt;
                    &lt;span class="circle circle-dark"&gt;&lt;/span&gt;
                    &lt;span class="circle circle-container"&gt;&lt;span class="circle circle-dark-dashed"&gt;&lt;/span&gt;&lt;/span&gt;
                    &lt;/h1&gt;

                    </code></pre>
                        <div class="composition-wrapper" data-color="98bec8">
                        <h1 class="ml8">
                    <span class="letters-container">
                        <span class="letters letters-left" style="transform: scale(0);">Hi</span>
                        <span class="letters bang" style="transform: scale(0) rotateZ(45deg);">!</span>
                    </span>
                    <span class="circle circle-white" style="opacity: 0.995735; transform: scale(0.0127958) rotateZ(1.5355deg);"></span>
                    <span class="circle circle-dark" style="transform: scale(0);"></span>
                    <span class="circle circle-container" style="transform: scale(7.77937e-05);"><span class="circle circle-dark-dashed" style="transform: rotateZ(39.7484deg);"></span></span>
                    </h1>

                    <!--more-->

                    <script>
                        ml.timelines["ml8"] = anime.timeline({loop: true})
                        .add({
                            targets: '.ml8 .circle-white',
                            scale: [0, 3],
                            opacity: [1, 0],
                            easing: "easeInOutExpo",
                            rotateZ: 360,
                            duration: 1100
                        }).add({
                            targets: '.ml8 .circle-container',
                            scale: [0, 1],
                            duration: 1100,
                            easing: "easeInOutExpo",
                            offset: '-=1000'
                        }).add({
                            targets: '.ml8 .circle-dark',
                            scale: [0, 1],
                            duration: 1100,
                            easing: "easeOutExpo",
                            offset: '-=600'
                        }).add({
                            targets: '.ml8 .letters-left',
                            scale: [0, 1],
                            duration: 1200,
                            offset: '-=550'
                        }).add({
                            targets: '.ml8 .bang',
                            scale: [0, 1],
                            rotateZ: [45, 15],
                            duration: 1200,
                            offset: '-=1000'
                        }).add({
                            targets: '.ml8',
                            opacity: 0,
                            duration: 1000,
                            easing: "easeOutExpo",
                            delay: 1400
                        });

                        anime({
                        targets: '.ml8 .circle-dark-dashed',
                        rotateZ: 360,
                        duration: 8000,
                        easing: "linear",
                        loop: true
                        });
                    </script>

                    <style>
                        h1.ml8 {
                        font-weight: 900;
                        font-size: 4.5em;
                        color: #fff;
                        width: 3em;
                        height: 3em;
                        }

                        .ml8 .letters-container {
                        position: absolute;
                        left: 0;
                        right: 0;
                        margin: auto;
                        top: 0;
                        bottom: 0;
                        height: 1em;
                        }

                        .ml8 .letters {
                        position: relative;
                        z-index: 2;
                        display: inline-block;
                        line-height: 0.7em;
                        right: -0.12em;
                        top: -0.2em;
                        }

                        .ml8 .bang {
                        font-size: 1.4em;
                        top: auto;
                        left: -0.06em;
                        }

                        .ml8 .circle {
                        position: absolute;
                        left: 0;
                        right: 0;
                        margin: auto;
                        top: 0;
                        bottom: 0;
                        }

                        .ml8 .circle-white {
                        width: 3em;
                        height: 3em;
                        border: 2px dashed white;
                        border-radius: 2em;
                        }

                        .ml8 .circle-dark {
                        width: 2.2em;
                        height: 2.2em;
                        background-color: #4f7b86;
                        border-radius: 3em;
                        z-index: 1;
                        }

                        .ml8 .circle-dark-dashed {
                        border-radius: 2.4em;
                        background-color: transparent;
                        border: 2px dashed #4f7b86;
                        width: 2.3em;
                        height: 2.3em;
                        }
                    </style>


                    </div>
            </div>
            
            <div class="composition" style="background-color: #1a1a1a">
                        <span class="composition-hint">
                        <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                        Source</span>
                        <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml9"&gt;
                    &lt;span class="text-wrapper"&gt;
                        &lt;span class="letters"&gt;Coffee mornings&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;/h1&gt;

                    </code></pre>
                        <div class="composition-wrapper" data-color="1a1a1a">
                        <h1 class="ml9">
                    <span class="text-wrapper">
                        <span class="letters"><span class="letter" style="transform: scale(0.474792);">C</span><span class="letter" style="transform: scale(0.150153);">o</span><span class="letter" style="transform: scale(0);">f</span><span class="letter" style="transform: scale(0);">f</span><span class="letter" style="transform: scale(0);">e</span><span class="letter" style="transform: scale(0);">e</span> <span class="letter" style="transform: scale(0);">m</span><span class="letter" style="transform: scale(0);">o</span><span class="letter" style="transform: scale(0);">r</span><span class="letter" style="transform: scale(0);">n</span><span class="letter" style="transform: scale(0);">i</span><span class="letter" style="transform: scale(0);">n</span><span class="letter" style="transform: scale(0);">g</span><span class="letter" style="transform: scale(0);">s</span></span>
                    </span>
                    </h1>

                    <!--more-->

                    <script>
                        // Wrap every letter in a span
                        var textWrapper = document.querySelector('.ml9 .letters');
                        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                        ml.timelines["ml9"] = anime.timeline({loop: true})
                        .add({
                            targets: '.ml9 .letter',
                            scale: [0, 1],
                            duration: 1500,
                            elasticity: 600,
                            delay: (el, i) => 45 * (i+1)
                        }).add({
                            targets: '.ml9',
                            opacity: 0,
                            duration: 1000,
                            easing: "easeOutExpo",
                            delay: 1000
                        });
                    </script>

                    <style>
                        .ml9 {
                        position: relative;
                        font-weight: 200;
                        font-size: 4em;
                        }

                        .ml9 .text-wrapper {
                        position: relative;
                        display: inline-block;
                        padding-top: 0.2em;
                        padding-right: 0.05em;
                        padding-bottom: 0.1em;
                        overflow: hidden;
                        }

                        .ml9 .letter {
                        transform-origin: 50% 100%;
                        display: inline-block;
                        line-height: 1em;
                        }
                    </style>


                    </div>
            </div>
            
            <div class="composition" style="background-color: #224a54">
                    <span class="composition-hint">
                    <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                    Source</span>
                    <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml10"&gt;
                &lt;span class="text-wrapper"&gt;
                    &lt;span class="letters"&gt;Domino Dreams&lt;/span&gt;
                &lt;/span&gt;
                &lt;/h1&gt;

                </code></pre>
                    <div class="composition-wrapper" data-color="224a54">
                    <h1 class="ml10">
                <span class="text-wrapper">
                    <span class="letters"><span class="letter" style="transform: rotateY(-20.715deg);">D</span><span class="letter" style="transform: rotateY(-47.2626deg);">o</span><span class="letter" style="transform: rotateY(-75.4949deg);">m</span><span class="letter" style="transform: rotateY(-90deg);">i</span><span class="letter" style="transform: rotateY(-90deg);">n</span><span class="letter" style="transform: rotateY(-90deg);">o</span> <span class="letter" style="transform: rotateY(-90deg);">D</span><span class="letter" style="transform: rotateY(-90deg);">r</span><span class="letter" style="transform: rotateY(-90deg);">e</span><span class="letter" style="transform: rotateY(-90deg);">a</span><span class="letter" style="transform: rotateY(-90deg);">m</span><span class="letter" style="transform: rotateY(-90deg);">s</span></span>
                </span>
                </h1>

                    <!--more-->

                    <script>
                        // Wrap every letter in a span
                        var textWrapper = document.querySelector('.ml10 .letters');
                        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                        ml.timelines["ml10"] = anime.timeline({loop: true})
                        .add({
                            targets: '.ml10 .letter',
                            rotateY: [-90, 0],
                            duration: 1300,
                            delay: (el, i) => 45 * i
                        }).add({
                            targets: '.ml10',
                            opacity: 0,
                            duration: 1000,
                            easing: "easeOutExpo",
                            delay: 1000
                        });
                    </script>

                    <style>
                        .ml10 {
                        position: relative;
                        font-weight: 900;
                        font-size: 4em;
                        }

                        .ml10 .text-wrapper {
                        position: relative;
                        display: inline-block;
                        padding-top: 0.2em;
                        padding-right: 0.05em;
                        padding-bottom: 0.1em;
                        overflow: hidden;
                        }

                        .ml10 .letter {
                        display: inline-block;
                        line-height: 1em;
                        transform-origin: 0 0;
                        }
                    </style>


                </div>
            </div>
            
            <div class="composition" style="background-color: #e8c3b9">
                        <span class="composition-hint">
                        <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                        Source</span>
                        <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml11"&gt;
                    &lt;span class="text-wrapper"&gt;
                        &lt;span class="line line1"&gt;&lt;/span&gt;
                        &lt;span class="letters"&gt;Hello Goodbye&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;/h1&gt;

                    </code></pre>
                        <div class="composition-wrapper" data-color="e8c3b9">
                        <h1 class="ml11">
                    <span class="text-wrapper">
                        <span class="line line1" style="opacity: 0.775781; transform: scaleY(0.551561);"></span>
                        <span class="letters"><span class="letter" style="opacity: 0;">H</span><span class="letter" style="opacity: 0;">e</span><span class="letter" style="opacity: 0;">l</span><span class="letter" style="opacity: 0;">l</span><span class="letter" style="opacity: 0;">o</span> <span class="letter" style="opacity: 0;">G</span><span class="letter" style="opacity: 0;">o</span><span class="letter" style="opacity: 0;">o</span><span class="letter" style="opacity: 0;">d</span><span class="letter" style="opacity: 0;">b</span><span class="letter" style="opacity: 0;">y</span><span class="letter" style="opacity: 0;">e</span></span>
                    </span>
                    </h1>

                    <!--more-->

                    <style>
                        .ml11 {
                        font-weight: 700;
                        font-size: 3.5em;
                        }

                        .ml11 .text-wrapper {
                        position: relative;
                        display: inline-block;
                        padding-top: 0.1em;
                        padding-right: 0.05em;
                        padding-bottom: 0.15em;
                        }

                        .ml11 .line {
                        opacity: 0;
                        position: absolute;
                        left: 0;
                        height: 100%;
                        width: 3px;
                        background-color: #fff;
                        transform-origin: 0 50%;
                        }

                        .ml11 .line1 { 
                        top: 0; 
                        left: 0;
                        }

                        .ml11 .letter {
                        display: inline-block;
                        line-height: 1em;
                        }
                    </style>

                    <script>
                        // Wrap every letter in a span
                        var textWrapper = document.querySelector('.ml11 .letters');
                        textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

                        ml.timelines["ml11"] = anime.timeline({loop: true})
                        .add({
                            targets: '.ml11 .line',
                            scaleY: [0,1],
                            opacity: [0.5,1],
                            easing: "easeOutExpo",
                            duration: 700
                        })
                        .add({
                            targets: '.ml11 .line',
                            translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
                            easing: "easeOutExpo",
                            duration: 700,
                            delay: 100
                        }).add({
                            targets: '.ml11 .letter',
                            opacity: [0,1],
                            easing: "easeOutExpo",
                            duration: 600,
                            offset: '-=775',
                            delay: (el, i) => 34 * (i+1)
                        }).add({
                            targets: '.ml11',
                            opacity: 0,
                            duration: 1000,
                            easing: "easeOutExpo",
                            delay: 1000
                        });
                    </script>


                </div>
            </div>
            
            <div class="composition" style="background-color: #9ba5b5">
                    <span class="composition-hint">
                    <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                    Source</span>
                    <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml12"&gt;A new production&lt;/h1&gt;

                </code></pre>
                    <div class="composition-wrapper" data-color="9ba5b5">
                    <h1 class="ml12"><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">A</span> <span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">n</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">e</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">w</span> <span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">p</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">r</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">o</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">d</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">u</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">c</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">t</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">i</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">o</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px);">n</span></h1>

                <!--more-->

                    <script>
                        // Wrap every letter in a span
                        var textWrapper = document.querySelector('.ml12');
                        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                        ml.timelines["ml12"] = anime.timeline({loop: true})
                        .add({
                            targets: '.ml12 .letter',
                            translateX: [40,0],
                            translateZ: 0,
                            opacity: [0,1],
                            easing: "easeOutExpo",
                            duration: 1200,
                            delay: (el, i) => 500 + 30 * i
                        }).add({
                            targets: '.ml12 .letter',
                            translateX: [0,-30],
                            opacity: [1,0],
                            easing: "easeInExpo",
                            duration: 1100,
                            delay: (el, i) => 100 + 30 * i
                        });
                    </script>

                    <style>
                        .ml12 {
                        font-weight: 200;
                        font-size: 1.8em;
                        text-transform: uppercase;
                        letter-spacing: 0.5em;
                        }

                        .ml12 .letter {
                        display: inline-block;
                        line-height: 1em;
                        }
                    </style>


                </div>
            </div>
            
            <div class="composition" style="background-color: #98bec8">
                    <span class="composition-hint">
                    <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                    Source</span>
                    <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml13"&gt;Rising Strong&lt;/h1&gt;

                </code></pre>
                    <div class="composition-wrapper" data-color="98bec8">
                    <h1 class="ml13"><span class="letter" style="opacity: 0; transform: translateY(100px) translateZ(0px);">R</span><span class="letter" style="opacity: 0; transform: translateY(100px) translateZ(0px);">i</span><span class="letter" style="opacity: 0; transform: translateY(100px) translateZ(0px);">s</span><span class="letter" style="opacity: 0; transform: translateY(100px) translateZ(0px);">i</span><span class="letter" style="opacity: 0; transform: translateY(100px) translateZ(0px);">n</span><span class="letter" style="opacity: 0; transform: translateY(100px) translateZ(0px);">g</span> <span class="letter" style="opacity: 0; transform: translateY(100px) translateZ(0px);">S</span><span class="letter" style="opacity: 0; transform: translateY(100px) translateZ(0px);">t</span><span class="letter" style="opacity: 0; transform: translateY(100px) translateZ(0px);">r</span><span class="letter" style="opacity: 0; transform: translateY(100px) translateZ(0px);">o</span><span class="letter" style="opacity: 0; transform: translateY(100px) translateZ(0px);">n</span><span class="letter" style="opacity: 0; transform: translateY(100px) translateZ(0px);">g</span></h1>

                <!--more-->

                    <script>
                        // Wrap every letter in a span
                        var textWrapper = document.querySelector('.ml13');
                        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                        ml.timelines["ml13"] = anime.timeline({loop: true})
                        .add({
                            targets: '.ml13 .letter',
                            translateY: [100,0],
                            translateZ: 0,
                            opacity: [0,1],
                            easing: "easeOutExpo",
                            duration: 1400,
                            delay: (el, i) => 300 + 30 * i
                        }).add({
                            targets: '.ml13 .letter',
                            translateY: [0,-100],
                            opacity: [1,0],
                            easing: "easeInExpo",
                            duration: 1200,
                            delay: (el, i) => 100 + 30 * i
                        });
                    </script>

                    <style>
                        .ml13 {
                        font-size: 1.9em;
                        text-transform: uppercase;
                        letter-spacing: 0.5em;
                        font-weight: 600;
                        }

                        .ml13 .letter {
                        display: inline-block;
                        line-height: 1em;
                        }
                    </style>


                </div>
            </div>
            
            <div class="composition" style="background-color: #45383c">
                        <span class="composition-hint">
                        <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                        Source</span>
                        <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml14"&gt;
                    &lt;span class="text-wrapper"&gt;
                        &lt;span class="letters"&gt;Find Your Element&lt;/span&gt;
                        &lt;span class="line"&gt;&lt;/span&gt;
                    &lt;/span&gt;
                    &lt;/h1&gt;

                    </code></pre>
                        <div class="composition-wrapper" data-color="45383c">
                        <h1 class="ml14">
                    <span class="text-wrapper">
                        <span class="letters"><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">F</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">i</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">n</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">d</span> <span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">Y</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">o</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">u</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">r</span> <span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">E</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">l</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">e</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">m</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">e</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">n</span><span class="letter" style="opacity: 0; transform: translateX(40px) translateZ(0px) scaleX(0.3);">t</span></span>
                        <span class="line" style="opacity: 0.501597; transform: scaleX(0.0031936);"></span>
                    </span>
                    </h1>

                    <!--more-->

                    <script>
                        // Wrap every letter in a span
                        var textWrapper = document.querySelector('.ml14 .letters');
                        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                        ml.timelines["ml14"] = anime.timeline({loop: true})
                        .add({
                            targets: '.ml14 .line',
                            scaleX: [0,1],
                            opacity: [0.5,1],
                            easing: "easeInOutExpo",
                            duration: 900
                        }).add({
                            targets: '.ml14 .letter',
                            opacity: [0,1],
                            translateX: [40,0],
                            translateZ: 0,
                            scaleX: [0.3, 1],
                            easing: "easeOutExpo",
                            duration: 800,
                            offset: '-=600',
                            delay: (el, i) => 150 + 25 * i
                        }).add({
                            targets: '.ml14',
                            opacity: 0,
                            duration: 1000,
                            easing: "easeOutExpo",
                            delay: 1000
                        });
                    </script>

                    <style>
                        .ml14 {
                        font-weight: 200;
                        font-size: 3.2em;
                        }

                        .ml14 .text-wrapper {
                        position: relative;
                        display: inline-block;
                        padding-top: 0.1em;
                        padding-right: 0.05em;
                        padding-bottom: 0.15em;
                        }

                        .ml14 .line {
                        opacity: 0;
                        position: absolute;
                        left: 0;
                        height: 2px;
                        width: 100%;
                        background-color: #fff;
                        transform-origin: 100% 100%;
                        bottom: 0;
                        }

                        .ml14 .letter {
                        display: inline-block;
                        line-height: 1em;
                        }
                    </style>


                </div>
            </div>
            
            <div class="composition" style="background-color: #c1605c">
                        <span class="composition-hint">
                        <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                        Source</span>
                        <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml15"&gt;
                    &lt;span class="word"&gt;Out&lt;/span&gt;
                    &lt;span class="word"&gt;now&lt;/span&gt;
                    &lt;/h1&gt;

                    </code></pre>
                        <div class="composition-wrapper" data-color="c1605c">
                        <h1 class="ml15">
                    <span class="word" style="opacity: 0; transform: scale(14);">Out</span>
                    <span class="word" style="opacity: 0; transform: scale(14);">now</span>
                    </h1>

                    <!--more-->

                    <script>
                        ml.timelines["ml15"] = anime.timeline({loop: true})
                        .add({
                            targets: '.ml15 .word',
                            scale: [14,1],
                            opacity: [0,1],
                            easing: "easeOutCirc",
                            duration: 800,
                            delay: (el, i) => 800 * i
                        }).add({
                            targets: '.ml15',
                            opacity: 0,
                            duration: 1000,
                            easing: "easeOutExpo",
                            delay: 1000
                        });
                    </script>

                    <style>
                        .ml15 {
                        font-weight: 800;
                        font-size: 3.8em;
                        text-transform: uppercase;
                        letter-spacing: 0.5em;
                        }

                        .ml15 .word {
                        display: inline-block;
                        line-height: 1em;
                        }
                    </style>


                </div>
            </div>
            
            <div class="composition" style="background-color: #f3e9c6">
                        <span class="composition-hint">
                        <img class="composition-hint-arrows" src="/img/source.svg" width="18" height="13">
                        Source</span>
                        <pre class="hidden"><code class="composition-static-html">&lt;h1 class="ml16"&gt;Made with love&lt;/h1&gt;

                    </code></pre>
                        <div class="composition-wrapper" data-color="f3e9c6">
                        <h1 class="ml16"><span class="letter" style="transform: translateY(-100px);">M</span><span class="letter" style="transform: translateY(-100px);">a</span><span class="letter" style="transform: translateY(-100px);">d</span><span class="letter" style="transform: translateY(-100px);">e</span> <span class="letter" style="transform: translateY(-100px);">w</span><span class="letter" style="transform: translateY(-100px);">i</span><span class="letter" style="transform: translateY(-100px);">t</span><span class="letter" style="transform: translateY(-100px);">h</span> <span class="letter" style="transform: translateY(-100px);">l</span><span class="letter" style="transform: translateY(-100px);">o</span><span class="letter" style="transform: translateY(-100px);">v</span><span class="letter" style="transform: translateY(-100px);">e</span></h1>

                    <!--more-->

                    <script>
                        // Wrap every letter in a span
                        var textWrapper = document.querySelector('.ml16');
                        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

                        ml.timelines["ml16"] = anime.timeline({loop: true})
                        .add({
                            targets: '.ml16 .letter',
                            translateY: [-100,0],
                            easing: "easeOutExpo",
                            duration: 1400,
                            delay: (el, i) => 30 * i
                        }).add({
                            targets: '.ml16',
                            opacity: 0,
                            duration: 1000,
                            easing: "easeOutExpo",
                            delay: 1000
                        });
                    </script>

                    <style>
                        .ml16 {
                        color: #402d2d;
                        padding: 40px 0;
                        font-weight: 800;
                        font-size: 2em;
                        text-transform: uppercase;
                        letter-spacing: 0.5em;
                        overflow: hidden;
                        }

                        .ml16 .letter {
                        display: inline-block;
                        line-height: 1em;
                        }
                    </style>


                </div>
            </div>
    
        </div>

        <div class="footer-more-projects">
            <h2 class="collection-inline-header">More projects</h2>

            <div class="collection-projects-footer">
            <a href="/spinkit/" class="collection-project collection-project-spinkit">
                <div class="collection-project-preview collection-project-preview-spinkit"></div>
                <h2 class="collection-project-header">SpinKit</h2>
                <p class="collection-project-description">A collection of CSS spinners</p>
            </a>

            <a href="/typesource/" class="collection-project collection-project-typesource">
                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="52" height="60" viewBox="0 0 52 60" class="collection-project-preview collection-project-preview-typesource"><path fill="#f7f7f7" d="M50 20c-1.105 0-2-.896-2-2v-2c0-6.63-5.373-12-12-12h-4v44c0 4.417 3.582 8 8 8 1.104 0 2 .895 2 2 0 1.104-.896 2-2 2H12c-1.105 0-2-.896-2-2 0-1.105.895-2 2-2 4.418 0 8-3.583 8-8V4h-4C9.372 4 4 9.37 4 16v2c0 1.104-.896 2-2 2-1.105 0-2-.896-2-2V2C0 .894.895 0 2 0h48c1.104 0 2 .895 2 2v16c0 1.104-.896 2-2 2z"></path></svg>
                <h2 class="collection-project-header">TypeSource</h2>
                <p class="collection-project-description">Google Font inspiration</p>
            </a>

            <a href="/moving-letters/" class="collection-project collection-project-moving-letters" style="display: none;">
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
                    <a class="collection-twitter-link" href="https://twitter.com/tobiasahlin">@tobiasahlin</a>
                    <p>Letter animation code is free to use, licensed under <a href="https://opensource.org/licenses/MIT">MIT</a>. Site design 
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