@extends('layouts.app')

@section('content')

<h2>Input Data Pembeli</h2>

<form action="{{ url('/pembeli') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">id pembeli</label>
        <input type="text" name="id_pembeli" class="form-control">
    </div>
    
    <div class="mb-3">
        <label for="">nama pembeli</label>
        <input type="text" name="nama_pembeli" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">alamat pembeli</label>
        <input type="text" name="alamat_pembeli" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">no hp</label>
        <input type="text" name="no_hp" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">nik pembeli</label>
        <input type="text" name="nik_pembeli" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection