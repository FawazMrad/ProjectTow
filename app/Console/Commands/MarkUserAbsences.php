<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MarkUserAbsences extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:mark-user-absences';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        app(\App\Services\AttendanceLogService::class)->markUserAbsences();
        $this->info('Absent users marked.');
        return self::SUCCESS;
    }
}
