<?php

namespace App\Livewire;

use App\Models\Project;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\WireUiActions;

class RemoveProject extends ModalComponent
{
    use WireUiActions;

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
        $this->dispatch('RemoveProject');
        $this->project->delete();
        $this->notification()->success('Okay', 'Você deletou o projeto '.$this->project->name);
    }
}
