@extends('script.formregis')
@section('isi')
   <div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="/regis">
                    <h2><strong>Registrasi</strong> Form</h2>
                </a>
            </div>
            <div class="login-form">
                <form action="{{route('regis_proses')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="name" class="form-control" placeholder="UserName" value="{{old('name')}}">
                        @error('name')
                      <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                        @error('email')
                      <small>{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        @error('password')
                      <small>{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Daftar</button>
                </form>
            </div>
        </div>
    </div>
   </div> 
@endsection
