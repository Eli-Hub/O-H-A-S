<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">
  <link href="{{ asset('color/default.css') }}" rel="stylesheet" media="screen">

  <!-- =======================================================
    MODAL SCRIPTS
  ======================================================= -->


  <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet"/>

  <link href="{{asset('assets/css/login-register.css ')}}" rel="stylesheet" />

  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

  <script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/bootstrap.js')}}" type="text/javascript"></script>
  <script src="{{asset('assets/js/login-register.js')}}" type="text/javascript"></script>


  <!-- =======================================================
    LARAVEL SCRIPTS
  ======================================================= -->
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name' , '- Login/Register') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
</head>