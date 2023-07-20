@extends('layouts.app')

@section('content')

<h2>Input Data Mahasiswa</h2>

<form action="{{ url('/mahasiswa') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">NIM</label>
        <input type="text" name="mhsw_nim" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">NAMA</label>
        <input type="text" name="mhsw_nama" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">ALAMAT</label>
        <input type="text" name="mhsw_alamat" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection