@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Data PPDB</div>

                <div class="card-body">
                @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                <a href="{{ route('ppdb.create') }}" class="btn btn-primary">Tambah</a>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama Alamat</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telpon</th>
                    <th scope="col">Asal Sekolah</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($ppdb as $data)
                    <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data->nama_lengkap }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->agama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->telpon }}</td>
                    <td>{{ $data->asal_sekolah }}</td>
                    <td>
                        <a href="{{ route('ppdb.edit', $data->id )}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                        <a href="{{ route('ppdb.show', $data->id )}}" class="btn btn-warning">Show</a>
                        </td>
                    <td>
                        <form action="{{ route('ppdb.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                        </form>
                    </td>    
            </tr>
    
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
