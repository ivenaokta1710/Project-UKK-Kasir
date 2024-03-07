<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
            // Add more validation rules for other columns
        ]);
        // berfungsi untuk mengenkripsi
        $validatedData['password'] = Hash::make($validatedData['password']);
        // berfungsi untuk memvalidasi data detail user
        $validasiDetailUser = $request->validate([
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required'
        ]);
        // Create a new record using the validated data
        $data = User::create($validatedData);
        // memanggil id dari users dan disimpan di detailUser
        $dataid_user = $data->id;
        $detailUser = new DetailUser($validasiDetailUser);
        $detailUser->id_user = $dataid_user;
        $detailUser->save();


        // Flash a success message to the session
        return redirect('/login')->with('success', 'Berhasil Melakukan Pendaftaran !');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
    public function reset(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email','=',$email);

        $password = $request->input('password');
        $repassword = $request->input('retypepassword');
        if($user->count() > 0 ){
            if($password == $repassword)
            {
                $password = Hash::make($password);
                $user->update(['password' => $password]);
                return redirect('/login')->with('success', 'Berhasil Melakukan Reset Password !');
            }else{
                return back()->withErrors([
                    'password' => 'Password not match',
                ]);
            }
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }
}
