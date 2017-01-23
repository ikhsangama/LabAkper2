 @if (Auth::guest())
<nav class="blue accent-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">{{ config('app.name', 'Laravel') }}</a>
			<span class="section scrollspy" id="backtotop">
			<ul class="right hide-on-med-and-down">
        <li><a href="{{ url('/login')}}"><b>Login</b></a></li>
				<li><a href="{{url('/register')}}"><b>Register</b></a></li>
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

@else
<nav class="blue accent-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">{{ config('app.name', 'Laravel') }}</a>
			<span class="section scrollspy" id="backtotop">
			<ul class="right hide-on-med-and-down">
        <ul id="dropdown1" class="dropdown-content">
        <li>
          <a href="{{ url('/logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Logout
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST">
          {{ csrf_field() }}
          </form>
        </li>
      </ul>
        <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><b>{{ Auth::user()->nama }}</b>
              <i class="material-icons right">arrow_drop_down</i></a></li>
        <!-- </div> -->
      </nav>

      </ul>



	<div class="fixed-action-btn">
	    <a href="#backtotop" class="btn-floating btn-large indigo">
	      <i class="large material-icons">publish</i>
	    </a>
	  </div>


@endif
