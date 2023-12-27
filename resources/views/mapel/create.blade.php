@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="m-0 font-weight-bold text-primary">Data Mahasiswa</div></div>
        <div class="card-body">
        <div class="table-responsive">
            <form action="{{ route('mapel.store') }}" method="POST" enctype="multipart/form-data">
    
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Dosen :</label>
                <select name="dosen_id" id="dos" class="form-control">
                    @foreach ($dos as $item)
                    <option value="{{$item->id}}">{{$item->nama_dosen}}</option>
                    @endforeach
                </select>
            
                <!-- error message untuk title -->
                @error('nama_dosen')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Kode :</label>
                <input type="text" autocomplete="off" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{ old('kode') }}" placeholder="Masukkan Kode">
            
                <!-- error message untuk title -->
                @error('kode')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label">Mata Kuliah :</label>
                <input type="text" autocomplete="off" class="form-control @error('matkul') is-invalid @enderror" name="matkul" value="{{ old('matkul') }}" placeholder="Masukkan Mata Kuliah">
            
                <!-- error message untuk title -->
                @error('matkul')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div> 

            <div class="float-left mt-2">
                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                <a class="btn btn-secondary" href="{{ route('mapel.index') }}"> Back</a>
           </div>
           

        </form> 
    </div>
</div>
@endsection