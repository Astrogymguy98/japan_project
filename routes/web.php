<?php

use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;



Route::get('/', [PageController::class, "home"])->name("home");

Route::get("/naan-and-rice", [PageController::class,"naan"])->name("naan");
Route::get("side-menu", [PageController::class,"side"])->name("side");






Route::get("/curry/{slug}", [PageController::class,"curry"])->name("curry");

Route::get("/naan-and-rice/{slug}",[PageController::class,"naan_detail"])->name("naan_detail");

Route::get("/side-menu/{slug}",[PageController::class,"side_detail"])->name("side_detail");




Route::get('/hello/{yoo}', function ($yoo) {
    return $yoo;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/google/login', [AuthController::class, 'login'])->name('google.login');


Route::get('/google/redirect', [AuthController::class, 'redirect']);
