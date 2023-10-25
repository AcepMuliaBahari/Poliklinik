<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\Member\MemberController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth', 'role:admin,member']], function () {

    Route::get('/home',[AdminController::class,'AdminHome'])->name('admin.home');
    Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard']);
        //dokter
        Route::get('/data/dokter',[DokterController::class, 'DataDokter'])->name('data.dokter');
        Route::get('/tambah/dokter',[DokterController::class, 'TambahDokter'])->name('tambah.dokter');
        Route::post('/simpan/dokter',[DokterController::class, 'SimpanDokter'])->name('simpan.dokter');
        Route::get('/edit/dokter{id}',[DokterController::class, 'EditDokter'])->name('edit.dokter');
        Route::post('/edit/dokter',[DokterController::class, 'UpdateDokter'])->name('update.dokter');
        Route::get('/hapus/dokter{id}',[DokterController::class, 'HapusDokter'])->name('hapus.dokter');
    // pasien
    Route::get('/data/pasien',[PasienController::class, 'DataPasien'])->name('data.pasien');
    Route::get('/tambah/pasien',[PasienController::class, 'TambahPasien'])->name('tambah.pasien');
    Route::post('/simpan/pasien',[PasienController::class, 'SimpanPasien'])->name('simpan.pasien');
    Route::get('/edit/pasien{id}',[PasienController::class, 'EditPasien'])->name('edit.pasien');
    Route::post('/update/pasien',[PasienController::class, 'UpdatePasien'])->name('update.pasien');
    Route::get('/hapus/pasien{id}',[PasienController::class, 'HapusPasien'])->name('hapus.pasien');
    // periksa
    Route::get('/data/periksa',[PeriksaController::class, 'DataPeriksa'])->name('data.periksa');
    Route::get('/tambah/periksa',[PeriksaController::class, 'TambahPeriksa'])->name('tambah.periksa');
    Route::post('/simpan/periksa',[PeriksaController::class, 'Simpanperiksa'])->name('simpan.periksa');
    Route::get('/edit/periksa{id}',[PeriksaController::class, 'Editperiksa'])->name('edit.periksa');
    Route::post('/update/periksa',[PeriksaController::class, 'Updateperiksa'])->name('update.periksa');
    Route::get('/hapus/periksa{id}',[PeriksaController::class, 'Hapusperiksa'])->name('hapus.periksa');
    
    
}); 
    
// Route::middleware('auth','role:member')->group(function () {
    
//     Route::get('member/dashboard',[MemberController::class,'MemberDashboard']);
//     Route::get('/member/home',[MemberController::class,'MemberHome'])->name('member.home');
//     Route::get('data/periksa',[PeriksaController::class,'DataPeriksa'])->name('data.periksa');
// });
