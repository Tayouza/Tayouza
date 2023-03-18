<?php

namespace App\Models\Relations;

use App\Models\Hardskill;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait FileRelations
{
    public function hardskills(): HasMany
    {
        return $this->hasMany();
    }
}