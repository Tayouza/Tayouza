<?php

namespace App\Helpers;

use Illuminate\Support\Str;
use App\Models\File;

class FileUploadHelper
{
    public static function save($file)
    {
        $extension = $file->getClientOriginalExtension();
        $hashName = Str::uuid($file->getClientOriginalName());
        $file->storeAs('public/icons', $hashName.'.'.$extension);

        $file = File::create([
            'original_name' => $file->getClientOriginalName(),
            'hash_name' => $hashName,
            'extension' => $extension,
            'path' => 'icons/' . $hashName.'.'.$extension,
        ]);

        return $file->id;
    }
}