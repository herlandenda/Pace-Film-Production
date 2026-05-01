<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil 3 video terbaru dan 4 produk terbaru
        $portofolios = Portofolio::latest()->take(3)->get();
        $products = Product::latest()->take(4)->get();

        // Mengirim data ke file view bernama 'home'
        return view('home', compact('portofolios', 'products'));
    }

    public function legalitas()
    {

        // Mengirim data ke file view bernama 'portofolio.show'
        return view('legalitas',);
    }
}