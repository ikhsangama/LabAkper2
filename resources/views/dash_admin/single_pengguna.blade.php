@extends('layouts.app')

@section('content')
<body class="blue lighten-5">

  <hr>
    <nav>
      <div class="nav-wrapper input-field blue accent-3 lighten-1 z-depth-2">
        <div class="col s12 m12 l12">
          <a href="/" class="breadcrumb"><i class="material-icons">home</i></a>
          <a href="/pengguna" class="breadcrumb"><b>Pengguna</b></a>
          <a href="/pengguna/{{$pengguna->id}}" class="breadcrumb">{{$pengguna->nama}}</a>
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
                <td>{{$pengguna->nama}}</td>
              </tr>
              <tr>
                <td>
                  @if($pengguna->level=="Dosen")
                  NIP
                  @elseif($pengguna->level<>"Dosen")
                  NIM
                  @endif
                </td>
                <td>:</td>
                <td>{{$pengguna->nim}}</td>
              </tr>
              <tr>
                <td>Pengguna</td>
                <td>:</td>
                <td>{{$pengguna->level}}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{$pengguna->email}}</td>
              </tr>
              <tr>
                <td>Kontak</td>
                <td>:</td>
                <td>{{$pengguna->telp}}</td>
              </tr>
              <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                  @if($pengguna->status==0)
                  <a href="#ver{{$pengguna->id}}">
                    <i  class="material-icons grey-text tooltipped" data-tooltip="Belum verifikasi email">verified_user</i>
                  </a>
                    <div id="ver{{$pengguna->id}}" class="modal red lighten-5">
                      <div class="modal-content">
                        <b>PERINGATAN</b><br>
                        <p>Pengguna <b>{{$pengguna->nama}}</b> akan di verifikasi langsung?<br>
                        Lakukan hal ini jika anda yakin <b>{{$pengguna->email}}</b> adalah benar dan valid</p><hr>
                        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                        <a href="/pengguna/{{$pengguna->id}}/verify" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Verifikasi</b></a>
                        <br>
                      </div>
                    </div>
                  @elseif($pengguna->status==1)
                  <a href="#unver{{$pengguna->id}}">
                    <i class="material-icons blue-text tooltipped" data-tooltip="Sudah verifikasi email">verified_user</i>
                  </a>
                    <div id="unver{{$pengguna->id}}" class="modal red lighten-5">
                      <div class="modal-content">
                        <b>PERINGATAN</b><br>
                        <p>Unverifikasi <b>{{$pengguna->nama}}</b>?<br>
                        Akan dilakukan verifikasi ulang pada email <b>{{$pengguna->email}}</b></p>
                        <hr>
                        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                        <a href="/pengguna/{{$pengguna->id}}/unverify" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Unverifikasi</b></a>
                        <br>
                      </div>
                    </div>
                  @endif
                  @if($pengguna->setuju==0)
                  <a href="#unlock{{$pengguna->id}}">
                    <i class="material-icons grey-text tooltipped" data-tooltip="Tidak diijinkan meminjam">lock_outline</i>
                  </a>
                    <div id="unlock{{$pengguna->id}}" class="modal red lighten-5">
                      <div class="modal-content">
                        <b>PERINGATAN</b><br>
                        <p>Buka kunci <b>{{$pengguna->nama}}</b>?<br>
                        <b>{{$pengguna->nama}}</b> akan diijinkan meminjam</b></p>
                        <hr>
                        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                        <a href="/pengguna/{{$pengguna->id}}/unlock" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Buka Kunci</b></a>
                        <br>
                      </div>
                    </div>
                  @elseif($pengguna->setuju==1)
                    <a href="#lock{{$pengguna->id}}">
                      <i class="material-icons blue-text tooltipped" data-tooltip="Diijinkan meminjam">lock_open</i>
                    </a>
                      <div id="lock{{$pengguna->id}}" class="modal red lighten-5">
                        <div class="modal-content">
                          <b>PERINGATAN</b><br>
                          <p>Kunci <b>{{$pengguna->nama}}</b>?<br>
                          <b>{{$pengguna->nama}}</b> tidak diijinkan meminjam</b></p>
                          <hr>
                          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                          <a href="/pengguna/{{$pengguna->id}}/lock" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Kunci</b></a>
                          <br>
                        </div>
                      </div>
                  @endif
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col s6 m6 l6">
          <img class="materialboxed" width="300"
        src="{{ asset('storage/ktm/' .$pengguna->ktm) }}" data-caption="File: {{$pengguna->ktm}}">
        <table>
          <tbody>
            <tr>
              <td><label>Dibuat: </label></td>
              <td><label>{{$pengguna->created_at}}</label></td>
            </tr>
            <tr>
              <td><label>Diupdate</label></td>
              <td><label>{{$pengguna->updated_at}}</label></td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
      <div class="container">
        <br>
        <a href="#del{{$pengguna->id}}" class="btn waves-effect waves-light red lighten-1">Hapus</a>
        <div id="del{{$pengguna->id}}" class="modal red lighten-5">
          <div class="modal-content">
            <b>PERINGATAN</b><br>
            <p>Pengguna <b>{{$pengguna->nama}}</b> akan dihapus?</p><br><hr>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
            <a href="pengguna/{{$pengguna->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Hapus</b></a>
            <br>
          </div>
        </div>
        <a class="btn" href="/pengguna/{{$pengguna->id}}/edit">Edit</a>
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
