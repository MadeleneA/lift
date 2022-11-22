<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class LiftPressButton extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lift:pressbutton';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Chooses floor button';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $choosenFloor = $this->ask('Choose a floor?');
        $affected = DB::table('lifts')
            ->where('id', 1)
            ->update(['current_floor' => $choosenFloor]);
        $this->info('The Lift goes to floor '.$choosenFloor);

       //när användaern åkt klart ska hissen returneras till våning 1

       $this->call('lift:returntofirstfloor', [
        ]);
        return Command::SUCCESS;
    }
}
