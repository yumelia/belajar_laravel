@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Peserta</div>

                <div class="card-body">
                <form action="{{ route('ppdb.update', $ppdb->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
        <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <br>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki"> Laki-laki
        <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan"> Perempuan
    </div>
    <br>
    <div class="form-group">
        <label>Agama</label>
        <select class="form-control" name="agama">
        <option value="">Pili Agama</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Protestan">Protestan</option>
        <option value="Katholik">Katholik</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>Alamat</label>
        <input type="textarea" class="form-control" name="alamat">
    </div>
    <div class="form-group">
        <label>Telpon</label>
        <input type="number" class="form-control" name="telpon">
    </div>
    <div class="form-group">
        <label>Asal Sekolah</label>
        <input type="text" class="form-control" name="asal_sekolah">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
