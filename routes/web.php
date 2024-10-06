<?php

use App\Http\Controllers\SizinController;
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
    return view('Welcome');
});

Route::get('/dashboard', [App\Http\Controllers\LandingPageController::class,'index']);
Route::get('/sizin', [SizinController::class,'index'])->name('sizin');
Route::get('/create', [SizinController::class, 'create'])->name('create');
Route::post('/store', [SizinController::class, 'store'])->name('store');
Route::get('/edit/{sizin}', [SizinController::class, 'edit'])->name('edit');
Route::put('/update/{sizin}', [SizinController::class, 'update'])->name('update');
Route::delete('/destroy/{sizin}', [SizinController::class, 'destroy'])->name('destroy');