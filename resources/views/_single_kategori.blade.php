@extends('layouts.app')

@section('content')
<body class="blue lighten-5">
  <h3>Kategori: {{$kategori->nama_kategori}}</h3>
  <hr>
<!-- <div class="container"> -->
<!-- coba -->
<h4>Daftar Alat Bahan</h4>
  <table>
    <tbody>
      <tr>
        <td>
          <div class="row">
            @foreach($kategori->alatbahan as $alatbahan)
            <div class="col s6 m6 l6">
              <div class="card horizontal">
                  <img src="http://lorempixel.com/100/190/nature/6" class="circle responsive-img materialboxed">
                <div class="card-stacked">
                <div class="card-content">
                  <!-- <h5>{!!str_limit($alatbahan->nama_alatbahan,18)!!}</h5> -->
                  <label>Stock: {{$alatbahan->stok}}</label>
                  <br><label>Dipinjam: {{$alatbahan->dipinjam}}</label>
                  <br><label>Total: {{$alatbahan->total}}</label>
                </div>
                <div class="card-action">
                  <a href="#">Detail</a>
                </div>
              </div>
              </div>
            </div>
            @endforeach
          </div>
        </td>
      </tr>
    </tbody>
  </table>
  
  <ul class="pagination">
    <li>
      {{ $kategori->alatbahan->links() }}
    </li>
  </ul>

</div>
<!-- akhircoba -->
<!-- </div> -->


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
