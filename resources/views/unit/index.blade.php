@extends('layouts.app')

@section('content')
    <h2>Data Unit Mobil
        <a class="btn btn-primary btn-sm float-end" href="{{ url('unit/create') }}">Tambah Data</a>
    </h2>
    <table class="table table-bordered">
        <tr>
            <th>id unit</th>
            <th>nama unit</th>
            <th>model unit</th>
            <th>type unit</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->unit_id }}</td>
            <td>{{ $row->nama_unit }}</td>
            <td>{{ $row->model_unit }}</td>
            <td>{{ $row->unit_id_type }}</td>
            <td><a class="btn btn-primary" href="{{ url('unit/' . $row->unit_id . '/edit') }}">Edit</a></td>
            <td>
                <form class="" action="{{ url('unit/' . $row->unit_id ) }}" method="POST">
                    @method('DELETE')
                    @csrf
                        <button class="btn btn-danger">Hapus</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>

@endsection