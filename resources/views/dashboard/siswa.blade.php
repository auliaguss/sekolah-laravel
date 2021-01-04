@extends('layout')

@section('title', 'Data Siswa')
@section('content')
{{--  {{ HTML::style('css/app.css'); }}  --}}
<link href="asset('css/app.css')" rel="stylesheet">

  
  <nav class="navbar-primary">
    <button id="btn-expand-collapse"><span class="glyphicon glyphicon-menu-left">Kirii</span></button>
    <ul class="navbar-primary-menu">
      <li>
        <a href="#"><span class="glyphicon glyphicon-list-alt"></span><span class="nav-label">Dashboard</span></a>
        <a href="#"><span class="glyphicon glyphicon-envelope"></span><span class="nav-label">Profile</span></a>
        <a href="#"><span class="glyphicon glyphicon-cog"></span><span class="nav-label">Settings</span></a>
      </li>
    </ul>
  </nav>

  <div class="main-content">
  <div class="atas">
    <h1>Student</h1>
    <div class="duo-link">
      <a href="/dashboard/siswa/create" class="btn tambah">Add</a>
      <a target="_blank" href="/siswa/export_excel" class="btn export">Export</a>
    </div>
  </div>
  <hr>
  @if (session('status'))
  <div class="alert alert-success">
    {{session('status')}}

  </div>
  @endif

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#
      </th>
        <th scope="col">Name</th>
        <th scope="col">School</th>
        <th scope="col">Grade</th>
        <th scope="col">Department</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($siswa as $s)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$s->name}}</td>
      <td>{{$s->school}}</td>
      <td>{{$s->grade}}</td>
      <td>{{$s->department}}</td>
      <td>
        <a href="{{ $s->id }}/detail" class="btn btn-alert">Detail</a>
        <a href="{{ $s->id }}/edit" class="btn btn-alert">Edit</a>
        <form action="{{ $s->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
  @endforeach


  </tbody>
</table>

<div>

<script src="{{asset('js/app.js')}}"></script>
<script>
  {{--  $('.btn-expand-collapse').click(function(e) {
      $('.navbar-primary').toggleClass('collapsed');
  });  --}}
  
    const tmbl = document.querySelector(".navbar-primary");


    this.querySelector('.btn-expand-collapse').addEventListener(
        'click',
        console.log("babi")
    );
</script>
@endsection