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

// صفحة التصميم البسيط الكلاسيكي
Route::get('/minimal-classic', function () {
    return view('minimal-classic');
})->name('minimal-classic');

// صفحة التصميم الزمردي الكلاسيكي
Route::get('/emerald-classic', function () {
    return view('emerald-classic');
})->name('emerald-classic');

// صفحة التصميم الملكي الكلاسيكي
Route::get('/royal-classic', function () {
    return view('royal-classic');
})->name('royal-classic');

// التبديل بين التصميمات
Route::get('/switch-template/{template}', function ($template) {
    if (in_array($template, ['home', 'laravel', 'modern', 'minimal', 'minimal-classic', 'emerald-classic', 'royal-classic'])) {
        session(['current_template' => $template]);
        return redirect()->route($template);
    }
    return redirect()->route('home');
})->name('switch.template');
