@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Pembeli</h3>
        <form action="{{ url('/pembeli/' . $row->id_pembeli) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>id pembeli</label>
                <input type="text" class="form-control" name="id_pembeli" value="{{ $row->id_pembeli }}"></>
            </div>

            <div class="mb-3">
                <label>nama pembeli</label>
                <input type="text" class="form-control" name="nama_pembeli" value="{{ $row->nama_pembeli }}"></>
            </div>

            <div class="mb-3">
                <label>alamat pembeli</label>
                <textarea class="form-control" name="alamat_pembeli">{{ $row->alamat_pembeli }}</textarea>
            </div>

            <div class="mb-3">
                <label>no hp</label>
                <textarea class="form-control" name="no_hp">{{ $row->no_hp }}</textarea>
            </div>

            <div class="mb-3">
                <label>nik pembeli</label>
                <textarea class="form-control" name="nik_pembeli">{{ $row->nik_pembeli }}</textarea>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-none" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection