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
        $files = \App\Models\File::all();
        foreach($files as $file){
            if(!$file->hardskill){
                dump(\Illuminate\Support\Facades\Storage::delete("/$file->path"));
                $this->info('Removeu o ' . $file->original_name);
            }
        }
    }
}