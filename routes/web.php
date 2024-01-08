<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ClearDefectController;
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
use App\Http\Controllers\RowDataController;
use App\Http\Controllers\TaskMealController;
use App\Http\Controllers\V2\TaskController as V2TaskController;
use App\Http\Controllers\V2\MealController as V2MealController;
use App\Http\Controllers\V2\ProjectController as V2ProjectController;
use App\Http\Controllers\V2\DefectController as V2DefectController;
use App\Http\Controllers\V2\ClearDefectController as V2ClearDefectController;


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

// require_once 'theme-routes.php';

Route::get('/', function () {
    return redirect()->route('login');
});

Route::prefix('v1')->middleware(['auth', 'log.user.activity'])->group(function () {
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
            // 指派稽核匯入
            Route::post('/import', [TaskController::class, 'import'])->name('task-import');
            // 稽核任務編輯
            Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('task-edit');
            // 稽核任務編輯
            Route::put('/{task}', [TaskController::class, 'update'])->name('task-update');
            // 稽核任務刪除
            Route::delete('{task}/delete', [TaskController::class, 'destroy'])->name('task-delete');
            // 內場稽核報告下載
            Route::get('{task}/inner-report', [TaskController::class, 'innerReport'])->name('task-inner-report');
            // 外場稽核報告下載
            Route::get('{task}/outer-report', [TaskController::class, 'outerReport'])->name('task-outer-report');
            // 稽核任務列表
            Route::get('/list', [TaskController::class, 'list'])->name('task-list');
            // 食安稽核或清檢稽核
            Route::get('/{task}/create', [TaskController::class, 'create'])->name('task-create');
            // 稽核員食安稽核儲存缺失
            Route::post('/{task}/defect', [DefectController::class, 'store'])->name('task-defect-store');
            // 稽核員清檢稽核儲存缺失
            Route::post('/{task}/clear-defect', [DefectController::class, 'clearStore'])->name('task-clear-defect-store');
            // 稽核員食安編輯缺失
            Route::get('/{taskHasDefect}/defect/edit', [DefectController::class, 'edit'])->name('task-defect-edit');
            // 稽核員清檢編輯缺失
            Route::get('/{taskHasDefect}/clear-defect/edit', [DefectController::class, 'clearEdit'])->name('task-clear-defect-edit');
            // 稽核儲存食安編輯缺失
            Route::post('/{taskHasDefect}/defect/update', [DefectController::class, 'update'])->name('task-defect-update');
            // 稽核儲存清檢編輯缺失
            Route::post('/{taskHasDefect}/clear-defect/update', [DefectController::class, 'clearUpdate'])->name('task-clear-defect-update');
            // 稽核員食安刪除缺失
            Route::post('/{taskHasDefect}/defect/delete', [DefectController::class, 'delete'])->name('task-defect-delete');
            // 稽核員清檢刪除缺失
            Route::post('/{taskHasDefect}/clear-defect/delete', [DefectController::class, 'clearDelete'])->name('task-clear-defect-delete');
            // 開始採樣
            Route::get('/{task}/meal/check', [TaskController::class, 'mealCheck'])->name('task-meal-check');
            // 開始採樣
            Route::post('{task}/meal/check', [TaskController::class, 'mealCheckSubmit'])->name('task-meal-submit');
            // 下載採樣單
            Route::get('{task}/meal/export', [MealController::class, 'export'])->name('task-meal-export');
            // 開始專案
            Route::get('/{task}/project/check', [TaskController::class, 'projectCheck'])->name('task-project-check');
            // 開始專案
            Route::post('{task}/project/check', [TaskController::class, 'projectCheckSubmit'])->name('task-project-submit');
            // 查看此任務自己食安稽核缺失 使用同一個view 回傳不同的資料
            Route::get('{task}/defect/owner', [DefectController::class, 'owner'])->name('task-defect-owner');
            // 查看此任務自己清檢稽核缺失 使用同一個view 回傳不同的資料
            Route::get('{task}/clear-defect/owner', [DefectController::class, 'clearOwner'])->name('task-clear-defect-owner');
            // 主管食安核對缺失 使用同一個view 回傳不同的資料
            Route::get('{task}/defect', [DefectController::class, 'show'])->name('task-defect-show');
            // 主管清檢核對缺失 使用同一個view 回傳不同的資料
            Route::get('{task}/clear-defect', [DefectController::class, 'clearShow'])->name('task-clear-defect-show');
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
                // 專案資料編輯
                // Route::get('{project}/edit', [ProjectController::class, 'edit'])->name('project-edit');
                // 專案資料更新
                // Route::put('/{project}', [ProjectController::class, 'update'])->name('project-update');
                // 刪除專案執行資料
                Route::delete('/{project}/destory', [ProjectController::class, 'destroy'])->name('project-destroy');
            });

            Route::prefix('defects')->group(function () {
                // 食安缺失資料
                Route::get('/', [DefectController::class, 'index'])->name('defect-index');
                Route::post('/import', [DefectController::class, 'import'])->name('defect-import');
                // 缺失資料新增
                Route::post('/', [DefectController::class, 'manualStore'])->name('defect-manualStore');
            });

            Route::prefix('clear-defects')->group(function () {
                // 清檢缺失資料
                Route::get('/', [ClearDefectController::class, 'index'])->name('clear-defect-index');
                Route::post('/import', [ClearDefectController::class, 'import'])->name('clear-defect-import');
                // 清檢缺失資料新增
                Route::post('/', [ClearDefectController::class, 'manualStore'])->name('clear-defect-manualStore');
            });

            Route::prefix('restaurants')->group(function () {
                // 門市資料
                Route::get('/list', [RestaurantController::class, 'index'])->name('restaurant-index');
                // 門市工作區站
                Route::get('/{restaurant}/workspace', [RestaurantController::class, 'show'])->name('restaurant-workspace');
                // 用Restaurant_waorkspace的id 更新status
                Route::post('/workspace/status', [RestaurantController::class, 'updateWorkspaceStatus'])->name('restaurant-workspace-status');
                // 工作站新增
                Route::post('/{restaurant}/workspace', [RestaurantController::class, 'storeWorkspace'])->name('restaurant-workspace-store');
                // 工作站編輯
                Route::post('workspace/update', [RestaurantController::class, 'updateWorkspace'])->name('restaurant-workspace-update');
                // 工作站排序更新
                Route::post('workspace/sort', [RestaurantController::class, 'sortWorkspace'])->name('restaurant-workspace-sort');

                // 門市的食安圖表
                Route::get('/{restaurant}/chart', [RestaurantController::class, 'chart'])->name('restaurant-chart');
                // 門市的清檢圖表
                Route::get('/{restaurant}/clear-chart', [RestaurantController::class, 'clearChart'])->name('restaurant-clear-chart');
                // restaurant-defects
                Route::get('/{restaurant}/defects', [RestaurantController::class, 'defects'])->name('restaurant-defects');
                // restaurant-clear-defects
                Route::get('/{restaurant}/clear-defects', [RestaurantController::class, 'clearDefects'])->name('restaurant-clear-defects');
            });

            Route::prefix('users')->group(function () {
                // 使用者資料
                Route::get('/list', [UserController::class, 'index'])->name('user-index');
                Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user-edit');
                Route::put('/{user}', [UserController::class, 'update'])->name('user-update');
                // user-show
                Route::get('/{user}/show', [UserController::class, 'show'])->name('user-show');
                // user統計
                Route::get('/{user}/chart', [UserController::class, 'chart'])->name('user-chart');
            });
        });

        Route::prefix('record')->group(function () {
            // task-meals
            Route::get('/task-meals', [TaskMealController::class, 'index'])->name('task-meals');
            // 食安缺失紀錄
            Route::get('/defect-records', [DefectController::class, 'records'])->name('defect-records');
            // 食安統計圖表
            Route::get('/defect-chart', [DefectController::class, 'chart'])->name('defect-chart');
            // 清檢缺失紀錄
            Route::get('/clear-defect-records', [ClearDefectController::class, 'records'])->name('clear-defect-records');
            // 清檢統計圖表
            Route::get('/clear-defect-chart', [ClearDefectController::class, 'chart'])->name('clear-defect-chart');
            // 門市缺失紀錄
            Route::get('/restaurant-records', [RestaurantController::class, 'records'])->name('restaurant-records');
        });

        Route::prefix('row-data')->group(function () {
            Route::get('/defect', [RowDataController::class, 'rowDataDefect'])->name('row-data-defect');
            // row-data-clear-defect
            Route::get('/clear-defect', [RowDataController::class, 'rowDataClearDefect'])->name('row-data-clear-defect');
        });

        Route::prefix('eatogether')->group(function () {
            // 集團所有門市統計
            Route::get('/restaurants', [RestaurantController::class, 'eatogether'])->name('eatogether-restaurants');
            // 集團所有同仁統計
            Route::get('/users', [UserController::class, 'eatogether'])->name('eatogether-users');
        });
    });
});

