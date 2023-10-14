<?php

namespace App\Http\Livewire;

use App\Models\AuditAccess;
use Illuminate\Support\Carbon;
use Livewire\Component;

class CountAccesses extends Component
{
    public function render()
    {
        $accesses = AuditAccess::orderBy('access_at')->get()->groupBy('access_at');
        $accessesCount = $accesses->map(fn($access) => $access->count());

        return view('livewire.count-accesses', [
            'accesses' => $accesses,
            'accessesCount' => $accessesCount,
        ]);
    }
}
