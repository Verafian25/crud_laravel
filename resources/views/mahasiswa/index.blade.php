@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
<div class="card-header py-3">
<div class="m-0 font-weight-bold text-primary">Data Mahasiswa
<a href="{{ route('mahasiswa.create') }}" class="btn btn-md btn-success mb-3 float-right"> Input Siswa</a></div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th class="text-center">Action</th>
    </tr>
</thead>
<tbody>
    @forelse ($mahasiswa as $data)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $data->nama_mahasiswa }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->tgllahir }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->nohp }}</td>
            <td class="text-center">
                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('mahasiswa.destroy', $data->id) }}" method="POST">
                    <a href="{{ route('mahasiswa.edit', $data->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    <a class="btn btn-info btn-sm" href="{{ route('mahasiswa.show',$data->id) }}">Show</a>
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