<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RunBackupScript extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:script';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the custom backup script';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $scriptPath = base_path('scripts/backup.php');

        $output = null;
        $returnVar = null;

        exec("php {$scriptPath}", $output, $returnVar);

        if ($returnVar !== 0) {
            $this->error('The backup script failed.');
            return 1;
        }

        $this->info('The backup script ran successfully.');
        return 0;
    }
}
