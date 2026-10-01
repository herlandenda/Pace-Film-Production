<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\LegalitasController;


use App\Models\Portofolio;
use App\Models\Merchandise;
use App\Models\Legalitas;

Route::get('/', [HomeController::class, 'index']);

Route::get('/legalitas', [HomeController::class, 'legalitas']);

// Route untuk Login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Route yang hanya bisa diakses kalau sudah login (Dashboard Admin)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard', function () {
        $totalPortofolio = Portofolio::count();
        $totalMerchandise = Merchandise::count();
        $totalLegalitas = Legalitas::count();
        return view('admin.dashboard', compact('totalPortofolio', 'totalMerchandise', 'totalLegalitas'));
    })->name('admin.dashboard');
    
    // Route untuk menu Portofolio
    Route::get('/admin/portofolio', [PortofolioController::class, 'index'])->name('admin.portofolio.index');

    // Route untuk menampilkan form tambah video
    Route::get('/admin/portofolio/create', [PortofolioController::class, 'create'])->name('admin.portofolio.create');
    
    // Route untuk menyimpan data video baru ke database
    Route::post('/admin/portofolio', [PortofolioController::class, 'store'])->name('admin.portofolio.store');

    // Route untuk menampilkan form edit dan memproses update
    Route::get('/admin/portofolio/{id}/edit', [PortofolioController::class, 'edit'])->name('admin.portofolio.edit');
    Route::put('/admin/portofolio/{id}', [PortofolioController::class, 'update'])->name('admin.portofolio.update');
    
    // Route untuk menghapus data
    Route::delete('/admin/portofolio/{id}', [PortofolioController::class, 'destroy'])->name('admin.portofolio.destroy');

    // Route untuk CRUD Merchandise
    Route::resource('/admin/merchandise', MerchandiseController::class, [
        'as' => 'admin'
    ]);

    // Route untuk CRUD Legalitas & Piagam
Route::resource('/admin/legalitas', LegalitasController::class, [
    'as' => 'admin'
]);



});