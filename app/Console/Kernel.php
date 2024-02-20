<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */


     protected $commands = [
        Commands\DeleteInactiveAccounts::class,
    ];

    protected function schedule(Schedule $schedule)
    {

        // $schedule->command('queue:work')->everyMinute()->withoutOverlapping();
        // $schedule->command('inactive-accounts:delete')->daily();
        // $schedule->command('DeleteInactiveAccounts:delete')->everyMinute()->withoutOverlapping();

        $schedule->command('deleteInactiveAccountCreated:daily')
        ->everyMinute();
        $schedule->command('deleteInactiveAccountCreated')
        ->everyMinute();
        $schedule->command('queue:work')
        ->everyMinute();
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
