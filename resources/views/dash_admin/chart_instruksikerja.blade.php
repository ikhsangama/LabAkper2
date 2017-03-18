@extends('layouts.app')

@section('content')
<body class="blue lighten-5">

  <hr>
    <nav>
      <div class="nav-wrapper input-field blue accent-3 lighten-1 z-depth-2">
        <div class="col s12 m12 l12">
          <a href="/" class="breadcrumb"><i class="material-icons">home</i></a>
          <a href="/instruksikerja" class="breadcrumb"><b>InstruksiKerja</b></a>
          <a href="/instruksikerja/chart" class="breadcrumb"><b>Chart</b></a>
        </div>
      </div>
    </nav>
  <hr>
<!-- coba -->
<div style="width:75%;">
{!! $chartjs->render() !!}
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
