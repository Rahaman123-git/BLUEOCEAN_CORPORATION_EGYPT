<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use App\Http\Controllers\Course\CourseScheduleController;

class CoursesSyncScheduleCommand extends Command
{
    /**
     * The name/signature of the console command.
     *
     * Run manually with:
     *   php artisan courses:sync-schedule
     */
    protected $signature = 'courses:sync-schedule';

    protected $description = 'Run course schedule sync (same as CourseScheduleController@syncSchedule)';

    public function handle(): int
    {
        $this->info('Starting course schedule sync from CLI...');

        // Fake a request so redirect()->back() and session()->flash() in controller don’t explode
        app()->instance('request', Request::create('/', 'GET'));

        /** @var CourseScheduleController $controller */
        $controller = app(CourseScheduleController::class);

        // Reuse your existing method, unchanged
        $controller->syncSchedule();

        $this->info('Course schedule sync finished.');
        return Command::SUCCESS;
    }
}
