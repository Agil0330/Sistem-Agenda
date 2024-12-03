@extends('home')

@section('isi')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Daftar Event</strong>
        </div>
        <div class="card-body">
  <table id="bootstrap-data-table" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Nama Event</th>
        <th>Waktu</th>
        <th>Tanggal</th>
        <th>Lokasi</th>
        <th>Keterangan</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
        </div>
    </div>
</div>
@endsection