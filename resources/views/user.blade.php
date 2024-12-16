<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Monitor View</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('kerangka.css')
</head>

<body style="background-color:rgb(74, 165, 177);">
    <header>
        <div>
            <marquee bgcolor="white"><font size=70>INFORMASI EVENT YANG AKAN TERLAKSANA</font></marquee>
        </div>
    </header>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Daftar Event</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Event</th>
                                        <th>Jam</th>
                                        <th>Tanggal</th>
                                        <th>Lokasi</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $v)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $v['nama_event'] }}</td>
                                            <td>{{ $v['waktu'] }}</td>
                                            <td>{{ $v['tanggal'] }}</td>
                                            <td>{{ $v['lokasi'] }}</td>
                                            <td>{{ $v['keterangan'] }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->


    </div><!-- /#right-panel -->


</body>

</html>
