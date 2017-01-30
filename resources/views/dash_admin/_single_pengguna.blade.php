@extends('layouts.app')

@section('content')
<body class="blue lighten-5">

    <h3>Detail Pengguna</h3>
<!-- coba -->
    <div class="card-panel s12 m12 l12">
      <table>
        <tbody>
          <td><h4 class="center"><b>{{$pengguna->nama}}</b></h4>
          <p>Kategori :{{$level}}<br>
          Dibuat :{{$pengguna->created_at}}<br>
          Diupdate :{{$pengguna->updated_at}}</p>
          <table>
            <tbody>
              <td><a href="/pengguna/{id}/delete"></a>Hapus</div></td>
              <td><div class="btn">Edit</div></td>
            </tbody>
          </table>
          </td>
          <td><div class="row">
            <div class="col offset-l2">
              <img class="materialboxed" width="300"
            src="{{ asset('storage/ktm/' .$pengguna->ktm) }}" data-caption="File: {{$pengguna->ktm}}">
            </div>
          </td></div>
        </tbody>
      </table>

<hr>

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
    }); // end of document ready // end of jQuery name space
  </script>
</body>

@endsection
