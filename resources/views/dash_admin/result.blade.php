@extends('dash_admin.pengguna')
@section('dash_admin.search')

<div class="section">
@if (count($hasil))
<h5>Hasil pencarian : <b>{{$query}}</b></h5>

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
          <a href="#del{{$data->id}}" class="tooltipped" data-tooltip="Delete"><i class="material-icons">delete</i></a>
          <div id="del{{$data->id}}" class="modal red lighten-5">
            <div class="modal-content">
              <b>PERINGATAN</b><br>
              <p>Pengguna <b>{{$data->nama}}</b> akan dihapus?</p><br><hr>
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
              <a href="pengguna/{{$data->id}}/delete" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
            </div>
          </div>
          <a href="pengguna/{{$data->id}}/edit" class="tooltipped" data-tooltip="Edit"><i class="material-icons">edit</i></a>
          <a href="#lock{{$data->id}}" class="tooltipped" data-tooltip="Kunci"><i class="material-icons">lock_outline</i></a>
          <div id="lock{{$data->id}}" class="modal red lighten-5">
            <div class="modal-content">
              <b>PERINGATAN</b><br>
              <p>Pengguna <b>{{$data->nama}}</b> akan dikunci?</p><br><hr>
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat right"><b>Batal</b></a>
              <a href="pengguna/{{$data->id}}/lock" class=" modal-action modal-close waves-effect waves-red btn-flat right"><b>Setuju</b></a>
            </div>
          </div>
        </td>
      </tr>@endforeach
    </tbody>
  </table>
</div>
@else
<h5>Pencarian <b>{{$query}}</b> tidak ditemukan</h5>
@endif
</div>

@endsection