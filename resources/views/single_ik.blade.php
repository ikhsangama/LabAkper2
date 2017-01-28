@extends('layouts.app')

@section('content')
<body class="blue lighten-5">
  <div class="container">
<h3>Instruksi Kerja</h3>
<!-- coba -->
<div class="card-panel s12 m12 l12">
  <h5 class="center"><b>{{$instruksikerja->judul}}</b></h5>
  <p>Kategori :{{$instruksikerja->kategori_ik}}<br>
  Dibuat :{{$instruksikerja->created_at}}<br>
  Diupdate :{{$instruksikerja->updated_at}}</p>
<hr>
<!-- coba -->
        <div class="center">
        <iframe src="{{ asset('storage/instruksikerja/' .$instruksikerja->file_ik) }}"
        style="width:600px; height:700px;" frameborder="0"></iframe>
        </div>
<!-- akhircoba -->
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
