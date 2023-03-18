<?php

namespace App\Models;

use App\Models\Relations\FileRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    use FileRelations;

    protected $fillable = [
        'original_name',
        'hash_name',
        'extension',
        'path',
    ];
}
