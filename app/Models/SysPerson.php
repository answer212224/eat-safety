<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class SysPerson extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';
    protected $table = 'sys_person';

    public static function getEmployees()
    {
        // where department_id like 14%
        $users = SysPerson::where('department_id', 'like', '14%')->get();

        $users->transform(function ($user) {
            return [
                'uid' => $user->person_empid,
                'name' => $user->person_name,
                'email' => $user->email,
                'department' => $user->department_name,
                'department_serial' => $user->department_serial,
                'password' => Hash::make($user->person_id_no, ['rounds' => 4]),
                'status' => $user->person_status,
            ];
        });

        return $users;
    }
}
