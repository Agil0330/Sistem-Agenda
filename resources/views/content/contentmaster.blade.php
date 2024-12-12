@extends('master')

@section('isi')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Daftar Event</strong>
        </div>
        <div class="card-body">
            <a href="{{route('adminadd')}}" class="btn btn-primary mb-3">Tambah Data</a>
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Event</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Keterangan</th>
                        <th>Status</th>
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
                        <td>{{$d['status']}}</td>
                        <td class="text-align:center">
                            <a href="{{route('adminedit',['id'=>$d->id])}}" class="fa fa-pencil-square-o fa-lg m-2"></a>
                            <a href="#" data-toggle="modal" data-target="#HapusModal{{$d->id}}" class="fa fa-trash-o fa-lg m-1" id="destroy"></a>
                        </td>
                    </tr>
                    <div class="modal fade" id="HapusModal{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticModalLabel">Konfirmasi Hapus Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Apakah Anda Yakin Untuk Menghapus Event {{$d->nama_event}}?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <form action="{{route('adminhapus', ['id'=>$d->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
