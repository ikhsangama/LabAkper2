<head>
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
@elseif(Auth::user())
<nav class="blue accent-3" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">{{ config('app.name', 'Laravel') }}</a>
		<span class="section scrollspy" id="backtotop">
      <!-- dropdown profil-->
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
      <!-- dropdown dokumen-->
    <ul class="right hide-on-med-and-down">
      <ul id="dropdown3" class="dropdown-content">
        <li>
          <a href="{{ url('/instruksikerja') }}">
              Inst. Kerja
          </a>
        </li>
        <li>
          <a href="{{ url('/sop') }}">
              SOP
          </a>
        </li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <ul id="dropdown2" class="dropdown-content">
          <li>
            <a href="{{ url('/daftarkategori') }}">
                Daftar
            </a>
          </li>
          <li>
            <a href="{{ url('/peminjaman') }}">
                Peminjaman
            </a>
          </li>
        </ul>
      <!-- tambahan navigasi -->
      @if(Auth::user()->isAdmin(true))
          <li>
            <li><a href="{{ url('/dashboard') }}"><b>Dashboard</b></a></li>
          </li>
      @endif
          <li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown3" data-beloworigin="true" data-hover="true"><b>Dokumen</b></a></li>
          </li>
          <li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2" data-beloworigin="true" data-hover="true"><b>Alat & Bahan</b></a></li>
          </li>
          <!-- akhir tambahan navigasi -->

      <!-- Dropdown Trigger -->
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1" data-beloworigin="true" data-hover="true"><b>{{ Auth::user()->nama }}</b>
            <i class="material-icons right">arrow_drop_down</i></a></li>

      <!-- </div> -->
    </nav>
  </ul>
@endif

	<div class="fixed-action-btn">
	    <a href="#backtotop" class="btn-floating btn-large indigo">
	      <i class="large material-icons">publish</i>
	    </a>
	  </div>
</head>
