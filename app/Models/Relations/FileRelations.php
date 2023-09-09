<?php

namespace App\Models\Relations;

use App\Models\Hardskill;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait FileRelations
{
    public function hardskill(): HasOne
    {
        return $this->hasOne(Hardskill::class);
    }
}
