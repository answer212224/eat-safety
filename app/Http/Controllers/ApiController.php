<?php

namespace App\Http\Controllers;

use PDO;
use Carbon\Carbon;
use App\Models\Meal;
use App\Models\Task;
use App\Models\User;
use App\Models\Defect;
use App\Models\Project;
use App\Models\Restaurant;
use App\Models\ClearDefect;
use Illuminate\Http\Request;
use App\Models\TaskHasDefect;
use App\Models\TaskHasClearDefect;

class ApiController extends Controller
{
    // 取得有權限 execute-task 的使用者
    public function getExecuteTaskUsers()
    {
        $users = User::permission('execute-task')->get();

        return response()->json([
            'status' => 'success',
            'data' => $users,
        ]);
    }

    // getRestaurants
    public function getRestaurants(Request $request)
    {
        $is_group_by_brand = $request->input('is_group_by_brand');
        $is_group_by_brand_code = $request->input('is_group_by_brand_code');

        if ($is_group_by_brand) {
            $restaurants = Restaurant::with('restaurantWorkspaces')->where('status', true)->get()->groupBy('brand');
        } else if ($is_group_by_brand_code) {
            $restaurants = Restaurant::with('restaurantWorkspaces')->where('status', true)->get()->groupBy('brand_code');
        } else {
            $restaurants = Restaurant::with('restaurantWorkspaces')->where('status', true)->get();
        }


        return response()->json([
            'status' => 'success',
            'data' => $restaurants,
        ]);
    }

    // 取得所有任務(根據使用者權限)
    public function getTasks(Request $request)
    {
        $status = $request->input('status');
        // 如果有 view-all-task 的權限，才可以看到所有的任務

        if (auth()->user()->can('view-all-task')) {
            $tasks = Task::with(['restaurant', 'users', 'meals', 'projects'])
                ->when($status, function ($query, $status) {
                    return $query->where('status', $status);
                })
                ->get();
        } else {
            $tasks = auth()->user()->tasks()->with(['restaurant', 'users', 'meals', 'projects'])
                ->when($status, function ($query, $status) {
                    return $query->where('status', $status);
                })
                ->get();
        }


        return response()->json([
            'status' => 'success',
            'data' => $tasks,
        ]);
    }

    // 儲存任務
    public function storeTask(Request $request)
    {
        $date = $request->input('date');
        $time = $request->input('time');
        $users = $request->input('users');
        $restaurant = $request->input('restaurant');
        $meals = $request->input('meals');
        $projects = $request->input('projects');
        $category = $request->input('category');

        $task = Task::create([
            'category' => $category,
            'restaurant_id' => $restaurant['id'],
            'task_date' => $date . ' ' . $time,
        ]);

        foreach ($users as $user) {
            $task->users()->attach($user['id']);
        }

        foreach ($meals as $meal) {
            $task->meals()->attach($meal['id']);
        }

        foreach ($projects as $project) {
            $task->projects()->attach($project['id']);
        }

        return response()->json([
            'status' => 'success',
            'data' => $task,
        ]);
    }

    // 更新任務
    public function updateTask(Task $task, Request $request)
    {
        $date = $request->input('date');
        $time = $request->input('time');
        $users = $request->input('users');
        $restaurant = $request->input('restaurant');
        $meals = $request->input('meals');
        $projects = $request->input('projects');
        $category = $request->input('category');

        $task->update([
            'category' => $category,
            'restaurant_id' => $restaurant['id'],
            'task_date' => $date . ' ' . $time,
        ]);

        $task->users()->sync([]);
        foreach ($users as $user) {
            $task->users()->attach($user['id']);
        }

        $task->meals()->sync([]);
        foreach ($meals as $meal) {
            $task->meals()->attach($meal['id']);
        }

        $task->projects()->sync([]);
        foreach ($projects as $project) {
            $task->projects()->attach($project['id']);
        }

        return response()->json([
            'status' => 'success',
            'data' => $task,
        ]);
    }

