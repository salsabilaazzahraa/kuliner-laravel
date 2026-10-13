<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KulinerController;

// ROUTE: mengatur jalur URL, lalu meneruskannya ke method di Controller.
//                URL            [Nama Class,                 Nama method]
 // Halaman Beranda
Route::get('/',              [KulinerController::class, 'home'])->name('home');  
// Halaman Katalog                                
Route::get('/kuliner',       [KulinerController::class, 'index'])->name('kuliner.index');               
// Halaman Detail (ID di URL)          
Route::get('/kuliner/{id}',  [KulinerController::class, 'show'])->whereNumber('id')->name('kuliner.show');        