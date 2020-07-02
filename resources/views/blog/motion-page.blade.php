@extends('layouts')
@section('title', 'Meaningful Motion with Action-Driven Animation | Tobias Ahlin')
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
			<h1 class="post-header">Meaningful Motion with Action-Driven Animation</h1>
    </div>
	
	<div class="article article-single">
		<div class="blog-banner">
  <div class="blog-banner-content">
    <div class="post-ada-container">
      <div class="post-ada-window" style="opacity: 1; transform: scale(1);">
        <div class="post-ada-message">Do something?</div>
        <div class="post-ada-button post-ada-button-cancel">Cancel<div class="post-ada-button-overlay" style="opacity: 0.0917914;"></div></div>
        <div class="post-ada-button post-ada-button-ok">Do it<div class="post-ada-button-overlay" style="opacity: 0;"></div></div>
      </div>
      <img src="/img/cursor.png" width="30" class="post-ada-cursor" style="transform: translateX(-75px);">
    </div>
  </div>
</div>
<style>
    .post-ada-container {
    width: 100px;
    height: 80px;
    position: relative;
    display: inline-block;
    color: #000;
    }
    .post-ada-window {
        border-radius: 3px;
        background-color: #fff;
        text-align: center;
        display: block;
        width: 100%;
        height: 100%;
        font-family: SF UI, SF Display, Helvetica Neue, Arial, sans-serif;
        font-weight: 400;
        font-size: 10px;
        transform: translateZ(0);
        overflow: hidden;
    }
    .post-ada-message { padding-top: 15px; transform: translateZ(0); }
    .post-ada-button {
    position: absolute;
    bottom: 0;
    height: 20px;
    background-color: #e5e5e5;
    border-top: 1px solid #cecece;
    width: 50%;
    line-height: 20px;
    padding-bottom: 1px;
    }
    .post-ada-button-overlay {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background-color: #000;
    opacity: 0;
    }
    .post-ada-button-cancel { left: 0; }
    .post-ada-button-ok { right: 0; border-left: 1px solid #cecece; }
    .post-ada-container .post-ada-cursor { position: absolute; bottom: -25px; right: -18px; }

</style>

<script>
    // Post icon animation
    var postIconTimeline = anime.timeline({ loop: true });
    postIconTimeline
    .add({
        targets: '.post-ada-cursor',
        translateX: "-75px",
        easing: "easeOutBack",
        duration: 400,
        delay: 100
    }).add({
        // Press button
        targets: '.post-ada-button-cancel .post-ada-button-overlay',
        opacity: [0, 0.3],
        easing: 'easeOutExpo',
        duration: 100
    }).add({
        // Press button
        targets: '.post-ada-button-cancel .post-ada-button-overlay',
        opacity: [0.3, 0],
        easing: 'easeOutExpo',
        duration: 100
    }).add({
        // Shrink modal
        targets: '.post-ada-window',
        scale: 0.7,
        opacity: 0,
        easing: "easeOutExpo",
        duration: 600
    }).add({
        // Reveal modal
        targets: '.post-ada-window',
        scale: 1,
        opacity: 1,
        easing: "easeOutExpo",
        duration: 600,
        delay: 1000
    }).add({
        // Move cursor
        targets: '.post-ada-cursor',
        translateX: "0px",
        easing: "easeOutBack",
        duration: 400,
        delay: 100
    }).add({
        // Press button
        targets: '.post-ada-button-ok .post-ada-button-overlay',
        opacity: [0, 0.3],
        easing: 'easeOutExpo',
        duration: 100,
        delay: 200
    }).add({
        // Press button
        targets: '.post-ada-button-ok .post-ada-button-overlay',
        opacity: [0.3, 0],
        easing: 'easeOutExpo',
        duration: 100
    }).add({
        // Expand modal
        targets: '.post-ada-window',
        scale: 1.3,
        opacity: 0,
        easing: "easeOutExpo",
        duration: 600
    }).add({
        // Reveal modal
        targets: '.post-ada-window',
        scale: [0.6, 1],
        opacity: 1,
        easing: "easeOutExpo",
        duration: 600,
        delay: 1000
    });
    app.animations.track(postIconTimeline, document.querySelector(".post-ada-window"));
</script>

<!--more-->

<p>How do we animate interfaces in ways that are not just beautiful, but meaningful? When we add motion to interfaces we want to in one way or another improve the user experience, be it through aiding the comprehension of a concept, setting the mood, improving the perception of speed, or directing the attention of a user. Regardless of the intent of the animation, when animations fail to be meaningful they often fail because of the same reason; failed animations simply visualize objects morphing between being hidden and visible, rather than visualizing the actions unfolding on screen. A window rarely just closes or opens; a message is sent, a draft is discarded, an item is used.</p>

<p>This is essentially <em>state-driven animation</em> vs. <em>action-driven animation</em>. By applying action-driven animation you can catch yourself in the act of creating something that’s not as meaningful as it could be. Are you simply morphing between states, or are you visualizing actions?  Meaningful motion is about clear and engaging storytelling, and we can apply action-driven animation to remind ourselves when we’re straying from that path.</p>

<h2 id="state-driven-animation">State-driven animation<a href="#state-driven-animation" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#state-driven-animation</span></a></h2>

<p>Let’s take a look at a basic example of state-driven animation vs. action-driven animation: interacting with a modal. This is a simulation of state-driven animation being applied to a modal:</p>

<div class="post-demo-content post-ada-canvas">
  <div class="post-ada-content ada-modal-sda">
    <div class="post-ada-pause-play post-ada-pause-play-1"></div>
    <div class="post-ada-modal" style="opacity: 0;">
      <div class="post-ada-modal-message">Do you wish to do something?</div>
      <div class="post-ada-modal-button post-ada-modal-button-left">Cancel<div class="post-ada-modal-button-overlay" style="opacity: 0;"></div></div>
      <div class="post-ada-modal-button post-ada-modal-button-right">Do thing<div class="post-ada-modal-button-overlay" style="opacity: 0;"></div></div>
    </div>
  </div>
</div>

<p>As the modal appears, it fades in. Whatever button is pushed, it fades out again. What’s wrong with this animation? Fading between hidden and visible isn’t helpful to understand what’s happening on screen, other than in underlining that an object is being shown and hidden.</p>

<p>You might be thinking “C’mon, what is there to understand? It’s a modal. It’s being hidden, and shown!”. Yes, but—the user is also triggering an action. Rather than only morphing between states, we can use motion to reinforce what action is being triggered by the user.</p>

<h2 id="action-driven-animation">Action-driven animation<a href="#action-driven-animation" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#action-driven-animation</span></a></h2>

<p>Here’s is a simulation of action-driven animation being applied to the same modal:</p>

<div class="post-demo-content post-ada-canvas">
  <div class="post-ada-content ada-modal-ada">
    <div class="post-ada-pause-play post-ada-pause-play-2"></div>
    <div class="post-ada-modal" style="opacity: 0; transform: scale(0.5);">
      <div class="post-ada-modal-message">Do you wish to do something?</div>
      <div class="post-ada-modal-button post-ada-modal-button-left">Cancel<div class="post-ada-modal-button-overlay" style="opacity: 0;"></div></div>
      <div class="post-ada-modal-button post-ada-modal-button-right">Do thing<div class="post-ada-modal-button-overlay" style="opacity: 0;"></div></div>
    </div>
  </div>
</div>

<p>Now, how is this better than the previous animation? Try to ignore for the moment the aesthetics of the two. What we want to focus on is this: what does the second animation convey that the first one does not?</p>

<p>In the first example, with state-driven animation, we use two different animations: fading in, and fading out. Clicking <em>Cancel</em> and clicking <em>Do it</em> both triggers the fade out animation. In other words, the only thing we’re differentiating between is the <em>states</em> of the modal: hidden vs. visible.</p>

<p>Contrarily, in the second example we’ve got three different animations, and we differ between the two <em>actions</em> by playing different animations depending on the chosen option. On <em>Cancel</em>, we clearly show that the modal is being cancelled by scaling it down and fading it out, sending it back to where it came from. When the affirmative action is selected (<em>Do thing</em>), we do the opposite: scale it up and fade it out, bringing it closer to the user. In other words, we’re not only differentiating between states, but <em>how you travel between those states</em>, i.e., what actions are being performed.</p>

<p>It’s common to think of apps as a series of views or states, and animations as a way to travel between those states. Take this Email app and two of its states:</p>

<p><img src="/img/state-driven-animation.png" alt="Illustrated example of state-driven animation, showing the transition between two states of an email app; the main window with a composing window overlaying it (state A), and after closing it, just the main window (state b)"></p>

<p>If we do so, it’s easy to in our animations neglect <em>how</em> these states are connected, and always use the same transition to animate between those states. Rule of thumb: if your methods are called something like <code class="language-plaintext highlighter-rouge">showWindow()</code> and <code class="language-plaintext highlighter-rouge">hideWindow()</code>, or if you’re only animating <code class="language-plaintext highlighter-rouge">opacity</code>, you’re leaving your users in the dark to figure out exactly what happened. They’ll see that something changed, but not what caused that change. It’s sort of like leaving a party without saying goodbye; the host won’t know if you hated the party or just had to run home to do your laundry.</p>

<p>Action-driven animation elevates <em>the connections between the views</em> to become the plots of the motion. In other words, what took you between state and A and state B? In our Email app, you can get between state A (composing visible) and state B (composing hidden) in at least two different ways: either by sending an email, or by discarding an email and closing the window.</p>

<p><img src="/img/action-driven-animation.png" alt="Illustrated example of action-driven animation, showing two different animations between two states of an email app; you can hide the compose window either by sending an email, or by discarding an email"></p>

<p>You’ll make your app easier to understand by visualizing whatever caused the change of state. By creating a unique animation for every action we can help users differentiate between different action paths, and help them intuitively gain a deeper understanding of the events unfolding on screen.</p>

<h2 id="when-state-driven-animation-fails">When state-driven animation fails<a href="#when-state-driven-animation-fails" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#when-state-driven-animation-fails</span></a></h2>

<p>That sounds simple, right? It’s easier said than done. A while back, just before giving a talk on UI animation at a conference in Prague, I was stumped by an animation used by Tumblr. Before continuing, I want to underline that I highly respect the Tumblr design team—they’ve produced some admirable design, and I have on several occasions used some of their implementations as examples to be inspired by. That said, something went wrong in this specific instance.</p>

<p>I had just signed up for a new Tumblr account and was getting ready to make my first post. But for some reason, whatever I posted kept disappearing as I hit <em>Post</em>:</p>

<video playsinline="" controls="" width="900" poster="/static/action-driven-animation/posters/tumblr.jpg">
  <source src="/video/tumblr-fail.mp4" type="video/mp4">
  <source src="/video/tumblr-fail.webm" type="video/webm">
</video>

<br>
<br>

<p>Or, as you can see towards the end of the clip, that’s not at all what happened. Whatever option I selected, <em>Close</em> and <em>Post</em> both triggered the same animation (with the exception of a spinner showing up briefly inside the Post button when I selected <em>Post</em>). Nothing gave me a hint of that something had been successfully posted. The post section just disappeared.</p>

<p>What’s gone wrong here? On first sight this animation looks meaningful and helpful. But again, we’re just morphing between two states, rather than visualizing the actions unfolding on the screen. Cancelling a post and successfully posting is two fundamentally different actions, yet they share the same animation. In this instance state-driven animation doesn’t just fail to be as meaningful as it could be—it’s causing confusion and obfuscating what’s happening.</p>

<p>To be fair to Tumblr, the issue is in this instance is being amplified by the Dashboard on-boarding that’s floating just below the navigation, pushing down new posts below the fold. But regardless of the unlucky circumstances, the animation can be improved by moving from state-driven animation to action-driven animation. Rather than only morphing between the two states of the posting section (visible and hidden), the action of posting could be associated with an animation that clearly transitions between you writing a post, to the post being published.</p>

<h2 id="applying-action-driven-animation">Applying action-driven animation<a href="#applying-action-driven-animation" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#applying-action-driven-animation</span></a></h2>

<p>So how do you go about using action-driven animation to improve the animations of your product? To show this in practice, I’ve mocked up a dummy email app (shown previously in the email illustration above). Let’s look closer at the actions related to working with a message, and make the move from state-driven animation to action-driven animation together.</p>

<p>The first step is to list all important actions in the part of the app that you’re working with, rather than all views. There are only two views involved in working with a message in our Email app, but there are four different actions. You can:</p>

<ol>
  <li>Create a new message</li>
  <li>Send the message</li>
  <li>Discard the message</li>
  <li>Close the message and save it as a draft</li>
</ol>

<p>If we just faded between the different views, this is what it would look like working with the app (going through the different actions in the order above):</p>

<video playsinline="" width="900" controls="" poster="/static/action-driven-animation/posters/state-driven-animation.jpg">
  <source src="/video/email-fade.mp4" type="video/mp4">
  <source src="/video/email-fade.webm" type="video/webm">
</video>

<p>To create more meaningful animations we need to look critically at every fade and ask ourselves: what actions are being taken?</p>

<h3 id="choosing-a-storytelling-axis">Choosing a storytelling axis<a href="#choosing-a-storytelling-axis" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#choosing-a-storytelling-axis</span></a></h3>

<p>Before we create a unique animation for every action, let’s settle on a primary axis to weave our storytelling around. If you’re interacting with something that will affect yourself or the user directly (e.g. a modal asking you if you want to continue), the Z axis is usually the best choice. If we weave our storytelling around the Z axis, like we did in our modal example earlier, we can make the modal move closer towards you as you choose an affirmative action (scaling up the modal, almost as if it lifts off the screen and travels towards you), and we can make it move away from you as you dismiss it. The Z axis reinforces that the modal relates to <em>you</em>.</p>

<p>When you’re interacting with something that relates to someone else, like an email message that you’re about to send off to someone, your best choice of primary axis is usually the Y axis. By moving something rapidly upwards along the Y axis and making it exit the screen while still accelerating away from you, we reinforce the concept of you sending off something to someone else. It’s almost as if you’re taking an envelope and sending it off to its next destination. Or as if you’re using a salmon cannon:</p>

<p><img src="/img/cannon-1.gif" width="900"></p>

<p><img src="/img/cannon-2.gif" width="900"></p>

<p>Since we’re working with an email message here that we’ll eventually send off to someone else, let’s pick the Y axis as our primary axis. What that in mind, let’s break down every action and animation, before reviewing it all together.</p>

<h3 id="creating-a-new-email">Creating a new email<a href="#creating-a-new-email" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#creating-a-new-email</span></a></h3>

<p>Rather than only fading in a new message once you create it, we can animate the window to make it appear like we’re summoning a new message from below. Just like how in this lovely GIF (by <a class="red" href="http://jonasmosesson.se">Jonas Mosesson</a>) the toast appears with a bounce from below:</p>

<p><img src="/img/toast.gif"></p>

<p>In the same vein, we can fade in the message as we animate it upwards along the Y axis, but we’ll make it stay in view:</p>

<video playsinline="" controls="" width="900" poster="/static/action-driven-animation/posters/new-message.jpg">
  <source src="/video/new-message-animated.mp4" type="video/mp4">  
  <source src="/video/new-message-animated.webm" type="video/webm">
</video>

<p>This animation is by itself not much more meaningful than only fading in and out, but it starts to get interesting as soon as we start adding the other animations that are clearly different from this, but connected to the same storyline.</p>

<h3 id="discarding-a-message">Discarding a message<a href="#discarding-a-message" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#discarding-a-message</span></a></h3>

<p>Once you discard an email we can make it fall back down, returning it to where it came from. Here I’m also applying a slight tilt to the window on its way down to illustrate that you’re throwing it away (rather than storing it somewhere). As if you’re dropping a piece of paper, rather than putting it away neatly:</p>

<video playsinline="" controls="" width="900" poster="/static/action-driven-animation/posters/close.jpg">
  <source src="/video/new-close-animated.mp4" type="video/mp4">
  <source src="/video/new-close-animated.webm" type="video/webm">
</video>

<h3 id="sending-a-message">Sending a message<a href="#sending-a-message" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#sending-a-message</span></a></h3>

<p>Once you hit send, let’s shoot it off, away from us (and hopefully towards a recipient):</p>

<video playsinline="" controls="" width="900" poster="/static/action-driven-animation/posters/send.jpg">
  <source src="/video/new-send-animated.mp4" type="video/mp4">
  <source src="/video/new-send-animated.webm" type="video/webm">
</video>

<p>With those three actions visualized in distinctly different ways, we’ve now got a clear story created around how messages are created, discarded, and sent off. Even though you might not infer the meaning of all the animations on first sight (they’re not necessarily intuitive), they’re clearly different and connected to an action each, and you can at the very least learn how to tell the different animations apart.</p>

<h3 id="saving-as-a-draft">Saving as a draft<a href="#saving-as-a-draft" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#saving-as-a-draft</span></a></h3>

<p>We’ve got one more action to cover. Saving a draft is crucially <em>not</em> the same thing as closing the window and discarding an email. Again, we’re dealing with actions, not states. It’s not a matter of showing or hiding objects, it’s a matter of visualizing the events unfolding on screen.</p>

<p>If we try to close the new message window while writing a message, we’re asked if we want to discard the email, or save it as a draft. Given that someone chooses “Save as draft”, what’s important to convey? At least two things, 1) that the message is being saved as a draft somewhere, and 2) exactly where that somewhere is. We want users of our app to understand where they can find that draft later, so that they can send it when the time is right:</p>

