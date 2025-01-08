@extends('setting')

@section('isi')
<div class="col-lg-6">
    <form action="{{route('adminsetting.layout')}}" method="POST" enctype="multipart/form-data">
      @csrf
      {{-- @method('PUT') --}}
      <div class="card">
        <div class="card-header"><strong>View Setting</strong><small> Form</small></div>
        <div class="card-body card-block">
          <div class="form-group"><label for="judul" class=" form-control-label">Judul</label><input type="text" name="judul" id="judul" value="" placeholder="Masukan Judul" class="form-control"></div>
          <div class="form-group"><label for="text" class=" form-control-label">Text</label><input type="text" name="text" id="text" value="" placeholder="Masukan Text Berjalan" class="form-control"></div>
          <div class="form-group"><label for="logo" class=" form-control-label">Logo</label><input type="file" name="logo" id="logo" value="" class="form-control"></div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Update
          </button>
          <a href="{{route('adminsetting')}}" class="btn btn-danger btn-sm" >
            <i class="fa fa-ban"></i> Kembali
          </a>
        </div>
      </div>  
   </form>
  </div> 
@endsection