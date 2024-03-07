<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class QualityTask extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function taskHasDefects()
    {
        return $this->hasMany(QualityTaskHasQualityDefect::class);
    }

    // // 取得defects不是5S的
    public function taskHasDefectsNot5S()
    {
        return $this->hasMany(QualityTaskHasQualityDefect::class)
            ->whereHas('defect', function ($query) {
                $query->where('category', '!=', '5S');
            });
    }


    public function taskHasClearDefects()
    {
        return $this->hasMany(QualityTaskHasQualityClearDefect::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withPivot('is_completed');
    }

    public function meals(): BelongsToMany
    {
        return $this->belongsToMany(QualityMeal::class)->withPivot(['is_improved', 'is_taken', 'memo']);
    }


    public function taskUsers()
    {
        return $this->hasMany(QualityTaskUser::class);
    }
}