<video playsinline="" controls="" width="900" poster="/static/action-driven-animation/posters/save-draft.jpg">
  <source src="/video/save-draft-animated.mp4" type="video/mp4">
  <source src="/video/save-draft-animated.webm" type="video/webm">
</video>

<p>This animation clearly shows how your message message gets stored in your outbox, and it even tells you where your outbox is located! We’ve restricted ourselves to animating along the Y-axis up to this point to enforce the concept of <em>creating something and sending it off</em>. Now that we’re deviating from that storyline and instead storing a message, we can drop the axis restriction and shrink the message while we move it towards the outbox icon.</p>

<p>To make it clear that we’re storing the message inside the outbox (and not just shrinking and hiding the message window), we’re adding another effect: as the message window arrives at the outbox icon, we make the outbox icon grow with a small bounce effect (as if it swallows the message), and we add a small counter indicating that your number of saved drafts just increased from 0 to 1. This animation doesn’t just tell you what events are being triggered: it teaches you how the app works, and how to navigate it.</p>

<h3 id="review-before--after">Review: before &amp; after<a href="#review-before--after" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#review-before--after</span></a></h3>

<p>Before we started applying action-driven animation, we faded views in and out, which gave the false impression of us using animations to make the experience better. The animations looked a bit better than simply popping views in and out of view, but the animations didn’t add much value in terms of helping users understand of what events were unfolding on screen. This is an example of state-driven animation, and it looked like this:</p>

