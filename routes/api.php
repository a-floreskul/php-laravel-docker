<?php

use App\Http\Controllers\Cars;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cars/{id}', [Cars::class, 'get'])->name('get-cars');
Route::post('/car-create/', [Cars::class, 'create'])->name('creat-cars');
Route::post('/car-update/{id}', [Cars::class, 'update'])->name('creat-cars');
Route::delete('/car-delete/{id}', [Cars::class, 'delete'])->name('creat-cars');
