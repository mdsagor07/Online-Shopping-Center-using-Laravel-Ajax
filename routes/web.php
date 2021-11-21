<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;

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


Route::get('/users',[UserController::class,'index'])->name('users');
Route::post('/store',[UserController::class,'store'])->name('store.user');
Route::get('/users/delete/{id}',[UserController::class,'delete'])->name('delete.user');
Route::post('/users/update/',[UserController::class,'update'])->name('update.user');
Route::get('/users/edit/{id}',[UserController::class,'edit'])->name('edit.user');


Route::get('/anyData',[UserController::class,'anyData'])->name('anyuser');

//product route resource

Route::resource('products', ProductController::class);

//create invoice route

Route::get('/invoiceIndex',[InvoiceController::class,'invoiceIndex'])->name('invoiceIndex');
Route::get('/getPDF',[InvoiceController::class,'generatePDF'])->name('generatePDF');
Route::post('/storeinvoice',[InvoiceController::class,'invoiceStore'])->name('invoiceStore');
Route::get('/viewinvoice',[InvoiceController::class,'invoicelist'])->name('viewinvoicelist');



//Route::get('/storeinvoice1',[InvoiceController::class,'invoiceStore1'])->name('invoiceStore1');