<video playsinline="" controls="" width="900" poster="/static/action-driven-animation/posters/state-driven-animation.jpg">
  <source src="/video/email-fade.mp4" type="video/mp4">
  <source src="/video/email-fade.webm" type="video/webm">
</video>

<p>After critically reviewing every animation and asking ourselves what each animation should convey and how best to do so, we iterated on the experience and created a set of animations that each conveys what events are unfolding on screen. We did so with the help of action-driven animation, which helps us identify the number of animations that we need to create through its focus on possible action paths, rather than on possible states. After applying action-driven animation, this is what our prototype looks like:</p>

<video playsinline="" controls="" width="900" poster="/static/action-driven-animation/posters/action-driven-animation.jpg">
  <source src="/video/all-animated.mp4" type="video/mp4">
  <source src="/video/all-animated.webm" type="video/webm">
</video>

<h2 id="in-sum">In sum<a href="#in-sum" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#in-sum</span></a></h2>

<p>I divided UI animations into two different models: <strong>state-driven animation</strong> and <strong>action-driven animation</strong>. I argued that the first model tends to produce animations that lack any significant meaning; they are not helpful. I presented an example from Tumblr to illustrate how state.driven animation can, even when it looks beautiful, miscommunicate and cause confusion.</p>

<p>I argued that a better way to work with animations is to focus on the actions or events that are being triggered, which I call <strong>action-driven animation</strong>. We reviewed how this technique can be applied to a modal and an email app, and how it aids users in understanding what actions and events are unfolding before them, but also how the app works, and how to navigate it.</p>

