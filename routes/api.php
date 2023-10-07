<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Products_Controller;
use App\Http\Controllers\Categories_Controller;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/categories', [Categories_Controller::class, 'get_Categories']);
Route::get('/prod/cat_id={cat_id}', [Products_Controller::class, 'showProds']);








// Route::get('/product', [Products_Controller::class, 'get_Products']);
// Route::get('/products/cat_id={cat_id}', [Products_Controller::class, 'showProducts']);

