<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class LiftReturnToFirstFloor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lift:returntofirstfloor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lift will return to first floor when not used';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {


        $affected = DB::table('lifts')
            ->where('id', 1)
            ->update(['current_floor' => 1]);
        $this->info('The lift har returned to floor one ');

        return Command::SUCCESS;
    }
}
