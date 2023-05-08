<?php

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

require_once 'theme-routes.php';
require __DIR__ . '/auth.php';

Route::prefix('v1')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/barebone', function () {
            dd(auth());
            return view('barebone', ['title' => 'This is Title']);
        });
    });
})->middleware(['auth']);
