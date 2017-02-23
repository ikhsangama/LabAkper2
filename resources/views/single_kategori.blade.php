@extends('layouts.app')

@section('content')
<body class="blue lighten-5">
  <h3>Kategori: {{$kategori->nama_kategori}}</h3>
  <hr>
<!-- <div class="container"> -->
<!-- coba -->
<h4>Daftar Alat Bahan</h4>
<div class="row">
  <div class="col s6 m6 l6">
    <div class="card horizontal">
        <img src="http://lorempixel.com/100/190/nature/6" class="circle">
      <div class="card-stacked">
      <div class="card-content">
        <p>I am a very simple card. I am good at containing small bits of information.</p>
      </div>
      <div class="card-action">
        <a href="#">This is a link</a>
      </div>
    </div>
    </div>
  </div>

  <div class="col s6 m6 l6">
    <div class="card horizontal">
      <div class="card-image">
        <img src="http://lorempixel.com/100/190/nature/6">
      </div>
      <div class="card-stacked">
      <div class="card-content">
        <p>I am a very simple card. I am good at containing small bits of information.</p>
      </div>
      <div class="card-action">
        <a href="#">This is a link</a>
      </div>
    </div>
    </div>
  </div>
</div>
<ul>
  @foreach($kategori->alatbahan as $alatbahan)
  <li>{{$alatbahan->nama_alatbahan}}</li>
  <li>{{$alatbahan->created_at}}</li>
  @endforeach
</ul>
<!-- akhircoba -->
<!-- </div> -->


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
