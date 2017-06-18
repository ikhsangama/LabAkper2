@extends('layouts.app')

@section('content')
<body class="blue lighten-5">
  <hr>
    <nav>
      <div class="nav-wrapper blue accent-3 z-depth-2">
        <div class="col s12 m12 l12">
          <a href="/" class="breadcrumb"><i class="material-icons">home</i></a>
          <a class="breadcrumb"><b>Dokumen</b></a>
          <a href="/instruksikerja" class="breadcrumb">Instruksi Kerja</a>
          <a href="/instruksikerja/{{$instruksikerja->id}}" class="breadcrumb">{!!str_limit($instruksikerja->judul,14)!!}</a>
        </div>
      </div>
    </nav>
  <hr>
<!-- coba -->
<div class="card-panel col s12 m12 l12">
  <h5 class="center"><b>{{$instruksikerja->judul}}</b></h5>
  <table>
    <tr>
      <td><b>Kategori:</b> {{$instruksikerja->kategori_ik}}</td>
      <td><b>Dibuat:</b> {{$instruksikerja->created_at}}</td>
      <td><b>Diupdate:</b> {{$instruksikerja->updated_at}}</td>
    </tr>
  </table>
<hr>
<!-- coba -->
    <div class="center col s12 m12 l12">
    <iframe src="{{ asset('storage/instruksikerja/' .$instruksikerja->file_ik) }}"
    style="max-width:100%; width:100%; height:700px;" frameborder="0"></iframe>
    </div>
  </div>
<!-- akhircoba -->

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
