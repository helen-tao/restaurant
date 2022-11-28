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

//echo "tt";exit;
//Route::get('/', function () {
//    return view('welcome');
//});
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/register', RegisterController::class);
Route::get('/login', LoginController::class);
