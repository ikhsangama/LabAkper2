@extends('layouts.app')

@section('content')
<body class="blue lighten-5">
  <hr>
    <nav>
      <div class="nav-wrapper blue darken-1 z-depth-2">
        <div class="col s12 m12 l12">
          <a href="/" class="breadcrumb"><i class="material-icons">home</i></a>
          <a class="breadcrumb"><b>Inventaris</b></a>
          <a href="/alatbahan" class="breadcrumb">Alat & Bahan</a>
        </div>
      </div>
    </nav>
  <hr>

  @if(Auth::user()->isAdmin(true))
  <a href="{{ url('/alatbahan/create') }}" class="btn waves-effect waves-light indigo lighten-1">Tambah</a>

<!-- coba reveal -->
  <div class="tap-target blue lighten-4" data-activates="info">
    <div class="tap-target-content">
      <h5>Sukses</h5>
      {{session('success')}}
    </div>
  </div>
<!-- endcoba -->
  @endif
  <!-- HEADER TETAP ATAS + BREADCRUMP-->

<!-- <div class="container"> -->
<!-- coba -->
<div class="row">
<ul>
  @foreach($alatbahans as $alatbahan)
  <li>
    <div class="col s6 m6 l6">
      <div class="card horizontal">
          <img src="{{ asset('storage/'.$alatbahan->jenis.'/' .$alatbahan->fjenis->foto) }}" width="150px"class="circle responsive-img materialboxed">
        <div class="card-stacked">
          <div class="card-content">
            <h5>{!!str_limit($alatbahan->fjenis->nama,18)!!}</h5>
            <label>Total: {{$alatbahan->fjenis->total}}</label><br>
            <label>Stok: {{$alatbahan->fjenis->stok}}</label><br>
            <label>Dipinjam: {{$alatbahan->fjenis->dipinjam}}</label><br>
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
  <!-- <script src="{{asset('js/materialize.js')}}"></script> -->
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
      // $('.tap-target').tapTarget('open');
      $('.tap-target').tapTarget('close');
      @if(session('success'))
      $('.tap-target').tapTarget('open');
      @endif
    }); // end of document ready // end of jQuery name space
  </script>
</body>

@endsection