<p>Is action-driven animation always better? The statistician George Box famously said “All models are wrong but some are useful”. He elaborated:</p>

<blockquote>
  <p>All models are wrong but some are useful […] The only question of interest is “Is the model illuminating and useful?”</p>
</blockquote>

<p>In the same vein, action-driven animation is not a model that claims to absolutely explain or prove how an app should be animated. It’s a simplified way of thinking about motion that you can apply to review the interface animations of an app or product to create more meaningful animations. I’ve found it useful to use in my work, and I hope you will, too.</p>

<h3 id="technical-details">Technical details<a href="#technical-details" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#technical-details</span></a></h3>

<p>Although no code has been shared in this post, all of the examples that I created are animated with the lovely <a class="red" href="http://anime-js.com">anime.js library</a> (by <a class="red" href="http://juliangarnier.com">Julian Garnier</a>). If you want to play around with the email prototype and its animations, feel free <a class="red" href="/static/action-driven-animation/email-prototype.zip">download all the example code</a> and have a look around. All icons are from <a class="red" href="https://material.io/icons/">Google’s Material</a>.</p>

<h3 id="related-posts">Related posts<a href="#related-posts" class="post-header-link">#<span class="post-header-link-label">Copy</span><span class="post-header-link-hash">https://tobiasahlin.com/blog/meaningful-motion-w-action-driven-animation/#related-posts</span></a></h3>

