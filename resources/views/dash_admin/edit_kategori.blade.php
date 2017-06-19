@extends('layouts.app')

@section('content')
<body class="blue lighten-5">
  <hr>
    <nav>
      <div class="nav-wrapper blue accent-3 z-depth-2">
        <div class="col s12 m12 l12">
          <a class="breadcrumb"><b>Inventaris</b></a>
          <a href="/kategori" class="breadcrumb">Kategori</a>
          <a href="/kategori/{{$kategori->id}}" class="breadcrumb">{!!str_limit($kategori->nama,18)!!}</a>
          <a href="/kategori/{{$kategori->id}}/edit" class="breadcrumb">Edit</a>
        </div>
      </div>
    </nav>
  <hr>

  <div class="container">
<!-- <h3>Kategori Alat & Bahan</h3> -->
<!-- coba -->
<div class="card-panel s12 m12 l12">
  <h3 class="center blue-text text accent-5">Form Edit:</h3>
  <h4 class="center blue-text text accent-5">{!!str_limit($kategori->nama,30)!!}</h4>
<hr>
  <div class="row">
    <form class="col s12 m12 l12" action="/kategori/{{$kategori->id}}" method="POST">
      <div class="row">
        <div class="input-field col s12 m12 l12">
          <i class="material-icons prefix">title</i>
          <input name="kategori" id="icon_prefix" type="text" class="validate" autofocus maxlength="50"
          value="{{$kategori->nama}}" required>
          <label for="icon_prefix">Nama Kategori</label>
  <!-- validation             -->
          @if ($errors->has('kategori'))
          <div class="container red-text text accent-3">
            {{ $errors->first('kategori') }}
          </div>
          @endif
  <!-- endvalidation             -->
        </div>
      </div>
    </div>
<!-- divakhirform -->


    <hr>

    <div class="row">
      <div class="form-group">
        <input type="hidden" name="_method" value="PUT">
          <div class="col l4 m4 s4 offset-l8 offset-m8 offset-s8">
            {{ csrf_field() }}
              <input type="submit" class="btn indigo lighten-1" value="Edit Kategori">
          </div>
      </div>
    </div>
</div>
</div>
</div>
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
      $('select').material_select({
        //untuk dropdown form
      });
      $('.scrollspy').scrollSpy({
        //untuk tombol keatas
      });
      $(".dropdown-button").dropdown({
        //dropdown nav
      });
    }); // end of document ready // end of jQuery name space
  </script>
</body>

@endsection
