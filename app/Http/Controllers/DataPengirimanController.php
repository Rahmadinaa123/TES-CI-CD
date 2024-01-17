<?php

namespace App\Http\Controllers;

use App\Models\dataPengiriman;
use App\Models\DataPemesanan;
use Illuminate\Http\Request;

class DataPengirimanController extends Controller
{
    public function index() {
         $data=dataPengiriman::all();
         return view('admin.dataPengiriman.dataPengiriman',compact('data'));
    }
     public function tambahdataPengiriman() {
         return view('admin.dataPengiriman.tambahdataPengiriman');
    }
    public function postPengiriman(Request $request) {
    $request->validate([
        'alamat_pengiriman' => 'required',
        'nama_pelanggan' => 'required',
        'nama_pemesan' => 'required',
        'no_hp' => 'required',
        'total_harga_barang' => 'required',
        'total_belanja' => 'required'
    ]);

    $pengiriman = new dataPengiriman;
    $pengiriman->alamat_pengiriman = $request->alamat_pengiriman;
    $pengiriman->nama_pelanggan = $request->nama_pelanggan;
    $pengiriman->nama_pemesan = $request->nama_pemesan;
    $pengiriman->no_hp = $request->no_hp;
    $pengiriman->total_harga_barang = $request->total_harga_barang;
    $pengiriman->total_belanja = $request->total_belanja;
    $pengiriman->save();
    if($pengiriman){
    return redirect('/admin/DataPengiriman')->with('success', 'Data Pengirimann Berhasil Dibuat!');
    } else {
    return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}
public function editPengiriman($id) {
        $data = dataPengiriman::find($id);
        return view('admin.datapengiriman.edit', compact('data'));
    }
    public function PosteditPengiriman(Request $request, $id) {
    $request->validate([
        'alamat_pengiriman' => 'required',
        'nama_pelanggan' => 'required',
        'no_hp' => 'required',
        'total_harga_barang' => 'required',
        'total_belanja' => 'required'
    ]);
    //dd($request->all());

    $pengiriman = dataPengiriman::find($id);
    $pengiriman->alamat_pengiriman = $request->alamat_pengiriman;
    $pengiriman->nama_pelanggan = $request->nama_pelanggan;
    $pengiriman->no_hp = $request->no_hp;
    $pengiriman->total_harga_barang = $request->total_harga_barang;
    $pengiriman->total_belanja = $request->total_belanja;
    $pengiriman->save();
    if($pengiriman){
    return redirect('/admin/DataPengiriman')->with('success', 'Data Pengirimann Berhasil Diubah!');
    } else {
    return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}
public function deletePengiriman($id)
    {
        $pengiriman = dataPengiriman::find($id);
        $pengiriman->delete();
        if ($pengiriman) {
            return back()->with('success', 'Data Pengiriman berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data Pengiriman!');
        }
    }

    public function postPengirimanUser(Request $request) {
    $user = auth()->user();
    $pemesanan = DataPemesanan::latest()->first();
    $request->validate([
        'alamat_pengiriman' => 'required',
        'total_harga_barang' => 'required',
        'total_belanja' => 'required'
    ]);

    // dd($request->all());

    $pengiriman = new dataPengiriman;
    $pengiriman->alamat_pengiriman = $request->alamat_pengiriman;
    $pengiriman->nama_pelanggan = $pemesanan->nama_pemesan;
    $pengiriman->no_hp = $user->no_hp;
    $pengiriman->total_harga_barang = $request->total_harga_barang;
    $pengiriman->total_belanja = $request->total_belanja;
    $pengiriman->save();
    if($pengiriman){
    return redirect('/pembayaran')->with('success', 'Data Pengirimann Berhasil Dibuat!');
    } else {
    return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}
}