Route::prefix('v2')->middleware(['auth', 'log.user.activity'])->group(function () {
    Route::prefix('app')->group(function () {
        Route::prefix('task')->group(function () {
            // 稽核任務v2
            Route::get('/index', [V2TaskController::class, 'index'])->name('v2.app.tasks.index');
            // 新增食安缺失頁面v2
            Route::get('/{task}/defect/create', [V2TaskController::class, 'createDefect'])->name('v2.app.tasks.defect.create');
            // 新增清檢缺失頁面v2
            Route::get('/{task}/clear-defect/create', [V2TaskController::class, 'createClearDefect'])->name('v2.app.tasks.clear-defect.create');
            // 食安稽核紀錄頁面v2
            Route::get('/{task}/defect/edit', [V2TaskController::class, 'editDefect'])->name('v2.app.tasks.defect.edit');
            // 清檢稽核紀錄頁面v2
            Route::get('/{task}/clear-defect/edit', [V2TaskController::class, 'editClearDefect'])->name('v2.app.tasks.clear-defect.edit');
            // 任務行事曆
            Route::get('/calendar', [V2TaskController::class, 'calendar'])->name('v2.app.tasks.calendar');
        });
    });
    Route::prefix('data')->group(function () {
        Route::prefix('table')->group(function () {
            // 採樣資料庫v2
            Route::get('/meals', [V2MealController::class, 'table'])->name('v2.data.table.meals.index');
            // 專案資料庫v2
            Route::get('/projects', [V2ProjectController::class, 'table'])->name('v2.data.table.projects.index');
            // 食安缺失資料庫v2
            Route::get('/defects', [V2DefectController::class, 'table'])->name('v2.data.table.defects.index');
            // 清檢缺失資料庫v2
            Route::get('/clear-defects', [V2ClearDefectController::class, 'table'])->name('v2.data.table.clear-defects.index');
        });
        Route::prefix('record')->group(function () {
            // 採樣紀錄v2
            Route::get('/meals', [V2MealController::class, 'record'])->name('v2.data.record.meals.index');
        });
    });
});