    // 刪除任務
    public function deleteTask(Task $task)
    {
        $task->delete();

        return response()->json([
            'status' => 'success',
            'data' => $task,
        ]);
    }

    // 取得該月未被指派到的餐廳
    public function getUnassignedRestaurants(Request $request)
    {
        $date = $request->input('date');
        $date = Carbon::create($date);

        $restaurants = Restaurant::where('status', true)->whereDoesntHave('tasks', function ($query) use ($date) {
                $query->whereYear('task_date', $date->format('Y'))
                    ->whereMonth('task_date', $date->format('m'));
            })->get();

        return response()->json([
            'status' => 'success',
            'data' => $restaurants,
        ]);
    }

    // 取得該月份該餐聽的餐點
    public function getRestaurantMeals(Request $request)
    {
        $date = $request->input('date');
        $sid = $request->input('sid');
        $brand_code = $request->input('brand_code');

        $date = Carbon::create($date);

        // 取得sid是EAT007和brand_code是EAT的餐點
        $meals = Meal::whereIn('sid', [$sid, $brand_code])
            ->whereYear('effective_date', $date->format('Y'))
            ->whereMonth('effective_date', $date->format('m'))->get();

        return response()->json([
            'status' => 'success',
            'data' => $meals,
        ]);
    }

    // 取得啟用的專案
    public function getActiveProjects()
    {
        $projects = Project::where('status', true)->get();

        return response()->json([
            'status' => 'success',
            'data' => $projects,
        ]);
    }

    // 取得該使用者的任務列表
    public function getUserTasks(Request $request)
    {
        $status = $request->input('status');
        // status 有才要過濾
        $tasks = auth()->user()->tasks()->with(['restaurant', 'users', 'meals', 'projects'])
            ->when($status, function ($query, $status) {
                return $query->where('status', $status);
            })
            ->get();

        $tasks = $tasks->sortBy(function ($task) {
            return abs(Carbon::parse($task->task_date)->diffInMinutes(now()));
        });

        $tasks = $tasks->values()->all();

        return response()->json([
            'status' => 'success',
            'data' => $tasks,
        ]);
    }

    // 修改使用者的任務狀態
    public function updateUserTaskStatus(Task $task, Request $request)
    {
        $is_completed = $request->input('is_completed');
        $task->users()->updateExistingPivot(auth()->user()->id, [
            'is_completed' => $is_completed,
        ]);

        if ($task->users()->wherePivot('is_completed', 0)->count() === 0) {
            $task->update([
                'status' => 'pending_approval',
            ]);
        } else {
            $task->update([
                'status' => 'processing',
            ]);
        }

        return response()->json([
            'status' => 'success',
            'data' => $task,
        ]);
    }

    // 修改任務的多筆專案是否查核
    public function updateTaskProjectStatus(Task $task, Request $request)
    {
        $projects = $request->input('projects');

        foreach ($projects as $project) {
            $task->projects()->updateExistingPivot($project['id'], [
                'is_checked' => $project['pivot']['is_checked'],
            ]);
        }

        return response()->json([
            'status' => 'success',
            'data' => $task,
        ]);
    }

    // 修改任務的多筆採樣是否帶回和備註
    public function updateTaskMealStatus(Task $task, Request $request)
    {
        $meals = $request->input('meals');

        foreach ($meals as $meal) {
            $task->meals()->updateExistingPivot($meal['id'], [
                'is_taken' => $meal['pivot']['is_taken'],
                'memo' => $meal['pivot']['memo'],
            ]);
        }

        return response()->json([
            'status' => 'success',
            'data' => $task,
        ]);
    }

    // 取得任務相關資料
    public function getTask(Task $task)
    {
        // restaurantWorkspaces只取啟用的
        $task->load([
            'restaurant.restaurantWorkspaces' => function ($query) {
                $query->where('status', 1);
            },
            'users', 'meals', 'projects'
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $task,
        ]);
    }

