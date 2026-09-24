<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//FRONTEND CONTROLLERS
use App\Http\Controllers\Frontend\FrontendController AS Frontend;
use App\Http\Controllers\Frontend\BlogsController AS FrontendBlogs;

//BACKEND CONTROLLERS
use App\Http\Controllers\Backend\DashboardController AS BackendDashboard;
use App\Http\Controllers\Backend\BlogsController AS BackendBlogs;
use App\Http\Controllers\Backend\UsersController AS BackendUsers;

//1 - Frontend Routes
Route::group([ 'prefix' =>'/'], function () {
    Route::get('/', [Frontend::class, 'index'])->name('frontend.homepage');
    Route::get('/about-us', [Frontend::class, 'aboutUs'])->name('frontend.aboutUs');
    Route::get('/contact-us', [Frontend::class, 'contactUs'])->name('frontend.contactUs');
    Route::get('/services', [Frontend::class, 'services'])->name('frontend.services');
    Route::get('/our-standard', [Frontend::class, 'ourStandard'])->name('frontend.ourStandard');
    Route::get('/racing-team', [Frontend::class, 'racingTeam'])->name('frontend.racingTeam');
    Route::get('/branches', [Frontend::class, 'branches'])->name('frontend.branches');


    // B
    Route::get('/blog', [FrontendBlogs::class, 'index'])->name('frontend.blogs.index');
    Route::get('/blog/{slug}', [FrontendBlogs::class, 'view'])->name('frontend.blogs.view');


    Route::post('/app-logout', [Frontend::class, 'appLogout'])->name('frontend.appLogout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


    //2 - Admin Routes
    Route::group([ 'prefix' =>'admin', 'middleware' => ['isAdmin']], function () {

        // D
        Route::get('/', [BackendDashboard::class, 'index'])->name('backend.dashboard');


        // B
        Route::get('/blogs', [BackendBlogs::class, 'index'])->name('backend.blogs.index');
        Route::get('/blogs/create', [BackendBlogs::class, 'create'])->name('backend.blogs.create');
        Route::get('/blogs/edit/{id}', [BackendBlogs::class, 'edit'])->name('backend.blogs.edit');
        Route::post('/blogs/store', [BackendBlogs::class, 'store'])->name('backend.blogs.store');
        Route::post('/blogs/delete', [BackendBlogs::class, 'delete'])->name('backend.blogs.delete');
        Route::post('/blogs/slug-generator', [BackendBlogs::class, 'slugGenerator'])->name('backend.blogs.slugGenerator');
        Route::post('/blogs/upload-image', [BackendBlogs::class, 'imageUpload'])->name('backend.blogs.imageUpload');
        Route::post('/blogs/set-primary-image', [BackendBlogs::class, 'setPrimaryImage'])->name('backend.blogs.setPrimaryImage');
        Route::post('/blogs/image-delete', [BackendBlogs::class, 'deleteImage'])->name('backend.blogs.deleteImage');
        Route::post('/blogs/status', [BackendBlogs::class, 'status'])->name('backend.blogs.status');


        // U
        Route::get('/my-profile', [BackendUsers::class, 'myProfile'])->name('backend.users.myProfile');
        Route::post('/profile/update-personal-info', [BackendUsers::class, 'saveMyProfilePersonal'])->name('backend.users.saveMyProfilePersonal');
    });


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
