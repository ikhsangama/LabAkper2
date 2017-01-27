@extends('layouts.index')

@section('content')
<body class="blue lighten-5">
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading"><h2>{{$instruksikerja->judul}}</h2></div>
<hr>
<!-- coba -->
@if(Auth::user()->isAdmin(true))
<h1>rahasia</h1>
<hr>
@endif
<iframe src="http://docs.google.com/gview?url={{ asset('instruksikerja/tatatertib.pdf') }}&embedded=true"
style="width:600px; height:500px;" frameborder="0"></iframe>
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