    // 取得該月啟用的食安缺失條文
    public function getActiveDefects()
    {
        // 取得最新生效的缺陷日期
        $activeDate = Defect::whereYear('effective_date', '<=', today())->whereMonth('effective_date', '<=', today())->orderBy('effective_date', 'desc')->first()->effective_date;
        $activeDate = Carbon::create($activeDate);
        $defects = Defect::whereYear('effective_date', $activeDate)->whereMonth('effective_date', $activeDate)->get();

        // 分二層 從group -> title
        $defects = $defects->groupBy('group')->map(function ($group) {
            return $group->groupBy('title');
        });

        return response()->json([
            'status' => 'success',
            'data' => $defects,
        ]);
    }

    // 取得該月啟用的清檢缺失條文
    public function getActiveClearDefects()
    {
        // 取得最新生效的缺陷日期
        $activeDate = ClearDefect::whereYear('effective_date', '<=', today())->whereMonth('effective_date', '<=', today())->orderBy('effective_date', 'desc')->first()->effective_date;
        $activeDate = Carbon::create($activeDate);
        $defects = ClearDefect::whereYear('effective_date', $activeDate)->whereMonth('effective_date', $activeDate)->get();

        // 分一層 從main_item
        $defects = $defects->groupBy('main_item');

        return response()->json([
            'status' => 'success',
            'data' => $defects,
        ]);
    }

    // 取得該任務食安缺失資料依照區站分類
    public function getTaskDefects(Task $task)
    {
        $defects = $task->load('taskHasDefects.restaurantWorkspace', 'taskHasDefects.defect')->taskHasDefects
            ->each(function ($defect) {
                $defect->append('images_url');
            })
            ->groupBy('restaurantWorkspace.area');

        return response()->json([
            'status' => 'success',
            'data' => $defects,
        ]);
    }

    // 取得該任務清檢缺失資料依照區站分類
    public function getTaskClearDefects(Task $task)
    {
        $defects = $task->load('taskHasClearDefects.restaurantWorkspace', 'taskHasClearDefects.clearDefect')->taskHasClearDefects
            ->each(function ($defect) {
                $defect->append('images_url');
            })
            ->groupBy('restaurantWorkspace.area');

        return response()->json([
            'status' => 'success',
            'data' => $defects,
        ]);
    }

    // 更新任務的食安缺失資料 /api/tasks/{{ $task->id }}/defects/${this.editedItem.id}
    public function updateTaskDefect(TaskHasDefect $taskHasDefect, Request $request)
    {
        $taskHasDefect->update([
            'defect_id' => $request->input('defect_id'),
            'memo' => $request->input('memo'),
            'is_ignore' => $request->input('is_ignore'),
            'is_not_reach_deduct_standard' => $request->input('is_not_reach_deduct_standard'),
            'is_suggestion' => $request->input('is_suggestion'),
            'is_repeat' => $request->input('is_repeat'),
        ]);

        $taskHasDefect = $taskHasDefect->load('restaurantWorkspace');
        return response()->json([
            'status' => 'success',
            'data' => $taskHasDefect,
        ]);
    }

    // 更新任務的清檢缺失資料 /api/tasks/{{ $task->id }}/clear-defects/${this.editedItem.id}
    public function updateTaskClearDefect(TaskHasClearDefect $taskHasClearDefect, Request $request)
    {
        $taskHasClearDefect->update([
            'clear_defect_id' => $request->input('clear_defect_id'),
            'memo' => $request->input('memo'),
            'amount' => $request->input('amount'),
            'is_ignore' => $request->input('is_ignore'),
            'is_not_reach_deduct_standard' => $request->input('is_not_reach_deduct_standard'),
            'is_suggestion' => $request->input('is_suggestion'),
        ]);

        $taskHasClearDefect = $taskHasClearDefect->load('restaurantWorkspace');
        return response()->json([
            'status' => 'success',
            'data' => $taskHasClearDefect,
        ]);
    }

