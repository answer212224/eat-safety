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

    public static function getDistinctGroups()
    {
        $thisMonth = Carbon::today()->firstOfMonth()->format('Y-m-d');
        $activeDate = self::where('effective_date', '<=', $thisMonth)->orderBy('effective_date', 'desc')->first()->effective_date;
        $activeDate = Carbon::create($activeDate);
        return self::whereYear('effective_date', $activeDate)->whereMonth('effective_date', $activeDate)->select('group')->distinct()->get();
    }

    public static function getDistinctTitlesByGroup($group)
    {
        $thisMonth = Carbon::today()->firstOfMonth()->format('Y-m-d');
        $activeDate = self::where('effective_date', '<=', $thisMonth)->orderBy('effective_date', 'desc')->first()->effective_date;
        $activeDate = Carbon::create($activeDate);
        return self::whereYear('effective_date', $activeDate)->whereMonth('effective_date', $activeDate)->where('group', $group)->select('title')->distinct()->get();
    }

    public static function getDescriptionWhereByGroupAndTitle($group, $title)
    {
        $thisMonth = Carbon::today()->firstOfMonth()->format('Y-m-d');
        $activeDate = self::where('effective_date', '<=', $thisMonth)->orderBy('effective_date', 'desc')->first()->effective_date;
        $activeDate = Carbon::create($activeDate);
        return self::whereYear('effective_date', $activeDate)->whereMonth('effective_date', $activeDate)->where('group', $group)->where('title', $title)->get();
    }
}
