@extends('layout')

@section('title', 'About Us')
@section('classAwal')
<body class="duowarna">
@endsection

@section('content')
<div class="flex">
  <div>
    <img src="{{ asset('img/logoaxioo.png')}}" class="fotologo"/>
  </div>
  <div class="about">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Punten dari about</p>
  </div>
</div>
</body>
@endsection