<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Merchandise;
use App\Models\Legalitas;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil 6 video terbaru dan 4 produk terbaru
        $portofolios = Portofolio::latest()->take(3)->get(); //hapuskan ->take(6) jika ingin menampilkan semua video
        $merchandises = Merchandise::latest()->take(4)->get();

        // Mengirim data ke file view bernama 'home'
        return view('home', compact('portofolios', 'merchandises'));
    }

    public function legalitas()
    {

        // Mengambil semua data legalitas dari database
        $legalitas = Legalitas::latest()->get();
        return view('legalitas', compact('legalitas'));
    }
}