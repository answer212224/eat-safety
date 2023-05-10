<?php

namespace App\Models;

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
        return self::select('group')->distinct()->get();
    }

    public static function getDistinctTitlesByGroup($group)
    {
        return self::where('group', $group)->select('title')->distinct()->get();
    }

    public static function getDescriptionWhereByGroupAndTitle($group, $title)
    {
        return self::where('group', $group)->where('title', $title)->get();
    }
}
