<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerAuth;

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
Route::get('home',[CustomerAuth::class,'register'])->middleware('alreadylogged');
Route::post('customer',[CustomerAuth::class,'AddCustemer']);
Route::get('login',[CustomerAuth::class,'login'])->middleware('alreadylogged');
Route::post('cuslog',[CustomerAuth::class,'customerlogin']);
Route::get('dashboard',[CustomerAuth::class,'dashboard'])->middleware('isloggedin');
Route::get('logout',[CustomerAuth::class,'logout']);
 
