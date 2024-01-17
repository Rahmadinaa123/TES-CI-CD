<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPemesanan;

class DataPemesananController extends Controller
{
     public function index() {
         $data=DataPemesanan::all();
         return view('admin.dataPemesanan.dataPemesanan',  compact('data'));
    }
     public function detail($id) {
        $data = dataPemesanan::find($id);
        return view('admin.dataPemesanan.detail',compact('data'));
    }
    public function tambahdataPemesanan() {
         return view('admin.dataPemesanan.tambahdataPemesanan');
    }
    public function postPemesanan(Request $request) {
    $request->validate([
        'nama_pemesan' => 'required',
        'nama_obat' => 'required',
        'tanggal_pemesanan' => 'required',
        'harga_obat' => 'required',
        'kuantitas' => 'required',
        'total_harga' => 'required',
        'waktu_pengiriman' => 'required',
        'gambar' => 'image',
        'id_user' => 'required'
    ]);

    // dd($request->all());
    
    $pemesanan = new DataPemesanan;
    $pemesanan->nama_pemesan = $request->nama_pemesan;
    $pemesanan->nama_obat = $request->nama_obat;
    $pemesanan->tanggal_pemesanan = $request->tanggal_pemesanan;
    $pemesanan->harga_obat = $request->harga_obat;
    $pemesanan->kuantitas = $request->kuantitas;
    $pemesanan->total_harga = $request->total_harga;
    $pemesanan->waktu_pengiriman = $request->waktu_pengiriman;
    $pemesanan->id_user = $request->id_user;
    // $pemesanan->id_user = $request->id_user;

    if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $pemesanan->gambar = $filename;
        }

    $pemesanan->save();
    if($pemesanan){
    return redirect('/admin/DataPemesanan')->with('success', 'Data Pemesanan Berhasil Dibuat!');
    } else {
    return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}

public function editPemesanan($id) {
        $data = DataPemesanan::find($id);
        return view('admin.datapemesanan.edit', compact('data'));
    }

    public function PosteditPemesanan(Request $request, $id) {
    $request->validate([
        'nama_pemesan' => 'required',
        'nama_obat' => 'required',
        'tanggal_pemesanan' => 'required',
        'harga_obat' => 'required',
        'kuantitas' => 'required',
        'total_harga' => 'required',
        'waktu_pengiriman' => 'required',
        'id_user' => 'required',
        'gambar' => 'image|max:5120', // Ganti 'required' menjadi 'image' karena bisa diubah atau tidak
    ]);

    $pemesanan = DataPemesanan::find($id);

    $pemesanan->nama_pemesan = $request->nama_pemesan;
    $pemesanan->nama_obat = $request->nama_obat;
    $pemesanan->tanggal_pemesanan = $request->tanggal_pemesanan;
    $pemesanan->harga_obat = $request->harga_obat;
    $pemesanan->kuantitas = $request->kuantitas;
    $pemesanan->total_harga = $request->total_harga;
    $pemesanan->waktu_pengiriman = $request->waktu_pengiriman;
    $pemesanan->id_user = $request->id_user;

    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('images/', $filename);
        $pemesanan->gambar = $filename;
    }

    $pemesanan->save();

    return redirect()->route('admin.dataPemesanan')->with('success', 'Data Pemesanan berhasil diupdate.');
}

public function deletePemesanan($id)
    {
        $pemesanan = DataPemesanan::find($id);
        $pemesanan->delete();
        if ($pemesanan) {
            return back()->with('success', 'Data Pemesanan berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data Pemesanan!');
        }
    }
    public function postPemesananUser(Request $request) {
    $request->validate([
        'nama_pemesan' => 'required',
        'nama_obat' => 'required',
        'tanggal_pemesanan' => 'required',
        'harga_obat' => 'required',
        'kuantitas' => 'required',
        'total_harga' => 'required',
        'waktu_pengiriman' => 'required',
        'id_user' => 'required'
    ]);

    // dd($request->all());
    
    $pemesanan = new DataPemesanan;
    $pemesanan->nama_pemesan = $request->nama_pemesan;
    $pemesanan->nama_obat = $request->nama_obat;
    $pemesanan->tanggal_pemesanan = $request->tanggal_pemesanan;
    $pemesanan->harga_obat = $request->harga_obat;
    $pemesanan->kuantitas = $request->kuantitas;
    $pemesanan->total_harga = $request->total_harga;
    $pemesanan->waktu_pengiriman = $request->waktu_pengiriman;
    $pemesanan->id_user = $request->id_user;
    $pemesanan->gambar = $request->gambar;

    $pemesanan->save();
    if($pemesanan){
    return redirect('/pengiriman')->with('success', 'Data Pemesanan Berhasil Dibuat!');
    } else {
    return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}
}