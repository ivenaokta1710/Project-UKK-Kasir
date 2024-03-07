<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Categori::all();
        return view('dashboard.data_categori',['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.data_categori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required',
        ]);

        Categori::create($validasi);

        return redirect('/data/categori')
        ->with('success', 'Record inserted successfully!');
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
        $data = Categori::findOrFail($id);

        return view('dashboard.data_categori.edit',['data'=> $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = $request->validate([
            'nama' => 'required',
        ]);
        $data = Categori::findOrFail($id);
        $data->update($validasi);
        return redirect('/data/categori')
        ->with('success', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Categori::findOrFail($id);
        $data->delete();
        return redirect('/data/categori')
        ->with('success', 'Record updated successfully!');
    }
}
