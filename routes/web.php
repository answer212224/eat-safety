<?php

use App\Http\Controllers\DefectController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\ProjectController;
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

            return view('barebone', ['title' => 'This is Title']);
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
            Route::get('/{task}/create', [TaskController::class, 'create'])->name('task-create');
            // 稽核員儲存缺失
            Route::post('/{task}/defect', [DefectController::class, 'store'])->name('task-defect-store');
            // 稽核員編輯缺失
            Route::get('/{taskHasDefect}/defect/edit', [DefectController::class, 'edit'])->name('task-defect-edit');
            // 稽核員編輯缺失
            Route::post('/{taskHasDefect}/defect/update', [DefectController::class, 'update'])->name('task-defect-update');
            // 稽核員刪除缺失
            Route::post('/{taskHasDefect}/defect/delete', [DefectController::class, 'delete'])->name('task-defect-delete');
            // 主管核對缺失
            Route::get('{task}/defect', [DefectController::class, 'show'])->name('task-defect-show');
            // 主管核對簽名
            Route::post('{task}/sign', [TaskController::class, 'sign'])->name('task-sign');
        });
    });

    Route::prefix('data')->group(function () {
        Route::prefix('meals')->group(function () {
            // 餐點採樣資料
            Route::get('/list', [MealController::class, 'index'])->name('meal-index');
            Route::post('/import', [MealController::class, 'import'])->name('meal-import');
        });

        Route::prefix('projects')->group(function () {
            // 專案執行資料
            Route::get('/list', [ProjectController::class, 'index'])->name('project-index');
        });
    });
});

Route::get('/test', function () {

    return view('test', ['title' => 'This is Title']);
});
