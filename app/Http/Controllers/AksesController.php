<?php

namespace App\Http\Controllers;

use App\Models\Akses;
use Illuminate\Http\Request;

class AksesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Akses::all();
        return view('dashboard.data_akses',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.data_akses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'menu' => 'required',
        ]);
        Akses::create($validasi);
        return redirect('/data/akses')->with('success','Record inserted succesfully');

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
        $data = Akses::findOrFail($id);

        return view('dashboard.data_akses.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = $request->validate([
            'menu' => 'required',
        ]);
        $data = Akses::findOrfail($id);
        $data->update($validasi);
        return redirect('/data/akses')->with('success','Record updated succesfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Akses::findOrfail($id);
        $data->delete();
        return redirect('/data/akses')->with('success','Record Delete succesfully');
    }
}
