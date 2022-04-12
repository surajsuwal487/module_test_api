<?php

use App\Http\Controllers\UsersImportController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->group(function () {

    Route::get('/import', [UsersImportController::class, 'show'])->name('users.import');
    Route::post('/import', [UsersImportController::class, 'store']);

} );