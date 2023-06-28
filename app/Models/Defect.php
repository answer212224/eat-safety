<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Defect extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function taskHasDefects()
    {
        return $this->hasMany(TaskHasDefect::class);
    }

    public static function getDistinctGroups(Carbon $latestDefect)
    {
        return self::whereYear('effective_date', $latestDefect)->whereMonth('effective_date', $latestDefect)->select('group')->distinct()->get();
    }

    public static function getDistinctTitlesByGroup($group, Carbon $latestDefect)
    {
        return self::whereYear('effective_date', $latestDefect)->whereMonth('effective_date', $latestDefect)->where('group', $group)->select('title')->distinct()->get();
    }

    public static function getDescriptionWhereByGroupAndTitle($group, $title, Carbon $latestDefect)
    {
        return self::whereYear('effective_date', $latestDefect)->whereMonth('effective_date', $latestDefect)->where('group', $group)->where('title', $title);
    }
}
