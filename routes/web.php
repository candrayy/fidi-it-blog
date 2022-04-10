<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenandaController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\ItController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\CreativeController;
use App\Http\Controllers\ProgrammingController;
use App\Http\Controllers\SysanalystController;
use App\Http\Controllers\BussanalystController;
use App\Http\Controllers\QaController;
use App\Http\Controllers\ManproController;
use App\Http\Controllers\AsmmController;
use App\Http\Controllers\SdmpcController;
use App\Http\Controllers\AcmController;
use App\Http\Controllers\SdmdcController;
use App\Http\Controllers\UiController;
use App\Http\Controllers\VidcreatorController;
use App\Http\Controllers\ContcreatorController;
use App\Http\Controllers\DesgraphicController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// User
// User Home
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/search', [BerandaController::class, 'search'])->name('search');
Route::get('/detail/{slug}', [BerandaController::class, 'detail']);


// IT Development Home
Route::get('/it-development', [ItController::class, 'index'])->name('it-development');
Route::get('/detail/{slug}', [ItController::class, 'detail']);
// Programming Home
Route::get('/programming', [ProgrammingController::class, 'index'])->name('programming');
Route::get('/detail/{slug}', [ProgrammingController::class, 'detail']);
// Systems Analyst Home
Route::get('/systems-analyst', [SysanalystController::class, 'index'])->name('systems-analyst');
Route::get('/detail/{slug}', [SysanalystController::class, 'detail']);
// Business Analyst Home
Route::get('/business-analyst', [BussanalystController::class, 'index'])->name('business-analyst');
Route::get('/detail/{slug}', [BussanalystController::class, 'detail']);
// QA Analyst Home
Route::get('/quality-assurance', [QaController::class, 'index'])->name('quality-assurance');
Route::get('/detail/{slug}', [QaController::class, 'detail']);
// Manpro Home
Route::get('/management-project', [ManproController::class, 'index'])->name('management-project');
Route::get('/detail/{slug}', [ManproController::class, 'detail']);


// Digital Marketing Home
Route::get('/digital-marketing', [MarketingController::class, 'index'])->name('digital-marketing');
Route::get('/detail/{slug}', [MarketingController::class, 'detail']);
// Asmm Home
Route::get('/audit-social-media-marketing', [AsmmController::class, 'index'])->name('audit-social-media-marketing');
Route::get('/detail/{slug}', [AsmmController::class, 'detail']);
// Sdmpc Home
Route::get('/strategic-digital-marketing-plan-content', [SdmpcController::class, 'index'])->name('strategic-digital-marketing-plan-content');
Route::get('/detail/{slug}', [SdmpcController::class, 'detail']);
// Acm Home
Route::get('/audit-content-marketing', [AcmController::class, 'index'])->name('audit-content-marketing');
Route::get('/detail/{slug}', [AcmController::class, 'detail']);
// Sdmdc Home
Route::get('/strategic-digital-marketing-distribution-content', [SdmdcController::class, 'index'])->name('strategic-digital-marketing-distribution-content');
Route::get('/detail/{slug}', [SdmdcController::class, 'detail']);


// Digital Creative Home
Route::get('/digital-creative', [CreativeController::class, 'index'])->name('digital-creative');
Route::get('/detail/{slug}', [CreativeController::class, 'detail']);
// UI/UX Home
Route::get('/ui-ux', [UiController::class, 'index'])->name('ui-ux');
Route::get('/detail/{slug}', [UiController::class, 'detail']);
// Video Creator Home
Route::get('/video-creator', [VidcreatorController::class, 'index'])->name('video-creator');
Route::get('/detail/{slug}', [VidcreatorController::class, 'detail']);
// Content Creator Home
Route::get('/content-creator', [ContcreatorController::class, 'index'])->name('content-creator');
Route::get('/detail/{slug}', [ContcreatorController::class, 'detail']);
// Design Graphic Home
Route::get('/design-graphic', [DesgraphicController::class, 'index'])->name('design-graphic');
Route::get('/detail/{slug}', [DesgraphicController::class, 'detail']);





// Admin
// Admin Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/post-login', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin Home
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    

    // Kategori
    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/tambah-kategori', [KategoriController::class, 'create'])->name('tambah-kategori');
    Route::post('/simpan-kategori', [KategoriController::class, 'store'])->name('simpan-kategori');
    Route::get('/edit-kategori/{id}', [KategoriController::class, 'edit'])->name('edit-kategori');
    Route::post('/ubah-kategori/{id}', [KategoriController::class, 'update'])->name('ubah-kategori');
    Route::get('/hapus-kategori/{id}', [KategoriController::class, 'destroy'])->name('hapus-kategori');
    
    // Penanda
    Route::get('/penanda', [PenandaController::class, 'index'])->name('penanda');
    Route::get('/tambah-penanda', [PenandaController::class, 'create'])->name('tambah-penanda');
    Route::post('/simpan-penanda', [PenandaController::class, 'store'])->name('simpan-penanda');
    Route::get('/edit-penanda/{id}', [PenandaController::class, 'edit'])->name('edit-penanda');
    Route::post('/ubah-penanda/{id}', [PenandaController::class, 'update'])->name('ubah-penanda');
    Route::get('/hapus-penanda/{id}', [PenandaController::class, 'destroy'])->name('hapus-penanda');
    
    // Postingan
    Route::get('/postingan', [PostinganController::class, 'index'])->name('postingan');
    Route::get('/tambah-postingan', [PostinganController::class, 'create'])->name('tambah-postingan');
    Route::post('/simpan-postingan', [PostinganController::class, 'store'])->name('simpan-postingan');
    Route::get('/edit-postingan/{id}', [PostinganController::class, 'edit'])->name('edit-postingan');
    Route::post('/ubah-postingan/{id}', [PostinganController::class, 'update'])->name('ubah-postingan');
    Route::get('/hapus-postingan/{id}', [PostinganController::class, 'destroy'])->name('hapus-postingan');
});