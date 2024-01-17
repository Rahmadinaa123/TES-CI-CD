<?php

namespace App\Http\Controllers;

use App\Models\DataPembayaran;
use App\Models\DataPemesanan;
use App\Models\Obat;
use App\Models\User;
use App\Models\DataObat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginRegisterController extends Controller
{
    public function userHome(Request $request) {
        $data = DataObat::all();
        return view('user.home', compact('data'));
    }
    public function Detail($id) {
        $data = dataObat::find($id);
        return view('user.detailObat', compact('data'));
    }
    public function adminHome() {
        $user = User::Count();
        $obat = DataObat::Count();
        $pemesanan = DataPemesanan::Count();
        $pembayaran = DataPembayaran::Count();
        return view('admin.home', compact('user','obat','pemesanan', 'pembayaran')) ;
    }
    
    public function login() {
        return view('auth.login');
    }
     public function register() {
        return view('auth.register');
    }

    public function postRegister(Request $request) {
    $request->validate([
        'username' => 'required',
        'email' => 'required|email:dns',
        'password' => 'required|min:8|max:20',
        'no_hp' => 'required',
        'alamat' => 'required',
    ]);
    
    $user = new User;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->no_hp = $request->no_hp;
    $user->alamat = $request->alamat;
    $user->level = 'pengguna';
    $user->save();
    if($user){
    return redirect('/login')->with('success', 'Akun berhasil dibuat, silahkan melakukan proses login!');
    } else {
    return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}

public function postLogin(Request $request) { 
    $request->validate([
        'email' => 'required|email:dns',
        'password' => 'required|min:8|max:20'
    ]);
    if(Auth::attempt($request->only('email', 'password'))) {
        $user = Auth::user();
        if ($user->level == 'pengguna') {
            return redirect('/user/home');
        } elseif ($user->level == 'admin') {
            return redirect('/admin/home');
        } else {
        // Jika level tidak sesuai dengan 'pengguna' atau 'admin', logout pengguna
        Auth::logout();
        return redirect('/login')->with('error', 'Anda tidak memiliki akses.');
        }
    }
    return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
}

public function logout() {
    Auth::logout();
    return redirect('/');
}
}