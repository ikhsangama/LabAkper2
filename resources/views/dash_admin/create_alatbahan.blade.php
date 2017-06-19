@extends('layouts.app')

@section('content')
<body class="blue lighten-5">
  <hr>
    <nav>
      <div class="nav-wrapper input-field blue accent-3 lighten-1 z-depth-2">
        <div class="col s12 m12 l12">
          <a href="/" class="breadcrumb"><i class="material-icons">home</i></a>
          <a class="breadcrumb"><b>Inventaris</b></a>
          <a href="/alatbahan" class="breadcrumb"><b>Alat & Bahan</b></a>
          <a href="/alatbahan/create" class="breadcrumb">Tambah</a>
        </div>
      </div>
    </nav>
  <hr>
  <!-- awalfile -->
  <div class="container">
<br>
<br>
    <div class="card-panel s12 m12 l12">
      <h3 class="center blue-text text accent-5">Tambah Alat & Bahan</h3>
      <hr>
      <div class="row">
        <form action="{{ url('/alatbahan') }}" class="col s12" method="POST" enctype="multipart/form-data">

          <div class="row">
            <div class="input-field col s4 m4 l4">
              <i class="material-icons prefix">account_circle</i>
              <input name="kode_alatbahan" placeholder="Kode alat/bahan" id="icon_prefix" type="text" class="validate" autofocus maxlength="30" required>
              <label for="icon_prefix">Kode Alat Bahan</label>

  <!-- validation             -->
              @if ($errors->has('kode_alatbahan'))
              <div class="container red-text text accent-3">
                {{ $errors->first('kode') }}
              </div>
              @endif
  <!-- endvalidation             -->
            </div>
              <div class="input-field col s4 m4 l4 offset-s2 offset-m2 offset-l2">
                <i id="Status" class="material-icons prefix" required>school</i>
                <select name="jenis">
                  <option value="" disabled selected>Pilih Jenis</option>
                  <option value="alat">Alat</option>
                  <option value="bahan">Bahan</option>
                </select>
                <label for="icon_prefix">Jenis</label>

                <!-- validation             -->
                @if ($errors->has('jenis'))
                <div class="container red-text text accent-3">
                  {{ $errors->first('jenis') }}
                </div>
                @endif
                <!-- endvalidation             -->
              </div>
          </div>

          <div class="row">
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">account_circle</i>
              <input name="nama" placeholder="Nama Alat Bahan" id="icon_prefix" type="text" class="validate" autofocus maxlength="30" required>
              <label for="icon_prefix">Nama Alat Bahan</label>

  <!-- validation             -->
              @if ($errors->has('nama'))
              <div class="container red-text text accent-3">
                {{ $errors->first('nama') }}
              </div>
              @endif
  <!-- endvalidation             -->
            </div>
              <div class="input-field col s4 m4 l4">
                <i id="Status" class="material-icons prefix" required>school</i>
                <select name="kategori">
                  <option value="" disabled selected>Pilih Kategori</option>
                  @foreach($kategoris as $kategori)
                  <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                  @endforeach
                </select>
                <label for="icon_prefix">Kategori</label>

                <!-- validation             -->
                @if ($errors->has('kategori'))
                <div class="container red-text text accent-3">
                  {{ $errors->first('kategori') }}
                </div>
                @endif
                <!-- endvalidation             -->
              </div>
          </div>

          <div class="row">
            <div class="input-field col s4 m4 l4">
              <i class="material-icons prefix">lock</i>
              <input name="stok" id="stok" type="text" class="validate" required>
              <label for="stok">Stok Awal</label>
              <!-- validation             -->
              @if ($errors->has('stok'))
              <div class="container red-text text accent-3">
                {{ $errors->first('stok') }}
              </div>
              @endif
              <!-- endvalidation             -->
            </div>
            <div class="input-field col s4 m4 l4">
              <input  name="dipinjam" id="dipinjam" type="text" class="validate" placeholder="0" disabled>
              <label for="dipinjam">Dipinjam</label>
              <!-- validation             -->
              @if ($errors->has('dipinjam'))
              <div class="container red-text text accent-3">
                {{ $errors->first('dipinjam') }}
              </div>
              @endif
              <!-- endvalidation             -->
            </div>
            <div class="input-field col s4 m4 l4">
              <input  name="total" id="total" type="text" class="validate" placeholder="0" disabled>
              <label for="total">Total</label>
              <!-- validation             -->
              @if ($errors->has('total'))
              <div class="container red-text text accent-3">
                {{ $errors->first('total') }}
              </div>
              @endif
              <!-- endvalidation             -->
            </div>
          </div>

<!-- coba -->
<div class="col-sm-10">
                                    <!-- <p id="total"></p> -->
</div>
<!-- endcoba -->
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">credit_card</i>
              <input name="nim" id="icon_prefix" type="text" class="validate"   >
              <label for="icon_prefix">NIP/NIM</label>
            </div>

          <div class="row">
            <div class="file-field input-field col s6 m6 l6">
              <div class="btn">
                <span><i class="material-icons prefix">add_a_photo</i></span>
                <input type="file" id="inputgambar" name="ktm" class="validate"/>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="masukkan foto KTM">
              </div>
            </div>
        </div>

          </div>

          <div class="row">
            <div class="input-field col s4 m4 l4">
              <i class="material-icons prefix">phone</i>
              <input name="telp" id="icon_telephone" type="number" class="validate"   >
              <label for="icon_telephone">Telepon</label>
            </div>
          </div>

          <hr>
          <div class="row">
            <div class="col s8 m8 l8">
              <div class="switch">
                <p><b>Langsung setujui tanpa konfirmasi email?</b>
                <br>Dengan mengharuskan konfirmasi email memastikan pengguna untuk dapat reset password sendiri</p>
                <label>
                  Tidak
                  <input type="checkbox" name="status">
                  <span class="lever"></span>
                  Ya
                </label>
              </div>
            </div>
            <div class="form-group">
                <div class="col l4 m4 s4 offset-l8 offset-m8 offset-s8">
                  {{ csrf_field() }}
                    <input type="submit" class="btn" value="Tambah">
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- akhirfile -->

  <!-- coba -->

  <!-- akhircoba -->

  <!-- script -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{asset('js/materialize.min.js')}}"></script>
  <script>

  	$(document).ready(function(){
      $('.button-collapse').sideNav({

      });
      $('.scrollspy').scrollSpy({

      });
      $('select').material_select({

      });

      $('.modal').modal();

      $("#stok").keyup(function(){
              var total = $(this).val();
              $("#total").val(total);
      });
    }); // end of document ready // end of jQuery name space
  </script>
  <!-- akhirscript -->
</body>
@endsection
