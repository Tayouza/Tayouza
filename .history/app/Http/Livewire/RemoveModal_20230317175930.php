<?php

namespace App\Http\Livewire;

use App\Models\Softskill;
use LivewireUI\Modal\ModalComponent;

class RemoveModal extends ModalComponent
{
    public function mount(Softskill $soft)
    {
        $soft->delete();
    }

    public function render()
    {
        return view('livewire.remove-modal');
    }
}
