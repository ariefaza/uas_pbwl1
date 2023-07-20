<?php

namespace App\Http\Controllers;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pembeli::all();
        return view('pembeli.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pembeli::create([
            'id_pembeli' => $request->id_pembeli,
            'nama_pembeli' => $request->nama_pembeli,
            'alamat_pembeli' => $request->alamat_pembeli,
            'no_hp' => $request->no_hp,
            'nik_pembeli' => $request->nik_pembeli
        ]);

        return redirect('pembeli');
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
        $row = Pembeli::findOrFail($id);
        return view('pembeli.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'id_pembeli' => 'bail|required',
                'nama_pembeli' => 'required'
            ],
            [
                'alamat_pembeli.required' => 'NIM wajib diisi',
                'no_hp.required' => 'Nama wajib diisi'
            ]
        );

        $row = Pembeli::findOrFail($id);
        $row->update([
            'id_pembeli' => $request->id_pembeli,
            'nama_pembeli' => $request->nama_pembeli,
            'alamat_pembeli' => $request->alamat_pembeli,
            'no_hp' => $request->no_hp,
            'nik_pembeli' => $request->nik_pembeli
        ]);

        return redirect('pembeli');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pembeli::findOrFail($id);
        $row->delete();

        return redirect('pembeli');
    }
}
