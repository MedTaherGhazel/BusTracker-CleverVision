<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     *
     */
    protected $commands = [
        Commands\UpdatePosition::class,
    ];
    protected function schedule(Schedule $schedule)
    {

            // $schedule->command('quote:secondly')
            // ->cron('* * * * *');

    }
    protected function shortSchedule(\Spatie\ShortSchedule\shortSchedule $schedule)
    {

            $schedule->command('quote:secondly')
            ->everySecond(1);

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
