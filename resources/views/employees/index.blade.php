@extends('base')
@section('employees','active')
@section('content')
<a href="{{route('tambahemployees')}}" class="btn btn-primary">Tambah Data</a>
<br/><br/>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col" width="1">#</th>
            <th scope="col">Jobs</th>
            <th scope="col">Nama Pegawai</th>
            <th scope="col">E-Mail</th>
            <th scope="col">Kontak</th>
            <th scope="col">Alamat</th>
            <th scope="col" width="1">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $data)
        <tr>
            <th scope="row">{{$data->id_employees}}</th>
            <td>{{$data->jobs_id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>
            <div class="btn-group">
                    <a href="{{route('editemployees',$data->id_employees)}}" class="btn btn-success">Edit</a>
                    <form action="{{ route('deleteemployees', $data->id_employees)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
