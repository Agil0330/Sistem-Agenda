@extends('home')

@section('isi')

<div class="col-6 col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="clearfix">
                <i class="fa fa-check-square-o bg-flat-color-5 p-3 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-secondary mb-0 mt-1">{{$terlaksana}}</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Sudah Terlaksana</div>
            </div>
        </div>
    </div>
</div>
<div class="col-6 col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="clearfix">
                <i class="fa fa-exclamation-triangle bg-flat-color-3 p-3 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-secondary mb-0 mt-1">{{$blmter}}</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Belum Terlaksana</div>
            </div>
        </div>
    </div>
</div>
<div class="col-6 col-lg-3">
    <div class="card">
        <div class="card-body">
            <div class="clearfix">
                <i class="fa fa-calendar-o bg-flat-color-1 p-3 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-secondary mb-0 mt-1">{{ $jumlah }}</div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">Semua Event</div>
            </div>
        </div>
    </div>
</div>

@endsection