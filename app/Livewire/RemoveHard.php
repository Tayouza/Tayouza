<?php

namespace App\Livewire;

use App\Models\Hardskill;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\WireUiActions;

class RemoveHard extends ModalComponent
{
    use WireUiActions;

    public Hardskill $hard;

    public function mount(int $id)
    {
        $this->hard = Hardskill::find($id);
    }

    public function render()
    {
        return view('livewire.remove-hard', [
            'hard' => $this->hard,
        ]);
    }

    public function delete()
    {
        $this->closeModal();
        $this->dispatch('RemoveHard');
        $this->hard->delete();
        $this->notification()->success('Okay', 'Você deletou a hardskill '.$this->hard->name);
    }
}
