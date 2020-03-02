<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  {{-- <title>AdminLTE 3 | Starter</title> --}}
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('AdminLTE-master/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-master/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('studioTemplates/assets/css/Bold-BS4-Jumbotron-with-Particles-js.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('studioTemplates/assets/css/Bold-BS4-Jumbotron-with-Particles-js1.css')}}"> --}}
  <link rel="stylesheet" href="{{asset('studioTemplates/assets/css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
  <link href="{{ asset('css/customCSS.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('studioTemplates/assets/css/Footer-Dark.css')}}">

  <link rel="stylesheet" href="{{asset('studioTemplates/assets/css/Projects-Horizontal.css')}}">
</head>
<body class="hold-transition sidebar-mini">