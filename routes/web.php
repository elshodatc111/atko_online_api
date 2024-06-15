<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\MavzuController;
use App\Http\Controllers\PaymeController;

### USERS ###
Route::get('/', function () {return view('home');});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactCreate'])->name('contactCreate')->middleware('auth');

Route::get('/cobinet', [HomeController::class, 'cobinet'])->name('cobinet')->middleware('auth');
Route::post('/cobinet', [HomeController::class, 'resetPassword'])->name('reset.password')->middleware('auth');

Route::get('/cours', [HomeController::class, 'cours'])->name('cours');
Route::get('/cours-index/{type}', [HomeController::class, 'coursIndex'])->name('cours.index');
Route::get('/cours/{id}', [HomeController::class, 'coursShow'])->name('cours.show');
Route::post('/coursPay', [HomeController::class, 'coursPay'])->name('coursPay')->middleware('auth');
Route::get('/mycours', [HomeController::class, 'mycours'])->name('mycours')->middleware('auth');
Route::get('/mycours/{id}', [HomeController::class, 'mycoursShow'])->name('mycours.show')->middleware('auth');
Route::get('/mycours/{cours_id}/{id}', [HomeController::class, 'mycoursShowLessin'])->name('mycours.show.lessin')->middleware('auth');


### ADMIN ###
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/person', [AdminController::class, 'person'])->name('person')->middleware('auth');
Route::get('/person/{id}', [AdminController::class, 'personShow'])->name('person.show')->middleware('auth');
Route::post('/person-cours-plus', [AdminController::class, 'personCoursPlus'])->name('admin.oerson.cours.plus')->middleware('auth');
Route::get('/messege', [AdminController::class, 'messege'])->name('messege')->middleware('auth');
Route::get('/admin-cours', [AdminController::class, 'admin_cours'])->name('admin.cours')->middleware('auth');

Route::get('/admin-cours/{id}', [CoursController::class, 'CoursShow'])->name('admin.cours.show')->middleware('auth');
Route::post('/admin-cours-create', [CoursController::class, 'CreateCours'])->name('admin.cours.create')->middleware('auth');
Route::get('/admin-cours-create/{id}', [CoursController::class, 'UpdateCours'])->name('admin.cours.update')->middleware('auth');
Route::put('/admin-cours-create/{id}', [CoursController::class, 'EditCours'])->name('admin.cours.edit')->middleware('auth');
Route::put('/admin-cours-edit-image/{id}', [CoursController::class, 'EditCoursImage'])->name('admin.cours.edit.image')->middleware('auth');

Route::put('/admin-cours-edit-book/{id}', [CoursController::class, 'EditCoursBook'])->name('admin.cours.edit.book')->middleware('auth');
Route::put('/admin-cours-edit-test/{id}', [CoursController::class, 'EditCoursTest'])->name('admin.cours.edit.test')->middleware('auth');
Route::put('/admin-cours-edit-javob/{id}', [CoursController::class, 'EditCoursJavob'])->name('admin.cours.edit.javob')->middleware('auth');
Route::put('/admin-cours-edit-lugat/{id}', [CoursController::class, 'EditCoursLugat'])->name('admin.cours.edit.lugat')->middleware('auth');
Route::put('/admin-cours-edit-techer/{id}', [CoursController::class, 'EditCourstecher'])->name('admin.cours.edit.techer')->middleware('auth');
Route::DELETE('/admin-cours-delete/{id}', [CoursController::class, 'destroy'])->name('admin.cours.delete')->middleware('auth');

Route::post('/mavzu/create', [MavzuController::class, 'createMavzu'])->name('create.mavzu')->middleware('auth');
Route::put('/mavzu/create/{id}', [MavzuController::class, 'editMavzu'])->name('create.mavzu.edit')->middleware('auth');
Route::get('/mavzu/show/{cours_id}/{id}', [MavzuController::class, 'showMavzu'])->name('show.mavzu')->middleware('auth');
Route::DELETE('/mavzu-delete/{id}', [MavzuController::class, 'destroy'])->name('mavzu.delete')->middleware('auth');
### To'lov tizimlar ###
Route::post('payme',[PaymeController::class, 'index']);