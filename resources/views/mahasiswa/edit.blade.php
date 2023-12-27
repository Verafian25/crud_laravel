@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="m-0 font-weight-bold text-primary">Data Mahasiswa</div></div>
        <div class="card-body">
        <div class="table-responsive">
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Siswa :</label>
                <input type="text" autocomplete="off" class="form-control @error('nama_mahasiswa') is-invalid @enderror" name="nama_mahasiswa" value="{{ old('nama_mahasiswa', $mahasiswa->nama_mahasiswa) }}" placeholder="Masukkan Nama Siswa">
            
                <!-- error message untuk title -->
                @error('nama_mahasiswa')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin :</label>
                <input type="text" autocomplete="off" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) }}" placeholder="Masukkan Jenis Kelamin">
            
                <!-- error message untuk title -->
                @error('jenis_kelamin') 
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir :</label>
                <input type="date" autocomplete="off" class="form-control @error('tgllahir') is-invalid @enderror" name="tgllahir" value="{{ old('tgllahir', $mahasiswa->tgllahir) }}" placeholder="Masukkan Tanggal Lahir">
            
                <!-- error message untuk title -->
                @error('ttgllahir')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat :</label>
                <input type="text" autocomplete="off" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $mahasiswa->alamat) }}" placeholder="Masukkan Alamat">
            
                <!-- error message untuk title -->
                @error('alamat') 
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Hp :</label>
                <input type="number" autocomplete="off" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp', $mahasiswa->nohp) }}" placeholder="Masukkan Nomor Hp">
            
                <!-- error message untuk title -->
                @error('nohp') 
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
            <a class="btn btn-secondary" href="{{ route('mahasiswa.index') }}"> Back</a>

        </form> 
    </div>
</div>

@endsection