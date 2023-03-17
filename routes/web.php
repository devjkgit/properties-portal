<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\BookingsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PropertiesController::class,"index"]);
Route::get('/property/{reference_id?}',[PropertiesController::class,"property"]);
Route::get('/test/{reference_id?}',[PropertiesController::class,"testproperty"]);
Route::post('/make_bookings/{propid?}',[BookingsController::class,"make_bookings"]);