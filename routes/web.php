<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DemoController;

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
Route::get('/brand',[DemoController::class,'index']);
Route::get('/brand/{id}',[DemoController::class,'addorupdate']);
Route::get('/Pagination',[DemoController::class,'Pagination']);
Route::get('/relation',[DemoController::class,'relation']);
Route::get('/orm',[DataController::class,'getData']);
Route::get('/orm1/{id}',[DataController::class,'getUser']);
