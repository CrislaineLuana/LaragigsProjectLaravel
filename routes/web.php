<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
Route::get('/listing/create', [ListingController::class, 'create']);

//Store Listings
Route::post('/listing', [ListingController::class, 'store']);








//Single Listings
Route::get('/listing/{listing}', [ListingController::class, 'show']);