<ul style="list-style: square">
  <li><a class="red" href="/blog/curved-path-animations-in-css/">Moving along a curved path in CSS with layered animation</a></li>
  <li><a class="red" href="/blog/how-to-animate-box-shadow/">How to animate “box-shadow” with silky smooth performance</a></li>
  <li><a class="red" href="/spinkit/">SpinKit: Simple spinners animated with CSS</a></li>
</ul>

<style>

    .post-demo-content{
        background-color: #f4f4f6;
        padding: 2em;
        margin-bottom: 2em;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
        text-align: center;
    }

    .post-ada-canvas {
    background-color: #2b2f3c;
    display: block;
    border: 0;
    }

    .post-ada-content {
    height: 500px;
    position: relative;
    max-width: 700px;
    margin: 0 auto;
    }
    .post-ada-pause-play {
    width: 42px;
    height: 42px;
    background-color: #000;
    opacity: 0.3;
    position: absolute;
    top: 0px;
    left: 0px;
    border-radius: 30px;
    }
    .post-ada-pause-play:active { opacity: 0.5; }
    .post-ada-pause-play::after {
    content: "";
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 20px;
    height: 20px;
    margin: auto;
    background-image: url(/img/play.svg); 
    background-size: contain;
    }
    .post-ada-pause-play::before {
    content: "";
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 20px;
    height: 20px;
    margin: auto;
    background-image: url(/img/pause.svg);
    background-size: contain;
    }
    .post-ada-pause-play.state-is-paused::after {
    display: block;
    }
    .post-ada-pause-play.state-is-paused::before {
    display: none;
    }
    .post-ada-modal {
    font-family: SF UI, SF Display, Helvetica Neue, Arial, sans-serif;
    position: absolute;
    margin: auto;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background-color: #fff;
    border-radius: 5px;
    height: 200px;
    width: 300px;
    max-width: 100%;
    text-align: center;
    cursor: default;
    overflow: hidden;
    }
    .post-ada-modal-message {
    padding-top: 65px;
    }
    .post-ada-modal-button {
    border-top: 1px solid #cecece;
    height: 40px;
    line-height: 40px;
    position: absolute;
    width: 50%;
    bottom: 0;
    overflow: hidden;
    }
    .post-ada-modal-button-overlay {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background-color: #000;
    opacity: 0;
    }
    .post-ada-modal-button-left { 
        left: 0; 
    }

    .post-ada-modal-button-right {
    right: 0;
    border-left: 1px solid #cecece;
    }

