@extends('layouts.app')

@section('content')
<body class="blue lighten-5">

    <div class="row">
        <div class=""><h2>Daftar Kategori Alat & Bahan</h2>
          <a href="{{ url('/daftar') }}" class="flat-btn waves-effect waves-light"><i class="material-icons">refresh</i></a>
          @if(Auth::user()->isAdmin(true))
          <a href="{{ url('/kategori/create') }}" class="btn waves-effect waves-light light-blue darken-1">Tambah</a>
          @endif
        </div>
<!-- <hr> -->
@if(session('success'))
<div class="card-panel green lighten-4">
{{session('success')}}
</div>
@elseif(session('alert'))
<div class="card-panel red lighten-4">
{{session('alert')}}
</div>
@endif
<!-- coba -->
<div class="row">
  <div class="card-panel white col s12 m12 l12">

    <table class="bordered-table highlight">
      <thead>
        <tr>
          <th>Nama Kategori</th>
          <th>Dibuat</th>
          <th>Diupdate</th>
          <th>Detail</th>
        </tr>
      </thead>
      <tbody>
        <tr>@foreach ($kategoris as $kategori)
          <td>{{$kategori->nama_kategori}}</td>
          <td><label>{{$kategori->created_at}}</label></td>
          <td><label>{{$kategori->updated_at}}</label></td>
          <td>a</td>
        </tr>@endforeach
      </tbody>
    </table>

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
      $('.scrollspy').scrollSpy();
      $(".dropdown-button").dropdown({

      });
      $('.modal').modal();
    }); // end of document ready // end of jQuery name space
  </script>
</body>

@endsection
