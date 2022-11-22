<?php

namespace App\Console\Commands;

use App\Models\Lift;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CallLiftToFloor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lift:calllifttofloor {order}';

    /**
     * --order
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calls lift to floor';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $liftGoToFloor = $this->argument('order');


        $affected = DB::table('lifts')
            ->where('id', 1)
            ->update(['current_floor' => $liftGoToFloor]);
        $this->info('lift will go to floor '.$liftGoToFloor);
          return Command::SUCCESS;
    }
}
