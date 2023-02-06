<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Route::get('/registerView', [\App\Http\Controllers\Controller::class, 'registerView'])->name('registerView');


Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
Route::post('add', [InvoiceController::class, 'add'])->name('invoices.add');
//Route::get('/invoices/{id}', [InvoiceController::class, 'show'])->name('invoices.show');
//Route::get('/invoices/{id}/edit', [InvoiceController::class, 'edit'])->name('invoices.edit');
//Route::put('/invoices/{id}', [InvoiceController::class, 'update'])->name('invoices.update');
//Route::delete('/invoices/{id}', [InvoiceController::class, 'destroy'])->name('invoices.destroy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
