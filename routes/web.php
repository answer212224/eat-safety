<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DefectController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PosDepartmentController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RoleController;

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
            // 稽核任務編輯
            Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('task-edit');
            // 稽核任務編輯
            Route::put('/{task}', [TaskController::class, 'update'])->name('task-update');
            // 稽核任務刪除
            Route::delete('{task}/delete', [TaskController::class, 'destroy'])->name('task-delete');
            // 稽核任務列表
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
            // 開始採樣
            Route::get('/{task}/meal/check', [TaskController::class, 'mealCheck'])->name('task-meal-check');
            // 開始採樣
            Route::post('{task}/meal/check', [TaskController::class, 'mealCheckSubmit'])->name('task-meal-submit');
            // 開始專案
            Route::get('/{task}/project/check', [TaskController::class, 'projectCheck'])->name('task-project-check');
            // 開始專案
            Route::post('{task}/project/check', [TaskController::class, 'projectCheckSubmit'])->name('task-project-submit');
            // 查看此任務自己稽核的缺失
            Route::get('{task}/defect/owner', [DefectController::class, 'owner'])->name('task-defect-owner');
            // 主管核對缺失
            Route::get('{task}/defect', [DefectController::class, 'show'])->name('task-defect-show');
            // 主管核對簽名
            Route::post('{task}/sign', [TaskController::class, 'sign'])->name('task-sign');
        });
        Route::prefix('permission')->group(function () {
            // 角色權限
            Route::get('/list', [PermissionController::class, 'index'])->name('permission-index');
            // 角色新增
            Route::post('/role', [RoleController::class, 'store'])->name('role-store');
            // 角色編輯
            Route::get('{role}/role/edit', [RoleController::class, 'edit'])->name('role-edit');
            // 角色權限更新
            Route::put('{role}/role', [RoleController::class, 'updatePermissions'])->name('role-updatePermissions');
            // 角色刪除
            Route::delete('{role}/role/destory', [RoleController::class, 'destory'])->name('role-destroy');
            // 權限新增
            Route::post('/permission', [PermissionController::class, 'store'])->name('permission-store');
            // 權限刪除
            Route::delete('{permission}/permission/destory', [PermissionController::class, 'destory'])->name('permission-destroy');
        });
    });

    Route::prefix('data')->group(function () {
        Route::prefix('table')->group(function () {

            Route::prefix('meals')->group(function () {
                // 餐點採樣資料
                Route::get('/', [MealController::class, 'index'])->name('meal-index');
                // 新增餐點採樣資料
                Route::post('/', [MealController::class, 'store'])->name('meal-store');
                // 刪除餐點採樣資料
                Route::delete('/{meal}/destory', [MealController::class, 'destroy'])->name('meal-destroy');
                // 編輯餐點採樣資料
                Route::get('{meal}/edit', [MealController::class, 'edit'])->name('meal-edit');
                // 更新餐點採樣資料
                Route::put('/{meal}', [MealController::class, 'update'])->name('meal-update');
                // excel 匯入餐點採樣資料
                Route::post('/import', [MealController::class, 'import'])->name('meal-import');
            });

            Route::prefix('projects')->group(function () {
                // 專案執行資料
                Route::get('/', [ProjectController::class, 'index'])->name('project-index');
                // 新增專案執行資料
                Route::post('/', [ProjectController::class, 'store'])->name('project-store');
                // 刪除專案執行資料
                Route::delete('/{project}/destory', [ProjectController::class, 'destroy'])->name('project-destroy');
            });

            Route::prefix('defects')->group(function () {
                // 缺失資料
                Route::get('/', [DefectController::class, 'index'])->name('defect-index');
            });

            Route::prefix('restaurants')->group(function () {
                // 門市資料
                Route::get('/list', [RestaurantController::class, 'index'])->name('restaurant-index');
                // 門市工作區站
                Route::get('/{restaurant}/workspace', [RestaurantController::class, 'show'])->name('restaurant-workspace');
            });

            Route::prefix('users')->group(function () {
                // 使用者資料
                Route::get('/list', [UserController::class, 'index'])->name('user-index');
                Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user-edit');
                Route::put('/{user}', [UserController::class, 'update'])->name('user-update');
            });
        });
        Route::prefix('chart')->group(function () {

            Route::prefix('meals')->group(function () {
                // 餐點採樣圖表
                Route::get('/list', [MealController::class, 'index'])->name('meal-chart');
            });
        });
    });
});

Route::prefix('pos')->group(function () {
    // 門市資料upsert
    Route::put('/restaurant', [PosDepartmentController::class, 'upsert'])->name('pos-restaurant-upsert');
    // 指定門市的工作區站更新
    Route::put('/restaurant/{restaurant}/workspace', [PosDepartmentController::class, 'update'])->name('pos-restaurant-workspace-update');
    // 同仁資料upsert
    Route::put('/user', [UserController::class, 'upsert'])->name('pos-user-upsert');
});
