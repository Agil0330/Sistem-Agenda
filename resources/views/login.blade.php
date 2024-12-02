
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{asset('style/assets/scss/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <script src="{{asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('style/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('style/assets/js/plugins.j')}}s"></script>
    <script src="{{asset('style/assets/js/main.js')}}"></script>

</head>
<body>
    <div id="justify-content: center">
        <div class="content mt-3">
            
            <div class="animated fadeIn">
            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">FORM LOGIN</div>
                      <div class="card-body card-block">
                        <form action="" method="post" class="">
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-user"></i></div>
                              <input type="text" id="username" name="username" placeholder="Masukan Username" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                              <input type="password" id="password" name="password" placeholder="Masukan Password" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                              <input type="email" id="email" name="email" placeholder="Masukan Email" class="form-control">
                            </div>
                          </div>
                          
                          <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm">Submit</button></div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                        
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    


</body>
</html>
