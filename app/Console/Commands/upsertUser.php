<?php

namespace App\Console\Commands;

use App\Http\Controllers\UserController;
use Illuminate\Console\Command;

class upsertUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upsert:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upsert User from SysPerson Table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(UserController $userController)
    {
        $userController::sync();
    }
}
