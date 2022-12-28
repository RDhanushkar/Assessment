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

Route::get('/dress', [MenDressController::class,'index']);
Route::get('/createDress',[MenDressController::class,'create']);
Route::post('/storeDress',[MenDressController::class,'store']);

Route::get('/edit/{menDress}', [MenDressController::class,'edit']);
Route::put('/update/{menDress}', [MenDressController::class,'update']);
Route::get('/delete/{menDress}', [MenDressController::class,'destroy']);

//jeweley card
Route::get('/jewelry', [MenJewelryController::class,'index']);
Route::get('/createJewelry',[MenJewelryController::class,'create']);
Route::post('/storeJewelry',[MenJewelryController::class,'store']);

Route::get('/edit/{menJewelry}', [MenJewelryController::class,'editJ']);
Route::put('/update/{menJewelry}', [MenJewelryController::class,'updateJ']);
Route::get('/delete/{menJewelry}', [MenJewelryController::class,'destroyJ']);

//shoes card
Route::get('/shoes', [MenShoesController::class,'index']);
Route::get('/createShoes',[MenShoesController::class,'create']);
Route::post('/storeShoes',[MenShoesController::class,'store']);

Route::get('/edit/{menShoes}', [MenShoesController::class,'edit']);
Route::put('/update/{menShoes}', [MenShoesController::class,'update']);
Route::get('/delete/{menShoes}', [MenShoesController::class,'destroy']);




