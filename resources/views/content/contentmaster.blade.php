@extends('master')

@section('isi')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Daftar Event</strong>
        </div>
        <div class="card-body">
            <a href="{{route('adminadd')}}" class="btn btn-primary mb-3">Tambah Data</a> 
        <div class="card-tools float-right">
            <form action="" method="GET">
            <div class="form-group row ">
                <div class="col-sm-10">
                    <input type="text" name="cari" class="form-control float-right" placeholder="Search" aria-controls="bootstrap-data-table" value="{{$cari}}">
                </div>
                <a href="{{route('adminevent')}}" class="btn btn-secondary">
                    <i class="fa fa-ban"></i>
                </a>
            </div>
            </form>
        </div> 
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>@sortablelink('nama_event','Nama Event')</th>
                        <th>@sortablelink('tanggal','Tanggal')</th>
                        <th>@sortablelink('waktu','Jam')</th>
                        <th>@sortablelink('lokasi','Lokasi')</th>
                        <th>Keterangan</th>
                        <th>@sortablelink('status','Status')</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $nomor = 1 + (($data_event->currentPage()-1) * $data_event->perPage());
                    @endphp
                    @foreach ($data_event as $d)
                    <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{$d['nama_event']}}</td>
                        <td>{{\Carbon\Carbon::parse($d->tanggal)->format('d-m-Y')}}</td>
                        <td>{{$d['waktu']}}</td>
                        <td>{{$d['lokasi']}}</td>
                        <td>{{$d['keterangan']}}</td>
                        <td>{{$d['status']}}</td>
                        <td class="text-align:center">
                            <a href="{{route('adminedit',['id'=>$d->id])}}" class="">
                                <i class="fa fa-pencil-square-o fa-lg mr-1"></i>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#HapusModal{{$d->id}}" class="fa fa-trash-o fa-lg" id="destroy"></a>
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
            {{-- {{$data_event -> links()}} --}}
            {!! $data_event->appends(Request::except('page'))->render() !!}
        </div>
    </div>
</div>

@endsection
