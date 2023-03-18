<?php

namespace App\Http\Livewire;

use App\Models\Softskill;
use LivewireUI\Modal\ModalComponent;

class RemoveSoft extends ModalComponent
{
    private Softskill $soft;

    public function mount(Softskill $soft)
    {
        $this->soft = $soft;
    }

    public function render()
    {
        return view('livewire.remove-modal');
    }
}
