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
        </div>
      </div>
    </nav>
  <hr>
<!-- coba -->
    <div class="card-panel s12 m12 l12">
      <div class="row">
        <div class="col s6 m6 l6">
          <table class="bordered responsive-table left-align">
            <tbody>
              <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{$alatbahan->nama_alatbahan}}</td>
              </tr>
              <tr>
                <td>
                  Kategori
                </td>
                <td>:</td>

              </tr>
            </tbody>
          </table>
        </div>
        <div class="col s6 m6 l6">
          <img class="materialboxed" width="300">
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
          </tbody>
        </table>
        </div>
      </div>
      <div class="container">
        <br>
        <a href="#del{{$alatbahan->id}}" class="btn waves-effect waves-light red lighten-1">Hapus</a>
        <div id="del{{$alatbahan->id}}" class="modal red lighten-5">
          <div class="modal-content">
            <b>PERINGATAN</b><br>
            <p>Pengguna <b>{{$alatbahan->nama_alatbahan}}</b> akan dihapus?</p><br><hr>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
            <a href="pengguna/{{$alatbahan->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Hapus</b></a>
            <br>
          </div>
        </div>
        <a class="btn" href="/alatbahan/{{$alatbahan->id}}/edit">Edit</a>
        <br>
      </div>
<hr>

    </div>

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
