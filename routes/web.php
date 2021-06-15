<?php
use App\Http\controllers\SumController;
use App\Http\Controllers\StudentController;
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

Route::get('/sinhvien/{name}',[StudentController::class,'index']);

Route::get('/sum/{a}/{b}',[SumController::class,'sum']);

Route::get('/bao/{name}/{id}',[SumController::class,'bao']);

Route::get('/menu',[SumController::class,'menu']);
