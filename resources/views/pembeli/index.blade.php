@extends('layouts.app')

@section('content')
    <h2>Data Pembeli Mobil
        <a class="btn btn-primary btn-sm float-end" href="{{ url('pembeli/create') }}">Tambah Data Pembeli</a>
    </h2>
    <table class="table table-bordered">
        <tr>
            <th>id pembeli</th>
            <th>nama pembeli</th>
            <th>alamat pembeli</th>
            <th>no hp</th>
            <th>nik pembeli</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->id_pembeli }}</td>
            <td>{{ $row->nama_pembeli }}</td>
            <td>{{ $row->alamat_pembeli }}</td>
            <td>{{ $row->no_hp }}</td>
            <td>{{ $row->nik_pembeli }}</td>
            <td><a class="btn btn-primary" href="{{ url('pembeli/' . $row->id_pembeli . '/edit') }}">Edit</a></td>
            <td>
                <form class="" action="{{ url('pembeli/' . $row->id_pembeli) }}" method="POST">
                    @method('DELETE')
                    @csrf
                        <button class="btn btn-danger">Hapus</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>

@endsection