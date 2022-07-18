<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlluserController;
use App\Http\Controllers\RequestModuleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\AttendanceController;
use App\Http\Controllers\LeaveTypeController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});


Route::get('/dashbord', function () {
    return view('admin.index');
});
Route::get('/login', function () {
    return view('login');
});
//--------------------------------------------------------test------------
Route::get('checkaccountcreate',[AlluserController::class,'checkaccountcreate'])->name('checkaccountcreate');

//---------------------------------------------------------------

Route::get('/',[AlluserController::class,'loginform'])->name('/');
Route::POST('/loginclick',[AlluserController::class,'login'])->name('loginclick');
Route::get('logout',[AlluserController::class,'logout'])->name('admin.logout');
Route::get('/Requestmodule',[RequestModuleController::class,'show'])->name('Requestmodule');
Route::get('approverequest/{id}', [\App\Http\Controllers\RequestModuleController::class, 'approverequest'])->name('approverequest');
Route::get('rejectrequest/{id}', [\App\Http\Controllers\RequestModuleController::class, 'rejectrequest'])->name('rejectrequest');

Route::get('/Complaintmodule',[\App\Http\Controllers\ComplainController::class,'show'])->name('Complaintmodule');
Route::get('/social',[\App\Http\Controllers\SocialMediaController::class,'begin'])->name('social');
Route::get('/addpost',[\App\Http\Controllers\SocialMediaController::class,'addpost'])->name('addpost');
Route::Post('/savepost',[\App\Http\Controllers\SocialMediaController::class,'savepost'])->name('savepost');
Route::Post('/postcomment',[\App\Http\Controllers\SocialMediaController::class,'saveComment'])->name('postcomment');
//check sessions done before execute route
//---------------------------admin side---------------------
Route::get('/adminsocial',[\App\Http\Controllers\AdminSocialMediaController::class,'begin'])->name('adminsocial');
Route::get('/socialuseraccounts',[\App\Http\Controllers\AdminSocialMediaController::class,'loaduser'])->name('socialuseraccounts');
Route::get('/socialusercomments',[\App\Http\Controllers\AdminSocialMediaController::class,'loadcomments'])->name('socialusercomments');
Route::get('/socialuserposts',[\App\Http\Controllers\AdminSocialMediaController::class,'loadposts'])->name('socialuserposts');
//-------------------------------delete--------------------------------
Route::get('deletepost/{id}', [\App\Http\Controllers\AdminSocialMediaController::class, 'deletepost'])->name('deletepost');
Route::get('deletecomment/{id}', [\App\Http\Controllers\AdminSocialMediaController::class, 'deletecomment'])->name('deletecomment');
Route::get('admindeletecomplain/{id}', [\App\Http\Controllers\ComplainController::class, 'admindeletecomplain'])->name('admindeletecomplain');

