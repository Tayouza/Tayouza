<?php

use App\Models\File;
use App\Models\Hardskill;
use App\Models\Project;
use Illuminate\Support\Facades\Artisan;

uses()->group('remove');

it('should be removed files unused in storage', function () {
    $hardskills = Hardskill::factory(3)->create();
    $projects = Project::factory(2)->create();

    $files = File::factory(2)->create();

    $projects->first()->update([
        'file_id' => $files->first()->id
    ]);

    $hardskills->first()->update([
        'file_id' => $files->last()->id
    ]);

    $firstCount = count(glob(storage_path("app/public/icons/*")));

    Artisan::call('app:remove-ununsed-files');

    expect($firstCount - $files->count())
        ->toBe(count(glob(storage_path("app/public/icons/*"))));

    $files = File::all();

    foreach ($files as $file) {
        unlink(storage_path("app/public/$file->path"));
    }
});