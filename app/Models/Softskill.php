<?php

namespace App\Models;

use App\Models\Relations\SoftskillRelations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Softskill extends Model
{
    use HasFactory;
    use SoftskillRelations;

    protected $fillable = [
        'name',
        'order'
    ];
}
