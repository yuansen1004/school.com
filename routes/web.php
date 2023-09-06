<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ScholarController;
use App\Http\Controllers\StudentloginController;

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get('/', function () {
//   return view('welcome');
//});

Route::get('/list', function(){
    return view('list');
});

Route::get('/',[App\Http\Controllers\AuthController::class,'login']);
Route::post('login',[App\Http\Controllers\AuthController::class,'AuthLogin']);
Route::get('logout',[App\Http\Controllers\AuthController::class,'logout']);
Route::get('forgot-password',[App\Http\Controllers\AuthController::class,'forgotpassword']);
Route::post('forgot-password',[App\Http\Controllers\AuthController::class,'PostForgotPassword']);
Route::get('add',[App\Http\Controllers\AdminController::class,'add']);
Route::post('add',[App\Http\Controllers\AdminController::class,'insert']);
//studentlogin
Route::get('/Studentlogin',[App\Http\Controllers\StudentloginController::class,'studentlogin']);
Route::post('studentlogin',[App\Http\Controllers\StudentloginController::class,'studentAuthLogin']);
//classurl
Route::get('class',[App\Http\Controllers\ClassController::class,'class']);
Route::post('class',[App\Http\Controllers\ClassController::class,'class']);
Route::get('list',[App\Http\Controllers\AdminController::class,'list']);

//sutdentController
Route::get('/addStudent', function(){
    return view('addStudent');
});
Route::post('/addStudent/store', [App\Http\Controllers\StudentController::class, 'add'])->name('addStudent');
Route::get('/viewStudent',[App\Http\Controllers\StudentController::class,'view'])->name('viewStudent');
Route::get('/deleteStudent/{id}',[App\Http\Controllers\StudentController::class,'delete'])->name('deleteStudent');
Route::get('/showStudent',[App\Http\Controllers\StudentController::class,'show'])->name('showStudent');
Route::get('/showStudent/{id}',[App\Http\Controllers\StudentController::class,'showDetail'])->name('showStudentDetail');
Route::get('/StundentDetail/{id}',[App\Http\Controllers\StudentController::class,'edit'])->name('editStudent');
Route::post('/updateStudent', [App\Http\Controllers\StudentController::class, 'update'])->name('updateStudent');

//classController
Route::get('/addSubject', function(){
    return view('addSubject');
});
Route::post('/addSubject/store', [App\Http\Controllers\SubjectController::class, 'add'])->name('addSubject');
Route::get('/viewSubject',[App\Http\Controllers\SubjectController::class,'view'])->name('viewSubject');
Route::get('/deleteSubject/{id}',[App\Http\Controllers\SubjectController::class,'delete'])->name('deleteSubject');
Route::get('/SubjectDetail/{id}',[App\Http\Controllers\SubjectController::class,'edit'])->name('editSubject');
Route::post('/updateSubject', [App\Http\Controllers\SubjectController::class, 'update'])->name('updateSubject');

//Scholar
Route::get('/addScholar', function(){
    return view('addScholar');
});
Route::post('/addScholar/store', [App\Http\Controllers\ScholarController::class, 'add'])->name('addScholar');
Route::get('/viewScholar',[App\Http\Controllers\ScholarController::class,'view'])->name('viewScholar');
Route::get('/deleteScholar/{id}',[App\Http\Controllers\ScholarController::class,'delete'])->name('deleteScholar');
Route::get('/ScholarDetail/{id}',[App\Http\Controllers\ScholarController::class,'edit'])->name('editScholar');
Route::post('/updateScholar', [App\Http\Controllers\ScholarController::class, 'update'])->name('updateScholar');
//Route::get('dashboard', function () {
//    return view('dashboard');
//});
Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('dashboardStudent', function () {
    return view('dashboardStudent');
});

Route::get('auth/studentlogin', function () {
    return view('auth/studentlogin');
});


Route::get('/addAsubject', function(){
    return view('addAsubject');
});
Route::post('/addAsubject/store', [App\Http\Controllers\AsubjectController::class, 'add'])->name('addAsubject');
Route::get('/viewAsubject',[App\Http\Controllers\SubjectController::class,'viewa'])->name('viewAsubject');
Route::get('/deleteAsubject/{id}',[App\Http\Controllers\AsubjectController::class,'delete'])->name('deleteAsubject');
Route::get('/AsubjectDetail/{id}',[App\Http\Controllers\AsubjectController::class,'edit'])->name('editAsubject');
Route::post('/updateAsubject', [App\Http\Controllers\AsubjectController::class, 'update'])->name('updateAsubject');
//student
Route::get('/viewAscholar',[App\Http\Controllers\ScholarController::class,'viewa'])->name('viewAscholar');
Route::get('/viewAenglish',[App\Http\Controllers\EnglishController::class,'viewa'])->name('viewAenglish');

Route::get('/aboutUs',[App\Http\Controllers\AdminController::class, 'aboutUs'])->name('aboutUs');

//contactus
Route::get('/addContactUs', function(){
    return view('addContactUs');
});
Route::post('/addContactUs/store', [App\Http\Controllers\ContactUsController::class, 'add'])->name('addContactUs');
Route::get('/viewContactUs',[App\Http\Controllers\ContactUsController::class,'view'])->name('viewContactUs');
Route::get('/deleteContactUs/{id}',[App\Http\Controllers\ContactUsController::class,'delete'])->name('deleteContactUs');
Route::get('/ContactUsDetail/{id}',[App\Http\Controllers\ContactUsController::class,'edit'])->name('editContactUs');
Route::post('/updateContactUs', [App\Http\Controllers\ContactUsController::class, 'update'])->name('updateContactUs');

//english
Route::get('/addEnglish', function(){
    return view('addEnglish');
});
Route::post('/addEnglish/store', [App\Http\Controllers\EnglishController::class, 'add'])->name('addEnglish');
Route::get('/viewEnglish',[App\Http\Controllers\EnglishController::class,'view'])->name('viewEnglish');
Route::get('/deleteEnglish/{id}',[App\Http\Controllers\EnglishController::class,'delete'])->name('deleteEnglish');
Route::get('/EnglishDetail/{id}',[App\Http\Controllers\EnglishController::class,'edit'])->name('editEnglish');
Route::post('/updateEnglish', [App\Http\Controllers\EnglishController::class, 'update'])->name('updateEnglish');