@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="m-0 font-weight-bold text-primary">Data Dosen</div></div>
        <div class="card-body">
        <div class="table-responsive">
            <form action="{{ route('dosen.store') }}" method="POST" enctype="multipart/form-data">
    
            @csrf

            <div class="mb-3">
                <label class="form-label">NIP:</label>
                <input type="text"  autocomplete="off" class="form-control @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" placeholder="Masukkan NIP">
            
                <!-- error message untuk title -->
                @error('nip')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Nama:</label>
                <input type="text"  autocomplete="off" class="form-control @error('nama_dosen') is-invalid @enderror" name="nama_dosen" value="{{ old('nama_dosen') }}" placeholder="Masukkan Nama Dosen">
            
                <!-- error message untuk title -->
                @error('nama_dosen')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="text" autocomplete="off" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
            
                <!-- error message untuk title -->
                @error('email')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin :</label>
                <input type="text" autocomplete="off" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" placeholder="Masukkan Jenis Kelamin">
            
                <!-- error message untuk title -->
                @error('jenis_kelamin')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat :</label>
                <input type="text" autocomplete="off" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Alamat">
            
                <!-- error message untuk title -->
                @error('alamat')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="float-left mt-2">
                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                <a class="btn btn-secondary" href="{{ route('dosen.index') }}"> Back</a>
           </div>
           

        </form> 
    </div>
</div>
@endsection