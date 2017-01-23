@extends('layouts.index')

@section('content')
<div class="container">
  <h2 class="blue-text text accent-5">Login</h2>
  <hr>
  <div class="card-panel">
    <div class="row">
      <!-- cek verifikasi email token -->
      @if(session('warning'))
      <div class="card-panel red lighten-4">
        {{session('warning')}}
      </div>
      @endif
      <form class="col s12 m12 l12" action="{{url('/login')}}" method="POST">
        {{csrf_field()}}
        <div class="row">
          <div class="input-field col s6 m6 l6 offset-l3 offset-m3 offset-s3">
            <i class="material-icons prefix">account_circle</i>
            <input name="email" id="icon_prefix" type="email" class="validate" autofocus maxlength="30" required>
            <label for="icon_prefix">Email</label>
<!-- validation             -->
            @if ($errors->has('email'))
            <div class="container red-text text accent-3">
              {{ $errors->first('email') }}
            </div>
            @endif
<!-- endvalidation             -->
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6 m6 l6 offset-l3 offset-m3 offset-s3">
            <i class="material-icons prefix">vpn_key</i>
            <input name="password" id="icon_prefix" type="password" class="validate" autofocus maxlength="30" required>
            <label for="icon_prefix">Password</label>
<!-- validation             -->
            @if ($errors->has('password'))
            <div class="container red-text text accent-3">
              {{ $errors->first('password') }}
            </div>
            @endif
<!-- endvalidation             -->
          </div>
        </div>

        <div class="row">
          <div class="col offset-l3 offset-m3 offset-s3">
            <input type="checkbox" id="test5" />
                  <label for="test5">Ingat saya</label>
          </div>
        </div>
<hr>

        <div class="form-group">
          <a href="{{ url('/password/reset') }}">
              Lupa password anda?
          </a>
            <div class="col s8 m8 l8 offset-l8 m8 s8">
              {{ csrf_field() }}
                <input type="submit" class="btn" value="Login">

            </div>
        </div>

      </form>
    </div>
  </div>



</div>

<!-- script -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
<script>

	$(document).ready(function(){
    $('.button-collapse').sideNav({

    });
    $('.scrollspy').scrollSpy({

    });
    $('select').material_select({

    });

    $('.modal').modal();
  }); // end of document ready // end of jQuery name space
</script>
<!-- akhirscript -->
@endsection
