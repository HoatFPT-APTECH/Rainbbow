<?php

namespace App\Console;

use App\Console\Commands\CheckBirthDaysCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected $commands = [
        \App\Console\Commands\CheckBirthDaysCommand::class,
    ];
    
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            $birthDayCommand= new CheckBirthDaysCommand();
            $birthDayCommand->handle();
        })->dailyAt('11:00')->appendOutputTo('F:\Dai_Hoc\Ky_7\PHP\Project\Rainbow\app\Console\file.log');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

}
