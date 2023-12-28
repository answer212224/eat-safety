<?php

namespace App\Http\Controllers\v2;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('v2.app.tasks.index', [
            'title' => '任務列表',
        ]);
    }

    // 新增食安缺失頁面
    public function createDefect(Task $task)
    {
        // 如果已經有開始時間就不更新 一進頁面更新任務開始時間
        if (!$task->start_at) {
            $task->update([
                'start_at' => now(),
            ]);
        }
        return view('v2.app.tasks.create-defect', [
            'task' => $task,
            'title' => '新增食安缺失',
        ]);
    }

    // 新增清檢缺失頁面
    public function createClearDefect(Task $task)
    {
        if (!$task->start_at) {
            $task->update([
                'start_at' => now(),
            ]);
        }
        return view('v2.app.tasks.create-clear-defect', [
            'task' => $task,
            'title' => '新增清檢缺失',
        ]);
    }

    // 食安稽核紀錄頁面
    public function editDefect(Task $task)
    {
        return view('v2.app.tasks.edit-defect', [
            'task' => $task,
            'title' => '食安稽核紀錄',
        ]);
    }

    // 清檢稽核紀錄頁面
    public function editClearDefect(Task $task)
    {
        return view('v2.app.tasks.edit-clear-defect', [
            'task' => $task,
            'title' => '清檢稽核紀錄',
        ]);
    }

    // 行事曆頁面
    public function calendar()
    {
        return view('v2.app.tasks.calendar', [
            'title' => '行事曆',
        ]);
    }
}
