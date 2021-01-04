{{--  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="<?=asset('css/app.css')?>" rel="stylesheet">
    <title>
    </title>
  </head>
  <body>
  
    <div id="home" class="kotak">
  <nav class="navbar">
      <div class="container-fluid">
        <a class="navbar-brand">Navbar</a>

        <form class="d-flex">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/about">About</a>
            <a class="nav-link" href="/contact">Contact</a>
        </form>

      </div>
    </nav>

        <h2>Ayo Berhome</h2>
        <div class="isi">
            <p>
            <a class="nav-link" href="/dashboard/siswa">Data</a>
            <span>Photo by <a href="https://unsplash.com/@joannakosinska?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Joanna Kosinska</a> on <a href="https://unsplash.com/?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
            <p>
        </div>
    </div>
  </body>  --}}
{{--  </html>  --}}

@extends('layout')

@section('title', 'Home')
@section('classAwal')
  <body>
  
    <div id="home" class="kotak">
@endsection
  {{--  <nav class="navbar">
      <div class="container-fluid">
        <a class="navbar-brand">Navbar</a>

        <form class="d-flex">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/about">About</a>
            <a class="nav-link" href="/contact">Contact</a>
        </form>

      </div>
    </nav>  --}}

@section('content')
        <div class="isi">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            Hello! Click this buttoon below to go to the school database
            <a class="nav-link" href="/dashboard/siswa">Data</a>
            <span>Background by <a href="https://unsplash.com/@joannakosinska?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Joanna Kosinska</a> on <a href="https://unsplash.com/?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
            <p>
        </div>
    </div>
  </body>
@endsection