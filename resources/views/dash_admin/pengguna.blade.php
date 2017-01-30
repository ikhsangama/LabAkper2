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
<div class="card">
  <div class="card-content">
    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
  </div>
  <div class="card-tabs">
    <ul class="tabs tabs-fixed-width">
      <li class="tab"><a href="#test1"><b>Dosen</b></a></li>
      <li class="tab"><a href="#test2"><b>Mahasiswa D III</b></a></li>
      <li class="tab"><a href="#test3"><b>Mahasiswa D IV</b></a></li>
      <li class="tab"><a href="#test4"><b>Belum verifikasi</b></a></li>
    </ul>
  </div>
  <div class="card-content">
    <!-- tab1 -->
    <div id="test1">Test 1
      <table class="highlight bordered">
              <thead>
                <tr>
                    <th data-field="id">Nama</th>
                    <th data-field="name">NIP</th>
                    <th data-field="price">Email</th>
                    <th data-field="price">Telp</th>
                    <th data-field="price">Foto</th>
                    <th data-field="price">Dibuat</th>
                    <th data-field="price">Diupdate</th>
                    <th data-field="price">Atur</th>
                </tr>
              </thead>

              <tbody>
                <tr>@foreach($dosens as $dosen)
                  <td>{{$dosen->nama}}</td>
                  <td>{{$dosen->nim}}</td>
                  <td>{{$dosen->email}}</td>
                  <td>{{$dosen->telp}}</td>
                  <td>
                    <img class="materialboxed" width="60"
                    src="{{ asset('storage/ktm/' .$dosen->ktm) }}" data-caption="File: {{$dosen->ktm}}">
                  </td>
                  <td><label for="">{{$dosen->created_at}}</label></td>
                  <td><label for="">{{$dosen->updated_at}}</label></td>
                  <td><a href="pengguna/{{$dosen->id}}/delete') }}" class="tooltipped" data-tooltip="Delete"><i class="material-icons">delete</i></a>
                  <a href="pengguna/{{$dosen->id}}/edit') }}" class="tooltipped" data-tooltip="Edit"><i class="material-icons">edit</i></a></td>
                  <td></td>
                </tr>@endforeach
              </tbody>
            </table>
    </div>
    <!-- tab2 -->
    <div id="test2">Test 2
      <table class="highlight bordered">
              <thead>
                <tr>
                    <th data-field="id">Nama</th>
                    <th data-field="name">NIM</th>
                    <th data-field="price">Email</th>
                    <th data-field="price">Telp</th>
                    <th data-field="price">Foto</th>
                    <th data-field="price">Dibuat</th>
                    <th data-field="price">Diupdate</th>
                    <th data-field="price">Atur</th>
                </tr>
              </thead>

              <tbody>
                <tr>@foreach($mhs_d3s as $mhs_d3)
                  <td>{{$mhs_d3->nama}}</td>
                  <td>{{$mhs_d3->nim}}</td>
                  <td>{{$mhs_d3->email}}</td>
                  <td>{{$mhs_d3->telp}}</td>
                  <td>
                    <img class="materialboxed" width="60"
                    src="{{ asset('storage/ktm/' .$mhs_d3->ktm) }}" data-caption="File: {{$mhs_d3->ktm}}">
                  </td>
                  <td><label for="">{{$mhs_d3->created_at}}</label></td>
                  <td><label for="">{{$mhs_d3->updated_at}}</label></td>
                  <td><a href="pengguna/{{$mhs_d3->id}}') }}">Detail</a></td>
                </tr>@endforeach
              </tbody>
            </table>
    </div>
    <!-- tab3 -->
    <div id="test3">Test 3
      <table class="highlight bordered">
              <thead>
                <tr>
                    <th data-field="id">Nama</th>
                    <th data-field="name">NIP</th>
                    <th data-field="price">Email</th>
                    <th data-field="price">Telp</th>
                    <th data-field="price">Foto</th>
                    <th data-field="price">Dibuat</th>
                    <th data-field="price">Diupdate</th>
                    <th data-field="price">Atur</th>
                </tr>
              </thead>

              <tbody>
                <tr>@foreach($mhs_d4s as $mhs_d4)
                  <td>{{$mhs_d4->nama}}</td>
                  <td>{{$mhs_d4->nim}}</td>
                  <td>{{$mhs_d4->email}}</td>
                  <td>{{$mhs_d4->telp}}</td>
                  <td>
                    <img class="materialboxed" width="60"
                    src="{{ asset('storage/ktm/' .$mhs_d4->ktm) }}" data-caption="File: {{$mhs_d4->ktm}}">
                  </td>
                  <td><label for="">{{$mhs_d4->created_at}}</label></td>
                  <td><label for="">{{$mhs_d4->updated_at}}</label></td>
                  <td><a href="pengguna/{{$dosen->id}}') }}">Detail</a></td>
                </tr>@endforeach
              </tbody>
            </table>
    </div>
    <!-- tab4 -->
    <div id="test4">Test 4
      <table class="highlight bordered">
              <thead>
                <tr>
                    <th data-field="id">Nama</th>
                    <th data-field="name">NIP</th>
                    <th data-field="price">Email</th>
                    <th data-field="price">Telp</th>
                    <th data-field="price">Foto</th>
                    <th data-field="price">Dibuat</th>
                    <th data-field="price">Diupdate</th>
                    <th data-field="price">Atur</th>
                </tr>
              </thead>

              <tbody>
                <tr>@foreach($blm_verifs as $blm_verif)
                  <td>{{$blm_verif->nama}}</td>
                  <td>{{$blm_verif->nim}}</td>
                  <td>{{$blm_verif->email}}</td>
                  <td>{{$blm_verif->telp}}</td>
                  <td>
                    <img class="materialboxed" width="60"
                    src="{{ asset('storage/ktm/' .$blm_verif->ktm) }}" data-caption="File: {{$blm_verif->ktm}}">
                  </td>
                  <td><label for="">{{$blm_verif->created_at}}</label></td>
                  <td><label for="">{{$blm_verif->updated_at}}</label></td>
                  <td><a href="pengguna/{{$dosen->id}}') }}">Detail</a></td>
                </tr>@endforeach
              </tbody>
            </table>
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
