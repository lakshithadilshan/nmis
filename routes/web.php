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
Route::get('/Complaintmodule',[\App\Http\Controllers\ComplainController::class,'show'])->name('Complaintmodule');
Route::get('/social',[\App\Http\Controllers\SocialMediaController::class,'begin'])->name('social');
Route::get('/addpost',[\App\Http\Controllers\SocialMediaController::class,'addpost'])->name('addpost');
Route::Post('/savepost',[\App\Http\Controllers\SocialMediaController::class,'savepost'])->name('savepost');
Route::Post('/postcomment',[\App\Http\Controllers\SocialMediaController::class,'saveComment'])->name('postcomment');

//---------------------------admin side---------------------
Route::get('/adminsocial',[\App\Http\Controllers\AdminSocialMediaController::class,'begin'])->name('adminsocial');
Route::get('/socialuseraccounts',[\App\Http\Controllers\AdminSocialMediaController::class,'loaduser'])->name('socialuseraccounts');
Route::get('/socialusercomments',[\App\Http\Controllers\AdminSocialMediaController::class,'loadcomments'])->name('socialusercomments');
Route::get('/socialuserposts',[\App\Http\Controllers\AdminSocialMediaController::class,'loadposts'])->name('socialuserposts');
//-------------------------------delete--------------------------------
Route::get('deletepost/{id}', [\App\Http\Controllers\AdminSocialMediaController::class, 'deletepost'])->name('deletepost');
Route::get('deletecomment/{id}', [\App\Http\Controllers\AdminSocialMediaController::class, 'deletecomment'])->name('deletecomment');
//-------------------------user side-------------------------------------------------------------
Route::Post('storeRequest', [\App\Http\Controllers\UserRequestController::class, 'storeRequest'])->name('storeRequest');
Route::get('UserRequestmodule', [\App\Http\Controllers\UserRequestController::class, 'UserRequestmodule'])->name('UserRequestmodule');
Route::get('UserComplaintmodule', [\App\Http\Controllers\UserComplainController::class, 'UserComplaintmodule'])->name('UserComplaintmodule');
Route::get('storeComplain', [\App\Http\Controllers\UserComplainController::class, 'storeComplain'])->name('storeComplain');

;

// ----------------------------------------------
Route::get('/view' , [UserController::class , 'UserView'])->name('user.view');






