<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Categori;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function checkout(Request $request)
    {
        $timestamp = Carbon::now();
        $nama_pemesan = $request->input('nama_pemesan');
        $total_pesanan = $request->input('total');
        $key = session('cart');
        $pemesanan = [
            'tanggal_penjualan' => $timestamp,
            'total_harga' => $total_pesanan,
            'status' => 'pesan'
        ];
        $create_penjualan = Penjualan::create($pemesanan);
        $id_penjualan = $create_penjualan->id;
        $detail_pemesanan = [
            'id_penjualan' => $id_penjualan,
            'nama_pemesan' => $nama_pemesan,
        ];
        $data = DetailPenjualan::where('sesi', '=', $key)->get();
        foreach ($data as $detail) {
            // Mengurangi stok barang
            $barang = Barang::find($detail->id_barang);
            $barang->stok -= $detail->jumlah_barang;
            $barang->save();
        }
        $data = DetailPenjualan::where('sesi', '=', $key);
        $data->update($detail_pemesanan);
        $request->session()->forget('cart');
        return redirect('penjualan')->with('success', 'Pesanan Berhasil Silahkan Ke Kasir');


    }

    public function keranjang()
    {
        @$key = session('cart');
        if ($key == null) {
            return view('landingpage.keranjang');
        } else {
            $penjualan = DetailPenjualan::where('sesi', '=', $key)->get();
            return view('landingpage.keranjang', ['penjualan' => $penjualan]);
        }

    }
    public function batal_pesan(Request $request)
    {
        $request->session()->forget('cart');
        return view('landingpage.keranjang');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        $categori = Categori::all();
        return view('landingpage.index', ['barang' => $barang, 'categori' => $categori]);
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
        $timestamp = Carbon::now()->format('Y-m-d H:i:s.u');
        if (!$request->session()->has('cart')) {
            // Jika session belum ada, buat session baru untuk keranjang belanja
            $request->session()->put('cart', $timestamp, 1);
        }
        $sesi = $request->session()->get('cart');
        // Ambil data barang yang dikirim dari form
        $barangId = $request->input('id_barang');
        $jumlah = $request->input('qty_val');

        // pencarian harga
        $barang = Barang::findOrFail($barangId);
    
        if ($barang->stok <= 0) {
            return response()->json(['error' => true]);
        } else {
            $harga = $barang->harga;
            // total harga
            $total = $harga * $jumlah;
    
            $keranjang = new DetailPenjualan();
            $keranjang->id_barang = $barangId;
            $keranjang->jumlah_barang = $jumlah;
            $keranjang->total = $total;
            $keranjang->sesi = $sesi;
            $keranjang->save();
    
        // Beri respons JSON untuk AJAX
        return response()->json(['success' => true]);
    }
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
        $data = DetailPenjualan::findOrFail($id);
        $data->delete();
        @$key = session('cart');

        if ($key == null) {
            return view('landingpage.keranjang');
        } else {
            $penjualan = DetailPenjualan::where('sesi', '=', $key)->get();
            return view('landingpage.keranjang', ['penjualan' => $penjualan]);
        }
    }
}
