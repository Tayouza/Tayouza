<?php

namespace App\Http\Livewire;

use App\Models\Project;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class RemoveProject extends ModalComponent
{
    use Actions;

    public Project $project;

    public function mount(int $id)
    {
        $this->project = Project::find($id);
    }

    public function render()
    {
        return view('livewire.remove-project', [
            'project' => $this->project,
        ]);
    }

    public function delete()
    {
        $this->closeModal();
        $this->emit('RemoveProject');
        $this->project->delete();
        $this->notification()->success('Okay', 'Você deletou o projeto '.$this->project->name);
    }
}
