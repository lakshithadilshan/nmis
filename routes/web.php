<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlluserController;
use App\Http\Controllers\RequestModuleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\AttendanceController;
use App\Http\Controllers\LeaveTypeController;
use App\Http\Controllers\SelfNotificationController;
use App\Http\Controllers\AppliciantController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\AdministrativeNotificationController;
use App\Http\Controllers\AppliciantTestController;
use App\Http\Controllers\AppliciantExamController;
use App\Http\Controllers\AppliciantExamUserController;
use App\Http\Controllers\RecruitmentSeasonController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RaveController;
use App\Http\Controllers\Backend\EmployeeModuleController;


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
Route::get('approverequest/{id}', [\App\Http\Controllers\RequestModuleController::class, 'approverequest'])->name('approverequest');
Route::get('rejectrequest/{id}', [\App\Http\Controllers\RequestModuleController::class, 'rejectrequest'])->name('rejectrequest');
Route::get('adminsystemprofile',[AlluserController::class,'adminsystemprofile'])->name('adminsystemprofile');
Route::post('adminsystemupdateprofile',[AlluserController::class,'adminsystemupdateprofile'])->name('adminsystemupdateprofile');

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
//--------------------------personal file handling--------------------------------------------------------
Route::get('/personalfilee',[\App\Http\Controllers\PersonalFileController::class,'personalfilee'])->name('personalfilee');
Route::get('/pfappoiment',[\App\Http\Controllers\PersonalFileController::class,'pfappoiment'])->name('pfappoiment');
Route::get('/pfpromotion',[\App\Http\Controllers\PersonalFileController::class,'pfpromotion'])->name('pfpromotion');
Route::get('/pfincrements',[\App\Http\Controllers\PersonalFileController::class,'pfincrements'])->name('pfincrements');
Route::get('/pfPoliceReport',[\App\Http\Controllers\PersonalFileController::class,'pfPoliceReport'])->name('pfPoliceReport');
Route::get('/pfSecretReport',[\App\Http\Controllers\PersonalFileController::class,'pfSecretReport'])->name('pfSecretReport');
Route::get('/pfConfidential',[\App\Http\Controllers\PersonalFileController::class,'pfConfidential'])->name('pfConfidential');
Route::get('/pfDutyAssumeLetter',[\App\Http\Controllers\PersonalFileController::class,'pfDutyAssumeLetter'])->name('pfDutyAssumeLetter');
Route::get('/pfOther',[\App\Http\Controllers\PersonalFileController::class,'pfOther'])->name('pfOther');
Route::get('/deletePDF/{id}',[\App\Http\Controllers\PersonalFileController::class,'deletePDF'])->name('deletePDF');
Route::post('/uploadpersonalfile',[\App\Http\Controllers\PersonalFileController::class,'uploadpersonalfile'])->name('uploadpersonalfile');
Route::get('selectemployeedetail/{id}',[\App\Http\Controllers\PersonalFileController::class,'selectemployeedetail'])->name('selectemployeedetail');
Route::get('/readPDFs/{f}',[\App\Http\Controllers\PersonalFileController::class,'readPDFs'])->name('readPDFs');
Route::get('/downloadPDFs/{f}',[\App\Http\Controllers\PersonalFileController::class,'downloadPDFs'])->name('downloadPDFs');
//---------------------------request-----------------------------------------------------
Route::get('/Requestmodule',[RequestModuleController::class,'show'])->name('Requestmodule');
Route::get('/admintransportrequest',[RequestModuleController::class,'admintransportrequest'])->name('admintransportrequest');
Route::get('/adminRequestMoreBTN/{id}/{emp_id}',[RequestModuleController::class,'adminRequestMoreBTN'])->name('adminRequestMoreBTN');
//-----------request chat------------------------------------------------
Route::post('/requestChat',[RequestModuleController::class,'requestChat'])->name('requestChat');
Route::get('/adminreqeustfurniture',[RequestModuleController::class,'adminreqeustfurniture'])->name('adminreqeustfurniture');
Route::get('/adminrequesttransfer',[RequestModuleController::class,'adminrequesttransfer'])->name('adminrequesttransfer');
Route::get('/adminrequestinsurance',[RequestModuleController::class,'adminrequestinsurance'])->name('adminrequestinsurance');
Route::get('/adminrequestpromotion',[RequestModuleController::class,'adminrequestpromotion'])->name('adminrequestpromotion');
Route::get('/adminrequestincrements',[RequestModuleController::class,'adminrequestincrements'])->name('adminrequestincrements');
Route::get('/adminrequestother',[RequestModuleController::class,'adminrequestother'])->name('adminrequestother');








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
//-------------------------------------request--------------------------------------------------------------------
Route::get('usertransportrequest', [\App\Http\Controllers\UserRequestController::class, 'usertransportrequest'])->name('usertransportrequest');
Route::post('storeTransportRequest', [\App\Http\Controllers\UserRequestController::class, 'storeTransportRequest'])->name('storeTransportRequest');
Route::get('userrequestfurniture', [\App\Http\Controllers\UserRequestController::class, 'userrequestfurniture'])->name('userrequestfurniture');
Route::get('userrequesttransfer', [\App\Http\Controllers\UserRequestController::class, 'userrequesttransfer'])->name('userrequesttransfer');
Route::get('userrequestinsurance', [\App\Http\Controllers\UserRequestController::class, 'userrequestinsurance'])->name('userrequestinsurance');
Route::get('userrequestpromotion', [\App\Http\Controllers\UserRequestController::class, 'userrequestpromotion'])->name('userrequestpromotion');
Route::get('userrequestincrements', [\App\Http\Controllers\UserRequestController::class, 'userrequestincrements'])->name('userrequestincrements');
Route::get('userrequestother', [\App\Http\Controllers\UserRequestController::class, 'userrequestother'])->name('userrequestother');








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

    Route::get('attendance/employee/store',[AttendanceController::class, 'AttendanceStore'])->name('attendance.store');

    Route::get('attendance/employee/edit/{date}',[AttendanceController::class, 'AttendanceEdit'])->name('employee.attendance.edit');

    Route::get('attendance/employee/details/{date}',[AttendanceController::class, 'AttendanceDetails'])->name('employee.attendance.details');

    Route::get('/attendance/search',[AttendanceController::class, 'search'])->name('search');

    Route::get('/attendance/drop',[AttendanceController::class, 'drop'])->name('drop');

    Route::post('/attendance/csv',[AttendanceController::class, 'csv'])->name('add_csv');

    Route::get('/attendance/exportpdf',[AttendanceController::class, 'PdfExport'])->name('exportpdf.attendance');

    Route::get('/attendance/exportcsv',[AttendanceController::class, 'CsvExport'])->name('exportcsv.attendance');

    Route::get('/attendance/months',[AttendanceController::class, 'AttendanceMonths'])->name('attendancemonth');

    Route::get('/attendance/add',[AttendanceController::class, 'AttendancAdd'])->name('attendance.add');




});


