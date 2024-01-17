<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataApoteker;

class DataApotekerController extends Controller
{
     public function index() {
         $data=DataApoteker::all();
         return view('admin.dataApoteker',  compact('data'));
    }
    public function deleteApoteker($id)
    {
        $apoteker = DataApoteker::find($id);
        $apoteker->delete();
        if ($apoteker) {
            return back()->with('success', 'Data Apoteker berhasil di hapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data Apoteker!');
        }
    }
}