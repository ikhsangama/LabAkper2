@extends('layouts.app')

@section('content')
<body class="blue lighten-5">
  <hr>
    <nav>
      <div class="nav-wrapper input-field blue accent-3 lighten-1 z-depth-2">
        <div class="col s12 m12 l12">
          <a href="/" class="breadcrumb"><i class="material-icons">home</i></a>
          <a href="/alatbahan" class="breadcrumb"><b>Alat & Bahan</b></a>
          <a href="/alatbahan/{{$alatbahan->id}}" class="breadcrumb">{{$alatbahan->nama_alatbahan}}</a>
          <a href="/alatbahan/{{$alatbahan->id}}/edit" class="breadcrumb">Edit</a>
        </div>
      </div>
    </nav>
  <hr>
<!-- coba -->
<div class="container">
  <div class="card-panel">
    <h3 class="center blue-text text accent-5">Form Edit: </h3>
    <h4 class="center blue-text text accent-5">{{$alatbahan->nama_alatbahan}}</h4>
  <hr>
    <div class="row">
        <!-- mulai form -->
      <form class="col s12 m12 l12" action="/alatbahan/{{$alatbahan->id}}" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col s5 m5 l5">
              <i class="material-icons prefix">format_list_numbered</i>
              <input name="kode" placeholder="Kode Alkes/Bahan/Obat dll" id="icon_prefix" type="text" class="validate" autofocus maxlength="30" value="{{$alatbahan->kode_alatbahan}}" required>
              <label for="icon_prefix">Kode</label>
              <!-- validation             -->
                @if ($errors->has('kode_alatbahan'))
                <div class="container red-text text accent-3">
                  {{ $errors->first('kode_alatbahan') }}
                </div>
                @endif
              <!-- endvalidation             -->
            </div>
        </div>
        <div class="row">
          <div class="input-field col s11 m11 l11">
            <i class="material-icons prefix">local_pharmacy</i>
            <input name="nama" placeholder="Nama Alkes/Bahan/Obat dll" id="icon_prefix" type="text" class="validate" autofocus maxlength="30" value="{{$alatbahan->nama_alatbahan}}" required>
            <label for="icon_prefix">Nama</label>
            <!-- validation             -->
              @if ($errors->has('nama'))
              <div class="container red-text text accent-3">
                {{ $errors->first('nama') }}
              </div>
              @endif
            <!-- endvalidation             -->
          </div>
        </div>
        <div class="row">
          <div class="file-field input-field col s6 m6 l6">
            <div class="btn">
              <span><i class="material-icons prefix">add_a_photo</i></span>
              <input type="file" id="inputgambar" name="foto" class="validate"/>
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" placeholder="Masukkan Foto Alkes/Bahan/Obat">
            </div>
          </div>
      </div>
      <div class="row">
        <div class="input-field col s11 m11 l11">
          <i class="material-icons prefix">info</i>
          <textarea name="spesifikasi" id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Spesifikasi</label>
          <!-- validation             -->
            @if ($errors->has('spesifikasi'))
            <div class="container red-text text accent-3">
              {{ $errors->first('spesifikasi') }}
            </div>
            @endif
          <!-- endvalidation             -->
        </div>
      </div>
      <div class="row">
        <div class="input-field col s11 m11 l11">
          <i class="material-icons prefix">short_text</i>
          <textarea name="keterangan" id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Keterangan</label>
          <!-- validation             -->
            @if ($errors->has('keterangan'))
            <div class="container red-text text accent-3">
              {{ $errors->first('keterangan') }}
            </div>
            @endif
          <!-- endvalidation             -->
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3 m3 l3">
          <!-- Modal Trigger -->
          <a class="waves-effect waves-light" href="#modal1">Stok</a>
        </div>
        <div class="input-field col s3 m3 l3">
          <!-- Modal Trigger -->
          <a class="waves-effect waves-light" href="#modal1">Stok</a>
        </div>
        <div class="input-field col s3 m3 l3">
          <!-- Modal Trigger -->
          <a class="waves-effect waves-light" href="#modal1">Stok</a>
        </div>
      </div>
      </form>
          <!-- akhirform -->
      <div class="col s6 m6 l6">
        <img src="http://lorempixel.com/100/190/nature/6" class="responsive-img materialboxed">
      <table>
        <tbody>
          <tr>
            <td><label>Dibuat: </label></td>
            <td><label>{{$alatbahan->created_at}}</label></td>
          </tr>
          <tr>
            <td><label>Diupdate</label></td>
            <td><label>{{$alatbahan->updated_at}}</label></td>
          </tr>
          <tr>
            <td></td>
          </tr>
          <tr>
            <td>@if(Auth::user()->isAdmin(true))
            <a href="#del{{$alatbahan->id}}" class="btn waves-effect waves-light red lighten-1">Hapus</a>
            <div id="del{{$alatbahan->id}}" class="modal red lighten-5">
              <div class="modal-content">
                <b>PERINGATAN</b><br>
                <p>Pengguna <b>{{$alatbahan->nama_alatbahan}}</b> akan dihapus?</p><br><hr>
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                <a href="pengguna/{{$alatbahan->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Hapus</b></a>
              </div>
            </div>
            <a class="btn" href="/alatbahan/{{$alatbahan->id}}/edit">Edit</a>
            <br>
            @endif
            </td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
<hr>
  </div>
</div> end class container


  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset('js/materialize.js')}}"></script>
  <script>

  	$(document).ready(function(){
      // $('.materialboxed').materialbox({
      //
      // });
      $('.button-collapse').sideNav({

      });
      // $('.carousel').carousel({
      //   dist:0,
      // });
      // $('.carousel').carousel('next', 5);
      $('.scrollspy').scrollSpy();
      $(".dropdown-button").dropdown({

      });
      $('.modal').modal();
    }); // end of document ready // end of jQuery name space
  </script>
</body>

@endsection
