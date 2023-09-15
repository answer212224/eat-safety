<?php

namespace App\Models;

use App\Models\Meal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Task extends Model
{
    use HasFactory;

    // 中文解釋：這個屬性是用來設定哪些欄位不可以被批量賦值
    protected $guarded = [];

    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function taskHasDefects()
    {
        return $this->hasMany(TaskHasDefect::class);
    }

    // 取得defects不是5S的
    public function taskHasDefectsNot5S()
    {
        return $this->hasMany(TaskHasDefect::class)->whereHas('defect', function ($query) {
            $query->where('category', '!=', '5S');
        });
    }

    public function taskHasClearDefects()
    {
        return $this->hasMany(TaskHasClearDefect::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('is_completed');
    }

    public function meals(): BelongsToMany
    {
        return $this->belongsToMany(Meal::class)->withPivot(['is_improved', 'is_taken', 'memo']);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class)->withPivot('is_improved', 'is_checked', 'note');
    }

    // 取得project的description 有包含字串是 %內場%
    public function backProjects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class)->where('description', 'like', '%內場%')->withPivot('is_improved', 'is_checked', 'note');
    }

    // 取得project的description 有包含字串是 %外場%
    public function frontProjects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class)->where('description', 'like', '%外場%')->withPivot('is_improved', 'is_checked', 'note');
    }

    public function taskUsers()
    {
        return $this->hasMany(TaskUser::class);
    }

    public function mealTasks()
    {
        return $this->hasMany(MealTask::class);
    }
}
