@extends('layouts.index')

@section('content')
<body class="blue lighten-5">

  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading"><h2>Dashboard Admin</h2></div>

                  <div class="row">
                      <div class="col s6 m6 l6">
                        <div class="card red darken-1 s6 m6 l6">
                          <div class="card-content white-text">
                            <span class="card-title">Instruksi Kerja</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                          </div>
                          <div class="card-action">
                            <a href="#">Atur</a>
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
                            <span class="card-title">Daftar Alat & Bahan</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                          </div>
                          <div class="card-action">
                            <a href="#">Atur</a>
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
      // $('.scrollspy').scrollSpy();
      $(".dropdown-button").dropdown();
    }); // end of document ready // end of jQuery name space
  </script>
</body>
@endsection
