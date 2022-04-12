<?php

use Illuminate\Http\Request;
use Modules\Blog\Http\Controllers\Api\CategoryController;
use Modules\Blog\Http\Controllers\Api\ProductsController;

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

Route::middleware('auth:api')->get('/blog', function (Request $request) {
    return $request->user();
});

Route::get('category/get', [CategoryController::class, 'getAllCategory']);
Route::get('product/get', [ProductsController::class, 'getAllProduct']);