<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $data=User::all();
         return view('admin.user.user', compact('data'));
    }

     public function tambah() {
         return view('admin.user.tambah');
    }

    public function postUser(Request $request) {
    $request->validate([
        'username' => 'required',
        'email' => 'required|email:dns',
        'password' => 'required|min:8|max:20',
        'no_hp' => 'required',
        'alamat' => 'required',
        'level' => 'required'
    ]);
    $user = new User;
    
    $user->username = $request->username;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->no_hp = $request->no_hp;
    $user->alamat = $request->alamat;
    $user->level = $request->level;
    $user->save();
    if($user){
    return redirect('/admin/user')->with('success', 'Akun berhasil dibuat, silahkan melakukan proses login!');
    } else {
    return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}
public function editUser($id) {
        $data = User::find($id);
        return view('admin.user.edit', compact('data'));
    }

    public function postEditUser(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email:dns',
            'no_hp' => 'required',
            'alamat' => 'required',
            'level' => 'required'
        ]);

        $user = User::find($id);

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->no_hp = $request->no_hp;
        $user->alamat = $request->alamat;
        $user->level = $request->level;

        $user->save();

        if ($user) {
            return redirect('/admin/user')->with('success', 'Buku berhasil diupdate!');
        } else {
            return back()->with('failed', 'Buku gagal diupdate!');
        }
    }

public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        if ($user) {
            return back()->with('success', 'Data User berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data User!');
        }
    }
}