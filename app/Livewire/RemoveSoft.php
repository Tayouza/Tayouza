<?php

namespace App\Livewire;

use App\Models\Softskill;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\WireUiActions;

class RemoveSoft extends ModalComponent
{
    use WireUiActions;

    public Softskill $soft;

    public function mount(int $id)
    {
        $this->soft = Softskill::find($id);
    }

    public function render()
    {
        return view('livewire.remove-soft', [
            'soft' => $this->soft,
        ]);
    }

    public function delete()
    {
        $this->closeModal();
        $this->dispatch('RemoveSoft');
        $this->soft->delete();
        $this->notification()->success('Okay', 'Você deletou a softskill '.$this->soft->name);
    }
}
