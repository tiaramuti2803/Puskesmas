<?php

use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Models\Dokter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// group untuk user yang sudah terautentikasi dan rolenya admin
Route::group(['middleware' => ['auth', 'role:admin']], function(){
// route untuk menampilkan form tambah pasien
Route::get('/pasien/create',[PasienController::class, 'create']);

// route untuk menghapus data pasien
Route::delete('/pasien',[PasienController::class,'destroy']);

 // route untuk menampilkan form edit pasien
 Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);

 // route untuk memproses from tambah pasien
Route::post('/pasien',[PasienController::class, 'store']);

 // route untuk memproses form edit pasien
 Route::put('/pasien/{id}', [PasienController::class, 'update']);

   // route untuk menampilkan form edit dokter
   Route::get('/dokter/edit/{id}', [DokterController::class, 'edit']);

   // route untuk memproses form edit dokter
   Route::put('/dokter/{id}', [DokterController::class, 'update']);

   //route untuk menampilkan form tambah dokter
   Route::get('/dokter/create',[DokterController::class, 'create']);

   // route untuk memproses from tambah dokter
   Route::post('/dokter',[DokterController::class, 'store']);

   // route untuk menghapus data dokter
   Route::delete('/dokter',[DokterController::class,'destroy']);

});

// group untuk user yang sudah terautentikasi
Route::group(['middleware' => ['auth']], function(){

// Route untuk menambahkan daftar pasien
Route::get('/pasien',[PasienController::class, 'index']);

// route untuk  menampilkan daftar dokter
Route::get('/dokter',[DokterController::class, 'index']);

//  route untuk menampilkan halaman dashboard
 Route::get('/',[dashboardcontroller::class,'index']);
});

Auth::routes();


