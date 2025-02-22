<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\ToggleHiddenDonations::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('donations:toggle-hidden')->daily();
    }
    


    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
