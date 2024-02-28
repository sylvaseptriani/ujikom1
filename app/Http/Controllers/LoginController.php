<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function registrasi()
    {
        return view('auth.registrasi');
    }

    public function auth(Request $request)
    {

        // VALIDASI DATA YANG MASUK
        $validasi = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:5',
            ],
            [
                'email.required' => 'Email harus di isi',
                'password.required' => 'Password harus di isi dan minimal 5 karekter',
            ],
        );

        // PROSES AUTHTENTICATION
        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();

            // KALO DATA NYA SAMA MAKA ARAHKAN KE PELANGGAN
        return redirect('pelanggan')->with('success', 'Berhasil login');
        
            
        } else {
            return redirect('/')->withErrors('Email atau password yang di masukan tidak sesuai');
        }

        //KALO DATANYA TIDAK SAMA MAKA KEMBALI KE HALAMAN SEMULA
        return back();
    }

    public function logout()
    {
        Auth::logout(); // PROSES LOGOUTa
        return redirect('/')->with('success', 'Berhasil logout'); // KALO BERHASIL LOGOUT KE HALAMAN LOGIN
    }

    public function auth_regis(Request $request)
    {
        // MENYIMPAN DATA SEMENTARA
        Session::flash('name', $request->username);
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);
        Session::flash('role', $request->role);

        // PROSES VALIDASI 
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:5',
                'role' => 'required',
            ],
            [
                'name.required' => 'name wajib di isi',
                'email.required' => 'Email wajib di isi',
                'password.required' => 'Password wajib di isi',
                'role.required' => 'Role wajib di isi',
            ],
        );

        // PROSES MENYIMPAN REQUEST KE VARIABEL $DATA
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ];

        User::create($data); // PROSES CREATE DATA
        return back()->with('success', 'Berhasil melakukan registrasi'); // PROSES REDIRECT KE HALAMAN SEMULA
    }



}