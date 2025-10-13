<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// الصفحة الرئيسية - عامة للجميع
Route::get('/', [HomeController::class, 'index'])->name('home');

// صفحة Laravel الفاخرة
Route::get('/laravel', function () {
    return view('welcome');
})->name('laravel');

// صفحة التصميم العصري
Route::get('/modern', function () {
    return view('modern');
})->name('modern');

// صفحة التصميم البسيط
Route::get('/minimal', function () {
    return view('minimal');
})->name('minimal');

// التبديل بين التصميمات
Route::get('/switch-template/{template}', function ($template) {
    if (in_array($template, ['home', 'laravel', 'modern', 'minimal'])) {
        session(['current_template' => $template]);
        return redirect()->route($template);
    }
    return redirect()->route('home');
})->name('switch.template');
