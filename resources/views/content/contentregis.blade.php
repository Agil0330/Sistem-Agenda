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
                <form>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="email" class="form-control" placeholder="UserName">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Agree the terms and policy
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Daftar</button>
                    <div class="register-link m-t-15 text-center">
                        <p>Sudah Punya Akun ? <a href="/login"> Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
   </div> 
@endsection
