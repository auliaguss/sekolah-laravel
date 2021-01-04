@extends('layout')

@section('title', 'Create')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ini Page Siswa Create</h1>
            <a href="">Kembali</a>
            <form method="post" action="/siswa" enctype="multipart/form-data">
            @csrf

              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" label="Name" name='name' value="{{ old('name') }}">
                @error('name')
                <div class="aler alert-danger">{{$message}}</div>
                @enderror
              </div>
              
              <div class="form-group">
                <label>School</label>
                <input type="text" class="form-control @error('school') is-invalid @enderror" label="School" name='school' value="{{ old('school') }}">
                @error('school')
                <div class="aler alert-danger">{{$message}}</div>
                @enderror
              </div>
              
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" label="Email" name='email' value="{{ old('email') }}">
                @error('email')
                <div class="aler alert-danger">{{$message}}</div>
                @enderror
              </div>
              
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" label="Phone" name='phone' value="{{ old('phone') }}">
                @error('phone')
                <div class="aler alert-danger">{{$message}}</div>
                @enderror
              </div>
              
              <div class="form-group">
                <label>Grade</label>
                <select class="form-control @error('grade') is-invalid @enderror" name="grade" value="{{ old('grade') }}">
                  <option value="1st" {{old('grade')=="1st"?'selected':""}}>1st</option>
                  <option value="2nd" {{old('grade')=="2nd"?'selected':""}}>2st</option>
                  <option value="3rd" {{old('grade')=="3rd"?'selected':""}}>3rd</option>
                </select>
                @error('grade')
                <div class="aler alert-danger">{{$message}}</div>
                @enderror
              </div>

              <div class="form-group">
                <label>Department</label>
                <select class="form-control @error('department') is-invalid @enderror" name="department" >
                @foreach($kelas as $kelas)
                  <option value="{{$kelas->nama}}" {{ old('department')=="$kelas->nama"?'selected':""}}>{{$kelas->nama}}</option>
                @endforeach
                </select>
                @error('department')
                <div class="aler alert-danger">{{$message}}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                    </div>
                </div>
            </div>
@endsection