@extends('base')
@section('jobs','active')
@section('content')
<form action="{{ route('storejobs')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label>Nama Jobs</label>
    <input type="text" name="nama" class="form-control" placeholder="...">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
