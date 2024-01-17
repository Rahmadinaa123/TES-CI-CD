<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataObat;
 
class ObatController extends Controller
{

     public function index() {
         $data=DataObat::all();
         return view('admin.dataObat.dataObat',compact('data'));
    }
    public function search(Request $request)
    {
        $nama_obat = $request->input('nama_obat');

        // Lakukan pencarian berdasarkan nama_obat di database
        $data = DataObat::where('nama_obat', 'like', '%'.$nama_obat.'%')->get();

        // Kirim data hasil pencarian ke view atau sesuai kebutuhan Anda
        return view('admin.dataObat', compact('data'));
    }
    public function detail($id) {
        $data = dataObat::find($id);
        return view('admin.dataObat.detail',compact('data'));
    }
     public function tambahdataObat() {
         return view('admin.dataObat.tambahdataObat');
    }
      public function postObat(Request $request) {
        $request->validate([
            'nama_obat' => 'required',
            'no_edar' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'komposisi' => 'required',
            'kemasan' => 'required',
            'dosis' => 'required',
            'manfaat' => 'required',
            'cara_mengonsumsi' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
     $obat = new DataObat;
        $obat->nama_obat = $request->nama_obat;
        $obat->no_edar = $request->no_edar;
        $obat->kategori = $request->kategori;
        $obat->harga = $request->harga;
        $obat->deskripsi = $request->deskripsi;
        $obat->komposisi = $request->komposisi;
        $obat->kemasan = $request->kemasan;
        $obat->dosis = $request->dosis;
        $obat->manfaat = $request->manfaat;
        $obat->cara_mengonsumsi = $request->cara_mengonsumsi;
        $obat->keterangan = $request->keterangan;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $obat->gambar = $filename;
        }

        $obat->save();
    if($obat){
    return redirect('/admin/dataObat')->with('success', 'Akun berhasil dibuat, silahkan melakukan proses login!');
    } else {
    return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
    }
}
public function editobat($id) {
    $data = DataObat::find($id);
    return view('admin.dataObat.edit', compact('data'));
}

public function PosteditObat(Request $request, $id) {
    $request->validate([
        'nama_obat' => 'required',
        'no_edar' => 'required',
        'kategori' => 'required',
        'harga' => 'required',
        'deskripsi' => 'required',
        'komposisi' => 'required',
        'kemasan' => 'required',
        'dosis' => 'required',
        'manfaat' => 'required',
        'cara_mengonsumsi' => 'required',
        'keterangan' => 'required',
        'gambar' => 'image|max:5120', // Ganti 'required' menjadi 'image' karena bisa diubah atau tidak
    ]);

    $obat = DataObat::find($id);

    $obat->nama_obat = $request->nama_obat;
    $obat->no_edar = $request->no_edar;
    $obat->kategori = $request->kategori;
    $obat->harga = $request->harga;
    $obat->deskripsi = $request->deskripsi;
    $obat->komposisi = $request->komposisi;
    $obat->kemasan = $request->kemasan;
    $obat->dosis = $request->dosis;
    $obat->manfaat = $request->manfaat;
    $obat->cara_mengonsumsi = $request->cara_mengonsumsi;
    $obat->keterangan = $request->keterangan;

    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('images/', $filename);
        $obat->gambar = $filename;
    }

    $obat->save();

    return redirect()->route('admin.dataObat')->with('success', 'Data obat berhasil diupdate.');
}


public function deleteObat($id)
    {
        $obat = DataObat::find($id);
        $obat->delete();
        if ($obat) {
            return back()->with('success', 'Data Obat berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data Obat!');
        }
    }
}