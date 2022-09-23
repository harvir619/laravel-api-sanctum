<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::get('/products', [ProductController::class, 'index']);
// Route::get('/products', [ProductController::class, 'show']);

// Route::post('/products', [ProductController::class, 'store']);

//Public Routes
Route::resource('products', ProductController::class);

Route::get('/products/search/{name}', [ProductController::class, 'search']);

//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
});

Route::middleware('auth:sanctum')->get('/user', function () {
});