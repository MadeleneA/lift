<?php

namespace App\Console\Commands;

use App\Models\Lift;
use Illuminate\Console\Command;

class LiftShowCurrentFloor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lift:showcurrentfloor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Shows current floor';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
// Hämta raden med liften i db för att läsa våningsnummer
        $test = Lift::first()->current_floor;

        $this->info("You are on the $test floor");
        return Command::SUCCESS;
    }
}
