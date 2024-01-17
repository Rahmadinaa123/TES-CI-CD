<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuktiPembayaran;

class BuktiPembayaranController extends Controller
{
    public function index() {
         $data=BuktiPembayaran::all();
         return view('admin.dataPembayaran.buktiPembayaran',  compact('data'));
    }

    public function postBuktiPembayaran(Request $request) {
    $user = auth()->user();
    $request->validate([
            'tanggal_pembayaran' => 'required',
            'kode_pemesanan' => 'required',
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

    $bukti = new BuktiPembayaran;
    $bukti->nama_pemesan = $user->username;
    $bukti->kode_pemesanan = $request->kode_pemesanan;
    $bukti->tanggal_pembayaran = $request->tanggal_pembayaran;
    $bukti->id_user = $user->id;
    if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $bukti->bukti_pembayaran = $filename;
        }

    $bukti->save();
    if($bukti){
    return redirect('/RiwayatPemesanan')->with('success', 'Bukti Pembayaran Berhasil dikirim');
    } else {
    return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}
}