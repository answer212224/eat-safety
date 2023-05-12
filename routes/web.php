<?php

use App\Http\Controllers\DefectController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
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
            $task = Task::find(1)->load('taskHasDefects.defect');
            $taskHasDefect = $task->taskHasDefects[0];
            return view('barebone', ['title' => 'This is Title', 'taskHasDefect' => $taskHasDefect]);
        })->name('barebone');
    });

    Route::prefix('app')->group(function () {
        Route::prefix('task')->group(function () {
            // 指派稽核任務
            Route::get('/assign', [TaskController::class, 'assign'])->name('task-assign');
            // 指派稽核任務
            Route::post('/assign', [TaskController::class, 'store'])->name('task-store');
            // 任務清單
            Route::get('/list', [TaskController::class, 'list'])->name('task-list');
            // 開始稽核
            Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('task-edit');
            // 稽核員儲存缺失
            Route::post('/{task}/defect', [DefectController::class, 'store'])->name('task-defect-store');
        });
    });
});

Route::get('/test', function () {
    return view('test');
});
