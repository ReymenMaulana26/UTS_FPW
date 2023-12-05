<?php
use App\Http\Controllers\BarangController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [BarangController::class, 'index'])->name('index');

Route::get('/form', [BarangController::class, 'create'])->name('form');
Route::post('/proses-barang', [BarangController::class, 'store']);

Route::get('/show/{id}', [BarangController::class, 'show'])->name('show');

Route::get('/edit/{id}', [BarangController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [BarangController::class, 'update'])->name('update');

Route::get('/delete/{id}', [BarangController::class, 'destroy'])->name('delete');