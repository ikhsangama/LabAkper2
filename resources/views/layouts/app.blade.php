<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/galeri/favicon.ico')}}" />
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" href="{{asset('css/materialize.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	@section('css')

    @show
<!-- <body class="blue lighten-5"> -->
@section('header')
    @include('layouts.header')
@show

  <div class="container">
  	@yield('content')
  </div>

<!-- </body> -->
@section('footer')
  @include('layouts.footer')
@show


</html>