Route::get('employee/module',[EmployeeModuleController::class, 'EmployeeModule'])->name('employeeModule.view');

Route::get('rave/view',[RaveController::class, 'rave'])->name('rave.view');

Route::get('usereditt/{id}', [UserController::class, 'UserEdit'])->name('usereditt');
Route::post('userseditsave',[UserController::class, 'userseditsave'])->name('userseditsave');

//Employee Leaves All Routes
Route::prefix('leaves')->group(function(){


    Route::get('/types',[LeaveTypeController::class, 'leavetypes'])->name('leavetypes');

});

//----------------------------------------from mudeesha----------------------------------------------------------------------------------------------------
//notification test
Route::get('/self-notification',[SelfNotificationController::class,'getSelfNotifications'])->name('admin.logout');


Route::view("/test-notification","admin/test_notification");
Route::POST('/test-notification',[AppliciantController::class,'testNotification']);

Route::view('/mylogin','user.login');
Route::POST('/mylogin',[App\Http\Controllers\UserController::class,'mylogin']);

Route::get('/user-dashbord',[UserController::class,'dashbord']);

Route::view('/admin-notification-setup','admin.admin_notification');
Route::view('/admin-form','admin.form');

//send notification
Route::view('/send-notification','admin.notification.admin_notification');
Route::get('/send-notification',[AdministrativeNotificationController::class,'dataForAdminNotifications']);

