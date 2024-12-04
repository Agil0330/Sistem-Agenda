@extends('script.formevent')

@section('isi')
<div class="col-lg-6">
  <form action="/push" method="POST">
   @csrf
    <div class="card">
      <div class="card-header"><strong>Agenda</strong><small> Form</small></div>
      <div class="card-body card-block">
        <div class="form-group"><label for="nama-kegiatan" class=" form-control-label">Nama Kegiatan</label><input type="text" id="nama-kegiatan" placeholder="Masukan Nama Kegiatan" class="form-control"></div>
        <div class="form-group"><label for="jam" class=" form-control-label">Waktu</label><input type="time" id="waktu" placeholder="Masukan Nama Lokasi" class="form-control"></div>
        <div class="form-group"><label for="Tanggal" class=" form-control-label">Tanggal</label><input type="date" id="Tanggal" placeholder="Masukan Ketentuan yang Berlaku" class="form-control"></div>
        <div class="form-group"><label for="lokasi" class=" form-control-label">Lokasi</label><input type="text" id="lokasi" placeholder="Masukan Nama Lokasi" class="form-control"></div>
        <div class="form-group"><label for="Keterangan" class=" form-control-label">Keterangan</label><input type="text" id="Keterangan" placeholder="Masukan Ketentuan yang Berlaku" class="form-control"></div>
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
