@extends('layouts.app')

@section('content')
    <h2>Data Mahasiswa
        <a class="btn btn-primary btn-sm float-end" href="{{ url('mahasiswa/create') }}">Tambah Data</a>
    </h2>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->mhsw_id }}</td>
            <td>{{ $row->mhsw_nim }}</td>
            <td>{{ $row->mhsw_nama }}</td>
            <td>{{ $row->mhsw_alamat }}</td>
            <td><center><a class="btn btn-primary btn-sm float-none" href="{{ url('mahasiswa/' . $row->mhsw_id . '/edit') }}">Edit</a></center></td>
            <td>
                <center><form class="btn btn-primary btn-sm float-none" action="{{ url('mahasiswa/' . $row->mhsw_id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                        <button>Hapus</button>
                </form></center>

            </td>
        </tr>
        @endforeach
    </table>

@endsection