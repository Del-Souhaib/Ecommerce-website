<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function (){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::get('/categories',[\App\Http\Controllers\AdminController::class,'categories']);
    Route::get('/addcategorypage',[\App\Http\Controllers\AdminController::class,'addcategorypage']);
    Route::post('/addcategory',[\App\Http\Controllers\AdminController::class,'addcategory']);
    Route::post('/deletecategory',[\App\Http\Controllers\AdminController::class,'deletecategory']);

    Route::get('/souscategories',[\App\Http\Controllers\AdminController::class,'souscategories']);
    Route::get('/addcategorypage',[\App\Http\Controllers\AdminController::class,'addsouscategoriespage']);
    Route::post('/addsouscategories',[\App\Http\Controllers\AdminController::class,'addsouscategories']);
    Route::post('/deletesouscategories',[\App\Http\Controllers\AdminController::class,'deletesouscategories']);

    Route::get('/messages',[\App\Http\Controllers\AdminController::class,'messages']);
    Route::post('/deletemessage',[\App\Http\Controllers\AdminController::class,'deletemessage']);

    Route::get('/clients',[\App\Http\Controllers\AdminController::class,'clients']);

    Route::get('/companies',[\App\Http\Controllers\AdminController::class,'companies']);
    Route::get('/addcompanypage',[\App\Http\Controllers\AdminController::class,'addcompanypage']);
    Route::post('/addcompanies',[\App\Http\Controllers\AdminController::class,'addcompanies']);
    Route::get('/modifycompanypage/{id}',[\App\Http\Controllers\AdminController::class,'modifycompanypage']);
    Route::post('/modifycompanies',[\App\Http\Controllers\AdminController::class,'modifycompanies']);
    Route::post('/deletecompanies',[\App\Http\Controllers\AdminController::class,'deletecompanies']);

    Route::get('/profile',[\App\Http\Controllers\AdminController::class,'profile']);
});

require __DIR__.'/auth.php';
