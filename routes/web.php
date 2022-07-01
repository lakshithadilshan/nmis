<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlluserController;
use App\Http\Controllers\RequestModuleController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('login');
});
Route::get('/dashbord', function () {
    return view('admin.index');
});
Route::get('/login', function () {
    return view('login');
});
Route::POST('/loginclick',[AlluserController::class,'login'])->name('loginclick');
Route::get('logout',[AlluserController::class,'logout'])->name('admin.logout');
Route::get('/Requestmodule',[RequestModuleController::class,'show'])->name('Requestmodule');

// ----------------------------------------------
Route::get('/view' , [UserController::class , 'UserView'])->name('user.view');






