<nav class="blue accent-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">Sub Laboratorium Akper</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ url('/login')}}">Login</a></li>
				<li><a href="{{url('/register')}}">Register</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="{{ url('/login')}}">Login</a></li>
				<li><a href="{{url('/register')}}">Register</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
