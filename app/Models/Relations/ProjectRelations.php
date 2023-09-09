<?php

namespace App\Models\Relations;

use App\Models\File;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait ProjectRelations
{
    public function file(): BelongsTo
    {
        return $this->belongsTo(File::class);
    }
}
