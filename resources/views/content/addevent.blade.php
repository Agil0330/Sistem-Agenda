@extends('script.formevent')

@section('isi')
<div class="col-lg-6">
  <form action="/push" method="POST">
    @csrf
    {{-- @method('PUT') --}}
    <div class="card">
      <div class="card-header"><strong>Event</strong><small> Form</small></div>
      <div class="card-body card-block">
        <div class="form-group"><label for="nama_event" class=" form-control-label">Nama Event</label><input type="text" name="nama_event" id="nama_event" placeholder="Masukan Nama Kegiatan" class="form-control"></div>
        <div class="form-group"><label for="waktu" class=" form-control-label">Waktu</label><input type="time" name="waktu" id="waktu" placeholder="Masukan Nama Lokasi" class="form-control"></div>
        <div class="form-group"><label for="tanggal" class=" form-control-label">Tanggal</label><input type="date" name="tanggal" id="tanggal" placeholder="Masukan Ketentuan yang Berlaku" class="form-control"></div>
        <div class="form-group"><label for="lokasi" class=" form-control-label">Lokasi</label><input type="text" name="lokasi" id="lokasi" placeholder="Masukan Nama Lokasi" class="form-control"></div>
        <div class="form-group"><label for="keterangan" class=" form-control-label">Keterangan</label><input type="text" name="keterangan" id="keterangan" placeholder="Masukan Ketentuan yang Berlaku" class="form-control"></div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
          <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
          <i class="fa fa-ban"></i> Reset
        </button>
      </div>
    </div>  
 </form>
</div> 
@endsection
