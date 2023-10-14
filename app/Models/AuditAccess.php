<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditAccess extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'browser',
        'user_agent',
        'access_at',
        'location',
    ];

    protected $casts = [
        'location' => 'array',
    ];
}
