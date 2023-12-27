@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="m-0 font-weight-bold text-primary">Data Mahasiswa
        <a href="{{ route('mapel.create') }}" class="btn btn-md btn-success mb-3 float-right"> Input Siswa</a></div>
    </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Dosen</th>
                        <th>Kode</th>
                        <th>Mata Kuliah</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mapel as $mpl)
                        <tr>
                            <td class="text-center">{{ ++$i }}</td>
                            <td>{{ $mpl->dsn->nama_dosen }}</td>
                            <td>{{ $mpl->kode }}</td>
                            <td>{{ $mpl->matkul }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('mapel.destroy', $mpl->id) }}" method="POST">
                                    <a href="{{ route('mapel.edit', $mpl->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    <a class="btn btn-info btn-sm" href="{{ route('mapel.show',$mpl->id) }}">Show</a>
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