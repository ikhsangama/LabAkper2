@extends('layouts.app')
@section('content')
<body class="blue lighten-5">
  <hr>
    <nav>
      <div class="nav-wrapper input-field blue accent-3 lighten-1 z-depth-2">
        <div class="col s12 m12 l12">
          <a href="/" class="breadcrumb"><i class="material-icons">home</i></a>
          <a href="/pengguna" class="breadcrumb"><b>Pengguna</b></a>
          <a class="breadcrumb"><b>Pencarian</b></a>
          <a href="/pengguna/query?q={{$query}}" class="breadcrumb"><b>{{$query}}</b></a>
        </div>
      </div>
    </nav>
  <hr>
<div class="section">
@if (count($hasil))

  <div id="hasil">
  <table class="highlight white">
    <thead>
      <tr>
          <th>NIP/NIM</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Telp</th>
          <th>Foto ID</th>
          <th>Dibuat</th>
          <th>Diupdate</th>
          <th>Atur</th>
      </tr>
    </thead>

    <tbody>
      <tr>@foreach($hasil as $data)
        <td>{{$data->nim}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->telp}}</td>
        <td>
          <img src="{{ asset('storage/ktm/' .$data->ktm) }}" width="60"alt=""
          class="materialboxed" data-caption="{{$data->ktm}}">
        </td>
        <td><label>{{$data->created_at}}</label></td>
        <td><label>{{$data->updated_at}}</label></td>
        <td>
          <a href="#del{{$data->id}}" class="tooltipped" data-tooltip="Delete"><i class="material-icons red-text text-lighten-1">delete</i></a>
          <div id="del{{$data->id}}" class="modal red lighten-5">
            <div class="modal-content">
              <b>PERINGATAN</b><br>
              <p>Pengguna <b>{{$data->nama}}</b> akan dihapus?</p><br><hr>
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
              <a href="pengguna/{{$data->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
            </div>
          </div>
          <a href="/pengguna/{{$data->id}}/edit" class="tooltipped" data-tooltip="Edit"><i class="material-icons green-text text-lighten-1">edit</i></a>
          <a href="/pengguna/{{$data->id}}" class="tooltipped" data-tooltip="Detail"><i class="material-icons indigo-text text-lighten-1">zoom_in</i></a>
        </td>
      </tr>@endforeach
    </tbody>
  </table>
</div>
@else
<h5>Pencarian <b>{{$query}}</b> tidak ditemukan</h5>
@endif
</div>
</body>
@endsection
