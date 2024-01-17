<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\JenisObatController;
use App\Http\Controllers\DataApotekerController;
use App\Http\Controllers\DataPengirimanController;
use App\Http\Controllers\DataPemesananController;
use App\Http\Controllers\DataPembayaranController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuktiPembayaranController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/batal', function () {
    return view('user.batal');
});
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');


Route::middleware(['guest'])->group(function () {
    Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
    Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
    Route::get('/registrasi', [LoginRegisterController::class, 'register'])->name('auth.register');
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('auth.login');
    
});

//post pemesanan pindah disini dulu



Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/home', [LoginRegisterController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user');
    Route::get('/admin/tambah', [UserController::class, 'tambah'])->name('admin.tambahUser');
    Route::post('/postUser', [UserController::class, 'postUser'])->name('admin.postUser');
    Route::get('/editUser/{id}', [UserController::class, 'editUser'])->name('editUser');
    Route::post('/postEditUser/{id}', [UserController::class, 'postEditUser'])->name('postEditUser');
    Route::get('/deleteUser/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::get('/admin/tambahdataObat', [ObatController::class, 'tambahdataObat'])->name('admin.tambahdataObat');
    Route::get('/admin/dataObat', [ObatController::class, 'index'])->name('admin.dataObat');
    Route::get('/admin/dataObat/detail/{id}', [ObatController::class, 'detail'])->name('admin.detailObat');
    Route::get('/search', [ObatController::class, 'search'])->name('search');
    Route::get('/admin/jenisObat', [JenisObatController::class, 'index'])->name('admin.jenisObat');
    Route::get('/admin/DataApoteker', [DataApotekerController::class, 'index'])->name('admin.dataApoteker');
    Route::get('/admin/DataPengiriman', [DataPengirimanController::class, 'index'])->name('admin.dataPengiriman');
    Route::get('/admin/DataPembayaran', [DataPembayaranController::class, 'index'])->name('admin.dataPembayaran');
    Route::get('/admin/BuktiPembayaran', [BuktiPembayaranController::class, 'index'])->name('admin.BuktiPembayaran');
    Route::get('/admin/DataPemesanan', [DataPemesananController::class, 'index'])->name('admin.dataPemesanan');
    Route::get('/admin/dataPemesanan/detail/{id}', [DataPemesananController::class, 'detail'])->name('admin.detailPemesanan');
    Route::get('/admin/dataPembayaran/detail/{id}', [DataPembayaranController::class, 'detail'])->name('admin.detailPembayaran');
    Route::get('/admin/tambahdataPemesanan', [DataPemesananController::class, 'tambahdataPemesanan'])->name('admin.tambahdataPemesanan');
    Route::get('/admin/tambahdataPembayaran', [DataPembayaranController::class, 'tambahdataPembayaran'])->name('admin.tambahdataPembayaran');
    Route::post('/postPemesanan', [DataPemesananController::class, 'postPemesanan'])->name('admin.postPemesanan');
    Route::post('/postPembayaran', [DataPembayaranController::class, 'postPembayaran'])->name('admin.postPembayaran');
    Route::get('/editPemesanan/{id}', [DataPemesananController::class, 'editPemesanan'])->name('editPemesanan');
    Route::get('/editPengiriman/{id}', [DataPengirimanController::class, 'editPengiriman'])->name('editPengiriman');
    Route::post('/postEditPengiriman/{id}', [DataPengirimanController::class, 'PosteditPengiriman'])->name('admin.Edit.postPengiriman');
    Route::get('/editPembayaran/{id}', [DataPembayaranController::class, 'editPembayaran'])->name('editPembayaran');
    Route::post('/posteditPemesanan/{id}', [DataPemesananController::class, 'PosteditPemesanan'])->name('admin.posteditPemesanan');
    Route::post('/posteditPembayaran/{id}', [DataPembayaranController::class, 'PosteditPembayaran'])->name('admin.posteditPembayaran');
    Route::get('/deletePemesanan/{id}', [DataPemesananController::class, 'deletePemesanan'])->name('deletePemesanan');
    Route::get('/deleteApoteker/{id}', [DataApotekerController::class, 'deleteApoteker'])->name('deleteApoteker');
    Route::get('/deletePembayaran/{id}', [DataPembayaranController::class, 'deletePembayaran'])->name('deletePembayaran');
    Route::get('/deletePengiriman/{id}', [DataPengirimanController::class, 'deletePengiriman'])->name('deletePengiriman');
    Route::get('/editObat/{id}', [ObatController::class, 'editObat'])->name('editObat');
    Route::post('/postObat', [ObatController::class, 'postObat'])->name('admin.postObat');
    Route::post('/postEditObat/{id}', [ObatController::class, 'PosteditObat'])->name('admin.Edit.postObat');
    Route::get('/deleteObat/{id}', [ObatController::class, 'deleteObat'])->name('deleteObat');

});

Route::group(['middleware' => ['auth', 'checklevel:pengguna']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
    Route::get('/search', [HomeController::class, 'search'])->name('search');
    Route::get('/Bebas', [HomeController::class, 'bebas'])->name('kategori.bebas');
    Route::get('/BebasTerbatas', [HomeController::class, 'bebasTerbatas'])->name('kategori.bebasTerbatas');
    Route::get('/Keras', [HomeController::class, 'keras'])->name('kategori.keras');
    Route::get('/detail/{id}', [LoginRegisterController::class, 'Detail'])->name('user.detail');
    Route::get('/user/tentang', [HomeController::class, 'tentang'])->name('user.tentang');
    Route::get('/beli/{id}', [HomeController::class, 'pemesanan'])->name('user.pemesanan');
    Route::get('/pengiriman', [HomeController::class, 'pengiriman'])->name('user.pengiriman');
    Route::get('/RiwayatPemesanan', [HomeController::class, 'dataPemesanan'])->name('user.pemesanan.data');
    Route::get('/user/RiwayatPemesanan/detail/{id}', [HomeController::class, 'detail'])->name('user.detailRiwayat');
    Route::post('/postPemesanan/user', [DataPemesananController::class, 'postPemesananUser'])->name('admin.postPemesanan.user');
    Route::post('/postPengiriman/user', [DataPengirimanController::class, 'postPengirimanUser'])->name('postPengiriman.user');
    Route::get('/pembayaran', [HomeController::class, 'pembayaran'])->name('user.pembayaran');
    Route::post('/postPembayaran/user', [DataPembayaranController::class, 'postPembayaranUser'])->name('postPembayaran.user');
    Route::get('/halaman-transfer', [HomeController::class, 'transfer'])->name('user.transfer');
     Route::post('/postBuktiTf/user', [BuktiPembayaranController::class, 'postBuktiPembayaran'])->name('postBuktiTf.user');
    Route::get('/halaman-cod', [HomeController::class, 'cod'])->name('user.cod');
});