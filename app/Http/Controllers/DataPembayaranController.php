<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DataPembayaran;
use App\Models\DataPemesanan;
use App\Models\dataPengiriman;
use Carbon;

class DataPembayaranController extends Controller
{
     public function index() {
         $data=DataPembayaran::all();
         return view('admin.dataPembayaran.dataPembayaran',  compact('data'));
    }
     public function detail($id) {
        $data = dataPembayaran::find($id);
        return view('admin.dataPembayaran.detail',compact('data'));
    }
    public function tambahdataPembayaran() {
         return view('admin.dataPembayaran.tambahdataPembayaran');
    }
    public function postPembayaranUser(Request $request) {
    $user = auth()->user();
    $pemesanan = DataPemesanan::latest()->first();
    $pengiriman = dataPengiriman::latest()->first();
    $request->validate([
        'kode_pemesanan' => 'required',
        'metode_pembayaran' => 'required',
        'metode_pengiriman' => 'required'
    ]);

    //dd($request->all()); // Uncomment this line for debugging purposes

    $pembayaran = new DataPembayaran;
    $pembayaran->kode_pemesanan = $request->kode_pemesanan;
    $pembayaran->nama_pemesan = $pemesanan->nama_pemesan;
    $pembayaran->tanggal_pemesanan = $pemesanan->tanggal_pemesanan;
    $pembayaran->alamat = $pengiriman->alamat_pengiriman; // Alamat diambil dari $pengiriman
    $pembayaran->metode_pengiriman = $request->metode_pengiriman;
    $pembayaran->metode_pembayaran = $request->metode_pembayaran;
    $pembayaran->obat = $pemesanan->nama_obat; // Data diambil dari $pemesanan
    $pembayaran->kuantitas = $pemesanan->kuantitas;
    $pembayaran->harga = $pemesanan->harga_obat;
    $pembayaran->total_belanja = $request->total_belanja;
    $pembayaran->gambar = $pemesanan->gambar;
    // Menambah logika untuk status berdasarkan metode pembayaran
    if ($request->metode_pembayaran == 'Transfer Bank') {
        $pembayaran->status = 'menunggu pembayaran';
    } elseif ($request->metode_pembayaran == 'Bayar Di tempat (COD)') {
        $pembayaran->status = 'sedang dikemas';
    }
    $pembayaran->id_user = $user->id; // id_user diambil dari user

    
    $pembayaran->save();
   if ($pembayaran) {
    // Redirect setelah penyimpanan data
    if ($request->metode_pembayaran == 'Transfer Bank') {
        return redirect('/halaman-transfer')->with('success', 'Pemesanan Anda Berhasil Dibuat');
    } elseif ($request->metode_pembayaran == 'Bayar Di tempat (COD)') {
        return redirect('/halaman-cod')->with('success', 'Pemesanan Anda Berhasil Dibuat');
    } else {
        return redirect('/admin/DataPemesanan')->with('success', 'Data Pembayaran Berhasil Dibuat!');
    }
} else {
    return back()->with('failed', 'Maaf, terjadi kesalahan, coba kembali beberapa saat!');
}

}
public function editPembayaran($id) {
        $data = DataPembayaran::find($id);
        return view('admin.datapembayaran.edit', compact('data'));
    }

    public function PosteditPembayaran(Request $request, $id) {
    $request->validate([
        'nama_pemesan' => 'required',
        'metode_pengiriman' => 'required',
        'metode_pembayaran' => 'required',
        'obat' => 'required',
        'kuantitas' => 'required',
        'harga' => 'required',
        'total_belanja' => 'required',
        'status' => 'required',
        'id_user' => 'required',
        'gambar' => 'required',
    ]);

    $pembayaran = DataPembayaran::find($id);

    $pembayaran->nama_pemesan = $request->nama_pemesan;
    $pembayaran->metode_pengiriman = $request->metode_pengiriman;
    $pembayaran->metode_pembayaran = $request->metode_pembayaran;
    $pembayaran->obat = $request->obat;
    $pembayaran->kuantitas = $request->kuantitas;
    $pembayaran->harga = $request->harga;
    $pembayaran->total_belanja = $request->total_belanja;
    $pembayaran->status = $request->status;
    $pembayaran->id_user = $request->id_user;

    $pembayaran->save();

    return redirect()->route('admin.dataPembayaran')->with('success', 'Data pembayaran berhasil diupdate.');
}

public function deletePembayaran($id)
    {
        $pembayaran = Datapembayaran::find($id);
        $pembayaran->delete();
        if ($pembayaran) {
            return back()->with('success', 'Data Pembayaran berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data Pembayaran!');
        }
    }
}