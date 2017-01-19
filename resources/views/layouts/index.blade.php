<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/galeri/favicon.ico')}}" />
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	@section('css')

    @show
</head>
<body>
@section('header')
    @include('layouts.header')
@show

  <div class="container">
  	@yield('content')
  </div>
</body>
@section('footer')
  @include('layouts.footer')
@show

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
<script>
	$(document).ready(function(){
    $('.materialboxed').materialbox();
    $('.button-collapse').sideNav();
    $('.slider').slider({});
    $('.carousel').carousel({
      dist:0,
    });
    $('.scrollspy').scrollSpy();
  }); // end of document ready // end of jQuery name space
</script>

</html>
