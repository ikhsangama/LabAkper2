@extends('layouts.app')

@section('content')
<body class="blue lighten-5">
<div class="container">
<h3>Kategori: {{$kategori->nama_kategori}}</h3>
<!-- coba -->
<h4>Daftar Alat Bahan</h4>
<ul>
  @foreach($kategori->alatbahan as $alatbahan)
  <li>{{$alatbahan->nama_alatbahan}}</li>
  @endforeach
</ul>
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
    }); // end of document ready // end of jQuery name space
  </script>
</body>

@endsection
