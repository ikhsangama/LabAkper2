@extends('layouts.app')

@section('content')
<body class="blue lighten-5">
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="">
                  <div class=""><h2>Daftar Instruksi Kerja</h2>
                    <a href="{{ url('/instruksikerja/create') }}" class="btn waves-effect waves-light">Tambah</a>
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
<ul class="card-panel collapsible light-blue darken-1" data-collapsible="accordion">
  <li class="white">
    <div class="collapsible-header waves-effect light-blue darken-1 white-text"><i class="material-icons">library_books</i>
      <h4>Instruksi Kerja Alat</h4>
    </div>
    <div class="collapsible-body collection">
        @foreach($ik_alat as $alat)
        <div class="collection-item"><strong>{{$alat->judul}}</strong>
          <a href="instruksikerja/{{$alat->id}}" class="secondary-content tooltipped" data-tooltip="Detail"><i class="material-icons">zoom_in</i></a>

          @if(Auth::user()->isAdmin(true))
          <a href="instruksikerja/{{$alat->id}}/edit" class="secondary-content tooltipped" data-tooltip="Edit"><i class="material-icons">edit</i></a>
          <a href="#{{$alat->id}}" class="secondary-content tooltipped" data-tooltip="Delete"><i class="material-icons">delete</i></a>
          <div id="{{$alat->id}}" class="modal red lighten-5">
            <div class="modal-content">
              <b>PERINGATAN</b><br>
              <p>Instruksi kerja <b>{{$alat->judul}}</b> akan dihapus?</p><br><hr>
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
              <a href="instruksikerja/{{$alat->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
            </div>
          </div>
          @endif

          <br><label>Dibuat: {{$alat->created_at}}</label>
          <label>Diupdate: {{$alat->updated_at}}</label>
        </div>
        @endforeach
    </div>
  </li>
  <li class="white">
    <div class="collapsible-header  waves-effect light-blue darken-1 white-text"><i class="material-icons">library_books</i>
      <h4>IK Kep. Anak</h4>
    </div>
    <div class="collapsible-body collection">
      @foreach($ik_anak as $anak)
      <div class="collection-item"><strong>{{$anak->judul}}</strong>
        <a href="instruksikerja/{{$anak->id}}" class="secondary-content tooltipped" data-tooltip="Detail"><i class="material-icons">zoom_in</i></a>

        @if(Auth::user()->isAdmin(true))
        <a href="instruksikerja/{{$anak->id}}/edit" class="secondary-content tooltipped" data-tooltip="Edit"><i class="material-icons">edit</i></a>
        <a href="#{{$anak->id}}" class="secondary-content tooltipped" data-tooltip="Delete"><i class="material-icons">delete</i></a>
        <div id="{{$anak->id}}" class="modal red lighten-5">
          <div class="modal-content">
            <b>PERINGATAN</b><br>
            <p>Instruksi kerja <b>{{$anak->judul}}</b> akan dihapus?</p><br><hr>
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
            <a href="instruksikerja/{{$anak->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
          </div>
        </div>
        @endif

        <br><label>Dibuat: {{$anak->created_at}}</label>
        <label>Diupdate: {{$anak->updated_at}}</label>
      </div>
      @endforeach
    </div>
  </li>