Route::prefix('api')->middleware(['auth', 'log.user.activity'])->group(function () {
    // 取得有權限 execute-task 的使用者
    Route::get('/users/execute-task', [ApiController::class, 'getExecuteTaskUsers'])->name('api.users.execute-task');
    // 取得餐廳
    Route::get('/restaurants', [ApiController::class, 'getRestaurants'])->name('api.restaurants');
    // 取得該月份該餐聽的餐點
    Route::get('/restaurants/meals', [ApiController::class, 'getRestaurantMeals'])->name('api.restaurants.meals');
    // 取得啟用的專案
    Route::get('/projects/active', [ApiController::class, 'getActiveProjects'])->name('api.projects.active');
    // 取得所有任務(根據使用者權限)
    Route::get('/tasks', [ApiController::class, 'getTasks'])->name('api.tasks');
    // 儲存任務
    Route::post('/tasks', [ApiController::class, 'storeTask'])->name('api.tasks.store');
    // 更新任務
    Route::put('/tasks/{task}', [ApiController::class, 'updateTask'])->name('api.tasks.update');
    // 刪除任務
    Route::delete('/tasks/{task}', [ApiController::class, 'deleteTask'])->name('api.tasks.delete');
    // 匯入任務
    Route::post('/tasks/import', [ApiController::class, 'importTasks'])->name('api.tasks.import');
    // 取得該月未指派到的餐廳
    Route::get('/restaurants/unassigned', [ApiController::class, 'getUnassignedRestaurants'])->name('api.restaurants.unassigned');
    // 取得使用者的任務列表
    Route::get('/user/tasks', [ApiController::class, 'getUserTasks'])->name('api.user.tasks');
    // 修改使用者的任務狀態
    Route::put('/user/tasks/{task}', [ApiController::class, 'updateUserTaskStatus'])->name('api.user.tasks.update');
    // 修改任務的多筆專案是否查核
    Route::put('/tasks/{task}/projects', [ApiController::class, 'updateTaskProjectStatus'])->name('api.user.tasks.projects.update');
    // 修改任務的多筆採樣是否帶回和備註
    Route::put('/tasks/{task}/meals', [ApiController::class, 'updateTaskMealStatus'])->name('api.user.tasks.meals.update');
    // 取得任務相關的資料
    Route::get('/tasks/{task}', [ApiController::class, 'getTask'])->name('api.user.tasks.get');
    // 取得該任務的餐廳所有區站 getRestaurantsWorkSpaces
    Route::get('/restaurants/work-spaces', [ApiController::class, 'getRestaurantsWorkSpaces'])->name('api.restaurants-workspaces');
    // 取得該月啟用的食安缺失條文
    Route::get('/defects/active', [ApiController::class, 'getActiveDefects'])->name('api.defects.active');
    // 取得該月啟用的清檢缺失條文
    Route::get('/clear-defects/active', [ApiController::class, 'getActiveClearDefects'])->name('api.clear-defects.active');
    // 取得該任務食安缺失資料依照區站分類
    Route::get('/tasks/{task}/defects', [ApiController::class, 'getTaskDefects'])->name('api.tasks.defects');
    // 取得該任務清檢缺失資料依照區站分類
    Route::get('/tasks/{task}/clear-defects', [ApiController::class, 'getTaskClearDefects'])->name('api.tasks.clear-defects');
    // 更新任務的食安缺失資料
    Route::put('/tasks/defects/{taskHasDefect}', [ApiController::class, 'updateTaskDefect'])->name('api.tasks.defects.update');
    // 更新任務的清檢缺失資料
    Route::put('/tasks/clear-defects/{taskHasClearDefect}', [ApiController::class, 'updateTaskClearDefect'])->name('api.tasks.clear-defects.update');
    // 主管核對簽名 /api/tasks/${this.taskItem.id}/boss
    Route::put('/tasks/{task}/boss', [ApiController::class, 'updateTaskBoss'])->name('api.tasks.boss.update');
    // 取得食安內外場扣分
    Route::get('/tasks/{task}/defect/score', [ApiController::class, 'getTaskScore'])->name('api.tasks.defect.score');
    // 取得清檢內外場扣分
    Route::get('/tasks/{task}/clear-defect/score', [ApiController::class, 'getTaskClearScore'])->name('api.tasks.clear-defect.score');
    // 刪除任務的食安缺失資料
    Route::delete('/tasks/defects/{taskHasDefect}', [ApiController::class, 'deleteTaskDefect'])->name('api.tasks.defects.delete');
    // 刪除任務的清檢缺失資料
    Route::delete('/tasks/clear-defects/{taskHasClearDefect}', [ApiController::class, 'deleteTaskClearDefect'])->name('api.tasks.clear-defects.delete');
    // 取得採樣資料庫資料
    Route::get('/meals', [ApiController::class, 'getMeals'])->name('api.meals');
    // 新增採樣資料庫資料
    Route::post('/meals', [ApiController::class, 'storeMeal'])->name('api.meals.store');
    // 更新採樣資料庫資料
    Route::put('/meals/{meal}', [ApiController::class, 'updateMeal'])->name('api.meals.update');
    // 刪除採樣資料庫資料
    Route::delete('/meals/{meal}', [ApiController::class, 'deleteMeal'])->name('api.meals.delete');
    // 匯入採樣資料庫資料
    Route::post('/meals/import', [ApiController::class, 'importMeals'])->name('api.meals.import');
    // 取得採樣紀錄資料
    Route::get('/meal-records', [ApiController::class, 'getMealRecords'])->name('api.meal-records');
    // 取得專案資料庫資料
    Route::get('/projects', [ApiController::class, 'getProjects'])->name('api.projects');
    // 取得月份的專案缺失資料
    Route::get('/project-defects', [ApiController::class, 'getProjectDefects'])->name('api.projects.defects');
    // 新增專案資料庫資料
    Route::post('/projects', [ApiController::class, 'storeProject'])->name('api.projects.store');
    // 更新專案資料庫資料
    Route::put('/projects/{project}', [ApiController::class, 'updateProject'])->name('api.projects.update');
    // 取得食安缺失資料庫資料
    Route::get('/defects', [ApiController::class, 'getDefects'])->name('api.defects');
    // 新增食安缺失資料庫資料
    Route::post('/defects', [ApiController::class, 'storeDefect'])->name('api.defects.store');
    // 更新食安缺失資料庫資料
    Route::put('/defects/{defect}', [ApiController::class, 'updateDefect'])->name('api.defects.update');
    // 刪除食安缺失資料庫資料
    Route::delete('/defects/{defect}', [ApiController::class, 'deleteDefect'])->name('api.defects.delete');
    // 匯入食安缺失資料庫資料
    Route::post('/defects/import', [ApiController::class, 'importDefects'])->name('api.defects.import');
    // 取得清檢缺失資料庫資料
    Route::get('/clear-defects', [ApiController::class, 'getClearDefects'])->name('api.clear-defects');
    // 新增清檢缺失資料庫資料
    Route::post('/clear-defects', [ApiController::class, 'storeClearDefect'])->name('api.clear-defects.store');
    // 更新清檢缺失資料庫資料
    Route::put('/clear-defects/{clearDefect}', [ApiController::class, 'updateClearDefect'])->name('api.clear-defects.update');
    // 刪除清檢缺失資料庫資料
    Route::delete('/clear-defects/{clearDefect}', [ApiController::class, 'deleteClearDefect'])->name('api.clear-defects.delete');
    // 匯入清檢缺失資料庫資料
    Route::post('/clear-defects/import', [ApiController::class, 'importClearDefects'])->name('api.clear-defects.import');
});

Route::prefix('pos')->group(function () {
    // 門市資料upsert
    Route::put('/restaurant', [PosDepartmentController::class, 'upsert'])->name('pos-restaurant-upsert');
    // 指定門市的工作區站更新
    Route::put('/restaurant/{restaurant}/workspace', [PosDepartmentController::class, 'update'])->name('pos-restaurant-workspace-update');
    // 同仁資料upsert
    Route::put('/user', [UserController::class, 'upsert'])->name('pos-user-upsert');
});
