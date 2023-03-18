<?php

namespace App\Http\Livewire;

use App\Models\Softskill;
use LivewireUI\Modal\ModalComponent;

class RemoveSoft extends ModalComponent
{
    public Softskill $soft;

    public function mount(Softskill $soft)
    {
        $this->soft = $soft;
        dd($soft, $this->soft);
    }

    public function render()
    {
        return view('livewire.remove-soft', [
            'soft' => $this->soft
        ]);
    }
}