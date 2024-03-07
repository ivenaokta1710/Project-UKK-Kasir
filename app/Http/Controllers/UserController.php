<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = user::all();
        return view('dashboard.data_petugas',['data'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.data_petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'

        ]);
        //berfungsi untuk 
        $validatedData['password'] = Hash::make($validatedData['password']);
        //berfungsi untuk 
        $validatedDetailUser = $request->validate([
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required'

        ]);
        //
        $data = User::create($validatedData);
        //memanggil id dari users dan disimpan di detail user
        $dataid_user = $data->id;
        $detailUser = new DetailUser($validatedDetailUser);
        $detailUser->id_user = $dataid_user;
        $detailUser->save();

        return redirect('/data/data_petugas')->with('success','Record created succesfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::findOrFail($id);
        $tanggal_lahir = Carbon::parse($data->detailUser->tanggal_lahir);
        $umur = $tanggal_lahir->age;
        return view('dashboard.profile', ['data' => $data,'umur'=>$umur]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = user::findOrFail($id);
        return view('dashboard.data_petugas.edit',['data'=> $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required'

        ]);
        
        //untuk mevalidasi data detail user
        $validatedDetailUser = $request->validate([
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'nik' => '',
            'alamat' => '',
            'no_tlfn' => '',

        ]);

        //mencari record yang dirubah
        $data = User::findOrFail($id);
        //proses ubah data table user
        $data->update($validatedData);
        //mencari record yang telah dirubah ditable data user
        $detailUser = DetailUser::where('id_user', $id)->first();
       //update data detai user
        $detailUser->update($validatedDetailUser);


        return redirect('/data/data_petugas')->with('success','Record updateed succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataDetail = DetailUser::where('id_user',$id);
        $dataDetail->delete();
        $data = User::findOrfail($id);
        $data->delete();
        return redirect('/data/data_petugas')->with('success','Record Delete succesfully');
    }
    public function update_profile(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            // Add more validation rules for other columns
        ]);
        // berfungsi untuk memvalidasi data detail user
        $validasiDetailUser = $request->validate([
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'nik' => '',
            'alamat' => '',
            'no_telpon' => '',
        ]);
        // Mencari record yang dritubah
        $data = User::findOrFail($id);
        // proses ubah data table user
        $data->update($validatedData);
        // mencari record yang dirubah di table detail user
        $detailUser = DetailUser::where('id_user', $id)->first();
        // Update data detail user
        $detailUser->update($validasiDetailUser);


        // Flash a success message to the session
        return redirect()->route('data.data_petugas.show', ['id' => $id])->with('success', 'Record updated successfully!');
    }
    public function photo(Request $request,  string $id)
    {
        $user = User::findOrFail($id);

        $data =  $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Memastikan tipe file adalah gambar (jpeg, png, jpg, gif) dan ukurannya tidak lebih dari 2MB
        ]);
        // Memeriksa apakah gambar sudah ada sebelumnya
        if ($user->profile_photo != null) {
                // Hapus gambar yang sudah ada sebelumnya
                Storage::delete('public/photo/'.$user->profile_photo);
        }

        // Mengambil file gambar dari request
        $image = $request->file('profile_photo');

        // Menyimpan gambar ke dalam direktori 'public/posts' dengan nama file yang dihasilkan menggunakan hash dari konten gambar
        $path = $image->storeAs('public/photo', $image->hashName());

        $user->update(['profile_photo'=> $image->hashName()]);
        //Flash a success message to the session
        return redirect()->route('data.data_petugas.show', ['id' => $id])->with('success', 'Record updated successfully!');
    }
    
}
