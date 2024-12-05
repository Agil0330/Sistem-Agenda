@extends('master')

@section('isi')

<div class="col-md-12">
  <div class="card">
      <div class="card-header">
          <strong class="card-title">Daftar Event</strong>      
      </div>
      <div class="card-body">
       <a href="/add" class="btn btn-primary mb-3">Tambah Data</a>
  <table id="bootstrap-data-table" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Nomor</th>
      <th>Nama Event</th>
      <th>Waktu</th>
      <th>Tanggal</th>
      <th>Lokasi</th>
      <th>Keterangan</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_event as $d)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$d['nama_event']}}</td>
        <td>{{$d['tanggal']}}</td>
        <td>{{$d['waktu']}}</td>
        <td>{{$d['lokasi']}}</td>
        <td>{{$d['keterangan']}}</td>
        <td><a href="{{route('edit',['id'=>$d->id])}}" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Hapus</a></td>
      </tr>
    @endforeach
  </tbody>
  </table>
      </div>
  </div>
</div>
@endsection