//fetch administer notification
Route::get('fetch-admin-notification',[AdministrativeNotificationController::class, 'fetcAdminNotifications']);

//store notification
Route::POST('store-admin-notification',[AdministrativeNotificationController::class, 'storeAdminNotifications']);

//test
Route::get('testt',[AdministrativeNotificationController::class, 'sendAdminActiveNotifications']);




//Admin
Route::prefix('admin')->group(function(){
    Route::get('recruitment/dashbord',[AdminController::class,'returnDashbord'])->name('admin_dashbord');

    Route::get('recruitment/appliciants',[AdminController::class,'appliciant'])->name('admin_appliciant');

    Route::get('recruitment/exam',[AdminController::class,'appliciantExam'])->name('admin_appliciant_exam');

    Route::get('recruitment/exam-adjustment',[AdminController::class,'ExamAdjustment'])->name('admin_appliciant_exam_adjustment');

    Route::POST('/test',[App\Http\Controllers\AdminController::class,'test']);

    //Admin recruiment
    //Designation
    //fecth designation
    Route::get('recruitment/fetch-designation',[DesignationController::class, 'fetcDesignation']);
    //delete notification
    Route::delete('recruitment/delete-designation/{id}',[DesignationController::class, 'deleteDesignation']);
    //edit designation
    Route::get('recruitment/edit-designation/{id}',[DesignationController::class, 'editDesignation']);
    //update designation
    Route::put('recruitment/update-designation/{id}',[DesignationController::class, 'updateDesignation']);
    //add designation
    Route::POST('recruitment/add-designation',[DesignationController::class, 'AddDesignation']);
    //view qualification
    Route::get('recruitment/view-qualification/{id}',[DesignationController::class, 'viewQualification']);
    //view details
    Route::get('recruitment/view-details/{id}',[DesignationController::class, 'viewdetails']);
    //End designation

    //Season
    // //fecth designation
    Route::get('recruitment/fetch-season',[RecruitmentSeasonController::class, 'fetchSeason']);
    // //delete notification
    Route::delete('recruitment/delete-season/{id}',[RecruitmentSeasonController::class, 'deleteSeason']);
    // //edit designation
    Route::get('recruitment/edit-season/{id}',[RecruitmentSeasonController::class, 'editSeason']);
    // //update designation
    Route::put('recruitment/update-season/{id}',[RecruitmentSeasonController::class, 'updateSeason']);
    // //add designation
    Route::POST('recruitment/add-season',[RecruitmentSeasonController::class, 'AddSeason']);
    // //select designation
    Route::POST('recruitment/select-season',[RecruitmentSeasonController::class, 'SelectSeason']);
    //End Season

    //Appliciant
    //fecth designation
    Route::get('recruitment/fetch-appliciant',[AppliciantController::class, 'fetcAppliciant']);
    //delete notification
    //Route::delete('recruitment/delete-appliciant/{id}',[AppliciantController::class, 'deleteAppliciant']);
    //view details
    Route::get('recruitment/view-appliciant/{id}',[AppliciantController::class, 'viewAppliciant']);
    //Reject Appliciant
    Route::put('recruitment/reject_appliciant/{id}',[AppliciantController::class, 'rejectAppliciant']);
    //Reject Appliciant
    Route::put('recruitment/approve_appliciant/{id}',[AppliciantController::class, 'approveAppliciant']);
    //End designation

    //Appliciant-test
    //fecth Appliciant-test
    Route::get('recruitment/fetch-appliciant_test',[AppliciantTestController::class, 'fetcAppliciantTest']);
    //delete Appliciant-test
    Route::delete('recruitment/delete-appliciant_test/{id}',[AppliciantTestController::class, 'deleteAppliciantTest']);
    //edit Appliciant-test
    Route::get('recruitment/edit-appliciant_test/{id}',[AppliciantTestController::class, 'editAppliciantTest']);
    //update Appliciant-test
    Route::put('recruitment/update-appliciant_test/{id}',[AppliciantTestController::class, 'updateAppliciantTest']);
    //add Appliciant-test
    Route::POST('recruitment/add-appliciant_test',[AppliciantTestController::class, 'AddAppliciantTest']);
    //End Appliciant-test

    //Appliciant-exam schedule
    //fecth Appliciant exam schedule
    Route::get('recruitment/fetch-exam-schedule',[AppliciantExamController::class, 'fetchExamSchedule']);
    //delete Appliciant-exam schedule
    Route::delete('recruitment/delete-exam-schedule/{id}',[AppliciantExamController::class, 'deleteExamSchedule']);
    //edit Appliciant-exam schedule
    Route::get('recruitment/edit-exam-schedule/{id}',[AppliciantExamController::class, 'editExamSchedule']);
    //update Appliciant-exam schedule
    Route::put('recruitment/update-exam-schedule/{id}',[AppliciantExamController::class, 'updateExamSchedule']);
    //add Appliciant-exam schedule
    Route::POST('recruitment/add-exam-schedule',[AppliciantExamController::class, 'AddExamSchedule']);
    //add Appliciant-exam marks
    Route::POST('recruitment/autofill-exam-schedule',[AppliciantExamController::class, 'AutoFillExamSchedule']);
    //End Appliciant-exam schedule

    //Appliciant-exam marks
    //fecth Appliciant exam marks
    Route::get('recruitment/fetch-exam-marks',[AppliciantExamUserController::class, 'fetchExamMarks']);
    //delete Appliciant-exam marks
    Route::delete('recruitment/delete-exam-marks/{id}',[AppliciantExamUserController::class, 'deleteExamMarks']);
    //edit Appliciant-exam marks
    Route::get('recruitment/edit-exam-marks/{id}',[AppliciantExamUserController::class, 'editExamMarks']);
    //update Appliciant-exam marks
    Route::put('recruitment/update-exam-marks/{id}',[AppliciantExamUserController::class, 'updateExamMarks']);
    //add Appliciant-exam marks
    Route::POST('recruitment/add-exam-marks',[AppliciantExamUserController::class, 'AddExamMarks']);
    //add Appliciant-exam marks
    Route::POST('recruitment/autofill-exam-marks',[AppliciantExamUserController::class, 'AutoFillExamMarks']);
    //End Appliciant-exam marks

    //Start exam mark filter
    //fecth Appliciant exam marks
    Route::get('recruitment/fetch-exam-mark-filter',[AppliciantExamUserController::class, 'fetchExamMarkFilter']);
    //define cutoff marks
    Route::post('recruitment/define-cutoff',[AppliciantExamUserController::class, 'defineCutoff']);
    //define count
    Route::post('recruitment/define-count',[AppliciantExamUserController::class, 'defineCount']);
    //End exam mark filter


    //End Appliciant-test


});
Route::delete('delete-notification/{id}',[AdminController::class, 'deleteNotification']);
Route::get('edit-notification/{id}',[AdminController::class, 'editNotification']);
Route::put('update-notification/{id}',[AdminController::class, 'updateNotification']);
Route::get('view-notification/{id}',[AdminController::class, 'viewNotification']);



//Appliciants AppliciantController
Route::prefix('appliciant')->group(function(){

//Dashbord
    Route::get('/dashbord',[AppliciantController::class,'returnDashbord'])->name('temp_user_dashbord');

    Route::POST('/application',[AppliciantController::class,'returnApplication'])->name('appliciant.application');

//submit application
    Route::POST('/submit-application',[AppliciantController::class,'submitApplication']);

//view own details
    Route::get('/view-own',[AppliciantController::class, 'viewOwnDetails']);

//view own details
    Route::get('/edit_details',[AppliciantController::class, 'loadEditDetails']);

//update application
    Route::POST('/update-application',[AppliciantController::class,'updateApplication']);


});





Route::view('/formset','admin.form');









Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('applicant')->group(function(){
    Route::get('/dashboard',[AppliciantController::class,'returnDashboard']);
});

Route::get('testt',[DesignationController::class, 'test']);

Route::get('add-employee',[EmployeeController::class, 'addEmployee']);


