<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'uid',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tasks(): BelongsToMany
    {
        return $this->belongsToMany(Task::class);
    }

    public function qualityTasks(): BelongsToMany
    {
        return $this->belongsToMany(QualityTask::class);
    }

    public function taskUsers()
    {
        return $this->hasMany(TaskUser::class);
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
