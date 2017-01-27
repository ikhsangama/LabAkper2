@extends('layouts.index')

@section('content')
<body class="blue lighten-5">
  <!-- awalfile -->
  <div class="container">
<br>
<br>
    <div class="card-panel s12 m12 l12">
      <h3 class="center blue-text text accent-5">Register</h3>
      <hr>
      <div class="row">
        <form action="{{ url('/register') }}" class="col s12" method="POST" enctype="multipart/form-data">

          <div class="row">
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">account_circle</i>
              <input name="nama" placeholder="Gunakan nama lengkap" id="icon_prefix" type="text" class="validate" autofocus maxlength="30" required>
              <label for="icon_prefix">Nama</label>

  <!-- validation             -->
              @if ($errors->has('nama'))
              <div class="container red-text text accent-3">
                {{ $errors->first('nama') }}
              </div>
              @endif
  <!-- endvalidation             -->
            </div>
              <div class="input-field col s4 m4 l4">
                <i id="program studi" class="material-icons prefix" required>school</i>
                <select name="level">
                  <option value="" disabled selected>Pilih</option>
                  <option value="D III">D III</option>
                  <option value="D IV">D IV</option>
                </select>
                <label for="icon_prefix">Program Studi</label>

                <!-- validation             -->
                @if ($errors->has('level'))
                <div class="container red-text text accent-3">
                  {{ $errors->first('level') }}
                </div>
                @endif
                <!-- endvalidation             -->
              </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">contact_mail</i>
              <input name="email" placeholder="contoh@email.com" id="icon_prefix" type="email" class="validate" length="30"   >
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
            <div class="input-field col s6">
              <i class="material-icons prefix">lock</i>
              <input name="password" id="icon_prefix" type="password" class="validate" required>
              <label for="icon_prefix">Password</label>
              <!-- validation             -->
              @if ($errors->has('password'))
              <div class="container red-text text accent-3">
                {{ $errors->first('password') }}
              </div>
              @endif
              <!-- endvalidation             -->
            </div>
            <div class="input-field col s6">
              <input  name="password_confirmation" placeholder="ulangi password secara benar" id="icon_prefix" type="password" class="validate" required>
              <label for="icon_prefix">Konfirmasi Password</label>
              <!-- validation             -->
              @if ($errors->has('password_confirmation'))
              <div class="container red-text text accent-3">
                {{ $errors->first('password_confirmation') }}
              </div>
              @endif
              <!-- endvalidation             -->
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">credit_card</i>
              <input name="nim" id="icon_prefix" type="text" class="validate"   >
              <label for="icon_prefix">NIM</label>
            </div>

          <div class="row">
            <div class="file-field input-field col s6 m6 l6">
              <div class="btn">
                <span><i class="material-icons prefix">add_a_photo</i></span>
                <input type="file" id="inputgambar" name="ktm" class="validate"/>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="masukkan foto KTM">
              </div>
            </div>
        </div>

          </div>

          <div class="row">
            <div class="input-field col s4 m4 l4">
              <i class="material-icons prefix">phone</i>
              <input name="telp" id="icon_telephone" type="number" class="validate"   >
              <label for="icon_telephone">Telepon</label>
            </div>
          </div>



          <hr>
          <div class="row">
            <div class="input-field col s8 m8 l8">
              <input name="tatatertib" type="checkbox" id="test5" required/>
                    <label for="test5"><p>Dengan register saya memastikan bahwa data telah diisi dengan benar dan
                    bersedia mematuhi tata tertib yang berlaku.</p></label>
                    <!-- validation             -->
                    @if ($errors->has('tatatertib'))
                    <div class="container red-text text accent-3">
                      {{ $errors->first('tatatertib') }}
                    </div>
                    @endif
                    <!-- endvalidation             -->
            </div>
            <div class="form-group">
                <div class="col l4 m4 s4 offset-l8 offset-m8 offset-s8">
                  {{ csrf_field() }}
                    <input type="submit" class="btn" value="Register">
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- akhirfile -->

  <!-- coba -->

  <!-- akhircoba -->

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
