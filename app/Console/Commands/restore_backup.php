<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class restore_backup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:restore_backup
                          {--disk= : The disk to restore from}
                          {--backup= : Specific backup to restore}
                          {--connection= : Database connection to use}
                          {--reset : Drop all tables before restore}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Restore a backup using backup:restore command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting backup restore process...');

        $command = ['backup:restore'];

        // Add optional parameters if provided
        if ($disk = $this->option('disk')) {
            $command['--disk'] = $disk;
        }

        if ($backup = $this->option('backup')) {
            $command['--backup'] = $backup;
        }

        if ($connection = $this->option('connection')) {
            $command['--connection'] = $connection;
        }

        if ($this->option('reset')) {
            $command['--reset'] = true;
        }

        // Execute the backup:restore command
        $exitCode = Artisan::call(...$command);

        // Display the output
        $this->info(Artisan::output());

        return $exitCode;
    }
}
