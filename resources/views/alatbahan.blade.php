@extends('layouts.app')

@section('content')
<body class="blue lighten-5">
  <hr>
    <nav>
      <div class="nav-wrapper blue accent-3 lighten-1 z-depth-2">
        <div class="col s12 m12 l12">
          <a href="/" class="breadcrumb"><i class="material-icons">home</i></a>
          <a class="breadcrumb"><b>Inventaris</b></a>
          <a href="/alatbahan" class="breadcrumb">Alat & Bahan</a>
        </div>
      </div>
    </nav>
  <hr>
  <!-- HEADER TETAP ATAS + BREADCRUMP-->

<!-- <div class="container"> -->
<!-- coba -->
<div class="row">
<ul>
  @foreach($alatbahans as $alatbahan)
  <li>
    <div class="col s6 m6 l6">
      <div class="card horizontal">
          <img src="http://lorempixel.com/100/190/nature/6" class="circle responsive-img materialboxed">
        <div class="card-stacked">
          <div class="card-content">
            <h5>{!!str_limit($alatbahan->nama_alatbahan,18)!!}</h5>
            <label>Total: {{$alatbahan->total}}</label><br>
            <label>Stok: {{$alatbahan->stok}}</label><br>
            <label>Dipinjam: {{$alatbahan->dipinjam}}</label><br>
          </div>
          <div class="card-action">
            <a href="/alatbahan/{{$alatbahan->id}}" class="btn waves-effect waves-light indigo lighten-1 right">Detail</a>
          </div>
        </div>
      </div>
    </div>
  </li>
  @endforeach
</ul>
</div>
<ul class="pagination">
  <li>
    {{ $alatbahans->links() }}
  </li>
</ul>
</div>
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
