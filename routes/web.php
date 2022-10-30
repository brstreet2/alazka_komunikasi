<?php

// Front End Route Group
use App\Http\Controllers\{
    DashboardController,
    HomeController,
};

// Back End Login Route Group
use App\Http\Controllers\Auth\{
    LoginController,
};

// Back End CRUD Route Group
use App\Http\Controllers\Backend\{
    BannerController,
};

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Front-End
Route::group([
    'middleware' => [
        'prevent.back.history'
    ],
    'prefix'     => '',
], function () {
    Route::get('', [HomeController::class, 'index'])
        ->name('home.index');

    Route::get('/about-us', [HomeController::class, 'about'])
        ->name('home.about');

    Route::get('/services', [HomeController::class, 'services'])
        ->name('home.services');

    // Route::get('/portfolio', [HomeController::class, 'index'])
    //     ->name('home.portfolio');

    Route::get('/contact-us',  [HomeController::class, 'contact'])
        ->name('home.contact');

});

// BackEnd Login
Route::get('/login', [LoginController::class, 'index'])
->name('auth.login');
Route::post('/login', [LoginController::class, 'login'])
->name('auth.login.process');
Route::get('/logout', [LoginController::class, 'logout'])
->name('auth.logout');

// BackEnd Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
->name('auth.dashboard')->middleware('sentinel.permission:admin.auth');

// Banner CRUD
Route::group([
    'middleware' => [
        'prevent.back.history'
    ],
    'prefix'     => 'banner',
], function () {
    Route::get('', [BannerController::class, 'index'])
        ->name('banner.index')->middleware('sentinel.permission:banner.show');

    Route::get('/create', [BannerController::class, 'create'])
        ->name('banner.create')->middleware('sentinel.permission:banner.create');

    Route::post('', [BannerController::class, 'store'])
        ->name('banner.store')->middleware('sentinel.permission:banner.create');

    Route::get('/{id}/show', [BannerController::class, 'show'])
        ->name('banner.show')->middleware('sentinel.permission:banner.show');

    Route::get('/{id}/edit', [BannerController::class, 'edit'])
        ->name('banner.edit')->middleware('sentinel.permission:banner.edit');

    Route::put('/{id}', [BannerController::class, 'update'])
        ->name('banner.update')->middleware('sentinel.permission:banner.edit');

    Route::delete('/{id}', [BannerController::class, 'destroy'])
        ->name('banner.destroy')->middleware('sentinel.permission:banner.destroy');

    Route::get('/ajax/data', [BannerController::class, 'datatable'])
        ->name('banner.ajax.data')->middleware('sentinel.permission:banner.show');

    Route::delete('/bulk/delete', [BannerController::class, 'bulkDestroy'])
        ->name('banner.destroy.bulk')->middleware('sentinel.permission:banner.destroy');

    Route::get('/ajax/select2', [BannerController::class, 'select2'])
        ->name('banner.ajax.select2');
});

Route::get('/test', function() {
    return view('frontend.home.test');
});
