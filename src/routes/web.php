<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;

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

Route::get('/',[ItemController::class, 'index']);
Route::get('/?tab=myList', [ItemController::class, 'index']);
Route::get('/item/{item}', [ItemController::class, 'detail']);

Route::group(['middleware' => ['auth']],function(){
    Route::get('/mypage/profile' , [ItemController::class, 'edit']);
    Route::post('/item/{item}',[ItemController::class, 'like'])->name('toggleLike');
    Route::delete('/item/{item}',[ItemController::class, 'unlike'])->name('unlike');
});
Route::post('/item/{item}', [ItemController::class, 'store']);
Route::get('/sell',[ItemController::class, 'showSellForm']);
Route::post('/sell', [ItemController::class, 'sell']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);



Route::get('/mypage/profile', [ProfileController::class, 'confirm']);
Route::get('/mypage', [ProfileController::class, 'index']);
Route::get('/mypage?page=buy', [ProfileController::class, 'profile']);
Route::get('/mypage?page=sell', [ProfileController::class, 'profile']);
Route::get('/mypage/profile', [ProfileController::class, 'edit']);
Route::post('/mypage/profile', [profileController::class, 'update']);
Route::post('/?tab=mylist', [ItemController::class, 'index']);

Route::get('/edit', [ProfileController::class, 'edit']);
Route::get('/purchase/address/{item_id}', [PurchaseController::class, 'addressEdit']);
Route::post('/purchase/address/{item_id}', [PurchaseController::class, 'addressUpdate']);
Route::get('/purchase/{item}', [PurchaseController::class, 'purchase']);
Route::post('/purchase/{item}', [PurchaseController::class, 'purchase']);
Route::get('/search', [ItemController::class, 'search']);
