@extends('layouts.index')

@section('content')
<body class="blue lighten-5">
  <!-- awalfile -->
  <div class="container">
<br>
<br>
    <div class="card-panel s12 m12 l12">
      <h3 class="center blue-text text accent-5">Register</h3>
      <hr>
      <div class="row">
        <form action="{{ url('instruksikerja/{{$instruksikerja->id}}') }}" class="col s12" method="POST" enctype="multipart/form-data">

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
    }); // end of document ready // end of jQuery name space
  </script>
  <!-- akhirscript -->
</body>
@endsection