//----------------------------------edit-----------------------------------------
Route::get('editcomment/{id}', [\App\Http\Controllers\AdminSocialMediaController::class, 'editComment'])->name('editcomment');
Route::post('/editcommentsave',[\App\Http\Controllers\AdminSocialMediaController::class,'editcommentsave'])->name('editcommentsave');
Route::get('admineditpost/{id}', [\App\Http\Controllers\AdminSocialMediaController::class, 'admineditpost'])->name('admineditpost');
Route::post('/editpostsave',[\App\Http\Controllers\AdminSocialMediaController::class,'editpostsave'])->name('editpostsave');
Route::get('deactivateuserforsocial/{id}', [\App\Http\Controllers\AdminSocialMediaController::class, 'deactivateuserforsocial'])->name('deactivateuserforsocial');
Route::get('activateuserforsocial/{id}', [\App\Http\Controllers\AdminSocialMediaController::class, 'activateuserforsocial'])->name('activateuserforsocial');
Route::post('changepassword_socialuser/', [\App\Http\Controllers\AdminSocialMediaController::class, 'changepassword_socialuser'])->name('changepassword_socialuser');
//-------------------------------Leave mode-------------------------------------------------------
Route::get('/adminleavemode',[\App\Http\Controllers\AdminLeaveController::class,'adminleavemode'])->name('adminleavemode');
Route::get('/adminusershortleave',[\App\Http\Controllers\AdminLeaveController::class,'adminusershortleave'])->name('adminusershortleave');
Route::get('approveshortleave/{id}',[\App\Http\Controllers\AdminLeaveController::class,'approveshortleave'])->name('approveshortleave');
Route::get('rejectshortleave/{id}/{empid}',[\App\Http\Controllers\AdminLeaveController::class,'rejectshortleave'])->name('rejectshortleave');
Route::get('/admincasualleave',[\App\Http\Controllers\AdminLeaveController::class,'admincasualleave'])->name('admincasualleave');
Route::get('approvecasualtleave/{id}',[\App\Http\Controllers\AdminLeaveController::class,'approvecasualtleave'])->name('approvecasualtleave');
Route::get('rejectcasualleave/{id}/{empid}',[\App\Http\Controllers\AdminLeaveController::class,'rejectcasualleave'])->name('rejectcasualleave');
Route::get('/adminhalfdayleave',[\App\Http\Controllers\AdminLeaveController::class,'adminhalfdayleave'])->name('adminhalfdayleave');
Route::get('approvehalftleave/{id}',[\App\Http\Controllers\AdminLeaveController::class,'approvehalftleave'])->name('approvehalftleave');
Route::get('rejecthalfleave/{id}/{empid}',[\App\Http\Controllers\AdminLeaveController::class,'rejecthalfleave'])->name('rejecthalfleave');
Route::get('/adminmedicalleave',[\App\Http\Controllers\AdminLeaveController::class,'adminmedicalleave'])->name('adminmedicalleave');
Route::get('approvemedicalleave/{id}',[\App\Http\Controllers\AdminLeaveController::class,'approvemedicalleave'])->name('approvemedicalleave');
Route::get('rejectmedicalleave/{id}/{empid}',[\App\Http\Controllers\AdminLeaveController::class,'rejectmedicalleave'])->name('rejectmedicalleave');








//-------------------------user side-------------------------------------------------------------
Route::Post('storeRequest', [\App\Http\Controllers\UserRequestController::class, 'storeRequest'])->name('storeRequest');
Route::get('UserRequestmodule', [\App\Http\Controllers\UserRequestController::class, 'UserRequestmodule'])->name('UserRequestmodule');
Route::get('UserComplaintmodule', [\App\Http\Controllers\UserComplainController::class, 'UserComplaintmodule'])->name('UserComplaintmodule');
Route::post('storeComplain', [\App\Http\Controllers\UserComplainController::class, 'storeComplain'])->name('storeComplain');
Route::get('storereact/{post}', [\App\Http\Controllers\SocialMediaController::class, 'storereact'])->name('storereact');
Route::get('socialmediaprofile', [\App\Http\Controllers\SocialMediaController::class, 'socialmediaprofile'])->name('socialmediaprofile');
Route::get('systemprofile', [\App\Http\Controllers\AlluserController::class, 'systemprofile'])->name('systemprofile');
Route::post('systemupdateprofile', [\App\Http\Controllers\AlluserController::class, 'systemupdateprofile'])->name('systemupdateprofile');
//----------------------------------------leave--------------------------------------------------------
Route::get('UserLeavemodule', [\App\Http\Controllers\LeaveController::class, 'UserLeavemodule'])->name('UserLeavemodule');
//----------------------------------------short leave--------------------------------------------------------
Route::get('usershortleave', [\App\Http\Controllers\LeaveController::class, 'usershortleave'])->name('usershortleave');
Route::post('storeShortLeave', [\App\Http\Controllers\LeaveController::class, 'storeShortLeave'])->name('storeShortLeave');
Route::post('editshortleave', [\App\Http\Controllers\LeaveController::class, 'editshortleave'])->name('editshortleave');
Route::get('cancelshortleave/{id}', [\App\Http\Controllers\LeaveController::class, 'cancelshortleave'])->name('cancelshortleave');
//----------------------------------------casual leave--------------------------------------------------------
Route::get('usercasualleave', [\App\Http\Controllers\LeaveController::class, 'usercasualleave'])->name('usercasualleave');
Route::post('storeCasualLeave', [\App\Http\Controllers\LeaveController::class, 'storeCasualLeave'])->name('storeCasualLeave');
Route::get('cancelcasualleave/{id}', [\App\Http\Controllers\LeaveController::class, 'cancelcasualleave'])->name('cancelcasualleave');
Route::post('editcasualleave', [\App\Http\Controllers\LeaveController::class, 'editcasualleave'])->name('editcasualleave');
//----------------------------------------medical leave--------------------------------------------------------
Route::get('usermedicalleave', [\App\Http\Controllers\LeaveController::class, 'usermedicalleave'])->name('usermedicalleave');
Route::post('storeMedicalLeave', [\App\Http\Controllers\LeaveController::class, 'storeMedicalLeave'])->name('storeMedicalLeave');
Route::get('cancelmedicalleave/{id}', [\App\Http\Controllers\LeaveController::class, 'cancelmedicalleave'])->name('cancelmedicalleave');
Route::post('editmedicalleave', [\App\Http\Controllers\LeaveController::class, 'editmedicalleave'])->name('editmedicalleave');
//----------------------------------------half leave--------------------------------------------------------
Route::get('userhalfdayleave', [\App\Http\Controllers\LeaveController::class, 'userhalfdayleave'])->name('userhalfdayleave');
Route::post('storehalfdayLeave', [\App\Http\Controllers\LeaveController::class, 'storehalfdayLeave'])->name('storehalfdayLeave');
Route::get('cancelhalfdayleave/{id}', [\App\Http\Controllers\LeaveController::class, 'cancelhalfdayleave'])->name('cancelhalfdayleave');
Route::post('edithalfdayleave', [\App\Http\Controllers\LeaveController::class, 'edithalfdayleave'])->name('edithalfdayleave');








