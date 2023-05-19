<?php

namespace App\Console\Commands;

use App\Models\Voyage;
use Illuminate\Console\Command;

class UpdatePosition extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:secondly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update bus position successfully';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $voyages = Voyage::all();
        foreach ($voyages as $voyage) {
            if($voyage->en_route>=1 && $voyage->bus_postion<=100){
                $voyage->bus_postion+=1;

                $voyage->save();
            }
        }
        $this->info('Successfully sent daily quote to everyone.');
    }
}
