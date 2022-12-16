<?php

use App\Http\Controllers\addingcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\editingconroller;
use App\Http\Controllers\editingcontroller;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\InsertDB;
use App\Http\Controllers\listingcontroller;
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

Route::get('/', function() {
    return view('navbar/trangchu');
})->name('trangchu.');

Route::get('/cuahang', function () {
    return view('navbar/cuahang');
})->name('cuahang.');

Route::get('admin/login', function () {
    return view('admin.login');
})->name('login.');

Route::get('/danhba', function () {
    return view('navbar/danhba');
})->name('danhba.');
Route::get('/gioithieu', function () {
    return view('navbar/gioithieu');
})->name('gioithieu.');
Route::get('/kienthuc', function () {
    return view('navbar/kienthuc');
})->name('kienthuc.');
Route::get('/lienhe', function () {
    return view('navbar/lienhe');
})->name('lienhe.');



Route::get('/raucu', function () {
    return view('cuahang/cuahangraucu');
})->name('cuahangraucu.');
Route::get('/dokho', function () {
    return view('cuahang/cuahangdokho');
})->name('cuahangdokho.');
Route::get('/raucu', function () {
    return view('cuahang/cuahangraucu');
})->name('cuahangraucu.');
Route::get('/douong', function () {
    return view('cuahang/cuahangdouong');
})->name('cuahangdouong.');
Route::get('/haisan', function () {
    return view('cuahang/cuahanghaisan');
})->name('cuahanghaisan.');
Route::get('/thittrung', function () {
    return view('cuahang/cuahangthittrung');
})->name('cuahangthittrung.');
Route::get('/traicay', function () {
    return view('cuahang/cuahangtraicay');
})->name('cuahangtraicay.');
Route::get('/raucu', function () {
    return view('cuahang/cuahangraucu');
})->name('cuahangraucu.');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard.');

Route::get('/admin/qladmin', function () {
    return view('admin.qladmin');
})->name('qladmin.');







// route quan ly

Route::post('/admin/login', [AdminController::class, 'loginPost'])->name('admin.loginPost');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/listing/{model}', [listingcontroller::class, 'index'])->name('listing.index');
Route::post('/admin/listing/{model}', [listingcontroller::class, 'index'])->name('listing.index');
Route::get('/admin/editing/{model}', [editingcontroller::class, 'create'])->name('editing.create');
Route::post('/admin/editing/{model}', [editingcontroller::class, 'store'])->name('editing.store');


Route::get('/admin/listing/{model}/{id}', [listingcontroller::class, 'edit'])->name('listing.edit');

Route::put('/admin/listing/{model}/{id}  ', [listingcontroller::class, 'update'])->name('listing.update');

Route::DELETE('/admin/listing/{model}/{id}', [listingcontroller::class, 'destroy'])->name('listing.destroy');

Route::get('/admin/listing/product/{category_id}/{id}', [listingcontroller::class, 'show'])->name('product.show');

// route trang chu
Route::get('/', [indexcontroller::class, 'index'])->name('index.index');



