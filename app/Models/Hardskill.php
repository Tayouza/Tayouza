<?php

namespace App\Models;

use App\Models\Relations\HardskillRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardskill extends Model
{
    use HasFactory;
    use HardskillRelations;

    protected $fillable = [
        'name',
        'file_id',
        'level',
        'order',
    ];
}
