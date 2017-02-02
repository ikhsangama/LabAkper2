@extends('layouts.app')

@section('content')
<body class="blue lighten-5">

    <div class="row">
        <div class=""><h2>Daftar Pengguna</h2>
          <a href="{{ url('/pengguna/create') }}" class="btn waves-effect waves-light">Tambah</a>
        </div>
<!-- <hr> -->
@if(session('success'))
<div class="card-panel green lighten-4">
{{session('success')}}
</div>
@elseif(session('alert'))
<div class="card-panel red lighten-4">
{{session('alert')}}
</div>
@endif
<!-- coba -->
<!-- stress -->
@foreach ($dosens as $dosen)
{{$dosen->nama}}
@endforeach
<!-- stress -->

<div class="card">
    <div class="card-content">
      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test1" class="active">Dosen</a></li>
        <li class="tab"><a href="#test2">Mahasiswa D III</a></li>
        <li class="tab"><a href="#test3">Mahasiswa D IV</a></li>
        <li class="tab"><a href="#test4">Belum Verifikasi</a></li>
        <li class="tab"><a href="#test5">Terkunci</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">

      <table>
        <thead>
          <tr>
              <th>Nama</th>
              <th>NIP</th>
              <th>Email</th>
              <th>Telp</th>
              <th>Foto ID</th>
              <th>Dibuat</th>
              <th>Diupdate</th>
              <th>Atur</th>
          </tr>
        </thead>

        <tbody>
          <tr>@foreach ($dosens as $dosen)
            <td>{{$dosen->nama}}</td>
            <td>{{$dosen->nim}}</td>
            <td>{{$dosen->email}}</td>
            <td>{{$dosen->telp}}</td>
            <td>
              <img src="{{ asset('storage/ktm/' .$dosen->ktm) }}" width="60"alt=""
              class="materialboxed" data-caption="{{$dosen->ktm}}">
            </td>
            <td><label>{{$dosen->created_at}}</label></td>
            <td><label>{{$dosen->updated_at}}</label></td>
            <td>
              <a href="#del{{$dosen->id}}" class="tooltipped" data-tooltip="Delete"><i class="material-icons">delete</i></a>
              <div id="del{{$dosen->id}}" class="modal red lighten-5">
                <div class="modal-content">
                  <b>PERINGATAN</b><br>
                  <p>Pengguna <b>{{$dosen->nama}}</b> akan dihapus?</p><br><hr>
                  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                  <a href="pengguna/{{$dosen->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
                </div>
              </div>
              <a href="pengguna/{{$dosen->id}}/edit" class="tooltipped" data-tooltip="Edit"><i class="material-icons">edit</i></a>
              <a href="#lock{{$dosen->id}}" class="tooltipped" data-tooltip="Kunci"><i class="material-icons">lock_outline</i></a>
              <div id="lock{{$dosen->id}}" class="modal red lighten-5">
                <div class="modal-content">
                  <b>PERINGATAN</b><br>
                  <p>Pengguna <b>{{$dosen->nama}}</b> akan dikunci?</p><br><hr>
                  <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                  <a href="pengguna/{{$dosen->id}}/lock" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
                </div>
              </div>
            </td>
          </tr>@endforeach
        </tbody>
      </table>

    </div>
  </div>
<!-- akhircoba -->
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
