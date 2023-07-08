<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\LandingPagesController;

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

Route::get('/testing', function () {
    return view('layout.page2');
});

// Landing Pages
Route::get('/',[LandingPagesController::class, 'index']) -> name('home');
Route::get('/coursePage',[LandingPagesController::class, 'coursePage']) -> name('coursePage');
Route::get('/statistics',[LandingPagesController::class, 'statistics']) -> name('statistics');
Route::get('/feature',[LandingPagesController::class, 'feature']) -> name('features');
Route::get('/system-spk',[LandingPagesController::class, 'systemSpk']) -> name('system-spk');
Route::get('/contact',[LandingPagesController::class, 'contact']) -> name('contact');


Route::middleware('guest')->group(function () {
  Route::get('/login', [AuthController::class, 'index'])->name('login');
  Route::post('/login', [AuthController::class, 'authenticate']);
  Route::get('/signup', [AuthController::class, 'signUp']);
  Route::post('/signup', [AuthController::class, 'store']);
});

Route::middleware('auth')->group(function () {
  Route::get('/signout', [AuthController::class, 'signOut']);

//   Route::get('/dashboard', function () {
//     return view('dashboard.index', [
//       'title' => 'Dashboard'
//     ]);
//   });
});

Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index']);


// Route::get('/datapeserta', function () {
//     return view('datapeserta');
// });

// CRUD Course
Route::controller(CourseController::class)->group(function() {
    Route::get('course/', 'index');
    Route::get('course/add', 'add');
    Route::post('course/store', 'store');
    Route::get('course/edit/{id}', 'edit');
    Route::post('course/update/{id}', 'update');
    Route::get('course/delete/{id}', 'delete');
});

Route::controller(KriteriaController::class)->group(function() {
    Route::get('kriteria/', 'index');
    Route::get('kriteria/add', 'add');
    Route::post('kriteria/store', 'store');
    Route::get('kriteria/edit/{id}', 'edit');
    Route::post('kriteria/update/{id}', 'update');
    Route::get('kriteria/delete/{id}', 'delete');
});


Route::controller(AlternatifController::class)->group(function() {
    Route::get('alternatif/', 'index');
    Route::get('alternatif/add', 'add');
    Route::post('alternatif/store', 'store');
    Route::get('alternatif/edit/{id}', 'edit');
    Route::post('alternatif/update/{id}', 'update');
    Route::get('alternatif/delete/{id}', 'delete');
});


Route::get('/hitung', [HitungController::class, 'rekomendasi'])->name('hitung');
