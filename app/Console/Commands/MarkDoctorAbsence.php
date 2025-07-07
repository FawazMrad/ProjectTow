<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MarkDoctorAbsence extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:mark-doctor-absence';

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
        app(\App\Services\AttendanceLogService::class)->markDoctorAbsences();

        $this->info('Absent doctors marked.');

        return self::SUCCESS; }
}
