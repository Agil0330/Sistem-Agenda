

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Setting Form</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include ('kerangka.css')
    @include ('kerangka.js')
</head>
<body>  
    @include ('kerangka.sidebar')
    <div id="right-panel" class="right-panel"> 
        @include('kerangka.dashboard')
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  @yield('isi')
                </div>
            </div>
        </div>
    </div>
</body>
</html>

