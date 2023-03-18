<?php

namespace App\Http\Livewire;

use App\Models\Softskill;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class RemoveSoft extends ModalComponent
{
    use Actions;

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
        $this->emit('$closeModal');
        $this->emitTo('softskill-livewire', '$refresh');
        // $this->soft->delete();
        $this->notification()->success('Okay', 'Você deletou a softskill ' . $this->soft->name);
    }
}
