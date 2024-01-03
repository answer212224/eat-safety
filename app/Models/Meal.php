<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Meal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function tasks(): BelongsToMany
    {
        return $this->belongsToMany(Task::class)->withPivot(['is_improved', 'is_taken', 'memo']);
    }
}
