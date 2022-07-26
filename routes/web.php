<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\SchemeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UpdateRequestController;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\GratitudeClinicController;
use App\Http\Controllers\RegisterThreatedIndividualController;
use App\Http\Controllers\BoardController;
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

// Route::get('/',function(){
//     return('home');
// });
Route::get('/', function () {
    return view('Home/navBar');
});
 
Auth::routes();
Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/logout',[CustomAuthController::class,'logOut']);
Route::get('/register',[CustomAuthController::class,'register']);
Route::post('/userLogin',[CustomAuthController::class,'loginUser']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/content',function () {
    return view('barcontent/barcontent');
});
//////health extension

Route::post('/registerMember',[MemberController::class,'store']);
Route::post('/childrenRegister',[ChildrenController::class,'store']);
Route::delete('/viewProfile/deleteChild/{id}',[ChildrenController::class,'destroy'])->name('children.delete');
Route::get('/detailOfChild/{id}',[ChildrenController::class,'viewDetail']);
Route::get('/listOfMembers',[MemberController::class,'show']);
Route::delete('/deleteMember/{id}',[MemberController::class,'destroy'])->name('member.delete');
Route::get('/listOfChildren',[ChildrenController::class,'show']);
Route::get('/viewProfile/{id}',[MemberController::class,'viewProfile']);
Route::get('/edit/{id}',[MemberController::class,'edit']);
Route::get('/viewProfile/edit/{id}',[ChildrenController::class,'edit']);

Route::post('/update',[MemberController::class,'update']);
Route::get('/extension', function (){
    return view('healthEx/healthExtensionHome');
});
route::get('/register',function (){
    return view('healthEx/register');
});
route::get('/viewchild',function (){
    return view('healthEx/viewCild');
});
Route::get('/renew/{id}',[MemberController::class,'renew']);
Route::get('/search',function () {
    return view('healthEx/searchMember');
});
Route::post('/searchMember',[MemberController::class,'searchMember']);
Route::get('/viewnotification',function () {
    return view('healthEx/viewNotification');
});
Route::get('/sendnotification',function () {
    return view('healthEx/sendNotification');
});
Route::get('/giveMembershipID/{id}',[MemberController::class,'giveMembershipID']);
Route::get('/generateMembershipID',[MemberController::class,'generateMembershipID']);
// Route::get('/viewRegistredMember',function () {
//     return view('healthEx/viewMembers');
// });

////////////////////////////////member

Route::get('/member',function(){
return view('memberpage/index');
});
Route::get('/familyMember',function(){
    return view('healthEx/familyMember');
});
Route::get('/mviewnotification',function () {
    return view('memberpage/viewNotification');
});
Route::get('/memberProfile',function () {
    return view('memberpage/viewProfile');
});
Route::get('/memberRequest',function () {
    return view('memberpage/updateRequest');
});
Route::post('/storeRequest',[UpdateRequestController::class,'store']);
///////////////////////admin
Route::get('/admin',function () {
    return view('admin/adminHomepage');
});

Route::get('/create',function (){
    return view('admin/createAccount');
});
Route::get('/edit/{id}',[StaffController::class,'editAccount']);
Route::post('/updateAcount',[StaffController::class,'updateAcount']);
Route::delete('/delete/{id}',[StaffController::class,'deleteStaff'])->name('staff.delete');
Route::get('/adminSendNotification',function (){
    return view('admin/sendNotification');
});
Route::get('/toSearch',function(){
return view('admin.searchingPage');
});
Route::get('/viewBySearch',[StaffController::class,'viewBySearch']);

Route::get('/view',[StaffController::class,'show']);
Route::post('/acountCreate',[StaffController::class,'create']);
Route::get('/viewProfileStaff/{id}',[StaffController::class,'viewProfileStaff']);
//Route::get('/viewProfile/{id}',[StaffController::class,'viewProfile']);

/////////////board
Route::post('/registerGClinic',[GratitudeClinicController::class,'create']);
Route::get('/board',function(){
    return view('board/boardHomepage');
});
Route::get('/boardStaffView',[BoardController::class,'boardStaffView']);
Route::get('/registerGc',function(){
    return view('board.registerGrClinic');
});
Route::get('/sendNotification',function(){
    return view('board.sendNotification');
});
Route::view('/viewStaff','board/viewStaff');
Route::get('/viewDetailOfStaff/{id}',[StaffController::class,'viewProfile']);
Route::get('/viewMember',[BoardController::class,'show']);
//
Route::get('/boardViewProfile/{id}',[BoardController::class,'BoardViewProfile']);
Route::get('/account',function(){
    return view('board.bankAccount');
});
Route::view('/registerscheme','board/registerscheme');
Route::post('/insert',[BankAccountController::class,'create']);
Route::get('/show',[BankAccountController::class,'show']);
Route::post('/insertScheme',[SchemeController::class,'create']);
//Cardofficer

Route::post('/registertreated',[RegisterThreatedIndividualController::class,'create']);
Route::get('/cardOfficer',function(){
    return view('cardOfficer.cardOfficerHomepage');
});
Route::get('/registerIndividual',function(){
    return view('cardOfficer.registerIndividuals');
});
Route::get('/generatReport',[RegisterThreatedIndividualController::class,'generateReport']);
Route::get('/viewThreatedIndividual',[RegisterThreatedIndividualController::class,'showThreatedIndividual']);
Route::get('/validateEligibility',function(){
    return view('cardOfficer/validateEligibility');
});
Route::post('/responseOfValidation',[MemberController::class,'validatePhone']);
Route::get('/viewNotification',function(){
    return view('cardOfficer/viewNotification');
});
Route::get('/listOfFamily/{id}',[ChildrenController::class,'listOfFamily']);

//clinical Auditor
Route::get('/auditor',function(){
    return view('clinicalAuditor/clinicalAuditorHomepage');
});
Route::get('/registerClinicalAudit',function(){
    return view('clinicalAuditor/registerClinicalAudit');
});
Route::get('/viewNotificaton',function(){
    return view('clinicalAuditor/viewNotification');
});

//fainance officer
Route::get('showPayment',[PaymentController::class,'show']);
Route::post('/createPayment',[PaymentController::class,'create']);
Route::get('/financeOfficer',function(){
    return view('financeOfficer/financeOfficerHomepage');
});
Route::get('/viewCashin',function(){
    return view('financeOfficer/viewCashin');
});
Route::get('/viewCashout',function(){
    return view('financeOfficer/viewCashout');
});
Route::get('/registerPayment',function(){
    return view('financeOfficer/registerPayment');
});
Route::get('/generateReport',function(){
    return view('financeOfficer/generateReport');
});
Route::get('/financeViewNotification',function(){
    return view('financeOfficer/viewNotification');
});

