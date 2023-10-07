<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products_Controller;
use App\Http\Controllers\Categories_Controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/categories', [Categories_Controller::class, 'get_Categories']);
// Route::get('/products', [Products_Controller::class, 'get_Products']);