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
      <h3 class="center blue-text text accent-5">Tambah Alat Bahan</h3>
      <hr>
      <div class="row">
        <form action="{{ url('/alatbahan') }}" class="col s12" method="POST" enctype="multipart/form-data">

          <div class="row">
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix" required>local_offer</i>
              <select name="jenis" id="jenis">
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

            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">label</i>
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
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">playlist_add</i>
              <input name="kode_alatbahan" id="icon_prefix" type="text" class="validate" maxlength="30" required>
              <label for="icon_prefix">Kode Alat Bahan</label>
    <!-- validation             -->
              @if ($errors->has('kode_alatbahan'))
              <div class="container red-text text accent-3">
                {{ $errors->first('kode_alatbahan') }}
              </div>
              @endif
    <!-- endvalidation             -->
            </div>

            <div class="file-field input-field col s6 m6 l6">
              <div class="btn">
                  <span><i class="material-icons postfix">add_a_photo</i></span>
                  <input name="file_ab" type="file" id="inputgambar" class="validate" value=""/>
              </div>
              <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" placeholder="masukkan foto alat/bahan">
              </div>
              <!-- validation             -->
              @if ($errors->has('file_ab'))
              <div class="container red-text text accent-3">
                {{ $errors->first('file_ab') }}
              </div>
              @endif
              <!-- endvalidation             -->
              </div>
          </div>

          <div class="row">
            <div class="input-field col s12 m12 l12">
              <i class="material-icons prefix">local_pharmacy</i>
              <input name="nama" id="icon_prefix" type="text" class="validate" maxlength="30" required>
              <label for="icon_prefix">Nama Alat</label>

  <!-- validation             -->
              @if ($errors->has('nama'))
              <div class="container red-text text accent-3">
                {{ $errors->first('nama') }}
              </div>
              @endif
  <!-- endvalidation             -->
            </div>
          </div>

          <div class="row">
            <div class="input-field col s4 m4 l4">
              <i class="material-icons prefix">storage</i>
              <input name="stok" id="stok" placeholder="Stok awal alat" type="text" class="validate" required>
              <label for="stok">Stok</label>
              <!-- validation             -->
              @if ($errors->has('stok'))
              <div class="container red-text text accent-3">
                {{ $errors->first('stok') }}
              </div>
              @endif
              <!-- endvalidation             -->
            </div>
            <div class="input-field col s4 m4 l4">
              <input  name="dipinjam" id="dipinjam" type="text" class="validate" value="0" disabled>
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
              <input  name="total" id="total" type="text" class="validate" value="0" disabled>
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


          <div class="row">
            <div class="input-field col s6 m6 l6">
              <i class="material-icons prefix">textsms</i>
              <input name="satuan" type="text" id="satuan" placeholder="Masukkan jenis terlebih dahulu"class="autocomplete">
              <label for="satuan">Satuan</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">text_fields</i>
              <textarea id="spesifikasi" class="materialize-textarea" name="spesifikasi"></textarea>
              <label for="spesifikasi">Spesifikasi</label>
            </div>
          </div>

          <hr>
          <div class="row">
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
  <script src="{{asset('js/materialize.js')}}"></script>
  <script>

        var tempData = {};
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
      $('#satuan').attr("disabled",true);
      $('#jenis').change(function(){

        var tempValue = $(this).val();
        //alert(tempValue);
         if(tempValue == ""){
           $('#satuan').attr("disabled",true);
         }else{
           $('#satuan').removeAttr("disabled");
           $('#satuan').off('keyup');
           $('#satuan').off('keypress');
           if(tempValue =='alat')
            $('#satuan').autocomplete(tempData.alat);
          else
            $('#satuan').autocomplete(tempData.bahan);
         }
      });
      tempData.alat = {
        data: {
          @foreach ($satuan_alats as $satuan_alat)
          "{{$satuan_alat->nama}}": null,
          @endforeach
        },
        limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
        onAutocomplete: function(val) {
          // Callback function when value is autcompleted.
        },
        minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
      };
      tempData.bahan = {
        data: {
          @foreach ($satuan_bahans as $satuan_bahan)
          "{{$satuan_bahan->nama}}": null,
          @endforeach
        },
        limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
        onAutocomplete: function(val) {
          // Callback function when value is autcompleted.
        },
        minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
      };

    }); // end of document ready // end of jQuery name space

  </script>
  <!-- akhirscript -->
</body>
@endsection
