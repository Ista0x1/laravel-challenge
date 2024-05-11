<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
// use App\Http\Controllers\CountryController;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    } else {
        return view('auth.login');
    }
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [CountryController::class , 'index'])->name('dashboard');
    Route::get('/cities/{country}', [CityController::class , 'index'])->name('cities');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth','admin'])->group(function () {
    Route::get('country/edit/{country}' , [CountryController::class , 'edit'])->name('country.edit');
    Route::delete('country/{country}' , [CountryController::class , 'destroy'])->name('country.destroy');
    Route::put('country/update/{country}' , [CountryController::class , 'update'])->name('country.update');
    Route::get('country/create' , [CountryController::class , 'create'])->name('country.create');
    Route::post('country/store' , [CountryController::class , 'store'])->name('country.store');
    Route::get('city/users/{city}' , [CityController::class , 'cityUsers'])->name('city.users');
    Route::get('country/export' , [CountryController::class , 'export'])->name('country.export');

});
require __DIR__.'/auth.php';