</style>

<script>
    // Animation 1 - state-driven animation
    var stateDrivenModalTimeline = anime.timeline({ loop: true });
    stateDrivenModalTimeline
    .add({
        targets: '.ada-modal-sda .post-ada-modal-button-left .post-ada-modal-button-overlay',
        opacity: [0, 0.3],
        easing: 'easeOutExpo',
        duration: 100
    })
    .add({
        targets: '.ada-modal-sda .post-ada-modal-button-left .post-ada-modal-button-overlay',
        opacity: [0.3, 0],
        easing: 'easeOutExpo',
        duration: 100
    })
    .add({
        targets: '.ada-modal-sda .post-ada-modal',
        opacity: 0,
        easing: 'easeOutExpo',
        delay: 200
    })
    .add({
        targets: '.ada-modal-sda .post-ada-modal',
        opacity: 1,
        easing: 'easeOutExpo',
        delay: 400
    })
    .add({
        targets: '.ada-modal-sda .post-ada-modal-button-right .post-ada-modal-button-overlay',
        opacity: [0, 0.3],
        easing: 'easeOutExpo',
        duration: 100
    })
    .add({
        targets: '.ada-modal-sda .post-ada-modal-button-right .post-ada-modal-button-overlay',
        opacity: [0.3, 0],
        easing: 'easeOutExpo',
        duration: 100
    })
    .add({
        targets: '.ada-modal-sda .post-ada-modal',
        opacity: 0,
        easing: 'easeOutExpo',
        delay: 200
    })
    .add({
        targets: '.ada-modal-sda .post-ada-modal',
        opacity: 1,
        easing: 'easeOutExpo',
        delay: 400
    });

    // Animation 2 - action driven animation
    var actionDrivenModalTimeline = anime.timeline({ loop: true });
    actionDrivenModalTimeline
    .add({
        targets: '.ada-modal-ada .post-ada-modal-button-left .post-ada-modal-button-overlay',
        opacity: [0, 0.3],
        easing: 'easeOutQuad',
        delay: 300,
        duration: 100
    }).add({
        targets: '.ada-modal-ada .post-ada-modal-button-left .post-ada-modal-button-overlay',
        opacity: [0.3, 0],
        easing: 'easeOutQuad',
        duration: 100
    }).add({
        targets: '.ada-modal-ada .post-ada-modal',
        opacity: 0,
        scale: 0.8,
        easing: 'easeInQuad',
        duration: 400
    }).add({
        targets: '.ada-modal-ada .post-ada-modal',
        opacity: 1,
        scale: [0.5, 1],
        easing: 'easeOutQuad',
        duration: 500,
        delay: 600
    }).add({
        targets: '.ada-modal-ada .post-ada-modal-button-right .post-ada-modal-button-overlay',
        opacity: [0, 0.3],
        easing: 'easeOutQuad',
        delay: 200,
        duration: 100
    }).add({
        targets: '.ada-modal-ada .post-ada-modal-button-right .post-ada-modal-button-overlay',
        opacity: [0.3, 0],
        easing: 'easeOutQuad',
        duration: 100
    }).add({
        targets: '.ada-modal-ada .post-ada-modal',
        opacity: 0,
        scale: 1.2,
        duration: 400,
        easing: 'easeInQuad'
    }).add({
        targets: '.ada-modal-ada .post-ada-modal',
        opacity: 1,
        scale: [0.5, 1],
        easing: 'easeOutQuad',
        duration: 400,
        delay: 600
    });

    // Wire up play buttons with animations
    document.querySelector('.post-ada-pause-play-1').onclick = function() {pausePlayAnimation(stateDrivenModalTimeline, this)};
    document.querySelector('.post-ada-pause-play-2').onclick = function() {pausePlayAnimation(actionDrivenModalTimeline, this)};

    // Helper function
    function pausePlayAnimation(timeline, e) {
    if (timeline.paused) {
        timeline.play();
        e.classList.remove("state-is-paused");
    } else {
        timeline.pause();
        e.classList.add("state-is-paused");
    }
    }

</script>


	</div>
</div>


            <div class="section section-dense">
                <h2 class="section-header section-header-small">Published in:</h2>
                    <div class="section-content post-categories-content" style="background-color: #2B2F3C">
                        <div class="post-categories-links">
                
                            <a class="post-categories-link" href="/blog/motion/">animation</a>
                                    <span class="post-categories-link-divider">/</span>    
                            
                            <a class="post-categories-link" href="/blog/design/">design</a>
                                    <span class="post-categories-link-divider">/</span>

                            <a class="post-categories-link" href="/blog/tutorials/">tutorial</a>
                
                        </div>
                        <span class="section-header section-header-small post-categories-date">16/05/2017</span>
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