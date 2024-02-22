<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QualityClearDefect extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getDistinctMainItems()
    {
        $thisMonth = Carbon::today()->firstOfMonth()->format('Y-m-d');
        $activeDate = self::where('effective_date', '<=', $thisMonth)->orderBy('effective_date', 'desc')->first()->effective_date;
        $activeDate = Carbon::create($activeDate);
        return self::whereYear('effective_date', $activeDate)->whereMonth('effective_date', $activeDate)->distinct()->get(['main_item']);
    }

    public static function getsubItemsByMainItem($mainItem)
    {
        $thisMonth = Carbon::today()->firstOfMonth()->format('Y-m-d');
        $activeDate = self::where('effective_date', '<=', $thisMonth)->orderBy('effective_date', 'desc')->first()->effective_date;
        $activeDate = Carbon::create($activeDate);
        return self::whereYear('effective_date', $activeDate)->whereMonth('effective_date', $activeDate)->where('main_item', $mainItem)->get();
    }
}
