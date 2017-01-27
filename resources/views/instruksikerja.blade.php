@extends('layouts.index')

@section('content')
<body class="blue lighten-5">
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading"><h2>Daftar Instruksi Kerja</h2></div>
<hr>
<!-- coba -->
<ul class="card-panel collapsible light-blue darken-1" data-collapsible="accordion">
  <li class="white">
    <div class="collapsible-header waves-effect active light-blue darken-1 white-text"><i class="material-icons">library_books</i>
      <h4>Instruksi Kerja Alat</h4>
    </div>
    <div class="collapsible-body collection">
        @foreach($ik_alat as $alat)
        <div class="collection-item"><strong>{{$alat->judul}}</strong>
          <a href="/download" class="secondary-content"><i class="material-icons">file_download</i></a>
          @if(Auth::user()->isAdmin(true))
          <a href="instruksikerja/{{$alat->id}}/edit" class="secondary-content"><i class="material-icons">edit</i></a>
          @endif</div>
        @endforeach
    </div>
  </li>
  <li class="white">
    <div class="collapsible-header  waves-effect light-blue darken-1 white-text"><i class="material-icons">library_books</i>
      <h4>IK Kep. Anak</h4>
    </div>
    <div class="collapsible-body collection">
      @foreach($ik_anak as $anak)
      <div class="collection-item"><strong>{{$anak->judul}}</strong>
        <a href="/download" class="secondary-content"><i class="material-icons">file_download</i></a>
        @if(Auth::user()->isAdmin(true))
        <a href="/edit" class="secondary-content"><i class="material-icons">edit</i></a>
        @endif</div>
      @endforeach
    </div>
  </li>
<li class="white">
  <div class="collapsible-header  waves-effect light-blue darken-1 white-text"><i class="material-icons">library_books</i>
    <h4>IK Kep. Dasar</h4>
  </div>
  <div class="collapsible-body collection">
    @foreach($ik_dasar as $dasar)
    <div class="collection-item"><strong>{{$dasar->judul}}</strong>
      <a href="/download" class="secondary-content"><i class="material-icons">file_download</i></a>
      @if(Auth::user()->isAdmin(true))
      <a href="/edit" class="secondary-content"><i class="material-icons">edit</i></a>
      @endif</div>
    @endforeach
  </div>
</li>
<li class="white">
  <div class="collapsible-header  waves-effect light-blue darken-1 white-text"><i class="material-icons">library_books</i>
    <h4>IK Kep. Maternitas</h4>
  </div>
  <div class="collapsible-body collection">
    @foreach($ik_maternitas as $maternitas)
    <div class="collection-item"><strong>{{$maternitas->judul}}</strong>
      <a href="/download" class="secondary-content"><i class="material-icons">file_download</i></a>
      @if(Auth::user()->isAdmin(true))
      <a href="/edit" class="secondary-content"><i class="material-icons">edit</i></a>
      @endif</div>
    @endforeach
  </div>
</li>
<li class="white">
  <div class="collapsible-header  waves-effect light-blue darken-1 white-text"><i class="material-icons">library_books</i>
    <h4>IK Medikal Bedah</h4>
  </div>
  <div class="collapsible-body collection">
      @foreach($ik_bedah as $bedah)
      <a href="#!" class="collection-item"><strong>{{$bedah->judul}}</strong><br>{{$bedah->deskripsi}}</a>
      @endforeach
  </div>
</li>
</ul>
<!-- akhircoba -->
              </div>
          </div>
      </div>
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
    }); // end of document ready // end of jQuery name space
  </script>
</body>

@endsection
