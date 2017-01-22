<nav class="blue accent-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">{{ config('app.name', 'Laravel') }}</a>
			<span class="section scrollspy" id="backtotop">
			<ul class="right hide-on-med-and-down">
        @if (Auth::guest())
        <li><a href="{{ url('/login')}}"><b>Login</b></a></li>
				<li><a href="{{url('/register')}}"><b>Register</b></a></li>
        @else
      <ul id="dropdown1" class="dropdown-content">
        <li>
          <a href="{{ url('/logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Logout
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
          </form>
        </li>
      </ul>
        <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->nama }}<i class="material-icons right">arrow_drop_down</i></a></li>
        <!-- </div> -->
      </nav>
      @endif
      </ul>



	<div class="fixed-action-btn">
	    <a href="#backtotop" class="btn-floating btn-large indigo">
	      <i class="large material-icons">publish</i>
	    </a>
	  </div>

    
