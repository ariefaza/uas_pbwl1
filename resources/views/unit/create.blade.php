@extends('layouts.app')

@section('content')

<h2>Input Data Unit</h2>

<form action="{{ url('/unit') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">nama unit</label>
        <input type="text" name="nama_unit" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">model unit</label>
        <input type="text" name="model_unit" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">type unit</label>
        <input type="text" name="unit_id_type" class="form-control">
    </div>
    <div class="mb-3">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection