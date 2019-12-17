@extends('base')
@section('jobs','active')
@section('content')
<form action="{{route('updatejobs',$jobs->id_jobs)}}">
  @csrf
  @method('POST')
  <div class="form-group">
    <label>Nama Kategori</label>
    <input type="text" name="name" value="{{$jobs->name}}" class="form-control" placeholder="...">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
