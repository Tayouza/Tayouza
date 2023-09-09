<?php

namespace App\Helpers;

use App\Models\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Livewire\TemporaryUploadedFile;

class FileUploadHelper
{
    public static function save(TemporaryUploadedFile|UploadedFile|array|null $file)
    {
        $extension = $file->getClientOriginalExtension();
        $hashName = Str::uuid($file->getClientOriginalName());
        $file->storeAs('public/icons', $hashName.'.'.$extension);

        $file = File::create([
            'original_name' => $file->getClientOriginalName(),
            'hash_name' => $hashName,
            'extension' => $extension,
            'path' => 'icons/'.$hashName.'.'.$extension,
        ]);

        return $file->id;
    }
}
