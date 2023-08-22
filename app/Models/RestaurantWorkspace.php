<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RestaurantWorkspace extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * 多一個欄位，kitchen，假如 area 有中廚、西廚、日廚 kitchen 否則照舊
     */
    public function getKitchenAttribute()
    {
        if (Str::contains($this->area, '中廚')) {
            return '中廚';
        } elseif (Str::contains($this->area, '西廚')) {
            return '西廚';
        } elseif (Str::contains($this->area, '日廚')) {
            return '日廚';
        } else {
            return $this->area;
        }
    }

    /**
     * 如果area的值有數字，就把數字拿掉
     */
    public function getAreaAttribute($value)
    {
        return preg_replace('/[0-9]+/', '', $value);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    /**
     * hasMany TaskHasDefect
     */
    public function taskHasDefects()
    {
        return $this->hasMany(TaskHasDefect::class);
    }

    /**
     * hasMany TaskHasClearDefect
     */
    public function taskHasClearDefects()
    {
        return $this->hasMany(TaskHasClearDefect::class);
    }
}
