<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RemoveUnunsedFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:remove-ununsed-files';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove from storage files unnecesary';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        
    }
}
