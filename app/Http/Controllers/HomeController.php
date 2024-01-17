<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataObat;
use App\Models\DataPemesanan;
use App\Models\dataPengiriman;
use App\Models\dataPembayaran;
use Carbon\Carbon;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function search(Request $request)
    {
        $nama_obat = $request->input('nama_obat');

        // Lakukan pencarian berdasarkan nama_obat di database
        $data = DataObat::where('nama_obat', 'like', '%'.$nama_obat.'%')->get();

        // Kirim data hasil pencarian ke view atau sesuai kebutuhan Anda
        return view('user.home', compact('data'));
    }

    public function bebas(Request $request)
    {
        // Lakukan pencarian berdasarkan nama_obat di database
        $data = DataObat::where('kategori', 'bebas')->get();

        // Kirim data hasil pencarian ke view atau sesuai kebutuhan Anda
        return view('user.home', compact('data'));
    }

    public function bebasTerbatas(Request $request)
    {
        // Lakukan pencarian berdasarkan nama_obat di database
        $data = DataObat::where('kategori', 'bebas terbatas')->get();

        // Kirim data hasil pencarian ke view atau sesuai kebutuhan Anda
        return view('user.home', compact('data'));
    }

    public function keras(Request $request)
    {
        // Lakukan pencarian berdasarkan nama_obat di database
        $data = DataObat::where('kategori', 'keras')->get();

        // Kirim data hasil pencarian ke view atau sesuai kebutuhan Anda
        return view('user.home', compact('data'));
    }

    public function tentang() {
        return view('user.tentang');
    }
    public function pemesanan($id) {
        $data = DataObat::find($id);
        $currentDate = Carbon::now()->toDateString();
        return view('user.pemesanan.pemesanan', compact('data', 'currentDate'));
    }
     public function detail($id) {
        $data = dataPembayaran::find($id);
        return view('user.detailRiwayat',compact('data'));
    }
    public function pengiriman() {
        $pemesananTerakhir = DataPemesanan::latest()->first();
        $namaPemesanTerakhir = $pemesananTerakhir->nama_pemesan;
        $hargaObat = $pemesananTerakhir->harga_obat;
        $totalHarga = $pemesananTerakhir->total_harga;
        return view('user.pengiriman', compact('pemesananTerakhir', 'namaPemesanTerakhir', 'hargaObat', 'totalHarga'));
    }
    public function datapemesanan() {
        $user = auth()->user();
        $data = DataPembayaran::where('id_user', $user->id)->get();
        return view('user.pemesanan.dataPemesanan', compact('data'));
    }
    public function pembayaran() {
        $kode_pemesanan = "PS" . Carbon::now()->format('YmdHis') . Str::random(6);
        $pemesananTerakhir = DataPemesanan::latest()->first();
        $pengirimanTerakhir = dataPengiriman::latest()->first();
        $namaPemesanTerakhir = $pemesananTerakhir->nama_pemesan;
        $namaObat = $pemesananTerakhir->nama_obat;
        $gambarObat = $pemesananTerakhir->gambar;
        $kuantitas = $pemesananTerakhir->kuantitas;
        $hargaObat = $pemesananTerakhir->harga_obat;
        $totalHarga = $pemesananTerakhir->total_harga;
        $alamat = $pengirimanTerakhir->alamat_pengiriman;
        return view('user.pembayaran.pembayaran', compact('kode_pemesanan' ,'pemesananTerakhir', 'namaPemesanTerakhir', 'namaObat', 'gambarObat', 'kuantitas', 'hargaObat', 'totalHarga', 'alamat'));
    }
    public function transfer() {
        $currentDate = Carbon::now()->toDateString();
        return view('user.pembayaran.transfer', compact('currentDate'));
    }
    public function cod() {
        return view('user.pembayaran.cod');
    }
}