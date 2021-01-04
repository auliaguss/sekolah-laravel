@extends('layout')

@section('title', 'Edit')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ini Page Siswa Edit</h1>
            <a href="">Kembali</a>
            <form method="post" action="/siswa/edit/{{$siswa->id}}" enctype="multipart/form-data">
            @method('patch')
            @csrf

              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" label="Name" name='name' value="{{ $siswa->name }}">
                @error('name')
                <div class="aler alert-danger">{{$message}}</div>
                @enderror
              </div>
              
              <div class="form-group">
                <label>School</label>
                <input type="text" class="form-control @error('school') is-invalid @enderror" label="School" name='school' value="{{ $siswa->school }}">
                @error('school')
                <div class="aler alert-danger">{{$message}}</div>
                @enderror
              </div>
              
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" label="Email" name='email' value="{{ $siswa->email }}">
                @error('email')
                <div class="aler alert-danger">{{$message}}</div>
                @enderror
              </div>
              
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" label="Phone" name='phone' value="{{ $siswa->phone }}">
                @error('phone')
                <div class="aler alert-danger">{{$message}}</div>
                @enderror
              </div>
              
              <div class="form-group">
                <label>Grade</label>
                <select class="form-control @error('grade') is-invalid @enderror" name="grade">
                  <option value="1st" {{$siswa->grade=="1st"?'selected':""}}>1st</option>
                  <option value="2nd" {{$siswa->grade=="2nd"?'selected':""}}>2st</option>
                  <option value="3rd" {{$siswa->grade=="3rd"?'selected':""}}>3rd</option>
                </select>
                @error('grade')
                <div class="aler alert-danger">{{$message}}</div>
                @enderror
              </div>

              <div class="form-group">
                <label>Department</label>
                <select class="form-control @error('department') is-invalid @enderror" name="department">
                @foreach($kelas as $kelas)
                  <option value="{{$kelas->nama}}" {{ $siswa->department=="$kelas->nama"?'selected':""}}>{{$kelas->nama}}</option>
                @endforeach
                </select>
                @error('department')
                <div class="aler alert-danger">{{$message}}</div>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary">Update</button>
              </form>
                    </div>
                </div>
            </div>
@endsection