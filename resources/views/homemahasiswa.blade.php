@extends('layouts.index')

@section('content')

<!-- awalfile -->
<div class="container">
  <h2 class="blue-text text accent-5">Register</h2>
  <hr>
  <div class="card-panel s12 m12 l12">
    <div class="row">
      <form class="col s12">

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input placeholder="Gunakan nama lengkap" id="icon_prefix" type="text" class="validate" length="25" autofocus required  >
            <label for="icon_prefix">Nama</label>
          </div>
            <div class="input-field col s4 m4 l4">
              <i class="material-icons prefix">school</i>
              <select>
                <option value="" disabled selected>Pilih</option>
                <option value="1">D III</option>
                <option value="2">D IV</option>
              </select>
              <label for="icon_prefix">Program Studi</label>
            </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">contact_mail</i>
            <input placeholder="contoh@email.com" id="icon_prefix" type="email" class="validate" length="30"   >
            <label for="icon_prefix">Email</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">lock</i>
            <input id="icon_prefix" type="password" class="validate"   >
            <label for="icon_prefix">Password</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="ulangi password secara benar" id="icon_prefix" type="password" class="validate"   >
            <label for="icon_prefix">Konfirmasi Password</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">credit_card</i>
            <input id="icon_prefix" type="text" class="validate"   >
            <label for="icon_prefix">NIM</label>
          </div>
          <div class="file-field input-field col s6">
            <div class="btn waves-effect">
              <i class="material-icons">add_a_photo</i>
              <span><label for="icon_prefix"></label></span>
              <input type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="masukkan foto KTM">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s4 m4 l4">
            <i class="material-icons prefix">phone</i>
            <input id="icon_telephone" type="tel" class="validate">
            <label for="icon_telephone">Telepon</label>
          </div>
        </div>

        <hr>

        <div class="form-group">
            <div class="col l8 m6 s4 offset-l8 m6 s4">
                <button type="submit" class="btn" href="/profile">
                    Register
                </button>
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

@endsection
