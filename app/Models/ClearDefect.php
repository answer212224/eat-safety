<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClearDefect extends Model
{
    use HasFactory;

    protected $fillable = [
        'effective_date',
        'main_item',
        'sub_item',
    ];
}
