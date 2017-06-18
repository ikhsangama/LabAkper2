@extends('layouts.app')

@section('content')
<body class="blue lighten-5">

  <hr>
    <nav>
      <div class="nav-wrapper blue accent-3 lighten-1 z-depth-2">
        <div class="col s12 m12 l12">
          <a href="/" class="breadcrumb"><i class="material-icons">home</i></a>
          <a class="breadcrumb"><b>Inventaris</b></a>
          <a href="/kategori" class="breadcrumb">Kategori</a>
        </div>
      </div>
    </nav>
  <hr>

  <!-- HEADER TETAP ATAS + BREADCRUMP-->
  <div class="row">
    <div class="">
      @if(Auth::user()->isAdmin(true))
      <a href="{{ url('/kategori/create') }}" class="btn waves-effect waves-light indigo lighten-1">Tambah</a>
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
          <td>
            @if(Auth::user()->isAdmin(true))
            <a href="#del{{$kategori->id}}" class="tooltipped" data-tooltip="Delete"><i class="material-icons red-text text-lighten-1">delete</i></a>
            <div id="del{{$kategori->id}}" class="modal red lighten-5">
              <div class="modal-content">
                <b>PERINGATAN</b><br>
                <p>Kategori <b>{{$kategori->nama_kategori}}</b> akan dihapus?</p><br><hr>
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
                <a href="kategori/{{$kategori->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
              </div>
            </div>
            <a href="kategori/{{$kategori->id}}/edit" class="tooltipped" data-tooltip="Edit"><i class="material-icons green-text text-lighten-1">edit</i></a>
            @endif
            <a href="kategori/{{$kategori->id}}" class="tooltipped" data-tooltip="Detail"><i class="material-icons indigo-text text-lighten-1">zoom_in</i></a>
          </td>
        </tr>@endforeach
      </tbody>
    </table>
    <ul class="pagination">
      <li>
        {{ $kategoris->links() }}
      </li>
    </ul>
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
