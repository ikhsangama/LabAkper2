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
          <a href="/instruksikerja/{$instruksikerja->id}" class="breadcrumb">{!!str_limit($instruksikerja->judul,14)!!}</a>
          <a href="/instruksikerja/{$instruksikerja->id}/edit" class="breadcrumb">Edit</a>
        </div>
      </div>
    </nav>
  <hr>

  <div class="container">
<!-- coba -->
<div class="card-panel s12 m12 l12">
  <h3 class="center blue-text text accent-5">Form Edit: </h3>
  <h4 class="center blue-text text accent-5">{{$instruksikerja->judul}}</h4>
<hr>
  <div class="row">
    <form class="col s12 m12 l12" action="/instruksikerja/{{$instruksikerja->id}}" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s12 m12 l12">
          <i class="material-icons prefix">title</i>
          <input name="judul" placeholder="Edit Judul" id="icon_prefix" type="text" class="validate" autofocus maxlength="50"
          value="{{$instruksikerja->judul}}" required>
          <label for="icon_prefix">Judul</label>
  <!-- validation             -->
          @if ($errors->has('judul'))
          <div class="container red-text text accent-3">
            {{ $errors->first('judul') }}
          </div>
          @endif
  <!-- endvalidation             -->
  <div class="row">
    <div class="input-field col s4 m4 l4">
      <i id="ik_kategori" class="material-icons prefix">list</i>
      <select value="{{$instruksikerja->kategori_ik}}" name="kategori_ik"  required>
        <option value="{{$instruksikerja->kategori_ik}}" disabled selected>Pilih</option>
        <option value="IK Alat">IK Alat</option>
        <option value="IK Kep. Anak">IK Kep. Anak</option>
        <option value="IK Kep. Dasar">IK Kep. Dasar</option>
        <option value="IK Kep. Maternitas">IK Kep. Maternitas</option>
        <option value="IK Medikal Bedah">IK Medikal Bedah</option>
      </select>
      <label for="ik_kategori">Kategori</label>

      <!-- validation             -->
      @if ($errors->has('kategori_ik'))
      <div class="container red-text text accent-3">
        {{ $errors->first('kategori_ik') }}
      </div>
      @endif
      <!-- endvalidation             -->
    </div>
  </div>
  <div class="row">
    <div class="file-field input-field col s12 m12 l12">
      <div class="btn indigo lighten-1">
          <span><i class="material-icons postfix">attach_file</i></span>
          <input name="file_ik" type="file" id="inputgambar" class="validate" value="{{ old('file_ik') }}"/>
      </div>
      <div class="file-path-wrapper">
          <input class="file-path validate" type="text" placeholder="{{$instruksikerja->file_ik}}">
      </div>
      <!-- validation             -->
      @if ($errors->has('file_ik'))
      <div class="container red-text text accent-3">
        {{ $errors->first('file_ik') }}
      </div>
      @endif
      <!-- endvalidation             -->
      </div>
  </div>
</div>
<!-- divakhirform -->
    <hr>
    <!-- agar ke route PUT -->
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
      <div class="form-group">
          <div class="col l4 m4 s4 offset-l8 offset-m8 offset-s8">
            {{ csrf_field() }}
              <input type="submit" class="btn indigo lighten-1" value="Edit">
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
