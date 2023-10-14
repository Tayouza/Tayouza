<?php

namespace App\Models\Relations;

use App\Models\Hardskill;
use App\Models\Project;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait FileRelations
{
    public function hardskill(): HasOne
    {
        return $this->hasOne(Hardskill::class);
    }

    public function project(): HasOne
    {
        return $this->hasOne(Project::class);
    }
}
