<nav class="blue accent-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">{{ config('app.name', 'Laravel') }}</a>
			<span class="section scrollspy" id="backtotop">
			<ul class="right hide-on-med-and-down">
        <li><a href="{{ url('/login')}}">Login</a></li>
				<li><a href="{{url('/register')}}">Register</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ url('/login')}}">Login</a></li>
				<li><a href="{{url('/register')}}">Register</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    	</span>
		</div>
  </nav>

	<div class="fixed-action-btn">
	    <a href="#backtotop" class="btn-floating btn-large indigo">
	      <i class="large material-icons">publish</i>
	    </a>
	  </div>
