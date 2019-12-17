@extends('base')
@section('jobs','active')
@section('content')
<form action="{{route('storejobs',$jobs->id_jobs)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label>Nama Kategori</label>
    <input type="text" name="nama" value="{{$jobs->nama}}" class="form-control" placeholder="...">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
