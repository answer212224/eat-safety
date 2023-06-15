<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClearDefect extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getDistinctMainItems($latestDefect)
    {
        return self::whereYear('effective_date', $latestDefect)->whereMonth('effective_date', $latestDefect)->distinct()->get(['main_item']);
    }

    public static function getsubItemsByMainItem($mainItem, $latestDefect)
    {
        return self::whereYear('effective_date', $latestDefect)->whereMonth('effective_date', $latestDefect)->where('main_item', $mainItem)->get();
    }
}
