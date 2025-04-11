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


   Route::group(['prefix' => 'products', 'as' => 'products.'], function() {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/{product}/show', [ProductController::class, 'show'])->name('show');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('/{product}/update', [ProductController::class, 'update'])->name('update');
    Route::delete('/{product}/destroy', [ProductController::class, 'destroy'])->name('destroy');
});



Route::group(['prefix' => 'services', 'as' => 'services.'], function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index');
    Route::get('/create', [ServiceController::class, 'create'])->name('create');
    Route::post('/store', [ServiceController::class, 'store'])->name('store');
    Route::get('/{service}/show', [ServiceController::class, 'show'])->name('show');
    Route::get('/{service}/edit', [ServiceController::class, 'edit'])->name('edit');
    Route::put('/{service}/update', [ServiceController::class, 'update'])->name('update');
    Route::delete('/{service}/destroy', [ServiceController::class, 'destroy'])->name('destroy');
});
