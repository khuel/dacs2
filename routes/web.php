<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\editingcontroller;

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
Route::get('/admin/add_category', function () {
    return view('admin.add_category');
})->name('add_category.');
Route::get('/admin/edit_category', function () {
    return view('admin.edit_category');
})->name('edit_category.');
Route::get('/admin/category_list', function () {
    return view('admin.category_list');
})->name('categorylist.');
Route::get('/admin/add_product', function () {
    return view('admin.add_product');
})->name('add_product.');
Route::get('/admin/edit_product', function () {
    return view('admin.edit_product');
})->name('edit_product.');
Route::get('/admin/product_list', function () {
    return view('admin.product_list');
})->name('product_list.');
Route::get('/admin/edit_user', function () {
    return view('admin.edit_user');
})->name('edit_user.');
Route::get('/admin/list_user', function () {
    return view('admin.list_user');
})->name('list_user.');
Route::get('/admin/email_user', function () {
    return view('admin.email_user');
})->name('email_user.');
Route::get('/admin/phone_user', function () {
    return view('admin.phone_user');
})->name('phone_user.');








Route::post('/admin/login', [AdminController::class, 'loginPost'])->name('admin.loginPost');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/listing/{model}', [listingcontroller::class, 'index'])->name('listing.index');
