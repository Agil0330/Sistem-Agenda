@extends('login')

@section('isi')
 <div class="sufee-login d-flex align-content-center flex-wrap">
  <div class="container">
      <div class="login-content">
          <div class="login-logo">
              <a href="/login">
                  {{-- <img class="align-content" src="{{asset('style/images/logo.png')}}" alt=""> --}}
                  <h2><strong>Login</strong> Form</h2>
              </a>
          </div>
          <div class="login-form">
              <form action="{{route('login_proses')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label>Username</label>
                  <input type="username" name="name" class="form-control" placeholder="Username">
                  @error('name')
                      <small>{{$message}}</small>
                  @enderror
              </div>
                  <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Email">
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
                  <div class="checkbox">
                      <label>
                          <input type="checkbox"> Remember Me
                      </label>
                      <label class="pull-right">
                          <a href="#">Lupa Password</a>
                      </label>

                  </div>
                  <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                  <div class="register-link m-t-15 text-center">
                      <p>Tidak Punya Akun ? <a href="/regis"> Sign Up </a></p>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div> 
@endsection

