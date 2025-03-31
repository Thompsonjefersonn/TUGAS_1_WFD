<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return redirect('home');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');



Route::get('/promotions', [PromotionController::class, 'index'])->name('promotions');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/promotions/create', [PromotionController::class, 'create']);


Route::post('/promotions', [PromotionController::class, 'store'])->name('promotions.store');


Route::get('/promotions/{id}', [PromotionController::class, 'show']);


Route::get('/promotions/{id}/edit', [PromotionController::class, 'edit'])->name('promotions.edit');


Route::put('/promotions/{id}', [PromotionController::class, 'update'])->name('promotions.update');

Route::delete('/promotions/{id}', [PromotionController::class, 'destroy'])->name("promotions.destroy");

