<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//FRONTEND CONTROLLERS
use App\Http\Controllers\Frontend\FrontendController AS Frontend;

//BACKEND CONTROLLERS
use App\Http\Controllers\Backend\DashboardController AS BackendDashboard;

//1 - Frontend Routes
Route::group([ 'prefix' =>'/'], function () {
    Route::get('/', [Frontend::class, 'index'])->name('frontend.homepage');
    Route::get('/about-us', [Frontend::class, 'aboutUs'])->name('frontend.aboutUs');
    Route::get('/contact-us', [Frontend::class, 'contactUs'])->name('frontend.contactUs');
    Route::get('/services', [Frontend::class, 'services'])->name('frontend.services');
    Route::get('/our-standard', [Frontend::class, 'ourStandard'])->name('frontend.ourStandard');
    Route::get('/racing-team', [Frontend::class, 'racingTeam'])->name('frontend.racingTeam');
    Route::get('/branches', [Frontend::class, 'branches'])->name('frontend.branches');

    Route::post('/app-logout', [Frontend::class, 'appLogout'])->name('frontend.auth.appLogout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


    //2 - Admin Routes
    Route::group([ 'prefix' =>'admin', 'middleware' => ['isAdmin']], function () {

        // D
        Route::get('/', [BackendDashboard::class, 'index'])->name('backend.dashboard');

    });


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
