@extends('layouts.app')

@section('content')
<body class="blue lighten-5">

  <div class="container">
  <br>
  <br>
    <div class="card-panel">
      <h3 class="center blue-text text accent-5">Login</h3>
      <hr>
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
              <input name="login" id="icon_prefix" type="text" class="validate" autofocus maxlength="30" required>
              <label for="icon_prefix">Email atau NIM/NIP</label>
  <!-- validation             -->
              <!-- @if ($errors->has('email'))
              <div class="container red-text text accent-3">
                {{ $errors->first('email') }}
              </div>
              @endif -->
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
          <div class="row">
            <div class="form-group col offset-l3 offset-m3 offset-s3">
              <a href="{{ url('/password/reset') }}">
                  Lupa password anda?
              </a>
              <div class="row col s8 m8 l8 offset-l8 offset-m8 offset-s8">
                {{ csrf_field() }}
                  <input type="submit" class="btn" value="Login">
              </div>
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
</body>
@endsection
