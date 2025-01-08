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
   @foreach ($setting as $s )     
    <header style="background-color: white">
        <div style="float-center">
            <img src={{ asset('image/' . $s->logo) }} alt="logo" style="display:block; margin:auto; width: 100px" >
            <h6 style="padding-left: 20px" id="current-time">{{ $currentTime->translatedFormat('l, d F Y') }}<h5 style="padding-left: 20px" id="live-time"></h5></h6>
        </div>
    </header>
    <br>
    <nav>
        <div>
            <marquee bgcolor="white"><font size="100px">{{$s['text']}}</font></marquee>
        </div>
    </nav>
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
                                            <td>{{\Carbon\Carbon::parse($v->waktu)->format('H:i')}}</td>
                                            <td>{{\Carbon\Carbon::parse($v->tanggal)->format('d-m-Y')}}</td>
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
    @endforeach
    {{-- <script>
        function updateTime() {
            var currentDate = new Date();

            // Format tanggal dan waktu
            var day = currentDate.getDate().toString().padStart(2, '0');
            var month = (currentDate.getMonth() + 1).toString().padStart(2, '0'); // Bulan mulai dari 0
            var year = currentDate.getFullYear();
            var hours = currentDate.getHours().toString().padStart(2, '0');
            var minutes = currentDate.getMinutes().toString().padStart(2, '0');
            var seconds = currentDate.getSeconds().toString().padStart(2, '0');

            // Menampilkan tanggal dan waktu
            var dateTimeString = day + '-' + month + '-' + year + ' ' + hours + ':' + minutes + ':' + seconds;

            // Update elemen dengan id datetime
            document.getElementById('datetime').innerText = dateTimeString;
        }

        // Memanggil updateTime() setiap detik
        setInterval(updateTime, 1000);

        // Inisialisasi waktu saat halaman pertama dimuat
        updateTime();
    </script>

     <p>Waktu server saat ini:</p>
    <h2>Jam Berjalan:</h2> --}}
    

    <script>
        // Fungsi untuk menampilkan waktu yang terupdate setiap detik
        function updateLiveTime() {
            const now = new Date(); // Ambil waktu saat ini
            const hours = String(now.getHours()).padStart(2, '0'); // Format jam
            const minutes = String(now.getMinutes()).padStart(2, '0'); // Format menit
            const seconds = String(now.getSeconds()).padStart(2, '0'); // Format detik
            const timeString = `${hours}:${minutes}:${seconds}`; // Gabungkan jam, menit, detik menjadi satu string

            // Update konten elemen dengan id "live-time"
            document.getElementById("live-time").innerText = timeString;
        }

        // Panggil fungsi updateLiveTime setiap detik
        setInterval(updateLiveTime, 1000); // Update setiap 1000 milidetik (1 detik)

        // Panggil updateLiveTime pertama kali agar waktu langsung muncul saat halaman pertama kali dimuat
        updateLiveTime();
    </script>
</body>

</html>
