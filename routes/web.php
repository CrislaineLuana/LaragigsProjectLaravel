<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\User;

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

//All Listings
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listing/create', [ListingController::class, 'create'])->middleware('auth');

//Store Listings
Route::post('/listing', [ListingController::class, 'store'])->middleware('auth');

//Show Edit Form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Edit Submit to Update
Route::put('/listing/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete
Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Single Listings
Route::get('/listing/{listing}', [ListingController::class, 'show']);



//Show Register Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/listings/manage',[ListingController::class, 'manage'])->middleware('auth');