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

<!-- stress -->

<div class="card">
    <div class="card-content">
      <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#dosen">Dosen</a></li>
        <li class="tab"><a href="#d3">Mahasiswa D III</a></li>
        <li class="tab"><a href="#d4">Mahasiswa D IV</a></li>
        <li class="tab"><a href="#unverif">Belum Verifikasi</a></li>
        <li class="tab"><a href="#lock">Terkunci</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">

      <div id="dosen">dosen
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
      <ul class="pagination">
        <li>
          {{ $dosens->fragment('dosen')->links() }}
        </li>
      </ul>
    </div>

  <div id="d3"> d3
    <table>
      <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Telp</th>
            <th>Foto ID</th>
            <th>Dibuat</th>
            <th>Diupdate</th>
            <th>Atur</th>
        </tr>
      </thead>

      <tbody>
        <tr>@foreach ($mhs_d3s as $mhs_d3)
          <td>{{$mhs_d3->nama}}</td>
          <td>{{$mhs_d3->nim}}</td>
          <td>{{$mhs_d3->email}}</td>
          <td>{{$mhs_d3->telp}}</td>
          <td>
            <img src="{{ asset('storage/ktm/' .$mhs_d3->ktm) }}" width="60"alt=""
            class="materialboxed" data-caption="{{$mhs_d3->ktm}}">
          </td>
          <td><label>{{$mhs_d3->created_at}}</label></td>
          <td><label>{{$mhs_d3->updated_at}}</label></td>
          <td>
            <a href="#del{{$mhs_d3->id}}" class="tooltipped" data-tooltip="Delete"><i class="material-icons">delete</i></a>
            <div id="del{{$mhs_d3->id}}" class="modal red lighten-5">
              <div class="modal-content">
                <b>PERINGATAN</b><br>
                <p>Pengguna <b>{{$mhs_d3->nama}}</b> akan dihapus?</p><br><hr>
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                <a href="pengguna/{{$mhs_d3->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
              </div>
            </div>
            <a href="pengguna/{{$mhs_d3->id}}/edit" class="tooltipped" data-tooltip="Edit"><i class="material-icons">edit</i></a>
            <a href="#lock{{$mhs_d3->id}}" class="tooltipped" data-tooltip="Kunci"><i class="material-icons">lock_outline</i></a>
            <div id="lock{{$mhs_d3->id}}" class="modal red lighten-5">
              <div class="modal-content">
                <b>PERINGATAN</b><br>
                <p>Pengguna <b>{{$mhs_d3->nama}}</b> akan dikunci?</p><br><hr>
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                <a href="pengguna/{{$mhs_d3->id}}/lock" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
              </div>
            </div>
          </td>
        </tr>@endforeach
      </tbody>
    </table>
    <ul class="pagination">
      <li>
        {{ $mhs_d3s->fragment('d3')->links() }}
      </li>
    </ul>
  </div>

  <div id="d4">d4
  <table>
    <thead>
      <tr>
          <th>Nama</th>
          <th>NIM</th>
          <th>Email</th>
          <th>Telp</th>
          <th>Foto ID</th>
          <th>Dibuat</th>
          <th>Diupdate</th>
          <th>Atur</th>
      </tr>
    </thead>

    <tbody>
      <tr>@foreach ($mhs_d4s as $d4)
        <td>{{$d4->nama}}</td>
        <td>{{$d4->nim}}</td>
        <td>{{$d4->email}}</td>
        <td>{{$d4->telp}}</td>
        <td>
          <img src="{{ asset('storage/ktm/' .$d4->ktm) }}" width="60"alt=""
          class="materialboxed" data-caption="{{$d4->ktm}}">
        </td>
        <td><label>{{$d4->created_at}}</label></td>
        <td><label>{{$d4->updated_at}}</label></td>
        <td>
          <a href="#del{{$d4->id}}" class="tooltipped" data-tooltip="Delete"><i class="material-icons">delete</i></a>
          <div id="del{{$d4->id}}" class="modal red lighten-5">
            <div class="modal-content">
              <b>PERINGATAN</b><br>
              <p>Pengguna <b>{{$d4->nama}}</b> akan dihapus?</p><br><hr>
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
              <a href="pengguna/{{$d4->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
            </div>
          </div>
          <a href="pengguna/{{$d4->id}}/edit" class="tooltipped" data-tooltip="Edit"><i class="material-icons">edit</i></a>
          <a href="#lock{{$d4->id}}" class="tooltipped" data-tooltip="Kunci"><i class="material-icons">lock_outline</i></a>
          <div id="lock{{$d4->id}}" class="modal red lighten-5">
            <div class="modal-content">
              <b>PERINGATAN</b><br>
              <p>Pengguna <b>{{$d4->nama}}</b> akan dikunci?</p><br><hr>
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
              <a href="pengguna/{{$d4->id}}/lock" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
            </div>
          </div>
        </td>
      </tr>@endforeach
    </tbody>
  </table>
  <ul class="pagination">
    <li>
      {{ $mhs_d4s->fragment('d4')->links() }}
    </li>
  </ul>
</div>

  <div id="unverif">unverif
    <table>
      <thead>
        <tr>
            <th>Nama</th>
            <th>NIM/NIP</th>
            <th>Email</th>
            <th>Telp</th>
            <th>Foto ID</th>
            <th>Dibuat</th>
            <th>Diupdate</th>
            <th>Atur</th>
        </tr>
      </thead>

      <tbody>
        <tr>@foreach ($blm_verifs as $blm_ver)
          <td>{{$blm_ver->nama}}</td>
          <td>{{$blm_ver->nim}}</td>
          <td>{{$blm_ver->email}}</td>
          <td>{{$blm_ver->telp}}</td>
          <td>
            <img src="{{ asset('storage/ktm/' .$blm_ver->ktm) }}" width="60"alt=""
            class="materialboxed" data-caption="{{$blm_ver->ktm}}">
          </td>
          <td><label>{{$blm_ver->created_at}}</label></td>
          <td><label>{{$blm_ver->updated_at}}</label></td>
          <td>
            <a href="#del{{$blm_ver->id}}" class="tooltipped" data-tooltip="Delete"><i class="material-icons">delete</i></a>
            <div id="del{{$blm_ver->id}}" class="modal red lighten-5">
              <div class="modal-content">
                <b>PERINGATAN</b><br>
                <p>Pengguna <b>{{$blm_ver->nama}}</b> akan dihapus?</p><br><hr>
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                <a href="pengguna/{{$blm_ver->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
              </div>
            </div>
            <a href="pengguna/{{$blm_ver->id}}/edit" class="tooltipped" data-tooltip="Edit"><i class="material-icons">edit</i></a>
            <a href="#lock{{$blm_ver->id}}" class="tooltipped" data-tooltip="Kunci"><i class="material-icons">lock_outline</i></a>
            <div id="lock{{$blm_ver->id}}" class="modal red lighten-5">
              <div class="modal-content">
                <b>PERINGATAN</b><br>
                <p>Pengguna <b>{{$blm_ver->nama}}</b> akan dikunci?</p><br><hr>
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                <a href="pengguna/{{$blm_ver->id}}/lock" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
              </div>
            </div>
          </td>
        </tr>@endforeach
      </tbody>
    </table>
    <ul class="pagination">
      <li>
        {{ $blm_verifs->fragment('unverif')->links() }}
      </li>
    </ul>
  </div>




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
