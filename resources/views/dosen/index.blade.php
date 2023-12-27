@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="m-0 font-weight-bold text-primary">Data Dosen
        <a href="{{ route('dosen.create') }}" class="btn btn-md btn-success mb-3 float-right"> Input Dosen</a></div>
    </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama Dosen</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dosen as $dsn)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $dsn->nip }}</td>
                            <td>{{ $dsn->nama_dosen }}</td>
                            <td>{{ $dsn->email }}</td>
                            <td>{{ $dsn->jenis_kelamin }}</td>
                            <td>{{ $dsn->alamat }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('dosen.destroy', $dsn->id) }}" method="POST">
                                    <a href="{{ route('dosen.edit', $dsn->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-danger">
                            Data Blog belum Tersedia.
                        </div>
                    @endforelse
                </tbody>
               </div> 
            </table>
            
        </div>
    </div>
</div>

@endsection