<?php

namespace App\Console\Commands;

use App\Models\Lift;
use Illuminate\Console\Command;

class LiftShowFloors extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lift:showfloors';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Shows floors';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->info('Their is '.Lift::MAX_FLOORS. ' floors');
        return Command::SUCCESS;
    }
}