<li class="white">
  <div class="collapsible-header  waves-effect light-blue darken-1 white-text"><i class="material-icons">library_books</i>
    <h4>IK Kep. Dasar</h4>
  </div>
  <div class="collapsible-body collection">
    @foreach($ik_dasar as $dasar)
    <div class="collection-item"><strong>{{$dasar->judul}}</strong>
      <a href="instruksikerja/{{$dasar->id}}" class="secondary-content tooltipped" data-tooltip="Detail"><i class="material-icons">zoom_in</i></a>

      @if(Auth::user()->isAdmin(true))
      <a href="instruksikerja/{{$dasar->id}}/edit" class="secondary-content tooltipped" data-tooltip="Edit"><i class="material-icons">edit</i></a>
      <a href="#{{$dasar->id}}" class="secondary-content tooltipped" data-tooltip="Delete"><i class="material-icons">delete</i></a>
      <div id="{{$dasar->id}}" class="modal red lighten-5">
        <div class="modal-content">
          <b>PERINGATAN</b><br>
          <p>Instruksi kerja <b>{{$dasar->judul}}</b> akan dihapus?</p><br><hr>
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
          <a href="instruksikerja/{{$dasar->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
        </div>
      </div>
      @endif

      <br><label>Dibuat: {{$dasar->created_at}}</label>
      <label>Diupdate: {{$dasar->updated_at}}</label>
    </div>
    @endforeach
  </div>
</li>
<li class="white">
  <div class="collapsible-header  waves-effect light-blue darken-1 white-text"><i class="material-icons">library_books</i>
    <h4>IK Kep. Maternitas</h4>
  </div>
  <div class="collapsible-body collection">
    @foreach($ik_maternitas as $maternitas)
    <div class="collection-item"><strong>{{$maternitas->judul}}</strong>
      <a href="instruksikerja/{{$alat->id}}" class="secondary-content tooltipped" data-tooltip="Detail"><i class="material-icons">zoom_in</i></a>

      @if(Auth::user()->isAdmin(true))
      <a href="instruksikerja/{{$maternitas->id}}/edit" class="secondary-content tooltipped" data-tooltip="Edit"><i class="material-icons">edit</i></a>
      <a href="#{{$maternitas->id}}" class="secondary-content tooltipped" data-tooltip="Delete"><i class="material-icons">delete</i></a>
      <div id="{{$maternitas->id}}" class="modal red lighten-5">
        <div class="modal-content">
          <b>PERINGATAN</b><br>
          <p>Instruksi kerja <b>{{$maternitas->judul}}</b> akan dihapus?</p><br><hr>
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
          <a href="instruksikerja/{{$maternitas->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
        </div>
      </div>
      @endif

      <br><label>Dibuat: {{$maternitas->created_at}}</label>
      <label>Diupdate: {{$maternitas->updated_at}}</label>
    </div>
    @endforeach
  </div>
</li>
<li class="white">
  <div class="collapsible-header  waves-effect light-blue darken-1 white-text"><i class="material-icons">library_books</i>
    <h4>IK Medikal Bedah</h4>
  </div>
  <div class="collapsible-body collection">
    @foreach($ik_bedah as $bedah)
    <div class="collection-item"><strong>{{$bedah->judul}}</strong>
      <a href="instruksikerja/{{$bedah->id}}" class="secondary-content tooltipped" data-tooltip="Detail"><i class="material-icons">zoom_in</i></a>

      @if(Auth::user()->isAdmin(true))
      <a href="instruksikerja/{{$bedah->id}}/edit" class="secondary-content tooltipped" data-tooltip="Edit"><i class="material-icons">edit</i></a>
      <a href="#{{$bedah->id}}" class="secondary-content tooltipped" data-tooltip="Delete"><i class="material-icons">delete</i></a>
      <div id="{{$bedah->id}}" class="modal red lighten-5">
        <div class="modal-content">
          <b>PERINGATAN</b><br>
          <p>Instruksi kerja <b>{{$bedah->judul}}</b> akan dihapus?</p><br><hr>
          <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
          <a href="instruksikerja/{{$bedah->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
        </div>
      </div>

      @endif
      <br><label>Dibuat: {{$bedah->created_at}}</label>
      <label>Diupdate: {{$bedah->updated_at}}</label>
    </div>
    @endforeach
  </div>
</li>
</ul>
<!-- akhircoba -->
              </div>
          </div>
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
      $('.modal').modal();
    }); // end of document ready // end of jQuery name space
  </script>
</body>

@endsection
