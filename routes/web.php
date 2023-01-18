<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangcontroller;
use App\Models\barangmodel;

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

Route::get('/', function () {
    return view('welcome');
});


/* data barang */
Route::get('barang',[barangcontroller::class,'readbarang']);
Route::get('barang/tambah',[barangcontroller::class,'tambahbarang']);
Route::post('barang/tambah/simpan',[barangcontroller::class,'simpanbarang']); 
Route::get('barang/edit/{kodebrg}',[barangcontroller::class,'editbarang']);
Route::post('barang/editt',[barangcontroller::class,'edittbarang']); 
Route::get('barang/hapus/{kodebrg}',[barangcontroller::class,'hapusbarang']);
Route::get('kategori/{kodekt}/{namakt}',[barangcontroller::class,'kategorii']);


