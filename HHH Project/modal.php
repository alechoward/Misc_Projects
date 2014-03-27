
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">
  <head>
    
    <meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more." />
    
    <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com" />
    <meta name="copyright" content="ZURB, inc. Copyright (c) 2013" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet" type="text/css" media="all" />
        <link href="http://fonts.googleapis.com/css?family=PT+Mono" rel="stylesheet" type="text/css">
        <link href="http://formstone.it/css/demo.css" rel="stylesheet" type="text/css" media="all" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://formstone.it/js/demo.js"></script>
        <script src="js/jquery.fs.zoomer.js"></script> 
        <link href="css/jquery.fs.zoomer.css" rel="stylesheet" type="text/css" media="all" />


    <link href="css/foundation.css" rel='stylesheet' />
    <script src="js/modernizr.js"></script>
  </head>
  <body class="antialiased hide-extras">
    
<style>
            .zoomer_wrapper { border: 10px solid #ddd; border-radius: 3px; height: 1000px; margin: 10px 0; overflow: hidden; width: 100%; }

            .zoomer.dark_zoomer { background: #333 url(http://formstone.it/files/demo/zoomer-bg-dark.png) repeat center; }
            .zoomer.dark_zoomer img { box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); }
        </style>

        <script>
            $(document).ready(function() {
                $(".zoomer_basic").zoomer();
                $(".zoomer_click").click.zoomer();

            });
        </script>



<div class="zoomer_wrapper zoomer_basic"> >
         <h2>Carried Away by the Wind</h2>
        <img src="img/Artwork/Flower Ladies/A2_big.jpg">
  </div>


    <div class="marketing off-canvas-wrap">
      <div class="inner-wrap">







<p><a href="#" data-reveal-id="firstModal" class="radius button">Example Modal&hellip;</a>
<a href="#" data-reveal-id="videoModal" class="radius button">Example Modal w/Video&hellip;</a></p>
<hr>
<h2>Basic</h2>

<p>You can create a reveal modal using minimal markup.</p>
<div class="row">
  <div class="large-6 columns">
    <h4>HTML</h4>
    <pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">div</span> <span class="attribute">id</span>=<span class="value">&quot;myModal&quot;</span> <span class="attribute">class</span>=<span class="value">&quot;reveal-modal&quot;</span> <span class="attribute">data-reveal</span>&gt;</span>
  <span class="tag">&lt;<span class="title">h2</span>&gt;</span>Awesome. I have it.<span class="tag">&lt;/<span class="title">h2</span>&gt;</span>
  <span class="tag">&lt;<span class="title">p</span> <span class="attribute">class</span>=<span class="value">&quot;lead&quot;</span>&gt;</span>Your couch.  It is mine.<span class="tag">&lt;/<span class="title">p</span>&gt;</span>
  <span class="tag">&lt;<span class="title">p</span>&gt;</span>Im a cool paragraph that lives inside of an even cooler modal. Wins<span class="tag">&lt;/<span class="title">p</span>&gt;</span>
  <span class="tag">&lt;<span class="title">a</span> <span class="attribute">class</span>=<span class="value">&quot;close-reveal-modal&quot;</span>&gt;</span>&amp;#215;<span class="tag">&lt;/<span class="title">a</span>&gt;</span>
<span class="tag">&lt;/<span class="title">div</span>&gt;</span></div></code></pre>

  </div>
  <div class="large-6 columns">
    <h4>Rendered HTML</h4>
<a href="#" data-reveal-id="firstModal" class="radius button">Example Modal&hellip;</a>
<a href="#" data-reveal-id="videoModal" class="radius button">Example Modal w/Video&hellip;</a>
  </div>
</div>

<hr>
<h2>Advanced</h2>

<p>Additional classes can be added to your reveal modal to change its appearance.</p>
<p>The class options:</p>
<ul>
<li><code>tiny</code>: Set the width to 30%.</li>
<li><code>small</code>: Set the width to 40%.</li>
<li><code>medium</code>: Set the width to 60%.</li>
<li><code>large</code>: Set the width to 70%.</li>
<li><code>xlarge</code>: Set the width to 95%.</li>
</ul>
<h5 id="removing-the-background">Removing the Background</h5>
<h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">div</span> <span class="attribute">class</span>=<span class="value">"reveal-modal-bg"</span> <span class="attribute">style</span>=<span class="value">"display: none"</span>&gt;</span><span class="tag">&lt;/<span class="title">div</span>&gt;</span></div></code></pre>


<h5>Firing a Reveal Modal</h5>

<p>To launch a modal, just add a <code>data-reveal-id</code> to the object which you want to fire the modal when clicked. The <code>data-reveal-id</code> needs to match the <code>id</code> of your reveal.</p>

<h4>HTML</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"#"</span> <span class="attribute">data-reveal-id</span>=<span class="value">"myModal"</span> <span class="attribute">data-reveal</span>&gt;</span>Click Me For A Modal<span class="tag">&lt;/<span class="title">a</span>&gt;</span></div></code></pre>



<p>You can also open and close Reveal via JavaScript:</p>
<pre><code class="language-javascript"><div class="code-container"><span class="comment">// trigger by event</span>
$(<span class="string">'a.reveal-link'</span>).trigger(<span class="string">'click'</span>);
$(<span class="string">'a.close-reveal-modal'</span>).trigger(<span class="string">'click'</span>);

<span class="comment">// or directly on the modal</span>
$(<span class="string">'#myModal'</span>).foundation(<span class="string">'reveal'</span>, <span class="string">'open'</span>);
$(<span class="string">'#myModal'</span>).foundation(<span class="string">'reveal'</span>, <span class="string">'close'</span>);</div></code></pre>


<h5>Firing a Reveal Modal with Ajax Content</h5>

<p>To launch a modal with content from another page, just add a <code>data-reveal-ajax</code> attribute pointing to the url of that page. When clicked, the Reveal modal will be opened with a content from that page. Beware: content of the object from <code>data-reveal-id</code> attribute will be overwritten as a result.</p>
<p>To use an url from <code>href</code> attribute just add <code>data-reveal-ajax=&quot;true&quot;</code> instead.</p>
<h4>JS</h4>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">button</span> <span class="attribute">data-reveal-id</span>=<span class="value">"myModal"</span> <span class="attribute">data-reveal-ajax</span>=<span class="value">"http://some-url"</span>&gt;</span>
    Click Me For A Modal
<span class="tag">&lt;/<span class="title">button</span>&gt;</span>

<span class="tag">&lt;<span class="title">a</span> <span class="attribute">href</span>=<span class="value">"http://some-url"</span> <span class="attribute">data-reveal-id</span>=<span class="value">"myModal"</span> <span class="attribute">data-reveal-ajax</span>=<span class="value">"true"</span>&gt;</span>
    Click Me For A Modal
<span class="tag">&lt;/<span class="title">a</span>&gt;</span></div></code></pre>


<p>Ajax-based Reveal modals can also be opened via JavaScript:</p>
<h4>JS</h4>

<pre><code class="language-javascript"><div class="code-container"><span class="comment">// just an url</span>
$(<span class="string">'#myModal'</span>).foundation(<span class="string">'reveal'</span>, <span class="string">'open'</span>, <span class="string">'http://some-url'</span>);

<span class="comment">// url with extra parameters</span>
$(<span class="string">'#myModal'</span>).foundation(<span class="string">'reveal'</span>, <span class="string">'open'</span>, {
    url: <span class="string">'http://some-url'</span>,
    data: {param1: <span class="string">'value1'</span>, param2: <span class="string">'value2'</span>}
});

<span class="comment">// url with custom callbacks</span>
$(<span class="string">'#myModal'</span>).foundation(<span class="string">'reveal'</span>, <span class="string">'open'</span>, {
    url: <span class="string">'http://some-url'</span>,
    success: <span class="keyword">function</span>(data) {
        alert(<span class="string">'modal data loaded'</span>);
    },
    error: <span class="keyword">function</span>() {
        alert(<span class="string">'failed loading modal'</span>);
    }
});</div></code></pre>


<p>Please refer to <a href="http://api.jquery.com/jQuery.ajax/"><a href="http://api.jquery.com/jQuery.ajax/">http://api.jquery.com/jQuery.ajax/</a></a> for a complete list of possible parameters.</p>

<hr>
<h3 id="event-bindings">Event Bindings</h3>
<p>There are a series of events that you can bind to for triggering callbacks:</p>
<pre><code class="language-js"><div class="code-container">$(document).on(<span class="string">'open'</span>, <span class="string">'[data-reveal]'</span>, <span class="function"><span class="keyword">function</span> <span class="params">()</span> {</span>
  <span class="keyword">var</span> modal = $(<span class="keyword">this</span>);
});

$(document).on(<span class="string">'opened'</span>, <span class="string">'[data-reveal]'</span>, <span class="function"><span class="keyword">function</span> <span class="params">()</span> {</span>
  <span class="keyword">var</span> modal = $(<span class="keyword">this</span>);
});

$(document).on(<span class="string">'close'</span>, <span class="string">'[data-reveal]'</span>, <span class="function"><span class="keyword">function</span> <span class="params">()</span> {</span>
  <span class="keyword">var</span> modal = $(<span class="keyword">this</span>);
});

$(document).on(<span class="string">'closed'</span>, <span class="string">'[data-reveal]'</span>, <span class="function"><span class="keyword">function</span> <span class="params">()</span> {</span>
  <span class="keyword">var</span> modal = $(<span class="keyword">this</span>);
});</div></code></pre>
<hr>
<h2>Customize With Sass</h2>

<p>Reveal modals can be easily customized using our Sass variables.</p>

<h4>SCSS</h4>

<pre><code class="language-scss"><div class="code-container">$include-<span class="tag">html</span>-reveal-classes<span class="value">: $include-html-classes;</span>

<span class="comment">/* We use these to control the style of the reveal overlay. */</span>
$reveal-overlay-bg<span class="value">: rgba(<span class="hexcolor">#000</span>, .<span class="number">45</span>);</span>
$reveal-overlay-bg-old<span class="value">: <span class="hexcolor">#000</span>;</span>

<span class="comment">/* We use these to control the style of the modal itself. */</span>
$reveal-modal-bg<span class="value">: <span class="hexcolor">#fff</span>;</span>
$reveal-<span class="attribute">position</span>-<span class="attribute">top</span><span class="value">: <span class="number">50</span>px;</span>
$reveal-<span class="value">default</span>-<span class="attribute">width</span><span class="value">: <span class="number">80</span>%;</span>
$reveal-modal-<span class="attribute">padding</span><span class="value">: rem-calc(<span class="number">20</span>);</span>
$reveal-<span class="attribute">box-shadow</span><span class="value">: <span class="number">0</span> <span class="number">0</span> <span class="number">10</span>px rgba(<span class="hexcolor">#000</span>,.<span class="number">4</span>);</span>

<span class="comment">/* We use these to style the reveal close button */</span>
$reveal-close-<span class="attribute">font-size</span><span class="value">: rem-calc(<span class="number">22</span>);</span>
$reveal-close-<span class="attribute">top</span><span class="value">: rem-calc(<span class="number">8</span>);</span>
$reveal-close-side<span class="value">: rem-calc(<span class="number">11</span>);</span>
$reveal-close-<span class="attribute">color</span><span class="value">: <span class="hexcolor">#aaa</span>;</span>
$reveal-close-weight<span class="value">: bold;</span>

<span class="comment">/* We use these to control the modal border */</span>
$reveal-<span class="attribute">border-style</span><span class="value">: solid;</span>
$reveal-<span class="attribute">border-width</span><span class="value">: <span class="number">1</span>px;</span>
$reveal-<span class="attribute">border-color</span><span class="value">: <span class="hexcolor">#666</span>;</span>

$reveal-modal-class<span class="value">: <span class="string">"reveal-modal"</span>;</span>
$close-reveal-modal-class<span class="value">: <span class="string">"close-reveal-modal"</span>;</span></div></code></pre>


<hr />

<h2>Semantic Markup With Sass</h2>

<p>You can create your own reveal modals using our Sass mixins.</p>

<h3>Setting the background</h3>

<p>You can use the <code>reveal-bg()</code> mixin to create your own reveal modal, like so:</p>

<pre><code class="language-scss"><div class="code-container"><span class="class">.custom-reveal-class</span> {
  <span class="at_rule">@<span class="keyword">include</span><span class="preprocessor"> reveal-bg</span>();</span>
}</div></code></pre>


<h3>Creating the base structure</h3>

<p>You can use this mixin to create the structure of a reveal modal</p>

<pre><code class="language-scss"><div class="code-container"><span class="class">.custom-reveal-class</span> {
  <span class="at_rule">@<span class="keyword">include</span><span class="preprocessor"> reveal-modal-base</span>(
    //<span class="preprocessor"> Provides</span><span class="preprocessor"> reveal</span><span class="preprocessor"> base</span><span class="preprocessor"> styles</span>,<span class="preprocessor"> can</span><span class="preprocessor"> be</span><span class="preprocessor"> set</span><span class="preprocessor"> to</span><span class="preprocessor"> false</span><span class="preprocessor"> to</span><span class="preprocessor"> override.</span>
    $base-style:true,
    //<span class="preprocessor"> Sets</span><span class="preprocessor"> reveal</span><span class="preprocessor"> width</span><span class="preprocessor"> Default</span>: $reveal-default-width<span class="preprocessor"> or</span><span class="preprocessor"> 80</span>%
    $width:$reveal-default-width
  );</span>
}</div></code></pre>


<h3>Set Reveal Base Styles</h3>

<p>You can use this mixin to style the reveal modal defaults</p>

<pre><code class="language-scss"><div class="code-container"><span class="class">.custom-reveal-class</span> {
  <span class="at_rule">@<span class="keyword">include</span><span class="preprocessor"> reveal-modal-style</span>(
    //<span class="preprocessor"> Sets</span><span class="preprocessor"> background</span><span class="preprocessor"> color</span><span class="preprocessor"> of</span><span class="preprocessor"> reveal</span><span class="preprocessor"> modal.</span><span class="preprocessor"> Default</span>: $reveal-modal-bg<span class="preprocessor"> or</span> <span class="hexcolor">#fff</span>
    $bg:$reveal-modal-bg,
    //<span class="preprocessor"> Set</span><span class="preprocessor"> reveal</span><span class="preprocessor"> border</span><span class="preprocessor"> style.</span><span class="preprocessor"> Default</span>: $reveal-border-style<span class="preprocessor"> or</span><span class="preprocessor"> solid</span>
    $border:true,
    //<span class="preprocessor"> Width</span><span class="preprocessor"> of</span><span class="preprocessor"> border</span> (i.e.<span class="preprocessor"> 1px</span>).<span class="preprocessor"> Default</span>: $reveal-border-width.
    $border-style:$reveal-border-style,
    //<span class="preprocessor"> Color</span><span class="preprocessor"> of</span><span class="preprocessor"> border.</span><span class="preprocessor"> Default</span>: $reveal-border-color.
    $border-width:$reveal-border-width,
    //<span class="preprocessor"> Color</span><span class="preprocessor"> of</span><span class="preprocessor"> border.</span><span class="preprocessor"> Default</span>: $reveal-border-color.
    $border-color:$reveal-border-color,
    //<span class="preprocessor"> Choose</span><span class="preprocessor"> whether</span><span class="preprocessor"> or</span><span class="preprocessor"> not</span><span class="preprocessor"> to</span><span class="preprocessor"> include</span><span class="preprocessor"> the</span><span class="preprocessor"> default</span><span class="preprocessor"> box-shadow.</span><span class="preprocessor"> Default</span>:<span class="preprocessor"> true</span>,<span class="preprocessor"> Options</span>:<span class="preprocessor"> false</span>
    $box-shadow:true,
    //<span class="preprocessor"> Default</span>: $reveal-position-top<span class="preprocessor"> or</span><span class="preprocessor"> 50px</span>
    $top-offset:$reveal-position-top
  );</span>
}</div></code></pre>


<h3>Add a close button</h3>

<p>You can use this mixin to create a close button for the reveal modal</p>

<pre><code class="language-scss"><div class="code-container"><span class="class">.custom-reveal-class</span> {
  <span class="at_rule">@<span class="keyword">include</span><span class="preprocessor"> reveal-close</span>(
    $color:$reveal-close-color
  );</span>
}</div></code></pre>


<p><strong>Note:</strong> <code>rem-calc();</code> is a function we wrote to convert <code>px</code> to <code>rem</code>. It is included in <strong>_variables.scss</strong>.</p>
<hr>
<h2>Using the JavaScript</h2>

<div class="panel">
  Before you can use Reveal you&#39;ll want to verify that jQuery and <code>foundation.js</code> are available on your page. You can refer to the <a href="../JavaScript.html">JavaScript documentation</a> on setting that up.
</div>

<p>Just add <code>foundation.reveal.js</code> AFTER the <code>foundation.js</code> file. Your markup should look something like this:</p>

<pre><code class="language-html"><div class="code-container"><span class="tag">&lt;<span class="title">body</span>&gt;</span>

  ...

  <span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"js/vendor/jquery.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
  <span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"js/foundation/foundation.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
  <span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"js/foundation/foundation.reveal.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
  <span class="comment">&lt;!-- Other JS plugins can be included here --&gt;</span>

  <span class="tag">&lt;<span class="title">script</span>&gt;</span><span class="javascript">
    $(document).foundation();
  </span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>

<span class="tag">&lt;/<span class="title">body</span>&gt;</span></div></code></pre>


<p>Required Foundation Library: <code>foundation.reveal.js</code></p>

<h5>Optional JavaScript Configuration</h5>

<p>Reveal options can only be passed in during initialization at this time. However, you can bind to the <i>open</i>, <i>opened</i>, <i>close</i>, and <i>closed</i> events.</p>

<pre><code class="language-javascript"><div class="code-container">{
  animation: <span class="string">'fadeAndPop'</span>,
  animation_speed: <span class="number">250</span>,
  close_on_background_click: <span class="literal">true</span>,
  dismiss_modal_class: <span class="string">'close-reveal-modal'</span>,
  bg_class: <span class="string">'reveal-modal-bg'</span>,
  bg : $(<span class="string">'.reveal-modal-bg'</span>),
  css : {
    open : {
      <span class="string">'opacity'</span>: <span class="number">0</span>,
      <span class="string">'visibility'</span>: <span class="string">'visible'</span>,
      <span class="string">'display'</span> : <span class="string">'block'</span>
    },
    close : {
      <span class="string">'opacity'</span>: <span class="number">1</span>,
      <span class="string">'visibility'</span>: <span class="string">'hidden'</span>,
      <span class="string">'display'</span>: <span class="string">'none'</span>
    }
  }
}</div></code></pre>


<!-- Reveal Modals begin -->
<div id="firstModal" class="reveal-modal" data-reveal>
  <h2>This is a modal.</h2>
  <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
  <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
  <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal...</a></p>
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="secondModal" class="reveal-modal" data-reveal>
  <h2>This is a second modal.</h2>
  <p>See? It just slides into place after the other first modal. Very handy when you need subsequent dialogs, or when a modal option impacts or requires another decision.</p>
  <a class="close-reveal-modal">&#215;</a>
</div>

<div id="videoModal" class="reveal-modal large" data-reveal>
  <h2>This modal has video</h2>
  <div class="flex-video">
          <iframe width="420" height="315" src="//www.youtube.com/embed/aiBt44rrslw" frameborder="0" allowfullscreen></iframe>
  </div>

  <a class="close-reveal-modal">&#215;</a>
</div>
<!-- Reveal Modals end -->

<hr />

<h5>Sass Errors?</h5>

<p>If the default &quot;foundation&quot; import was commented out, then make sure you import this file:</p>

<h4>SCSS</h4>

<pre><code class="language-scss"><div class="code-container"><span class="at_rule">@<span class="keyword">import</span> <span class="string">"foundation/components/reveal"</span>;</span></div></code></pre>




            </div>
          </div>

          
<div id="newsletter">
  <div class="row">

    <div class="medium-8 columns">
      <h5>Stay on top of what&rsquo;s happening in <a href="http://zurb.com/responsive">responsive design</a>.</h5>
      <p>Sign up to receive monthly <a href="http://zurb.com/responsive/reading">Responsive Reading</a> highlights. <a href="http://www.zurb.com/responsive/reading/2012/10">Read Last Month's Edition Â»</a></p>
    </div>


  <div class="medium-4 columns">
    <form method="post" action="http://zurb.com/responsive/subscribe">
      <div class="row collapse margintop-20px">
        <div class="small-8 medium-8 columns">
          <input type="text" name="email" placeholder="signup@example.com">
        </div>
        <div class="small-4 medium-4 columns">
          <input type="submit" href="#" class="postfix small button expand" value="Sign Up">
        </div>
      </div>
    </form>
  </div>

  
  </div>
</div>

<div class="zurb-footer-top bg-fblue">
  <div class="row property">
    <div class="medium-4 columns">
      <div class="property-info">
        <h3>Foundation</h3>
        <p>Foundation is made by <a href="http://zurb.com">ZURB, a product design</a> company in Campbell, California. We've put more than 15 years of experience building web products, services and websites into this framework.
        </p>
      </div>
    </div>
    
    <div class="medium-8 columns">
      <div class="row collapse">
        <div class="medium-4 columns">
          <div class="learn-links">
            <h4 class="hide-for-small">Want more?</h4>
            <ul>
              <li><a href="http://foundation.zurb.com/business/services.html">Foundation Business</a></li>
              <li><a href="http://zurb.com/responsive">Responsive</a></li>
              <li><a href="http://zurb.com/apps">Design Apps</a></li>
              <li><a href="http://foundation.zurb.com/learn/training.html">Foundation Training</a></li>
            </ul>
          </div>
      </div>
        <div class="medium-4 columns">
          <div class="support-links">
            <h4 class="hide-for-small">Talk to us</h4>
            <p>Tweet us at <br> <a href="https://twitter.com/foundationzurb">@foundationzurb</a></p>
            <p>Email us at <br> <a href="mailto:foundation@zurb.com">foundation@zurb.com</a><br> or check our <a href="../../support/support.html">support page</a></p>
          </div>
        </div>
      <div class="medium-4 columns">
          <div class="connect-links">
            <h4 class="hide-for-small">Stay in touch</h4>
            <p>Keep up with the latest on Foundation. Find us on <a href="https://github.com/zurb/foundation">Github</a>.</p>
            <a href="http://zurb.com/news" class="small button">Stay Connected</a>
          </div>
        </div>
      </div> 
    </div>
  </div>
  <div class="row global">
    <div class="medium-3 small-6 columns">
      <a href="http://zurb.com/studios" class="footer-link-block services">
        <span class="title">Studios</span>
        <span>Helping more than 200 startups succeed since 1998.</span>
      </a>
    </div>
    <div class="medium-3 small-6 columns">
      <a href="http://foundation.zurb.com/" class="footer-link-block foundation">
        <span class="title">Foundation</span>
        <span>The most advanced front-end framework in the world.</span>
      </a>
    </div>
    <div class="medium-3 small-6 columns">
      <a href="http://zurb.com/apps" class="footer-link-block apps">
        <span class="title">Design Apps</span>
        <span>Prototype, iterate and collect feedback on your products.</span>
      </a>
    </div>
    <div class="medium-3 small-6 columns">
      <a href="http://zurb.com/university" class="footer-link-block expo">
        <span class="title">University</span>
        <span>Ideas, thoughts and design resources shared with you.</span>
      </a>
    </div>
  </div>
</div>

<div class="zurb-footer-bottom">
  <div class="row">
    <div class="medium-4 medium-4 push-8 columns">
      <ul class="home-social">
          <li><a href="http://www.twitter.com/ZURB" class="twitter"></a></li>
          <li><a href="http://www.facebook.com/ZURB" class="facebook"></a></li>
          <li><a href="/contact" class="mail"></a></li>
        </ul>
     </div>
     <div class="medium-8 medium-8 pull-4 columns">
        <a href="http://www.zurb.com" class="zurb-logo regular"></a>
        <ul class="zurb-links">
          <li><a href="http://zurb.com/about">About</a></li>
          <li><a href="http://zurb.com/blog">Blog</a></li>
          <li><a href="http://zurb.com/news">News<span class="show-for-medium-up"> &amp; Events</span></a></li>
          <li><a href="http://zurb.com/contact">Contact</a></li>
          <li><a href="http://zurb.com/sitemap">Sitemap</a></li>
       </ul>
       <p class="copyright">&copy; 1998&dash;2013 ZURB, Inc. All rights reserved.</p>
    </div>          
  </div>
</div>
        </section>

      </div>
    </div>

    <script src="http://foundation.zurb.com/docs/assets/js/jquery.js"></script>
    <script src="http://foundation.zurb.com/docs/assets/js/templates.js"></script>
    <script src="http://foundation.zurb.com/docs/assets/js/all.js"></script>
    <script>
      var _gaq = _gaq || [];
      _gaq.push(
        ['_setAccount', 'UA-2195009-2'],
        ['_trackPageview'],
        ['b._setAccount', 'UA-2195009-27'],
        ['b._trackPageview']
      );

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <script>
            $(document).foundation().foundation('joyride', 'start');
    </script>
  </body>
</html>