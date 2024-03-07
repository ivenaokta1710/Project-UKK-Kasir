<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::count();
        $petugas = User::count();
        $petugias = User::all();
        $pelanggan = DetailPenjualan::distinct('nama_pemesan')->count();
        $barang = Barang::count();
        $totalPenjualan = Penjualan::where('status','=','bayar')->sum('total_harga');
        $totalDiskon = Penjualan::where('status','=','bayar')->sum('diskon');
        $totalBatal = Penjualan::where('status','!=','bayar')->sum('total_harga');
        $stokTersedia = Barang::sum('stok');

        return view('dashboard.dashboard',[
            'penjualan' => $penjualan,
            'petugas' => $petugas,
            'petugias' => $petugias,
            'pelanggan' => $pelanggan,
            'barang' => $barang,
            'totalPenjualan' => $totalPenjualan,
            'totalDiskon' => $totalDiskon,
            'totalBatal' => $totalBatal,
            'stokTersedia' => $stokTersedia
        ]);
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
