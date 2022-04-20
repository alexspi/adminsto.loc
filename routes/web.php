<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;

//Route::get('/', function () {
//    return redirect()->route('index');
//})->name('/');

//Route::get('/', [HomeController::class, 'index'])->name('main');
Route::get('/', function () {
    return view('welcome');
})->name('main');


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);

Route::get('password/forget', function () {
    return view('pages.forgot-password');
})->name('password.forget');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('dashboard')->group(function () {
        Route::view('/', 'dashboard.index')->name('index');

    });
    Route::group(['prefix' => 'manager', 'middleware' => 'can:manage_all'], function () {
        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/user/get-list', [UserController::class, 'getUserList']);
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user/create', [UserController::class, 'store'])->name('create-user');
        Route::get('/user/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
        Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');

    });
    Route::group(['prefix' => 'manager'], function () {
        Route::get('/roles', [RolesController::class, 'index'])->name('roles');
        Route::get('/role/get-list', [RolesController::class, 'getRoleList']);
        Route::post('/role/create', [RolesController::class, 'create'])->name('role.create');
        Route::get('/role/edit/{id}', [RolesController::class, 'edit'])->name('role.edit');
        Route::post('/role/update', [RolesController::class, 'update'])->name('role.update');
        Route::get('/role/delete/{id}', [RolesController::class, 'delete'])->name('role.delete');
    });
    Route::group(['prefix' => 'manager'], function () {
        Route::get('/permission', [PermissionController::class, 'index'])->name('permission');
        Route::get('/permission/get-list', [PermissionController::class, 'getPermissionList']);
        Route::post('/permission/create', [PermissionController::class, 'create'])->name('permission.create');
        Route::get('/permission/update', [PermissionController::class, 'update'])->name('permission.update');
        Route::get('/permission/delete/{id}', [PermissionController::class, 'delete'])->name('permission.delete');
    });




    Route::view('sample-page', 'pages.sample-page')->name('sample-page');
    Route::view('landing-page', 'pages.landing-page')->name('landing-page');

    Route::prefix('others')->group(function () {
        Route::view('400', 'errors.400')->name('error-400');
        Route::view('401', 'errors.401')->name('error-401');
        Route::view('403', 'errors.403')->name('error-403');
        Route::view('404', 'errors.404')->name('error-404');
        Route::view('500', 'errors.500')->name('error-500');
        Route::view('503', 'errors.503')->name('error-503');
    });


    Route::get('/clear-cache', function () {
        Artisan::call('config:cache');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        return "Cache is cleared";
    })->name('clear.cache');
});