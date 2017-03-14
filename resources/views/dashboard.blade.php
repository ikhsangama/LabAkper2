@extends('layouts.app')

@section('content')
<body class="blue lighten-5">

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
                  <div>
                    <h2>Dashboard Admin</h2>
                  </div>

                  <div class="row">
                      <div class="col s6 m6 l6">
                        <div class="card red darken-1 s6 m6 l6">
                          <div class="card-content white-text">
                            <!-- <span class="card-title">Instruksi Kerja</span> -->
                            <h4>{{$ik}} Instruksi Kerja</h4>
                            <li class="divider"></li>
                            <p>{{$ik_alat}} Instruksi Kerja Alat
                            <br>{{$ik_anak}} Instruksi Kep. Anak
                            <br>{{$ik_dasar}} Instruksi Kep. Dasar
                            <br>{{$ik_maternitas}} Instruksi Kep. Maternitas
                            <br>{{$ik_bedah}} Instruksi Kep. Bedah</p>
                          </div>
                          <div class="card-action">
                            <a href="{{ url('/instruksikerja') }}">Atur</a>
                            <a href="{{ url('/instruksikerja/grafik') }}">Grafik</a>
                          </div>
                        </div>
                      </div>
                      <div class="col s6 m6 l6">
                        <div class="card purple darken-1 s6 m6 l6">
                          <div class="card-content white-text">
                            <span class="card-title">SOP</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                          </div>
                          <div class="card-action">
                            <a href="#">Atur</a>
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col s6 m6 l6">
                        <div class="card indigo darken-1 s6 m6 l6">
                          <div class="card-content white-text">
                            <h4>Alat & Bahan</h4>
                            <li class="divider"></li>
                            <p>{{$kategori}} Kategori
                            <br>{{$alatbahan}} Daftar Alat & Bahan</p>
                          </div>
                          <div class="card-action">
                              <a href="{{ url('/kategori') }}">Atur</a>
                          </div>
                        </div>
                      </div>
                      <div class="col s6 m6 l6">
                        <div class="card light-blue darken-1 s6 m6 l6">
                          <div class="card-content white-text">
                            <span class="card-title">Peminjaman Alat & Bahan</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                          </div>
                          <div class="card-action">
                            <a href="#">Atur</a>
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col s6 m6 l6">
                        <div class="card teal darken-1 s6 m6 l6">
                          <div class="card-content white-text">
                            <h4>{{$pengguna}} Pengguna</h4>
                            <li class="divider"></li>
                            <p>{{$dosen}} Dosen
                            <br>{{$mhs_d3}} Mahasiswa D III
                            <br>{{$mhs_d4}} Mahasiswa D IV
                            <br>{{$blm_ver}} Belum terverifikasi
                            <br>{{$terkunci}} Terkunci </p>
                          </div>
                          <div class="card-action">
                              <a href="{{ url('/pengguna') }}">Atur</a>
                          </div>
                        </div>
                      </div>
                  </div>
          </div>
      </div>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset('js/materialize.min.js')}}"></script>
  <script>

  	$(document).ready(function(){
      // $('.materialboxed').materialbox({
      //
      // });
      // $('.button-collapse').sideNav({
      //
      // });
      // $('.carousel').carousel({
      //   dist:0,
      // });
      // $('.carousel').carousel('next', 5);
      $('.scrollspy').scrollSpy();
      $(".dropdown-button").dropdown({
        hover: true,
        belowOrigin: true,
      });
    }); // end of document ready // end of jQuery name space
  </script>
</body>
@endsection
