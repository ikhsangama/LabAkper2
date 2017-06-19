@extends('layouts.app')

@section('content')
<div class="container bsa">
  <div class="row">
    <div class="col s12 m9 l10">

      <div id="introduction" class="section scrollspy">
        <p class="caption">Provide value and encourage return visits by introducing users to new features and functionality at contextually relevant moments.</p>

        <h2 class="header">Tap Target</h2>
        <p class="caption">Feature discovery prompts have more impact when they are presented to the right users at contextually relevant moments. When presented to the wrong user at the wrong time, they can be intrusive and annoying.</p>

        <a class="waves-effect waves-light btn" onclick="$('.tap-target').tapTarget('open')">Open tap target</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="waves-effect waves-light btn" onclick="$('.tap-target').tapTarget('close')">Close tap target</a>

        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
          <a id="menu" class="btn btn-floating btn-large cyan"><i class="material-icons">menu</i></a>
        </div>

        <div class="tap-target cyan" data-activates="menu">
          <div class="tap-target-content white-text">
            <h5>I am here</h5>
            <p class="white-text">Provide value and encourage return visits by introducing users to new features and functionality at contextually relevant moments.</p>
          </div>
        </div>
      </div>



        <div id="structure" class="scrollspy section">
          <h4>Tap Target HTML Structure</h4>
          <pre><code class="language-markup">
  &lt;!-- Element Showed -->
  &lt;a id="menu" class="waves-effect waves-light btn btn-floating" >&lt;i class="material-icons">menu&lt;/i>&lt;/a>

  &lt;!-- Tap Target Structure -->
  &lt;div class="tap-target" data-activates="menu">
    &lt;div class="tap-target-content">
      &lt;h5>Title&lt;/h5>
      &lt;p>A bunch of text&lt;/p>
    &lt;/div>
  &lt;/div>
          </code></pre>
        </div>



        <div id="methods" class="scrollspy section">
          <h4>jQuery Plugin Methods</h4>
          <p class="caption">To open/close a tap target:</p>
          <pre><code class="language-javascript">
  $('.tap-target').tapTarget('open');
  $('.tap-target').tapTarget('close');
        </code></pre>
      </div>

</div>

<!-- Table of Contents -->
  <div class="col hide-on-small-only m3 l2">
    <div class="toc-wrapper">
      <div class="buysellads hide-on-small-only">
        <!-- CarbonAds Zone Code -->
        <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=materializecss" id="_carbonads_js"></script>
      </div>
      <div style="height: 1px;">
        <ul class="section table-of-contents">
          <li><a href="#introduction">Introduction</a></li>
          <li><a href="#structure">Structure</a></li>
          <li><a href="#methods">Methods</a></li>
        </ul>
      </div>
    </div>
  </div>

</div>
</div>
</body>

@endsection
