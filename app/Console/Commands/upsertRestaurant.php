<?php

namespace App\Console\Commands;

use App\Http\Controllers\PosDepartmentController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class upsertRestaurant extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upsert:restaurant';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'upsert restaurant';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(PosDepartmentController $posDepartmentController)
    {
        $posDepartmentController::sync();
    }
}
