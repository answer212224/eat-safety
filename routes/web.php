<?php

use App\Http\Controllers\TaskController;
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

Route::prefix('v1')->middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/barebone', function () {
            return view('barebone', ['title' => 'This is Title']);
        })->name('barebone');
    });

    Route::prefix('app')->group(function () {
        Route::prefix('task')->group(function () {
            Route::get('/assign', [TaskController::class, 'assign'])->name('task-assign');
            Route::get('/list', [TaskController::class, 'list'])->name('task-list');
            Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('task-edit');
            Route::post('/store', [TaskController::class, 'store'])->name('task-store');
        });
    });
});
