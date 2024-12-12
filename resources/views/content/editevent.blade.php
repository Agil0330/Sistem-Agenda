@extends('script.formedit')

@section('isi')
<div class="col-lg-6">
  <form action="{{route('adminupdate',['id'=>$data_event->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="card">
      <div class="card-header"><strong>Edit Event</strong><small> Form</small></div>
      <div class="card-body card-block">
        <div class="form-group"><label for="nama_event" class=" form-control-label">Nama Event</label><input type="text" name="nama_event" id="nama_event" value="{{$data_event->nama_event}}" placeholder="Masukan Nama Kegiatan" class="form-control"></div>
        <div class="form-group"><label for="waktu" class=" form-control-label">Waktu</label><input type="time" name="waktu" id="waktu" value="{{$data_event->waktu}}" placeholder="Masukan Waktu" class="form-control"></div>
        <div class="form-group"><label for="tanggal" class=" form-control-label">Tanggal</label><input type="date" name="tanggal" id="tanggal" value="{{$data_event->tanggal}}" placeholder="Masukan Ketentuan yang Berlaku" class="form-control"></div>
        <div class="form-group"><label for="lokasi" class=" form-control-label">Lokasi</label><input type="text" name="lokasi" id="lokasi" value="{{$data_event->lokasi}}" placeholder="Masukan Nama Lokasi" class="form-control"></div>
        <div class="row form-group">
          <div class="col col-md-3"><label for="status" class=" form-control-label">Status</label></div>
          <div class="col-12 col-md-9" name="status">
            <select name="status" id="status" class="form-control">
              <option value="0">Belum Terlaksana</option>
              <option value="1">Terlaksana</option>
            </select>
          </div> 
        </div>
        <div class="form-group"><label for="keterangan" class=" form-control-label">Keterangan</label><input type="text" name="keterangan" id="keterangan" value="{{$data_event->keterangan}}" placeholder="Masukan Ketentuan yang Berlaku" class="form-control"></div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
          <i class="fa fa-dot-circle-o"></i> Update
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
          <i class="fa fa-ban"></i> Kembali
        </button>
      </div>
    </div>  
 </form>
</div> 
@endsection
