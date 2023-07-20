<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Unit::all();
        return view('unit.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Unit::create([
            'nama_unit' => $request->nama_unit,
            'model_unit' => $request->model_unit,
            'unit_id_type' => $request->unit_id_type
        ]);

        return redirect('unit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Unit::findOrFail($id);
        return view('unit.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama_unit' => 'bail|required',
                'model_unit' => 'required'
            ],
            [
                'unit_id.required' => 'NIM wajib diisi',
                'nama_unit.required' => 'Nama wajib diisi'
            ]
        );

        $row = Unit::findOrFail($id);
        $row->update([
            'nama_unit' => $request->nama_unit,
            'model_unit' => $request->model_unit,
            'unit_id_type' => $request->unit_id_type
        ]);

        return redirect('unit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Unit::findOrFail($id);
        $row->delete();

        return redirect('unit');
    }
}