//----------------------edit---------------------------------------------------------------------
Route::get('usereditpost/{id}', [\App\Http\Controllers\SocialMediaController::class, 'usereditpost'])->name('usereditpost');
Route::post('editpostsavebyuser', [\App\Http\Controllers\SocialMediaController::class, 'editpostsavebyuser'])->name('editpostsavebyuser');
Route::post('updateprofile', [\App\Http\Controllers\SocialMediaController::class, 'updateprofile'])->name('updateprofile');
Route::post('edit_request_desc', [\App\Http\Controllers\UserRequestController::class, 'editrequestdesc'])->name('edit_request_desc');


//----------------------------------delete---------------------------------------------------------------
Route::get('cancelrequest/{id}', [\App\Http\Controllers\UserRequestController::class, 'cancelrequest'])->name('cancelrequest');



// ----------------------------------------------
Route::get('/view' , [UserController::class , 'UserView'])->name('user.view');


//from ravindu

Route::get('/dashboard/admin',[AlluserController::class,'dashboard'])->name('dashboard');
Route::get('/mobileapp',[AlluserController::class,'mobileapp'])->name('mobileapp.view');
Route::get('/UsermobileApp',[AlluserController::class,'mobileapp'])->name('mobileapp.view');


Route::get('employee/module',[AlluserController::class, 'EmployeeModule'])->name('employeeModule.view');
Route::get('/dashboard',[AlluserController::class,'dashboard'])->name('dashboard');


// Users All Routes
Route::prefix('users')->group(function (){

    Route::get('manage/module',[UserController::class, 'ManageUser'])->name('manageuser.view');
    Route::get('/view' , [UserController::class , 'UserView'])->name('user.view');
    Route::get('/add' , [UserController::class , 'UserAdd'])->name('users.add');
    Route::post('/store' , [UserController::class , 'UserStore'])->name('users.store');
    Route::get('/search',[UserController::class, 'search'])->name('searchuser');
    Route::get('/edit/{emp_id}',[UserController::class, 'UserEdit'])->name('users.edit');


});

//Employee Attendance All Routes
Route::prefix('employees')->group(function(){


    Route::get('attendance/employee/view',[AttendanceController::class, 'AttendanceView'])->name('attendance.view');

    Route::get('attendance/employee/add',[AttendanceController::class, 'AttendanceAdd'])->name('employee.attendance.add');

    Route::post('attendance/employee/store',[AttendanceController::class, 'AttendanceStore'])->name('employee.attendance.store');

    Route::get('attendance/employee/edit/{date}',[AttendanceController::class, 'AttendanceEdit'])->name('employee.attendance.edit');

    Route::get('attendance/employee/details/{date}',[AttendanceController::class, 'AttendanceDetails'])->name('employee.attendance.details');

    Route::get('/attendance/search',[AttendanceController::class, 'search'])->name('search');

    Route::get('/attendance/drop',[AttendanceController::class, 'drop'])->name('drop');

});

//Employee Leaves All Routes
Route::prefix('leaves')->group(function(){


    Route::get('/types',[LeaveTypeController::class, 'leavetypes'])->name('leavetypes');

});




