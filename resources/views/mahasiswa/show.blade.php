@extends('layouts.main')

@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
        <div class="col">
           
        </div>
        </div>

        <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
            <div class="card-body text-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3">{{ $mahasiswa->nama_siswa }}</h5>
                <!-- <p class="text-muted mb-1">Full Stack Developer</p>
                <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> -->
                <div class="d-flex justify-content-center mb-2">
                <a class="btn btn-secondary" href="{{ route('mahasiswa.index') }}"> Back</a>
                </div>
            </div>
            </div>
            
        

            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                <div class="card-body">
                <h5 class="text-center">Biodata</h5>
                <hr>
                
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Nama</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $mahasiswa->nama_mahasiswa }}</p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Jenis Kelamin</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $mahasiswa->jenis_kelamin }}</p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Tanggal Lahir</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $mahasiswa->tgllahir }}</p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Alamat</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $mahasiswa->alamat }}</p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">No HP</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0">{{ $mahasiswa->nohp }}</p>
                    </div>
                    </div>
                    
                </div>
                </div>
                </div>
            
            
            </div>
            </div>
        </div>
        </div>
        
    </div>
    </section>
@endsection