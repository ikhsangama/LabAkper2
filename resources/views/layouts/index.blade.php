<!DOCTYPE html>
<html>
<head>
	<title>Sub Lab Akper</title>
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

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
<script>
	$(document).ready(function(){

    $('.button-collapse').sideNav();

    $('.slider').slider();
    $('.carousel').carousel({
      dist:0,
    });
  }); // end of document ready // end of jQuery name space
</script>
</body>
</html>
