@extends('layouts.app')

@section('content')
<body class="blue lighten-5">

<hr>
  <nav>
    <div class="nav-wrapper input-field blue accent-3 lighten-1 z-depth-2">
      <div class="col s12 m12 l12">
        <a href="/" class="breadcrumb"><i class="material-icons">home</i></a>
        <a href="/pengguna" class="breadcrumb"><b>Pengguna</b></a>
      </div>
    </div>
  </nav>
<hr>
    <div class="row">
        <div class="">
          <a href="{{ url('/pengguna/create') }}" class="btn waves-effect waves-light indigo lighten-1">Tambah</a>
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
    <div class="card-content grey lighten-4">
      <nav>
        <div class="nav-wrapper light-blue darken-1">
          <form action="{{ url('pengguna/query') }}" method="GET">
            <div class="input-field">
              <input id="search" type="search" class="validate" name="q" placeholder="Cari pengguna" required>
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </div>
      </nav>
      @yield('dash_admin.search')
    </div>

    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width light-blue darken-1">
        <li class="tab"><a href="#dosen" class=" white-text">Dosen</a></li>
        <li class="tab"><a href="#d3" class=" white-text">Mahasiswa D III</a></li>
        <li class="tab"><a href="#d4" class=" white-text">Mahasiswa D IV</a></li>
        <li class="tab"><a href="#unverif" class=" white-text">Belum Verifikasi</a></li>
        <li class="tab"><a href="#lock" class=" white-text">Terkunci</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">

      <div id="dosen">
      <table class="highlight white">
        <thead>
          <tr>
              <th>NIP</th>
              <th>Nama</th>
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
            <td>{{$dosen->nim}}</td>
            <td>{{$dosen->nama}}</td>
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

  <div id="d3">
    <table class="highlight white">
      <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
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
          <td>{{$mhs_d3->nim}}</td>
          <td>{{$mhs_d3->nama}}</td>
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

  <div id="d4">
  <table class="hightlight white">
    <thead>
      <tr>
          <th>NIM</th>
          <th>Nama</th>
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
        <td>{{$d4->nim}}</td>
        <td>{{$d4->nama}}</td>
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

  <div id="unverif">
    <table class="highlight white">
      <thead>
        <tr>
            <th>NIM/NIP</th>
            <th>Nama</th>
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
          <td>{{$blm_ver->nim}}</td>
          <td>{{$blm_ver->nama}}</td>
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
            <a href="#lock{{$blm_ver->id}}" class="tooltipped" data-tooltip="Verifikasi"><i class="material-icons">verified_user</i></a>
            <div id="lock{{$blm_ver->id}}" class="modal red lighten-5">
              <div class="modal-content">
                <b>PERINGATAN</b><br>
                <p>Pengguna <b>{{$blm_ver->nama}}</b> akan diverifikasi secara langsung?
                <br>jika <b>{{$blm_ver->nama}}</b> lupa password, link untuk reset password akan dikirimkan di <b>{{$blm_ver->email}}</b><hr></p>
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                <a href="pengguna/{{$blm_ver->id}}/verify" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
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

  <div id="lock">
  <table class="hightlight white">
    <thead>
      <tr>
          <th>NIM/NIP</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Telp</th>
          <th>Foto ID</th>
          <th>Dibuat</th>
          <th>Diupdate</th>
          <th>Atur</th>
      </tr>
    </thead>

    <tbody>
      <tr>@foreach ($terkuncis as $kunci)
        <td>{{$kunci->nim}}</td>
        <td>{{$kunci->nama}}</td>
        <td>{{$kunci->email}}</td>
        <td>{{$kunci->telp}}</td>
        <td>
          <img src="{{ asset('storage/ktm/' .$kunci->ktm) }}" width="60"alt=""
          class="materialboxed" data-caption="{{$kunci->ktm}}">
        </td>
        <td><label>{{$kunci->created_at}}</label></td>
        <td><label>{{$kunci->updated_at}}</label></td>
        <td>
          <a href="#del{{$kunci->id}}" class="tooltipped" data-tooltip="Hapus"><i class="material-icons">delete</i></a>
          <div id="del{{$kunci->id}}" class="modal red lighten-5">
            <div class="modal-content">
              <b>PERINGATAN</b><br>
              <p>Pengguna <b>{{$kunci->nama}}</b> akan dihapus?</p><br><hr>
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
              <a href="pengguna/{{$kunci->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
            </div>
          </div>
          <a href="pengguna/{{$kunci->id}}/edit" class="tooltipped" data-tooltip="Edit"><i class="material-icons">edit</i></a>
          <a href="#lock{{$kunci->id}}" class="tooltipped" data-tooltip="Buka Kunci"><i class="material-icons">lock_open</i></a>
          <div id="lock{{$kunci->id}}" class="modal red lighten-5">
            <div class="modal-content">
              <b>PERINGATAN</b><br>
              <p>Perbolehkan <b>{{$kunci->nama}}</b> untuk meminjam?</p><br><hr>
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
              <a href="pengguna/{{$kunci->id}}/unlock" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
            </div>
          </div>
        </td>
      </tr>@endforeach
    </tbody>
  </table>
  <ul class="pagination">
    <li>
      {{ $terkuncis->fragment('lock')->links() }}
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
