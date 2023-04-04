<?php

namespace App\Models;

use App\Models\Relations\ProjectRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    use ProjectRelations;

    protected $fillable = [
        'name',
        'url',
        'file_id',
        'order'
    ];
}
