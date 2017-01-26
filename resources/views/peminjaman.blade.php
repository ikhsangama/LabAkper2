@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Peminjaman</h2></div>

                <div class="panel-body">
                    You are logged in!
                </div>
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
    // $('.button-collapse').sideNav({
    //
    // });
    // $('.carousel').carousel({
    //   dist:0,
    // });
    // $('.carousel').carousel('next', 5);
    // $('.scrollspy').scrollSpy();
    $(".dropdown-button").dropdown({

    });
  }); // end of document ready // end of jQuery name space
</script>
@endsection
