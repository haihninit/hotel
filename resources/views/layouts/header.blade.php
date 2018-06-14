<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href={{asset("vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href={{asset("vendor/font-awesome/css/font-awesome.min.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("vendor/simple-line-icons/css/simple-line-icons.css")}} rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href={{asset("css/landing-page.min.css")}} rel="stylesheet">
    <link href={{asset("css/home/index.css")}} rel="stylesheet">
    @yield('addCss')
    <style>
    @yield('cssCustom')
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-light fixed-top bg-red-common">
    <div class="container">
        <ul class="nav navbar-nav navbar-logo mx-auto">
            <li class="nav-item">
                <a class="nav-link nav-logo" href="{{url('/')}}" style="color: rgb(255,255,255);">KHÁCH SẠN PHƯƠNG THANH</a>
            </li>
        </ul>
    </div>
</nav>

