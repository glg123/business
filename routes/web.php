<?php

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/contact/us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact_us');

Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::get('login', 'Auth\LoginController@showLoginFormAdmin')->name('loginAdmin');
    Route::post('login', 'Auth\LoginController@loginAdmin')->name('sendLoginAdmin');
    Route::get('home', [App\Http\Controllers\Admin\AdminController::class, 'home'])->name('admin.home');


    ///blogs system
    Route::get('/blogs', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/blogs/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('/blogs', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/blogs/{id}/edit',[App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::post('/blogs/{id}/update',[App\Http\Controllers\Admin\BlogController::class, 'update'])->name('admin.blogs.update');
    Route::post('/blogs/{id}/delete',[App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('admin.blogs.destroy');


    ///services system
    Route::get('/services', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('/services/create', [App\Http\Controllers\Admin\ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('/services', [App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/services/{id}/edit',[App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::post('/services/{id}/update',[App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('admin.services.update');
    Route::post('/services/{id}/delete',[App\Http\Controllers\Admin\ServiceController::class, 'destroy'])->name('admin.services.destroy');

////settings system
    Route::get('/settings/{id}/edit',[App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('admin.settings.edit');
    Route::post('/settings/{id}/update',[App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin.settings.update');

//contact
    ///services system
    Route::get('/contacts', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('/contacts/{id}/show',[App\Http\Controllers\Admin\ContactController::class, 'show'])->name('admin.contacts.show');
    Route::post('/contacts/{id}/delete',[App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('admin.contacts.destroy');
//admin
    Route::get('my/profile',[App\Http\Controllers\Admin\AdminController::class, 'edit'])->name('admin.users.edit');
    Route::post('my/profile',[App\Http\Controllers\Admin\AdminController::class, 'update'])->name('admin.users.update');


});
