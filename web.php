<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentProfileController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function() {
//     echo "hello world";
// });

// Route::post('/testing', function() {
//     echo "test post";
// });

// Route::get('/arah-menerima/{params}/{paramtwo}', [TestController::class, 'index']);

// Route::get('/kira-bmi/{height}/{weight}', function($height, $weight)
// {
//     $formula = (($height + $weight) + ($height + $weight))/$weight;
//     return round($formula, 4);
//  });
 
//  Route::group(['prefix' => 'permulaan', 'middleware' => 'auth'], function(){
//     Route::view('paparhtml', 'paparan', ['data' => 'ini data dari paparan!']);
//     Route::get('/arah-menerima/{params}/{paramtwo}', [TestController::class,'index']);
//     Route::get('/display-all-data', [TestController::class, 'lainsikit']);

// });

// Route::get('/', [StudentProfileController::class, 'index'])->name('index');
// Route::get('/create', [StudentProfileController::class, 'create'])->name('create');

// Route::group(['prefix' => 'students', 'as' => 'students.'], function(){
//     Route::get('/', [StudentProfileController::class, 'index'])->name('index');
//     Route::get('/create', [StudentProfileController::class, 'create'])->name('create');
//     Route::post('/store', [StudentProfileController::class, 'store'])->name('store');
//     Route::get('/{student}/show', [StudentProfileController::class, 'show'])->name('show');
//     Route::get('/{student}/edit', [StudentProfileController::class, 'edit'])->name('edit');
//     Route::put('/{student}/update', [StudentProfileController::class, 'update'])->name('update');
//     Route::delete('/{student}/destroy', [StudentProfileController::class, 'destroy'])->name('destroy');
//     Route::get('chart', [StudentProfileController::class, 'chart'])->name('chart');
//  });
 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product/{id}', [ProductController::class, 'show']);

 Route::group(['prefix' => 'reviews', 'as' => 'reviews.'], function() {
    Route::get('/', [ReviewController::class, 'index'])->name('index');
    Route::get('/create', [ReviewController::class, 'create'])->name('create');
    Route::post('/store', [ReviewController::class, 'store'])->name('store');
    Route::get('/{review}/show', [ReviewController::class, 'show'])->name('show');
    Route::get('/{review}/edit', [ReviewController::class, 'edit'])->name('edit');
    Route::put('/{review}/update', [ReviewController::class, 'update'])->name('update');
    Route::delete('/{review}/destroy', [ReviewController::class, 'destroy'])->name('destroy');
});


