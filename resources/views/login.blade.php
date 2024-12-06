
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login  Form</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include ('kerangka.css')
    @include ('kerangka.js')
</head>
<body class="bg-dark">  
    
     @yield('isi')

    @if($message = Session::get('failed'))
        <script>
            Swal.fire("{{$message}}");
        </script>
    @endif

    @if($message = Session::get('success'))
        <script>
            Swal.fire("{{$message}}");
        </script>
    @endif
</body>
</html>
