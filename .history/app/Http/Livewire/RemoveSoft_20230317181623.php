<?php

namespace App\Http\Livewire;

use App\Models\Softskill;
use LivewireUI\Modal\ModalComponent;

class RemoveSoft extends ModalComponent
{
    public Softskill $soft;

    public function mount(int $id)
    {
        $this->soft = Softskill::find($id);
    }

    public function render()
    {
        return view('livewire.remove-soft', [
            'soft' => $this->soft
        ]);
    }

    public function delete()
    {
        $this->soft->delete();
    }
}
