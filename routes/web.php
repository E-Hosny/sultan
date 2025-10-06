<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// الصفحة الرئيسية - عامة للجميع
Route::get('/', [HomeController::class, 'index'])->name('home');

// يمكن إضافة صفحات أخرى هنا إذا احتجت إليها
// Route::get('/about', function () {
//     return view('about');
// });