    public function updateTaskBoss(Task $task, Request $request)
    {
        $task->update([
            'inner_manager' => $request->input('inner_manager'),
            'outer_manager' => $request->input('outer_manager'),
            'status' => 'completed',
            'end_at' => now(),
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $task,
        ]);
    }

    public function getTaskScore(Task $task)
    {
        $task->load('taskHasDefects.defect');
        // 計算內場分數 taskHasDefects.taskHasDefects where area not like "%外場"
        // is_ignore = 0 ,is_not_reach_deduct_standard=0, is_suggestion=0, is_repeat=0
        $totalInnerScore = 0;
        foreach ($task->taskHasDefects as $defect) {
            if ($defect->restaurantWorkspace->area != '外場' && $defect->is_ignore == 0 && $defect->is_not_reach_deduct_standard == 0 && $defect->is_suggestion == 0 && $defect->is_repeat == 0) {
                $totalInnerScore += $defect->defect->deduct_point;
            }
        }

        // 計算外場分數 taskHasDefects.taskHasDefects where area like "%外場"
        // is_ignore = 0 ,is_not_reach_deduct_standard=0, is_suggestion=0, is_repeat=0
        $totalOuterScore = 0;
        foreach ($task->taskHasDefects as $defect) {
            if ($defect->restaurantWorkspace->area == '外場' && $defect->is_ignore == 0 && $defect->is_not_reach_deduct_standard == 0 && $defect->is_suggestion == 0 && $defect->is_repeat == 0) {
                $totalOuterScore += $defect->defect->deduct_point;
            }
        }

        return response()->json([
            'status' => 'success',
            'data' => [
                'inner_score' => 100 + $totalInnerScore,
                'outer_score' => 100 + $totalOuterScore,
            ],
        ]);
    }

    public function getTaskClearScore(Task $task)
    {

        $task->load('taskHasClearDefects');

        // 計算內場分數 taskHasDefects.taskHasDefects where area not like "%外場"
        // is_ignore = 0 ,is_not_reach_deduct_standard=0, is_suggestion=0
        $totalInnerScore = 0;
        foreach ($task->taskHasClearDefects as $defect) {
            if ($defect->restaurantWorkspace->area != '外場' && $defect->is_ignore == 0 && $defect->is_not_reach_deduct_standard == 0 && $defect->is_suggestion == 0) {
                $totalInnerScore += $defect->clearDefect->deduct_point * $defect->amount;
            }
        }

        // 計算外場分數 taskHasDefects.taskHasDefects where area like "%外場"
        // is_ignore = 0 ,is_not_reach_deduct_standard=0, is_suggestion=0
        $totalOuterScore = 0;
        foreach ($task->taskHasClearDefects as $defect) {
            if ($defect->restaurantWorkspace->area == '外場' && $defect->is_ignore == 0 && $defect->is_not_reach_deduct_standard == 0 && $defect->is_suggestion == 0) {
                $totalOuterScore += $defect->clearDefect->deduct_point * $defect->amount;
            }
        }

        return response()->json([
            'status' => 'success',
            'data' => [
                'inner_score' => 100 + $totalInnerScore,
                'outer_score' => 100 + $totalOuterScore,
            ],
        ]);
    }

    public function deleteTaskDefect(TaskHasDefect $taskHasDefect)
    {
        $taskHasDefect->delete();

        return response()->json([
            'status' => 'success',
            'data' => $taskHasDefect,
        ]);
    }

    public function deleteTaskClearDefect(TaskHasClearDefect $taskHasClearDefect)
    {
        $taskHasClearDefect->delete();

        return response()->json([
            'status' => 'success',
            'data' => $taskHasClearDefect,
        ]);
    }
}
