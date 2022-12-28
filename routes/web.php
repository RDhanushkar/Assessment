<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenDressController;
use App\Http\Controllers\MenJewelryController;
use App\Http\Controllers\MenShoesController;





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
Route::get('/', [LoginController::class,'index']);
Route::post('/check',[LoginController::class,'checklogin']);
Route::get('/logout',[LoginController::class,'logout']);

Route::get('/men', [LoginController::class,'men']);
Route::get('/dash', [LoginController::class,'dash']);

//dress card

Route::get('dress', [MenDressController::class,'index']);
Route::get('create-dress',[MenDressController::class,'create']);
Route::post('create-dress',[MenDressController::class,'store']);

Route::get('edit-dress/{id}', [MenDressController::class,'edit']);
Route::put('update-dress/{id}', [MenDressController::class,'update']);
Route::get('delete-dress/{id}', [MenDressController::class,'destroy']);

//jeweley card
Route::get('jewelry', [MenJewelryController::class,'index']);
Route::get('create-jewelry',[MenJewelryController::class,'create']);
Route::post('create-jewelry',[MenJewelryController::class,'store']);

Route::get('edit-jewelry/{id}', [MenJewelryController::class,'edit']);
Route::put('update-jewelry/{id}', [MenJewelryController::class,'update']);
Route::get('delete-jewelry/{id}', [MenJewelryController::class,'destroy']);

//shoes card
Route::get('shoes', [MenShoesController::class,'index']);
Route::get('create-shoes',[MenShoesController::class,'create']);
Route::post('create-shoes',[MenShoesController::class,'store']);

Route::get('edit-shoes/{id}', [MenShoesController::class,'edit']);
Route::put('update-shoes/{id}', [MenShoesController::class,'update']);
Route::get('delete-shoes/{id}', [MenShoesController::class,'destroy']);




