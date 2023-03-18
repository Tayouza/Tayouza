<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class RemoveModal extends ModalComponent
{
    public function mount(int $id)
    {
        dump($id);
    }

    public function render()
    {
        return view('livewire.remove-modal');
    }
}
